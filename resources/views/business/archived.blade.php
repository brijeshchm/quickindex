@extends('business.layouts.app')
@section('title','Leads')
@section('content')
@php
 
$statusClass=['new'=>'border-blue-200 bg-blue-50 text-blue-700','contacted'=>'border-amber-200 bg-amber-50 text-amber-700','converted'=>'border-emerald-200 bg-emerald-50 text-emerald-700','closed'=>'border-slate-200 bg-slate-100 text-slate-600'];

 $popupLeadSource = method_exists($leads, 'items') ? $leads->items() : $leads;
$popupLeads = collect($popupLeadSource)->map(function ($lead) {
    return [
        'assignId' => (int) $lead['assignId'],
        'lead_id' => (int) $lead['lead_id'],
        'name' => $lead['customerName'] ?? '',
        'email' => $lead['email'] ?? '',
        'mobile' => $lead['phone'] ?? '',
        'service' => $lead['service'] ?? '',
        'status_id' => (int) ($lead['status_id'] ?? 0),
    ];
})->values();
 
@endphp

 
<div class="animate-fade-in space-y-4 md:space-y-6"
         x-data="followupManager()"
     
     >
 <div class="flex flex-col justify-between gap-4 xl:flex-row xl:items-end">

 
 <div class="md:hidden"><select onchange="window.location=this.value" class="form-input h-12 bg-white text-base font-medium shadow-sm">
    
 @foreach($leadsTabs as $key=>$label)
    
 <option value="{{ route('leads',['tab'=>$key]) }}" @selected($tab===$key)>{{ $label }}</option>@endforeach</select>

</div>

 
  <div>
   <h1 class="font-display text-xl font-bold tracking-tight md:text-3xl">Favorite Leads</h1>
   <p class="mt-1 text-sm text-slate-500 md:text-base">Manage inquiries and assign them to your team.</p>
  </div>
  <div class="hide-scrollbar flex w-full shrink-0 snap-x overflow-x-auto rounded-xl bg-secondary p-1 xl:w-auto">
  
  </div>
 </div>

 <div class="space-y-4">

 @forelse($leads as $i => $lead)
  @php
 
   // FIX #1: match on the RAW lead id (lead_id), not the assignment id ($lead['id']).
   $leadFus  = $followups->where('lead_id', $lead['lead_id'])->whereNotNull('notes')
        ->where('notes', '!=', '');
  $assignee = "";
 
    $pending = '';
    $overdue = false;
    $pastDays = 0;

   if (!empty($lead->expected_date_time)  && !in_array($lead->status_name, [
    'Meeting Close',
    'Sales Close',
    'Joined',
    'Invalid Number',
    ])) {
        $followDate = \Carbon\Carbon::parse($lead->expected_date_time)->startOfDay();
        $today = \Carbon\Carbon::today();
        $overdue = $followDate->lt($today);
        $pastDays = $overdue ? $followDate->diffInDays($today) : 0;
    }     
  @endphp
  <div class="card animate-slide-up stagger-{{ ($i % 5) + 1 }} relative overflow-hidden {{ $lead['archived'] ? 'opacity-70 grayscale-[20%]' : '' }} {{ $lead['readLead'] == '0' ? 'assignedLeadsClick cursor-pointer bg-gray-200' : '' }}" data-assigned-id="{{ $lead['assignId'] }}" data-client-id="{{ $lead['clientId'] }}" >
 
   <div class="flex flex-col lg:flex-row">
    <div class="flex-1 border-b p-3 sm:p-6 lg:border-b-0 lg:border-r">
     <div class="mb-3 flex flex-row flex-wrap items-start justify-between gap-2 sm:mb-4 sm:gap-3">
      <div class="min-w-0 flex-1">
       <div class="mb-1 flex items-center gap-2">
        <h3 class="truncate font-display text-lg font-semibold sm:text-xl">{{ ucfirst($lead['customerName']) }}</h3>
        @if($lead['favorite'])<i data-lucide="star" class="h-4 w-4 fill-amber-500 text-amber-500"></i>@endif
       </div>
       <div class="mt-1 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-slate-500 sm:mt-2 sm:text-sm">
        <span class="flex items-center gap-1.5"><i data-lucide="phone" class="h-3.5 w-3.5"></i>{{ $lead['phone'] }}</span>
        @if($lead['email'])<span class="flex items-center gap-1.5"><i data-lucide="mail" class="h-3.5 w-3.5"></i>{{ $lead['email'] }}</span>@endif
       </div>
      </div>

      <div class="flex shrink-0 items-center gap-2">  
  <div class="flex items-center gap-1 text-sm font-medium">
    <i data-lucide="indian-rupee" class="h-4 w-4"></i>
     
    @if(!empty($lead['scrapLead']))
        <span class="text-green-600">
            {{ $lead['coins'] }}
        </span>

    @elseif(!empty($lead['coins']))
        <span class="text-red-600">
            -{{ $lead['coins'] }}
        </span>
    @endif
</div>

        @if(!$lead['favorite'])
        <button class="flex h-8 w-8 items-center justify-center rounded-lg bg-secondary hover:text-amber-500 {{  !$lead['favorite'] ?'favorited':'' }}" data-favoritleads="{{ $lead['assignId'] }}" data-client-id="{{ $lead['clientId'] }}" title="Favorite"><i data-lucide="star" class="h-4 w-4"></i></button>
        @endif

      
      </div>
     </div>

     <div class="mt-3 rounded-xl bg-secondary/30 p-3 sm:mt-4 sm:p-4">
      <div class="mb-2 flex items-start justify-between gap-2">
       <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-slate-500"><i data-lucide="clock" class="h-3.5 w-3.5"></i>Inquiry for: {{ $lead['service'] }}</p>
       <span class="badge border capitalize {{ $statusClass[$lead['status']] ?? 'bg-secondary text-slate-600' }}">{{ $lead['status_label'] ?? $lead['status'] }}</span>
      </div>
      <p class="text-xs leading-relaxed text-slate-800 sm:text-sm">&ldquo;{!! $lead['message'] !!}&rdquo;</p>
     </div>

     <div class="mt-3 flex flex-wrap items-center justify-between gap-2 sm:mt-4">
      <p class="shrink-0 text-xs text-slate-500">Received {{ \Carbon\Carbon::parse($lead['createdAt'])->format('M j, Y') }}</p>
      {{-- FIX #4/#5: pass both ids explicitly, load the table immediately instead of waiting on the dropdown --}}
      <button
 type="button"
 @click="openFollowupAt({{ $loop->index }})"
 class="btn h-8 rounded-lg px-3 text-xs bg-emerald-500 text-white {{ $overdue ? 'border-destructive text-destructive bg-emerald-500' : ($pending ? 'border-primary text-primary bg-emerald-500' : '') }}">
 <i data-lucide="eye" class="h-3.5 w-3.5"></i>Follow up
 @if($pending)<span class="rounded bg-primary/10 px-1.5 py-0.5 text-primary">{{ $pending }}</span>@endif
 @if($overdue)<span class="rounded bg-destructive px-1.5 py-0.5 text-white">{{ $pastDays }} Overdue</span>@endif
</button>
     </div>

     @if($leadFus->count())
      <details class="mt-3 rounded-xl border bg-white/70">
       <summary class="cursor-pointer px-4 py-2 text-xs font-semibold text-slate-500">View Follow Up ({{ $leadFus->count() }})</summary>
       <div class="space-y-2 border-t p-3">
        @foreach($leadFus as $fu)
         <div class="flex items-start justify-between gap-3 rounded-lg bg-secondary/40 p-3">
          <div>
           <p class="text-sm {{ $fu['outcome'] == 'Joined'? 'line-through text-slate-400' : '' }}">{{ $fu['notes'] }}</p>
           <p class="mt-1 text-xs text-slate-500"><strong>Tag:</strong> {{ ucfirst($fu['outcome']) }} &middot; <strong>Next Date:</strong> {{ $fu['dueAt'] ? \Carbon\Carbon::parse($fu['dueAt'])->format('M j, g:i A') : 'No due date' }}</p>
          </div>
          <div class="flex gap-1">
         
            <input type="hidden" name="Joined" value="{{ $fu['outcome'] =='Joined' ? 0 : 1 }}">
            <button class="flex h-8 w-8 items-center justify-center rounded-lg bg-white text-emerald-600"><i data-lucide="check" class="h-4 w-4"></i></button>
          
          
          </div>
         </div>
        @endforeach
       </div>
      </details>
     @endif
    </div>

     
    <div class="flex gap-2 bg-secondary/10 p-3 sm:p-6 lg:w-[240px] lg:flex-col lg:justify-center">



     @if(!$lead['archived'] && $lead['status'] === 'new')
      <a href="tel:{{ preg_replace('/[^+\d]/','',$lead['phone']) }}" class="btn btn-primary w-full text-white"><i data-lucide="phone" class="h-4 w-4"></i>Call Now</a>
    


     @elseif(!$lead['archived'] && $lead['status'] === 'contacted')
      
      
      <a href="tel:{{ preg_replace('/[^+\d]/','',$lead['phone']) }}" class="btn btn-primary w-full text-white"><i data-lucide="phone" class="h-4 w-4"></i>Call Again</a>
     @else
      <div class="flex flex-1 items-center justify-center gap-2 py-2 text-center lg:flex-col">
       <span class="flex h-9 w-9 items-center justify-center rounded-full {{ $lead['status'] === 'converted' && !$lead['archived'] ? 'bg-emerald-100 text-emerald-500' : 'bg-secondary text-slate-500' }}">
        <i data-lucide="{{ $lead['archived'] ? 'archive' : ($lead['status'] === 'converted' ? 'check-circle-2' : 'x-circle') }}" class="h-5 w-5"></i>
       </span>
       <p class="text-sm font-medium text-slate-500">{{ $lead['archived'] ? 'Lead Archived' : ($lead['status'] === 'converted' ? 'Lead Converted' : 'Lead Lost') }}</p>
      </div>
     @endif

        
 
    </div>
   </div>
  </div>

 @empty
  <div class="card flex flex-col items-center justify-center py-20 text-center">
   <span class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-secondary"><i data-lucide="message-square-text" class="h-8 w-8 text-slate-400"></i></span>
   <h3 class="font-display text-xl font-semibold">No leads found</h3>
   <p class="mt-2 text-slate-500">No leads match this view right now.</p>
  </div>
 @endforelse
 </div>

 <div class="pt-2">
  {{ $leads->links() }}
 </div>
     <template x-teleport="body">
            <div x-cloak x-show="followup !== null" x-transition.opacity
                class="fixed inset-0 z-[9999] flex items-center justify-center overflow-hidden p-2 sm:p-4"
                @keydown.escape.window="closeFollowup()">
                <div class="absolute inset-0 bg-slate-950/40" @click="closeFollowup()"></div>

                <div class="relative z-[10000] flex max-h-[96dvh] w-full min-w-0 max-w-4xl flex-col overflow-hidden rounded-xl bg-white shadow-2xl sm:max-h-[90vh] sm:rounded-2xl"
                    @click.stop>
                
                    <div
                        class="flex shrink-0 flex-col gap-3 border-b border-slate-200 bg-white p-4 sm:flex-row sm:items-center sm:justify-between sm:p-5">
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center gap-2">
                                <h2 class="truncate font-display text-lg font-semibold text-slate-900 sm:text-xl"
                                    x-text="followupName || 'Add Follow-Up'"></h2>

                                <span x-show="leads.length" x-text="(currentIndex + 1) + ' / ' + leads.length"
                                    class="shrink-0 rounded-full bg-slate-100 px-2 py-0.5 text-xs font-semibold text-slate-600"></span>
                            </div>

                            <div class="mt-1 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-slate-500 sm:text-sm">
                                <span class="flex items-center gap-1.5" x-show="followupEmail">
                                    <i data-lucide="mail" class="h-3.5 w-3.5"></i>
                                    <span x-text="followupEmail"></span>
                                </span>

                                <span class="flex items-center gap-1.5" x-show="followupMobile">
                                    <i data-lucide="phone" class="h-3.5 w-3.5"></i>
                                    <span x-text="followupMobile"></span>
                                </span>

                                <span class="flex items-center gap-1.5" x-show="followupService">
                                    <i data-lucide="tag" class="h-3.5 w-3.5"></i>
                                    <span x-text="followupService"></span>
                                </span>
                            </div>
                        </div>

                        <div class="flex shrink-0 items-center justify-end gap-1">
                            <button type="button" @click="previousLead()" :disabled="currentIndex <= 0"
                                class="inline-flex h-9 items-center justify-center gap-1 rounded-lg border border-slate-200 bg-blue-600 px-2.5 text-sm font-medium text-white transition hover:bg-blue-700 disabled:cursor-not-allowed disabled:opacity-40 sm:px-3"
                                title="Previous Lead">
                                <i data-lucide="chevron-left" class="h-4 w-4"></i>
                                <span class="hidden sm:inline">Previous</span>
                            </button>

                            <button type="button" @click="nextLead()" :disabled="currentIndex >= leads.length - 1"
                                class="inline-flex h-9 items-center justify-center gap-1 rounded-lg border border-slate-200 bg-blue-600 px-2.5 text-sm font-medium text-white transition hover:bg-blue-700 disabled:cursor-not-allowed disabled:opacity-40 sm:px-3"
                                title="Next Lead">
                                <span class="hidden sm:inline">Next</span>
                                <i data-lucide="chevron-right" class="h-4 w-4"></i>
                            </button>

                            <button type="button" @click="closeFollowup()"
                                class="ml-1 flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-600 transition hover:bg-slate-200"
                                title="Close">
                                <i data-lucide="x" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>


          
                    <div class="min-w-0 flex-1 overflow-x-hidden overflow-y-auto bg-white p-4 sm:p-5">
                     
 <form
                    :action="'/business/leads/' + followup + '/follow-ups'"
                    method="POST"
                    id="followup-form"
                    data-after-save="stay"
                    class="space-y-4"
                    @submit.prevent="
                        (async () => {
                            const form = $event.target;
                            const action = form.dataset.afterSave || 'stay';

                            const saved = await enquiryController.storeFollowUp(
                                followup,
                                form
                            );

                            form.dataset.afterSave = 'stay';

                            if (saved && action === 'next') {
                                nextLead();
                            }
                        })()
                    "
                >

                    @csrf

                    <input
                        type="hidden"
                        name="lead_id"
                        x-bind:value="followupLeadId"
                    >


                    <div class="grid gap-4 sm:grid-cols-2">

                        <!-- Status -->
                        <div>

                            <label
                                class="mb-2 block text-sm font-medium text-slate-700" >
                                Status
                            </label>

                        <select
                            name="status"
                            id="followup_status"
                            class="form-input"
                            x-model.number="followupStatusId"
                            @change="toggleFollowUpDate($event.target)"  >
                            <option value="">Select Status</option>
                            @foreach($statues as $status)
                                <option value="{{ $status->id }}" data-name="{{ strtolower(trim($status->name)) }}">
                                    {{ $status->name }}
                                </option>
                            @endforeach
                        </select>

                        </div>


                        <!-- Follow-up Date -->
                        <div class="flex items-end gap-2">

                            <div class="min-w-0 flex-1">

                                <label
                                    class="mb-2 block text-sm font-medium
                                           text-slate-700"
                                >
                                    Next Follow up Date
                                </label>

                                <input
                                    type="date"
                                    name="expected_date_time"
                                    id="expected_date_time"
                                    class="form-input"
                                    placeholder="Select Date Follow-Up"
                                >

                            </div>

 

                        </div>

                    </div>


                    <!-- Notes -->
                    <div>

                        <label
                            class="mb-2 block text-sm font-medium
                                   text-slate-700"
                        >
                            Notes
                            <span class="text-red-500">*</span>
                        </label>

                        <textarea
                            name="remark"
                            class="form-input form-textarea"
                            placeholder="Notes about the call..."
                        ></textarea>

                    </div>


                    <!-- Navigation + Save -->
                    <div class="flex justify-end border-t border-slate-200 pt-4">

    <div class="flex gap-2">

        <button
            type="submit"
            @click="$el.form.dataset.afterSave = 'next'"
            :disabled="currentIndex >= leads.length - 1"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-700 disabled:cursor-not-allowed disabled:opacity-50"
        >
            Save & Next

            <i
                data-lucide="arrow-right"
                class="h-4 w-4"
            ></i>

        </button>

    </div>

</div>

                </form>


                        {{-- Follow-up history --}}
                        <div class="mt-5 border-t border-slate-200 pt-4">
                            <div class="mb-3 flex items-center justify-between gap-3">
                                <p class="text-sm font-semibold text-slate-800">
                                    Follow Up History
                                </p>

                                <select
                                    class="follow-up-count rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-700 shadow-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                                    @change="enquiryController.getAllFollowUps(followupLeadId, $event.target.value)">
                                    <option value="5">Last 5</option>
                                    <option value="all">All</option>
                                </select>
                            </div>

                            <div class="max-h-[300px] overflow-auto rounded-xl border border-slate-200 bg-white shadow-sm">
                                <table id="datatable-enquiry-followups"
                                    class="min-w-[650px] w-full divide-y divide-slate-200 text-sm">
                                    <thead class="sticky top-0 z-10 bg-slate-50">
                                        <tr>
                                            <th class="whitespace-nowrap px-4 py-3 text-left font-semibold text-slate-700">
                                                Date</th>
                                            <th class="px-4 py-3 text-left font-semibold text-slate-700">Remark</th>
                                            <th class="whitespace-nowrap px-4 py-3 text-left font-semibold text-slate-700">
                                                Status</th>
                                            <th class="whitespace-nowrap px-4 py-3 text-left font-semibold text-slate-700">
                                                Follow Date</th>
                                        </tr>
                                    </thead>

                                    <tbody id="enquiry-followups-body" class="divide-y divide-slate-100 bg-white"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>


 
</div>


 <div id="toast-container" class="pointer-events-none fixed right-4 top-4 z-[10050] flex w-full max-w-sm flex-col gap-2">
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>



    <script>
    
        window.followupDatePicker = null;

        function initFollowupDatePicker() {
            const input = document.getElementById('expected_date_time');

            if (!input || typeof flatpickr === 'undefined') {
                return;
            }

            if (window.followupDatePicker) {
                return;
            }

            window.followupDatePicker = flatpickr(input, {
                dateFormat: 'Y-m-d',
                minDate: 'today',
                allowInput: false,
                clickOpens: true,
                disableMobile: true,
                onChange: function (selectedDates, dateStr, instance) {
                    /* Close immediately after selecting the date. */
                    instance.close();
                }
            });
        }

        function openFollowupDatePicker() {
            if (window.followupDatePicker && !document.getElementById('expected_date_time')?.disabled) {
                window.followupDatePicker.open();
            }
        }

        function clearFollowupDate() {
            if (window.followupDatePicker) {
                window.followupDatePicker.clear();
                window.followupDatePicker.set('minDate', 'today');
            } else {
                const input = document.getElementById('expected_date_time');
                if (input) input.value = '';
            }
        }

        function toggleFollowUpDate(select) {
            if (!select) return;

            const selectedOption = select.options[select.selectedIndex];
 
            const statusName = (selectedOption?.dataset?.name || '').trim().toLowerCase();

            const dateInput = document.getElementById('expected_date_time');

            if (!dateInput) return;

            const shouldDisable = statusName === 'not interested';

            if (shouldDisable) {
                clearFollowupDate();
                dateInput.disabled = true;
                dateInput.classList.add('cursor-not-allowed', 'bg-slate-100', 'opacity-60');
            } else {
                dateInput.disabled = false;
                dateInput.classList.remove('cursor-not-allowed', 'bg-slate-100', 'opacity-60');
            }
        }


    
        window.followupManager = function () {
            return {
                followup: null,
                followupLeadId: null,
                followupName: '',
                followupEmail: '',
                followupMobile: '',
                followupService: '',
                followupStatusId: null,
                currentIndex: -1,
                leads: @js($popupLeads),

                openFollowupAt(index) {
                    this.loadLead(index);
                },

                loadLead(index) {
                    if (index < 0 || index >= this.leads.length) return;

                    const lead = this.leads[index];

                    this.currentIndex = index;
                    this.followup = lead.assignId;
                    this.followupLeadId = lead.lead_id;
                    this.followupName = lead.name || '';
                    this.followupEmail = lead.email || '';
                    this.followupMobile = lead.mobile || '';
                    this.followupService = lead.service || '';
                    this.followupStatusId = Number(lead.status_id || 0);
 
                    this.$nextTick(() => {
                        initFollowupDatePicker();

                        const form = document.getElementById('followup-form');
                        const select = document.getElementById('followup_status');
                        const countSelect = document.querySelector('.follow-up-count');

                        if (form) {
                            form.querySelectorAll('.validation-error').forEach(el => el.remove());
                            form.querySelector('.followup-form-message')?.remove();

                            const remark = form.querySelector('[name="remark"]');
                            if (remark) remark.value = '';

                            form.dataset.afterSave = 'stay';
                        }

                        clearFollowupDate();

                         if (select) {
                    select.value = String(lead.status_id || '');
                    select.dispatchEvent(new Event('change', { bubbles: true }));
                }

                        if (countSelect) {
                            countSelect.value = '5';
                        }

                        if (window.lucide) {
                            lucide.createIcons();
                        }

                        window.enquiryController?.getAllFollowUps(lead.lead_id, 5);
                    });
                },

                previousLead() {
                    if (this.currentIndex <= 0) return;
                    this.loadLead(this.currentIndex - 1);
                },

                nextLead() {
                    if (this.currentIndex >= this.leads.length - 1) return;
                    this.loadLead(this.currentIndex + 1);
                },

                closeFollowup() {
                    this.followup = null;
                    this.currentIndex = -1;
                    clearFollowupDate();
                }
            };
        };


        /* ================================================================
           FOLLOW-UP AJAX CONTROLLER
        ================================================================ */
        window.enquiryController = {
            currentRequestId: 0,

            async storeFollowUp(assignId, form) {
                if (!assignId || !form) {
                    return false;
                }

                const submitButtons = form.querySelectorAll('button[type="submit"]');

                form.querySelectorAll('.validation-error').forEach(el => el.remove());

                form.querySelectorAll('.form-input').forEach(el => {
                    el.classList.remove(
                        'border-red-500',
                        'ring-1',
                        'ring-red-500',
                        'focus:border-red-500',
                        'focus:ring-red-500'
                    );
                });

                try {
                    submitButtons.forEach(button => {
                        button.disabled = true;
                        button.dataset.originalHtml = button.innerHTML;
                    });

                    const rawLeadId = form.querySelector('[name="lead_id"]')?.value;
                    const formData = new FormData(form);

                    const response = await fetch(`/business/leads/${assignId}/follow-ups`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    let data = {};

                    try {
                        data = await response.json();
                    } catch (e) {
                        throw { message: 'Invalid server response.' };
                    }

                    if (!response.ok) {
                        throw data;
                    }

                    this.showFormMessage(
                        form,
                        data.message || data.msg || 'Follow-Up saved successfully.',
                        'success'
                    );

                    if (rawLeadId) {
                        await this.getAllFollowUps(rawLeadId, 5);
                    }

                    const remark = form.querySelector('[name="remark"]');
                    if (remark) remark.value = '';

                    clearFollowupDate();

                    showToast(
                        data.message || data.msg || 'Follow-Up saved successfully.',
                        'success'
                    );

                    return true;

                } catch (error) {
                    console.error('storeFollowUp failed:', error);

                    if (error?.errors) {
                        Object.keys(error.errors).forEach(key => {
                            const field = form.querySelector(`[name="${CSS.escape(key)}"]`);
                            if (!field) return;

                            field.classList.add(
                                'border-red-500',
                                'ring-1',
                                'ring-red-500',
                                'focus:border-red-500',
                                'focus:ring-red-500'
                            );

                            const errorText = document.createElement('p');
                            errorText.className = 'validation-error mt-1 text-xs font-medium text-red-600';
                            errorText.textContent = Array.isArray(error.errors[key])
                                ? error.errors[key][0]
                                : error.errors[key];

                            field.insertAdjacentElement('afterend', errorText);
                        });

                        form.querySelector('.border-red-500')?.focus();
                    } else {
                        this.showFormMessage(
                            form,
                            error?.message || 'Unable to save follow-up.',
                            'error'
                        );
                    }

                    showToast(error?.message || 'Unable to save follow-up.', 'error');
                    return false;

                } finally {
                    submitButtons.forEach(button => {
                        button.disabled = false;

                        if (button.dataset.originalHtml) {
                            button.innerHTML = button.dataset.originalHtml;
                            delete button.dataset.originalHtml;
                        }
                    });

                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }
            },

            showFormMessage(form, message, type = 'success') {
                let alertBox = form.querySelector('.followup-form-message');

                if (!alertBox) {
                    alertBox = document.createElement('div');
                    form.prepend(alertBox);
                }

                alertBox.className = type === 'success'
                    ? 'followup-form-message rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700'
                    : 'followup-form-message rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700';

                alertBox.textContent = message;
            },

            async getAllFollowUps(leadId, limit = 5) {
                if (!leadId) return;

                const tbody = document.getElementById('enquiry-followups-body');
                if (!tbody) return;

                const requestId = ++this.currentRequestId;

                tbody.innerHTML = `
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-slate-400">
                        Loading...
                    </td>
                </tr>
            `;

                try {
                    const response = await fetch(
                        `/business/leads/${leadId}/follow-ups/list?limit=${encodeURIComponent(limit)}`,
                        {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            }
                        }
                    );

                    if (requestId !== this.currentRequestId) return;

                    if (!response.ok) {
                        throw new Error('Request failed: ' + response.status);
                    }

                    const followups = await response.json();

                    if (!Array.isArray(followups) || !followups.length) {
                        tbody.innerHTML = `
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-slate-400">
                                No follow-ups yet.
                            </td>
                        </tr>
                    `;
                        return;
                    }

                    tbody.innerHTML = followups.map(fu => `
                    <tr class="border-b border-slate-100 hover:bg-slate-50">
                        <td class="whitespace-nowrap px-4 py-3">
                            ${this.escapeHtml(fu.date ?? '-')}
                        </td>

                        <td class="px-4 py-3">
                            ${this.escapeHtml(fu.notes ?? '')}
                        </td>

                        <td class="whitespace-nowrap px-4 py-3">
                            ${this.escapeHtml(fu.status ?? '-')}
                        </td>

                        <td class="whitespace-nowrap px-4 py-3">
                            ${this.escapeHtml(fu.expected_date ?? '-')}
                        </td>
                    </tr>
                `).join('');

                } catch (error) {
                    if (requestId !== this.currentRequestId) return;

                    console.error('getAllFollowUps failed:', error);

                    tbody.innerHTML = `
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-red-500">
                            Couldn't load follow-ups.
                        </td>
                    </tr>
                `;
                }
            },

            escapeHtml(value) {
                return String(value ?? '')
                    .replaceAll('&', '&amp;')
                    .replaceAll('<', '&lt;')
                    .replaceAll('>', '&gt;')
                    .replaceAll('"', '&quot;')
                    .replaceAll("'", '&#039;');
            }
        };


        /* ================================================================
           TOAST
        ================================================================ */
        function showToast(message, type = 'success', duration = 3000) {
            const container = document.getElementById('toast-container');
            if (!container) return;

            const styles = {
                success: 'border-emerald-200 bg-emerald-50 text-emerald-800',
                error: 'border-red-200 bg-red-50 text-red-800'
            };

            const toast = document.createElement('div');
            toast.className = `pointer-events-auto flex translate-x-4 items-center gap-3 rounded-xl border ${styles[type] || styles.success} px-4 py-3 opacity-0 shadow-lg transition-all duration-300`;

            const text = document.createElement('p');
            text.className = 'flex-1 text-sm font-medium';
            text.textContent = message;

            const close = document.createElement('button');
            close.type = 'button';
            close.className = 'rounded p-1 text-lg leading-none opacity-60 hover:opacity-100';
            close.textContent = '×';

            toast.append(text, close);
            container.appendChild(toast);

            requestAnimationFrame(() => {
                toast.classList.remove('translate-x-4', 'opacity-0');
            });

            const dismiss = () => {
                toast.classList.add('translate-x-4', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            };

            close.addEventListener('click', dismiss);
            setTimeout(dismiss, duration);
        }

        document.addEventListener('DOMContentLoaded', function () {
            initFollowupDatePicker();

            if (window.lucide) {
                lucide.createIcons();
            }
        });


        
    </script>




<script>
/**
 * Usage: showToast('Favorite lead updated', 'success');
 *        showToast('Something went wrong', 'error');
 */
function showToast(message, type = 'success', duration = 3000) {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const styles = {
        success: {
            bg: 'bg-emerald-50 border-emerald-200 text-emerald-800',
            icon: `<svg class="h-5 w-5 shrink-0 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>`,
        },
        error: {
            bg: 'bg-red-50 border-red-200 text-red-800',
            icon: `<svg class="h-5 w-5 shrink-0 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>`,
        },
    };

    const style = styles[type] ?? styles.success;

    const toast = document.createElement('div');
    toast.className = `pointer-events-auto flex items-center gap-3 rounded-xl border ${style.bg} px-4 py-3 shadow-lg transition-all duration-300 ease-out translate-x-4 opacity-0`;
    toast.innerHTML = `
        ${style.icon}
        <p class="flex-1 text-sm font-medium">${message}</p>
        <button type="button" class="shrink-0 rounded p-1 text-current/60 hover:text-current" aria-label="Dismiss">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
    `;

    container.appendChild(toast);

    // animate in
    requestAnimationFrame(() => {
        toast.classList.remove('translate-x-4', 'opacity-0');
    });

    const dismiss = () => {
        toast.classList.add('translate-x-4', 'opacity-0');
        setTimeout(() => toast.remove(), 300);
    };

    toast.querySelector('button').addEventListener('click', dismiss);
    setTimeout(dismiss, duration);
}



window.scrapController = {

    async submit(assignedId, form, onSuccess) {
        if (!assignedId || !form) return;

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn ? submitBtn.innerHTML : '';

        const selected = form.querySelector('input[name="scrapLead"]:checked');
        if (!selected) {
            showToast('Please select a reason first.', 'error');
            return;
        }

        try {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Saving...';
            }

            const res = await fetch('/business/scrapLead', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                // FIX: no clientId sent from the frontend — the server
                // derives the owning client from the authenticated session.
                body: JSON.stringify({
                    assigned_id: assignedId,
                    scrap_value: selected.value,
                }),
            });

            let data;
            try {
                data = await res.json();
            } catch {
                throw new Error(`Unexpected response (status ${res.status})`);
            }
            if (!res.ok) throw new Error(data.msg || `Request failed (status ${res.status})`);

            showToast(data.msg || 'Lead reported successfully.', 'success');
            if (typeof onSuccess === 'function') onSuccess();

        } catch (err) {
            console.error('scrapController.submit failed:', err);
            showToast(err.message || 'Could not submit report.', 'error');
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText || 'Submit';
            }
        }
    },
};

document.addEventListener('change', function (e) {
    const radio = e.target.closest('.scrap-radio');
    if (!radio || !radio.checked) return;

    const assignedId = radio.dataset.assignedId;
    const scrapValue = radio.value;
    if (!assignedId) return;

    const group = document.getElementById(`scrap-reasons-${assignedId}`);
    // FIX: disable the whole group while saving, instead of nothing —
    // prevents a second rapid click from firing a duplicate request
    group?.querySelectorAll('.scrap-radio').forEach(r => r.disabled = true);

    fetch('/business/scrapLead', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // FIX: original request sent no CSRF token at all -> 419 on every call
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
        },
        // FIX: clientId dropped entirely — server derives it from the
        // authenticated session (see LeadController::scrapLead)
        body: JSON.stringify({
            assigned_id: assignedId,
            scrap_value: scrapValue,
        }),
    })
        .then(async (res) => {
            let data;
            try {
                data = await res.json();
            } catch {
                throw new Error(`Unexpected response (status ${res.status})`);
            }
            if (!res.ok) throw new Error(data.msg || `Request failed (status ${res.status})`);
            return data;
        })
        .then((data) => {
            if (data.status) {
                showToast(data.msg || 'Lead reported successfully.', 'success');

                // Tell the Alpine modal for this lead to close itself —
                // avoids reaching into Alpine's internals from plain JS.
                window.dispatchEvent(new CustomEvent('scrap-lead-saved', {
                    detail: { assignedId },
                }));
            } else {
                showToast(data.msg || 'Could not submit report.', 'error');
                group?.querySelectorAll('.scrap-radio').forEach(r => r.disabled = false);
            }
        })
        .catch((err) => {
            console.error('scrap-lead request failed:', err);
            showToast(err.message || 'Something went wrong. Please try again.', 'error');
            group?.querySelectorAll('.scrap-radio').forEach(r => r.disabled = false);
        });
});





document.addEventListener('click', function (e) {
    const el = e.target.closest('.favorited');
    if (!el) return;

    e.preventDefault();

    const favoritleads = el.dataset.favoritleads;
    if (!favoritleads || el.classList.contains('is-loading')) return;

    el.classList.add('is-loading');
 
    fetch('/business/favoritleads', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
        },
        // FIX: clientId dropped from the payload — the server derives the
        // owning client from the authenticated session instead of trusting
        // a value that could be edited in devtools (IDOR risk, see controller below)
        body: JSON.stringify({ assingId: favoritleads }),
    })
        .then(async (res) => {
            // FIX: guard against non-JSON error bodies (e.g. a 419/500 HTML page)
            // crashing silently inside .then() with no user feedback
            let data;
            try {
                data = await res.json();
            } catch {
                throw new Error(`Unexpected response (status ${res.status})`);
            }
            if (!res.ok) throw new Error(data.msg || `Request failed (status ${res.status})`);
            return data;
        })
        .then((data) => {
            if (data.status) {
                // FIX: give visual confirmation on the star icon itself,
                // not just a popup the user might miss
                const icon = el.querySelector('i, svg');
                const isFavorited = data.favorited ?? true;

                el.classList.toggle('text-amber-500', isFavorited);
                if (icon) {
                    icon.classList.toggle('fill-amber-500', isFavorited);
                    icon.classList.toggle('fill-none', !isFavorited);
                }

                showToast(
                    isFavorited ? 'Added to favorites' : 'Removed from favorites',
                    'success'
                );
            } else {
                showToast(data.msg || 'Could not update favorite', 'error');
            }
        })
        .catch((err) => {
            console.error('favoritleads request failed:', err);
            showToast('Something went wrong. Please try again.', 'error');
        })
        .finally(() => {
            // FIX: this was never being removed before — element got stuck
            // "loading" forever after the very first click
            el.classList.remove('is-loading');
        });
});



</script>
       

 
@endsection
