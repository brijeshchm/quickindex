<x-layouts.sales.app title="Vendors · QuickDials" header="Vendors">
    <div class="space-y-5">
        <div class="flex items-center justify-between">
            <p class="text-xs font-semibold uppercase tracking-wider text-[#a14f47]">
                Vendor directory
            </p>

             <a href="{{ route('sales.vendors.create') }}"
       class="inline-flex h-10 shrink-0 items-center justify-center gap-1 rounded-xl bg-[#a14f47] px-3 text-xs font-semibold text-white transition hover:bg-[#8f433d] sm:px-4 sm:text-sm">
        <span class="text-lg leading-none">+</span>
        <span>Add vendor</span>
    </a>
        </div>
       
       {{-- Filters --}}
        <form method="GET" 
            action="{{ route('sales.vendors.index') }}"
            class="rounded-2xl border border-[#dfe7ec] bg-white p-4 shadow-sm"
        >
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                {{-- Search --}}
                <label >
                    <span class="mb-1.5 block text-[10px] font-semibold uppercase text-[#9aa9b5]">
                        Search vendors
                    </span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Business name or mobile..."
                        class="h-10 w-full rounded-lg border border-[#dfe7ec] bg-[#fbfcfd] px-3 text-xs outline-none focus:border-[#315b80]"
                    >
                </label>

                {{-- Date From --}}
                <label>
                    <span class="mb-1.5 block text-[10px] font-semibold uppercase text-[#9aa9b5]">
                        Date From
                    </span>

                    <input
                        type="date"
                        name="date_from"
                        value="{{ request('date_from') }}"
                        max="{{ request('date_to') ?: '' }}"
                        class="h-10 w-full rounded-lg border border-[#dfe7ec] bg-white px-3 text-xs outline-none focus:border-[#315b80]"
                    >
                </label>

                {{-- Date To --}}
                <label>
                    <span class="mb-1.5 block text-[10px] font-semibold uppercase text-[#9aa9b5]">
                        Date To
                    </span>

                    <input
                        type="date"
                        name="date_to"
                        value="{{ request('date_to') }}"
                        min="{{ request('date_from') ?: '' }}"
                        class="h-10 w-full rounded-lg border border-[#dfe7ec] bg-white px-3 text-xs outline-none focus:border-[#315b80]"
                    >
                </label>

                {{-- Multiple statuses --}}
               



@php
    $selectedStatuses = array_map(
        'strval',
        (array) request('statuses', [])
    );
@endphp

<div class="sm:col-span-2 lg:col-span-1">
    <span class="mb-1.5 block text-[10px] font-semibold uppercase text-[#9aa9b5]">
        Latest Status
    </span>

    <div class="flex max-h-40 flex-wrap gap-2 overflow-y-auto rounded-lg border border-[#dfe7ec] bg-white p-2">
        @foreach ($statuses as $status)
            <label class="relative cursor-pointer">
                <input
                    type="checkbox"
                    name="statuses[]"
                    value="{{ $status->id }}"
                    @checked(in_array(
                        (string) $status->id,
                        $selectedStatuses,
                        true
                    ))
                    class="peer sr-only"
                >

                <span
                    class="inline-flex items-center rounded-lg border border-slate-200
                           bg-slate-50 px-3 py-1 text-xs font-medium text-slate-600
                           transition hover:border-[#315b80]
                           peer-checked:border-[#315b80]
                           peer-checked:bg-[#315b80]
                           peer-checked:text-white
                           peer-focus-visible:ring-2
                           peer-focus-visible:ring-[#315b80]
                           peer-focus-visible:ring-offset-2"
                >
                    {{ $status->name }}
                </span>
            </label>
        @endforeach
    </div>

    <span class="mt-1 block text-[11px] text-slate-500">
        Click to select multiple statuses. Click again to deselect.
    </span>
</div>

                 <label>
                <a
                    href="{{ route('sales.vendors.index') }}"
                    class="rounded-lg px-3 py-2 text-xs font-semibold text-[#a14f47] hover:bg-[#f9ece8]"
                >
                    Reset filters
                </a>

                <button
                    type="submit"
                    class="rounded-lg bg-[#12263a] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1b3a52]"
                >
                    Apply filters
                </button>
            </label>
            </div>

           
        </form>

        {{-- Vendor table --}}
        <div class="overflow-hidden rounded-2xl border border-[#dfe7ec] bg-white shadow-sm">
            <div class="flex items-center justify-between border-b border-[#edf1f3] px-5 py-4">
                <p class="text-sm font-semibold">
                    All vendors
                    <span class="ml-1 text-xs font-normal text-[#9aa9b5]">
                        ({{ $vendors->total() }})
                    </span>
                </p>

                <p class="text-xs text-[#9aa9b5]">15 per page</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[980px] text-left">
                    <thead class="bg-[#fbfcfd] text-[10px] font-semibold uppercase tracking-wide text-[#9aa9b5]">
                        <tr>
                            <th class="px-5 py-3">Vendor</th>
                            <th class="px-5 py-3">Date</th>
                            <th class="px-4 py-3">Owner</th>
                            <th class="px-4 py-3">Location</th>
                            <th class="px-4 py-3">Latest Status</th>
                            <th class="px-4 py-3 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-[#edf1f3]">
                        @forelse ($vendors as $vendor)
                            <tr class="hover:bg-[#fbfcfd]">
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-[#e9f2f7] text-xs font-bold text-[#315b80]">
                                            {{ $vendor->initials }}
                                        </div>

                                        <div>
                                            <a
                                                href="{{ route('sales.vendors.edit', $vendor) }}"
                                                class="text-sm font-semibold hover:text-[#315b80]"
                                            >
                                                {{ $vendor->business_name }}
                                            </a>

                                            <p class="mt-0.5 text-[11px] text-[#9aa9b5]">
                                                {{ $vendor->category }}
                                            </p>
                                        </div>
                                    </div>
                                </td>


                                
                                <td class="px-4 py-4">
                                    <p class="text-xs font-medium">
                                        {{ date('d-M-Y',strtotime($vendor->createdAt)) }}
                                    </p>                                   
                                </td>
                                <td class="px-4 py-4">
                                    <p class="text-xs font-medium">
                                        {{ $vendor->owner_name }}
                                    </p>

                                    <p class="mt-0.5 text-[11px] text-[#9aa9b5]">
                                        {{ $vendor->email }}
                                    </p>
                                </td>

                                <td class="px-4 py-4 text-xs font-medium">
                                    {{ $vendor->city }}
                                </td>

                                <td class="px-4 py-4">
                                    <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">
                                        {{ $vendor->status_name ?? '—' }}
                                    </span>
                                </td>

                                <td class="px-4 py-4">
                                    <div class="flex justify-end gap-2">
                                        <a
                                            href="{{ route('sales.vendors.edit', $vendor) }}"
                                            class="rounded-lg border border-[#dfe7ec] px-3 py-2 text-xs font-semibold text-[#315b80] hover:bg-[#e9f2f7]"
                                        >
                                            Edit
                                        </a>

                                        <button
                                            type="button"
                                            class="open-vendor-followup inline-flex items-center gap-1.5 rounded-lg bg-emerald-500 px-3 py-2 text-xs font-semibold text-white hover:bg-emerald-600"
                                            data-vendor-id="{{ $vendor->id }}"
                                            data-vendor-name="{{ $vendor->business_name }}"
                                            data-status-id="{{ $vendor->meeting_status_id }}"
                                            data-store-url="{{ route('sales.followUp.store', $vendor->id) }}"
                                            data-history-url="{{ route('sales.followUp.history', $vendor->id) }}"
                                        >
                                            <i data-lucide="eye" class="h-4 w-4"></i>
                                          
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td
                                    colspan="5"
                                    class="px-6 py-16 text-center text-sm text-[#718394]"
                                >
                                    No vendors match those filters.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-[#edf1f3] px-5 py-4">
                {{ $vendors->links() }}
            </div>
        </div>
    </div>

    {{-- Follow-up popup --}}
    <div
        id="vendor-followup-modal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center bg-slate-950/50 p-4"
        role="dialog"
        aria-modal="true"
        aria-labelledby="vendor-followup-title"
    >
        <div class="flex max-h-[90vh] w-full max-w-3xl flex-col overflow-hidden rounded-2xl bg-white shadow-2xl">
            {{-- Popup header --}}
            <div class="flex shrink-0 items-center justify-between gap-3 border-b border-slate-200 p-4 sm:p-5">
                <div class="min-w-0">
                    <h2
                        id="vendor-followup-title"
                        class="truncate text-base font-semibold text-slate-900 sm:text-lg"
                    >
                        Add Follow Up
                    </h2>

                    <p id="vendor-followup-position"
                       class="mt-1 text-xs text-slate-500"></p>
                </div>

                <div class="flex shrink-0 items-center gap-1.5">
                    <button
                        type="button"
                        id="vendor-followup-prev"
                        class="rounded-lg border border-slate-300 px-2.5 py-2 text-xs font-semibold hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-40 sm:px-3"
                    >
                        Previous
                    </button>

                    <button
                        type="button"
                        id="vendor-followup-next"
                        class="rounded-lg border border-slate-300 px-2.5 py-2 text-xs font-semibold hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-40 sm:px-3"
                    >
                        Next
                    </button>

                    <button
                        type="button"
                        id="close-vendor-followup"
                        class="flex h-9 w-9 items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100"
                        aria-label="Close popup"
                    >
                        <i data-lucide="x" class="h-4 w-4"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-y-auto p-4 sm:p-5">
                {{-- Save form --}}
                <form id="vendor-followup-form" class="space-y-4">
                    @csrf

                    <input
                        type="hidden"
                        name="sales_manager"
                        value="{{ auth('sales')->id() }}"
                    >

                    <div class="grid gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-2 block text-sm font-medium text-slate-700">
                                Status <span class="text-red-500">*</span>
                            </span>

                            <select
                                name="status"
                                id="vendor-followup-status"
                                required
                                class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm"
                            >
                                <option value="">Select status</option>

                                @foreach ($statuses as $status)
                                    <option
                                        value="{{ $status->id }}"
                                        data-show-date="{{ $status->show_exp_date ? '1' : '0' }}"
                                    >
                                        {{ $status->name }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <label
                            id="vendor-followup-date-wrap"
                            class="hidden"
                        >
                            <span class="mb-2 block text-sm font-medium text-slate-700">
                                Next Follow Up Date
                            </span>

                            <input
                                type="datetime-local"
                                name="expected_date_time"
                                id="vendor-followup-date"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm"
                            >
                        </label>
                    </div>

                    <label class="block">
                        <span class="mb-2 block text-sm font-medium text-slate-700">
                            Notes <span class="text-red-500">*</span>
                        </span>

                        <textarea
                            name="remark"
                            rows="3"
                            required
                            placeholder="Notes about the call..."
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm"
                        ></textarea>
                    </label>

                    <p
                        id="vendor-followup-error"
                        class="hidden text-sm font-medium text-red-600"
                    ></p>

                    <div class="flex justify-end border-t border-slate-200 pt-4">
                        <button
                            type="submit"
                            id="vendor-followup-save"
                            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:cursor-not-allowed disabled:opacity-50"
                        >
                            Save Follow Up
                        </button>
                    </div>
                </form>

                {{-- History --}}
                <div class="mt-6 border-t border-slate-200 pt-4">
                    <h3 class="mb-3 text-sm font-semibold text-slate-800">
                        Follow Up History
                    </h3>

                    <div class="max-h-[300px] overflow-auto rounded-xl border border-slate-200">
                        <table class="min-w-full text-left text-sm">
                            <thead class="sticky top-0 bg-slate-50">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Remark</th>
                                    <th class="whitespace-nowrap px-4 py-3">Status</th>
                                    <th class="whitespace-nowrap px-4 py-3">Follow Date</th>
                                </tr>
                            </thead>

                            <tbody
                                id="vendor-followup-history"
                                class="divide-y divide-slate-100"
                            >
                                <tr>
                                    <td
                                        colspan="4"
                                        class="px-4 py-6 text-center text-slate-500"
                                    >
                                        Select a vendor to view follow-ups.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('vendor-followup-modal');
            const form = document.getElementById('vendor-followup-form');
            const title = document.getElementById('vendor-followup-title');
            const position = document.getElementById('vendor-followup-position');

            const statusSelect = document.getElementById('vendor-followup-status');
            const dateWrap = document.getElementById('vendor-followup-date-wrap');
            const dateInput = document.getElementById('vendor-followup-date');

            const historyBody = document.getElementById('vendor-followup-history');
            const errorBox = document.getElementById('vendor-followup-error');

            const saveButton = document.getElementById('vendor-followup-save');
            const prevButton = document.getElementById('vendor-followup-prev');
            const nextButton = document.getElementById('vendor-followup-next');
            const closeButton = document.getElementById('close-vendor-followup');

            const vendorButtons = Array.from(
                document.querySelectorAll('.open-vendor-followup')
            );

            let currentIndex = -1;
            let storeUrl = null;
            let historyUrl = null;
            let historyRequestNumber = 0;
            let isSaving = false;

            function showError(message) {
                errorBox.textContent = message;
                errorBox.classList.remove('hidden');
            }

            function clearError() {
                errorBox.textContent = '';
                errorBox.classList.add('hidden');
            }

            function getLocalDateTimeNow() {
                const now = new Date();

                const localDate = new Date(
                    now.getTime() - now.getTimezoneOffset() * 60000
                );

                return localDate.toISOString().slice(0, 16);
            }

            function updateDateMinimum() {
                // Past date और past time दोनों disable।
                dateInput.min = getLocalDateTimeNow();
            }

            function updateDateField() {
                const needsDate =
                    statusSelect.selectedOptions[0]?.dataset.showDate === '1';

                dateWrap.classList.toggle('hidden', !needsDate);
                dateInput.required = needsDate;

                updateDateMinimum();

                if (!needsDate) {
                    dateInput.value = '';
                }
            }

            function setSelectedStatus(statusId) {
                const value = String(statusId || '');

                const exists = Array.from(statusSelect.options).some(function (option) {
                    return option.value === value;
                });

                statusSelect.value = exists ? value : '';
                updateDateField();
            }

            function closeModal() {
                if (isSaving) return;

                historyRequestNumber++;

                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function updateNavigationButtons() {
                prevButton.disabled = isSaving || currentIndex <= 0;
                nextButton.disabled =
                    isSaving || currentIndex >= vendorButtons.length - 1;
            }

            function addHistoryRow(item) {
                const row = document.createElement('tr');

                const values = [
                    item.created_at,
                    item.remark,
                    item.status_name,
                    item.date_time
                ];

                values.forEach(function (value) {
                    const cell = document.createElement('td');
                    cell.className = 'px-4 py-3 align-top text-slate-700';
                    cell.textContent = value || '—';
                    row.appendChild(cell);
                });

                historyBody.appendChild(row);
            }

            async function loadFollowUpHistory() {
                if (!historyUrl) return;

                const thisRequest = ++historyRequestNumber;
                const requestedUrl = historyUrl;

                historyBody.innerHTML = `
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-slate-500">
                            Loading...
                        </td>
                    </tr>
                `;

                try {
                    const response = await fetch(requestedUrl, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        credentials: 'same-origin',
                        cache: 'no-store'
                    });

                    if (!response.ok) {
                        throw new Error('History request failed: ' + response.status);
                    }

                    const rows = await response.json();

                    // Previous/Next से vendor बदल चुका हो तो पुराना response ignore।
                    if (thisRequest !== historyRequestNumber) return;

                    historyBody.replaceChildren();

                    if (!Array.isArray(rows) || rows.length === 0) {
                        historyBody.innerHTML = `
                            <tr>
                                <td colspan="4" class="px-4 py-6 text-center text-slate-500">
                                    No follow-ups yet.
                                </td>
                            </tr>
                        `;

                        return;
                    }

                    // History latest meeting से oldest meeting क्रम में होनी चाहिए।
                    if (rows[0].status_id != null) {
                        setSelectedStatus(rows[0].status_id);
                    }

                    rows.forEach(addHistoryRow);
                } catch (error) {
                    if (thisRequest !== historyRequestNumber) return;

                    console.error('Follow up history error:', error);

                    historyBody.innerHTML = `
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-red-600">
                                Could not load follow-up history.
                            </td>
                        </tr>
                    `;
                }
            }

            function openVendor(index) {
                if (isSaving || index < 0 || index >= vendorButtons.length) {
                    return;
                }

                const button = vendorButtons[index];

                currentIndex = index;
                storeUrl = button.dataset.storeUrl;
                historyUrl = button.dataset.historyUrl;

                form.reset();
                clearError();
                updateDateMinimum();
                setSelectedStatus(button.dataset.statusId);

                title.textContent = 'Follow Up: ' + button.dataset.vendorName;
                position.textContent =
                    `${currentIndex + 1} / ${vendorButtons.length}`;

                updateNavigationButtons();

                modal.classList.remove('hidden');
                modal.classList.add('flex');

                loadFollowUpHistory();
            }

            statusSelect.addEventListener('change', updateDateField);
            dateInput.addEventListener('focus', updateDateMinimum);

            document.addEventListener('click', function (event) {
                const button = event.target.closest('.open-vendor-followup');

                if (!button) return;

                openVendor(vendorButtons.indexOf(button));
            });

            prevButton.addEventListener('click', function () {
                openVendor(currentIndex - 1);
            });

            nextButton.addEventListener('click', function () {
                openVendor(currentIndex + 1);
            });

            closeButton.addEventListener('click', closeModal);

            modal.addEventListener('click', function (event) {
                if (event.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function (event) {
                if (
                    event.key === 'Escape' &&
                    !modal.classList.contains('hidden')
                ) {
                    closeModal();
                }
            });

            form.addEventListener('submit', async function (event) {
                event.preventDefault();

                updateDateMinimum();

                if (!storeUrl || !form.reportValidity()) {
                    return;
                }

                clearError();
                isSaving = true;
                saveButton.disabled = true;
                saveButton.textContent = 'Saving...';
                updateNavigationButtons();

                try {
                    const response = await fetch(storeUrl, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        credentials: 'same-origin',
                        body: new FormData(form)
                    });

                    const result = await response.json();

                    if (!response.ok || !result.status) {
                        const firstError =
                            Object.values(result.errors || {})[0]?.[0];

                        showError(
                            firstError ||
                            result.message ||
                            'Follow up could not be saved.'
                        );

                        return;
                    }

                    form.reset();
                    updateDateField();

                    await loadFollowUpHistory();

                   
                    const currentButton = vendorButtons[currentIndex];
                    currentButton.dataset.statusId = statusSelect.value;

                    if (typeof showToast === 'function') {
                        showToast(
                            result.message || 'Follow up saved successfully.',
                            'success'
                        );
                    }
                } catch (error) {
                    console.error('Follow up save error:', error);
                    showError('Save failed. Please try again.');
                } finally {
                    isSaving = false;
                    saveButton.disabled = false;
                    saveButton.textContent = 'Save Follow Up';
                    updateNavigationButtons();
                }
            });
        });
    </script>
</x-layouts.sales.app>