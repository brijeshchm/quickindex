<x-layouts.sales.app title="Vendors · Vendorflow" header="Vendors">
    <div class="space-y-5">
        <div class="flex w-full items-center justify-between gap-3">
    <p class="min-w-0 text-xs font-semibold uppercase tracking-wider text-[#a14f47] sm:tracking-[0.16em]">
        Vendor directory
    </p>

    <a href="{{ route('sales.vendors.create') }}"
       class="inline-flex h-10 shrink-0 items-center justify-center gap-1 rounded-xl bg-[#a14f47] px-3 text-xs font-semibold text-white transition hover:bg-[#8f433d] sm:px-4 sm:text-sm">
        <span class="text-lg leading-none">+</span>
        <span>Add vendor</span>
    </a>
</div>



        <form method="GET" class="rounded-2xl border border-[#dfe7ec] bg-white p-4 shadow-[0_5px_18px_rgba(18,38,58,0.035)]">
            <div class="grid gap-3 lg:grid-cols-5">
                <label class="lg:col-span-2"><span class="mb-1.5 block text-[10px] font-semibold uppercase tracking-[0.08em] text-[#9aa9b5]">Search vendors</span><input name="search" value="{{ request('search') }}" placeholder="Name, owner, city or category..." class="h-10 w-full rounded-lg border border-[#dfe7ec] bg-[#fbfcfd] px-3 text-xs outline-none focus:border-[#315b80]"></label>


                @foreach ([['status', 'Status', ['active' => 'Active', 'pending' => 'Pending', 'inactive' => 'Inactive', 'suspended' => 'Suspended']]] as [$name, $label, $options])
                    <label><span class="mb-1.5 block text-[10px] font-semibold uppercase tracking-[0.08em] text-[#9aa9b5]">{{ $label }}</span><select name="{{ $name }}" class="h-10 w-full rounded-lg border border-[#dfe7ec] bg-white px-3 text-xs text-[#435b6d]"><option value="">All {{ strtolower($label) }}s</option>@foreach ($options as $value => $option)<option value="{{ is_string($value) ? $value : $option }}" @selected(request($name) === (is_string($value) ? $value : $option))>{{ is_string($value) ? $option : $option }}</option>@endforeach</select></label>

                    
                @endforeach
            </div>
            <div class="mt-4 flex justify-end gap-2"><a href="{{ route('sales.vendors.index') }}" class="rounded-lg px-3 py-2 text-xs font-semibold text-[#a14f47] hover:bg-[#f9ece8]">Reset filters</a><button class="rounded-lg bg-[#12263a] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1b3a52]">Apply filters</button></div>
        </form>
        <div class="overflow-hidden rounded-2xl border border-[#dfe7ec] bg-white shadow-[0_5px_18px_rgba(18,38,58,0.035)]">
            <div class="flex items-center justify-between border-b border-[#edf1f3] px-5 py-4"><p class="text-sm font-semibold">All vendors <span class="ml-1 text-xs font-normal text-[#9aa9b5]">({{ $vendors->total() }})</span></p><p class="text-xs text-[#9aa9b5]">15 per page</p></div>
            <div class="overflow-x-auto"><table class="w-full min-w-[980px] text-left"><thead class="bg-[#fbfcfd] text-[10px] font-semibold uppercase tracking-[0.08em] text-[#9aa9b5]"><tr><th class="px-5 py-3">Vendor</th><th class="px-4 py-3">Owner / contact</th><th class="px-4 py-3">Location</th><th class="px-4 py-3">Executive</th><th class="px-4 py-3">Status</th><th class="px-4 py-3 text-right">Actions</th></tr></thead><tbody class="divide-y divide-[#edf1f3]">@forelse ($vendors as $vendor)<tr class="group hover:bg-[#fbfcfd]"><td class="px-5 py-4"><div class="flex items-center gap-3"><div class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-[#e9f2f7] text-xs font-bold text-[#315b80]">{{ $vendor->initials }}</div><div><a data-open-vendor="{{ $vendor->id }}" href="{{ route('sales.vendors.edit', $vendor) }}" class="text-sm font-semibold hover:text-[#315b80]">{{ $vendor->business_name }}</a><p class="mt-0.5 text-[11px] text-[#9aa9b5]">{{ $vendor->category }}</p></div></div></td><td class="px-4 py-4"><p class="text-xs font-medium">{{ $vendor->owner_name }}</p>
            
            
            <p class="mt-0.5 text-[11px] text-[#9aa9b5]">{{ $vendor->email }}</p></td>
            
            <td class="px-4 py-4 text-xs font-medium">{{ $vendor->city }}</td>
            
            <td class="px-4 py-4 text-xs font-medium">{{ $vendor->sales_executive ?: 'Unassigned' }}</td>
            <td class="px-4 py-4"><span class="rounded-full px-2.5 py-1 text-[11px] font-semibold {{ $vendor->status === 'active' ? 'bg-[#e4f4eb] text-[#26734b]' : ($vendor->status === 'pending' ? 'bg-[#fff3df] text-[#9b681f]' : 'bg-[#f4e7e5] text-[#a14f47]') }}">{{ ucfirst($vendor->status) }}</span></td><td class="px-4 py-4">
                
            
            <div class="flex justify-end gap-2">
                
            <a href="{{ route('sales.vendors.edit', $vendor) }}" class="rounded-lg border border-[#dfe7ec] px-3 py-2 text-xs font-semibold text-[#315b80] hover:bg-[#e9f2f7]">Edit</a>
            
            <form method="POST" action="{{ route('sales.vendors.status', $vendor) }}">
                
            @csrf 
                      
            
            <button class="rounded-lg border border-[#dfe7ec] px-3 py-2 text-xs font-semibold text-[#435b6d] hover:bg-[#f7f9fb]">{{ $vendor->status === 'active' ? 'Deactivate' : 'Activate' }}</button>
        
            </form>
            
            <form method="POST" action="{{ route('sales.vendors.destroy', $vendor) }}" onsubmit="return confirm('Delete this vendor?')">@csrf @method('DELETE')<button class="rounded-lg border border-[#efc4bf] px-3 py-2 text-xs font-semibold text-[#a14f47] hover:bg-[#fff5f3]">Delete</button></form>

            </div></td></tr>
            
            @empty
            
            <tr><td colspan="6" class="px-6 py-16 text-center text-sm text-[#718394]">No vendors match those filters.</td></tr>@endforelse</tbody></table></div>
            <div class="border-t border-[#edf1f3] px-5 py-4">{{ $vendors->links() }}</div>
        </div>
    </div>
</x-layouts.sales.app>