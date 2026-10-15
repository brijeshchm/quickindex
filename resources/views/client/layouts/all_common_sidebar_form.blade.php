{{-- Requires in layout <head>: <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
<style>
.step-dot { width:1.75rem;height:1.75rem;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;transition:all .3s; }
.step-dot.done    { background:white;color:#2563eb; }
.step-dot.active  { background:white;color:#1d4ed8;box-shadow:0 0 0 3px rgba(255,255,255,.4); }
.step-dot.pending { background:rgba(255,255,255,.2);color:rgba(255,255,255,.6); }
.step-line { flex:1;height:2px;margin:.875rem .375rem;border-radius:9999px;transition:background .5s; }
.ef-input { width:100%;padding:.625rem 1rem .625rem 2.25rem;border-radius:.75rem;border:1.5px solid rgba(37,99,235,.18);background:rgba(37,99,235,.04);font-size:.875rem;outline:none;color:#1e3a8a;transition:all .2s; }
.ef-input:focus { border-color:#2563eb;box-shadow:0 0 0 4px rgba(37,99,235,.1);background:white; }
.ef-input.border-red-500 { border-color:#ef4444; }
select.ef-input { padding-left:1rem; }

/* ── Country Code Picker ── */
.cc-wrapper       { position:relative;flex-shrink:0; }
.cc-trigger       { display:flex;align-items:center;gap:5px;height:100%;padding:0 10px;border:1.5px solid rgba(37,99,235,.18);border-radius:.75rem;background:rgba(37,99,235,.04);cursor:pointer;white-space:nowrap;font-size:.8rem;font-weight:700;color:#1e3a8a;transition:all .2s;min-width:80px; }
.cc-trigger:hover { border-color:#2563eb;background:white; }
.cc-trigger img   { width:20px;height:14px;object-fit:cover;border-radius:2px;flex-shrink:0; }
.cc-trigger svg   { width:10px;height:10px;color:#6b7280;transition:transform .2s;flex-shrink:0; }
.cc-trigger.open svg { transform:rotate(180deg); }

.cc-dropdown      { display:none;position:absolute;top:calc(100% + 4px);left:0;width:240px;background:white;border:1.5px solid #e2e8f0;border-radius:.75rem;box-shadow:0 10px 40px rgba(0,0,0,.12);z-index:9999;overflow:hidden; }
.cc-dropdown.open { display:block; }

.cc-search-wrap   { padding:8px;border-bottom:1px solid #f1f5f9;position:sticky;top:0;background:white; }
.cc-search        { width:100%;padding:6px 10px 6px 30px;border:1px solid #e2e8f0;border-radius:8px;font-size:.75rem;outline:none;background:#f8fafc;color:#1e3a8a; }
.cc-search:focus  { border-color:#2563eb;background:white; }
.cc-search-icon   { position:absolute;left:18px;top:50%;transform:translateY(-50%);width:12px;height:12px;color:#9ca3af;pointer-events:none; }

.cc-list          { max-height:200px;overflow-y:auto; }
.cc-item          { display:flex;align-items:center;gap:8px;padding:8px 12px;cursor:pointer;font-size:.75rem;color:#374151;transition:background .15s; }
.cc-item:hover    { background:#eff6ff; }
.cc-item.active   { background:#eff6ff;color:#1d4ed8;font-weight:600; }
.cc-item img      { width:22px;height:15px;object-fit:cover;border-radius:2px;flex-shrink:0; }
.cc-item .cc-name { flex:1;overflow:hidden;text-overflow:ellipsis;white-space:nowrap; }
.cc-item .cc-code { color:#6b7280;font-size:.7rem;font-family:monospace;flex-shrink:0; }
.cc-empty         { padding:12px;text-align:center;font-size:.75rem;color:#9ca3af;font-style:italic; }

/* phone row */
.phone-row        { display:flex;gap:6px;align-items:stretch; }
.phone-row .cc-wrapper { align-self:stretch; }
.phone-row .cc-trigger { height:100%; }
.phone-input-wrap { flex:1;position:relative; }
</style>

<div data-all-enquiry-form class="rounded-2xl border overflow-visible" style="border-color:rgba(59,130,246,.15);">

    {{-- Header --}}
    <div class="px-6 py-5 rounded-t-2xl" style="background:linear-gradient(135deg,#2563EB 0%,#0891b2 100%);">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-white text-lg">Make an Enquiry</h3>
        </div>

        {{-- Step indicators --}}
        <div class="flex items-center gap-0">
            @foreach(['Contact','Details','Message'] as $si => $label)
                <div class="flex items-center flex-1 last:flex-none">
                    <div class="flex flex-col items-center gap-1">
                        <div class="step-dot {{ $si===0?'active':'pending' }}" data-dot="{{ $si }}">{{ $si }}</div>
                        <span class="text-[9px] font-semibold {{ $si===0?'text-white':'text-white/50' }}">{{ $label }}</span>
                    </div>
                    @if($si < 3)
                    <div class="step-line" data-line="{{ $si }}"></div>
                    @endif
                </div>
                @endforeach
        </div>
    </div>

    {{-- Body --}}
    <div class="bg-white px-6 py-5 rounded-b-2xl">

        {{-- ── STEP 1 ── --}}
        <div data-step="0">
            <p class="text-sm font-semibold text-gray-500 mb-4">Step 1 — Your contact details</p>
            <div class="space-y-3">

                {{-- Hidden tracking --}}
                <input type="hidden" name="lead_form" value="1">
                <input type="hidden" name="city_id"   class="city" value="">
                <input type="hidden" name="from_page" value="{{ request()->path() }}">
                <input type="hidden" name="country_code" id="ef-country-code" value="91">

                {{-- Name --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Full Name *</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">👤</span>
                        <input type="text" name="name" placeholder="Enter full name" class="ef-input" validated>
                    </div>
                </div>

                {{-- Phone --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Mobile Number *</label>
                    <div class="phone-row">

                        {{-- Country Code Picker --}}
                        <div class="cc-wrapper" id="cc-wrapper">
                            <button type="button" class="cc-trigger" id="cc-trigger" aria-haspopup="listbox">
                                <img id="cc-flag" src="https://flagcdn.com/w40/in.png" alt="IN">
                                <span id="cc-label">+91</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div class="cc-dropdown" id="cc-dropdown" role="listbox">
                                <div class="cc-search-wrap" style="position:relative;">
                                    <svg class="cc-search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z"/>
                                    </svg>
                                    {{-- NOTE: no `validated` attribute here --}}
                                    <input type="text" id="cc-search" class="cc-search" placeholder="Search country or code…" autocomplete="off">
                                </div>
                                <div class="cc-list" id="cc-list"></div>
                            </div>
                        </div>

                        {{-- Phone input --}}
                        <div class="phone-input-wrap">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none" style="z-index:1;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5">
                                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <input type="tel" name="phone" placeholder="Enter phone number"
                                   class="ef-input" style="padding-left:2.25rem;" maxlength="16" validated>
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Email Address *</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">✉️</span>
                        <input type="email" name="email" placeholder="Enter email" class="ef-input" validated>
                    </div>
                </div>

                <button type="button" data-next class="w-full py-3 mt-2 rounded-xl font-bold text-white text-sm disabled:opacity-60"
                        style="background:#2563eb;">Continue →</button>
            </div>
        </div>

        {{-- ── STEP 1 ── --}}
        <div data-step="1" class="hidden">
            <p class="text-sm font-semibold text-gray-500 mb-4">Step 2 — Booking details</p>
            <div class="space-y-3">

                {{-- Location --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Location *</label>
                    <div class="relative" id="pf-city-wrapper">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none z-10">📍</span>
                        <input type="text" id="pf-city-input" name="location"
                               placeholder="Search city…" autocomplete="off"
                               class="ef-input" validated>
                        <input type="hidden" id="pf-city-id" name="location_id">
                        <div id="pf-city-dropdown"
                             class="hidden absolute z-50 left-0 right-0 mt-1 bg-white border border-gray-200 rounded-xl shadow-xl max-h-48 overflow-y-auto">
                            <div id="pf-city-list"></div>
                        </div>
                    </div>
                </div>

                {{-- Age Range --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Age Range</label>
                    <select name="age" id="ef-age" class="ef-input">
                        <option value="">Select Age Range</option>
                        @foreach(['Under 20','20 – 24','25 – 29','30 – 34','35 – 39','40 – 44','45 – 49','50 – 54','55 – 59','60+'] as $age)
                        <option value="{{ $age }}" {{ $age === '25 – 29' ? 'selected' : '' }}>{{ $age }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- When to Start --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">When do you want to Start?</label>
                    <select name="whenToStart" id="ef-plan" class="ef-input">
                        @foreach(['Immediately','Within 1 Week','Within 1 Month','Within 3 Months','Within 6 Months','Just Exploring'] as $timeline)
                        <option value="{{ $timeline }}" {{ $timeline === 'Immediately' ? 'selected' : '' }}>{{ $timeline }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex gap-2 mt-2">
                    <button type="button" data-back class="flex-1 py-2.5 rounded-xl font-semibold text-blue-600 border border-blue-200 hover:bg-blue-50 text-sm">← Back</button>
                    <button type="button" data-next class="flex-1 py-2.5 rounded-xl font-semibold text-white text-sm disabled:opacity-60" style="background:#2563eb;">Continue →</button>
                </div>
            </div>
        </div>

        {{-- ── STEP 2 ── --}}
        <div data-step="2" class="hidden">
            <p class="text-sm font-semibold text-gray-500 mb-4">Step 3 — Additional message</p>
            <div class="space-y-3">

                {{-- Service search --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Service *</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none z-10">🔍</span>
                        <input type="text" id="side-service-input"
                               placeholder="Search service…" autocomplete="off"
                               class="ef-input" validated>
                        <input type="hidden" id="side-kw_text-id" name="kw_text">
                        <div id="side-kw_text-dropdown"
                             class="hidden absolute z-50 left-0 right-0 mt-1 bg-white border border-gray-200 rounded-xl shadow-xl max-h-48 overflow-y-auto">
                            <div id="side-kw_text-list"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="text-xs font-semibold text-gray-500 mb-1 block">Message</label>
                    <textarea name="comment" rows="3" placeholder="Any special requests or questions…"
                              class="ef-input resize-none" style="padding-left:1rem;"></textarea>
                </div>

                <div class="flex gap-2 mt-2">
                    <button type="button" data-back class="flex-1 py-2.5 rounded-xl font-semibold text-blue-600 border border-blue-200 hover:bg-blue-50 text-sm">← Back</button>
                    <button type="button" data-send class="flex-1 py-2.5 rounded-xl font-semibold text-white text-sm flex items-center justify-center gap-1.5 disabled:opacity-60" style="background:#2563eb;">
                        Send Enquiry ✓
                    </button>
                </div>
            </div>
        </div>

        {{-- Success --}}
        <div data-success class="hidden flex flex-col items-center py-8 text-center gap-4">
            <div class="w-16 h-16 rounded-full flex items-center justify-center text-3xl" style="background:rgba(37,99,235,.08);">✅</div>
            <div>
                <p class="font-bold text-gray-900 text-lg">Enquiry Sent!</p>
                <p class="text-sm text-gray-400 mt-1">We'll get back to you within 24 hours.</p>
            </div>
            <button type="button" onclick="location.reload()" class="px-5 py-2 rounded-full text-sm font-semibold text-blue-600 border border-blue-200 hover:bg-blue-50">
                New Enquiry
            </button>
        </div>

    </div>
</div>

{{-- Countries list: pass $countries from your controller [{sortname, country_name, phonecode}] --}}
<!-- <script>
    const CC_COUNTRIES = @js($countries ?? [['sortname' => 'IN', 'country_name' => 'India', 'phonecode' => '91']]);
</script> -->

<script>
/* ════════════════════════════════════════════════
   COUNTRY CODE PICKER
   ════════════════════════════════════════════════ */
(function initCountryPicker() {
    const trigger    = document.getElementById('cc-trigger');
    const dropdown   = document.getElementById('cc-dropdown');
    const searchInp  = document.getElementById('cc-search');
    const list       = document.getElementById('cc-list');
    const flagImg    = document.getElementById('cc-flag');
    const label      = document.getElementById('cc-label');
    const hiddenCode = document.getElementById('ef-country-code');

    if (!trigger || !hiddenCode) return;

    function renderList(items) {
        list.innerHTML = '';
        if (!items.length) {
            list.innerHTML = '<div class="cc-empty">No country found</div>';
            return;
        }
        items.forEach(c => {
            const div = document.createElement('div');
            div.className = 'cc-item' + (
                String(c.phonecode) === String(hiddenCode.value) && c.sortname === flagImg.alt ? ' active' : ''
            );
            div.setAttribute('role', 'option');
            div.innerHTML = `
                <img src="https://flagcdn.com/w40/${c.sortname.toLowerCase()}.png"
                     alt="${c.sortname}" loading="lazy" decoding="async">
                <span class="cc-name">${c.country_name}</span>
                <span class="cc-code">+${c.phonecode}</span>`;
            div.addEventListener('mousedown', e => { e.preventDefault(); selectCountry(c); });
            list.appendChild(div);
        });
    }

    function selectCountry(c) {
        flagImg.src       = `https://flagcdn.com/w40/${c.sortname.toLowerCase()}.png`;
        flagImg.alt       = c.sortname;
        label.textContent = `+${c.phonecode}`;
        hiddenCode.value  = c.phonecode;
        closeDropdown();
    }

    function openDropdown() {
        dropdown.classList.add('open');
        trigger.classList.add('open');
        searchInp.value = '';
        renderList(CC_COUNTRIES);
        setTimeout(() => searchInp.focus(), 50);
    }

    function closeDropdown() {
        dropdown.classList.remove('open');
        trigger.classList.remove('open');
    }

    trigger.addEventListener('click', e => {
        e.stopPropagation();
        dropdown.classList.contains('open') ? closeDropdown() : openDropdown();
    });

    searchInp.addEventListener('input', () => {
        const q = searchInp.value.toLowerCase().trim();
        renderList(!q ? CC_COUNTRIES : CC_COUNTRIES.filter(c =>
            c.country_name.toLowerCase().includes(q) ||
            String(c.phonecode).includes(q) ||
            c.sortname.toLowerCase().includes(q)
        ));
    });

    document.addEventListener('click', e => {
        const wrapper = document.getElementById('cc-wrapper');
        if (wrapper && !wrapper.contains(e.target)) closeDropdown();
    });
})();


/* ════════════════════════════════════════════════
   CITY SEARCH — /location/getAjaxCity
   Default shows zones, API fires on 2+ chars
   ════════════════════════════════════════════════ */
(function initCitySearch() {
    const DEFAULT_ZONES = @js(collect($zones ?? [])->map(fn($z) => [
        'id'   => is_array($z) ? ($z['id']         ?? null) : ($z->id         ?? null),
        'name' => is_array($z) ? ($z['cityDetails'] ?? '')  : ($z->cityDetails ?? ''),
    ])->filter(fn($z) => !empty($z['name']))->values()->all());

    const input    = document.getElementById('pf-city-input');
    const hidden   = document.getElementById('pf-city-id');
    const dropdown = document.getElementById('pf-city-dropdown');
    const listEl   = document.getElementById('pf-city-list');
    const wrapper  = document.getElementById('pf-city-wrapper');

    if (!input) return;

    let _timer = null;
    const csrf = () => document.querySelector('meta[name="csrf-token"]')?.content || '';

    function showLoading() {
        listEl.innerHTML = `
            <div class="px-3 py-2 text-xs text-gray-400 italic flex items-center gap-2">
                <svg class="animate-spin w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"/>
                </svg>Searching…
            </div>`;
        dropdown.classList.remove('hidden');
    }

    function renderList(items) {
        listEl.innerHTML = '';
        if (!items.length) {
            listEl.innerHTML = '<div class="px-3 py-2 text-xs text-gray-400 italic">No cities found</div>';
            dropdown.classList.remove('hidden');
            return;
        }
        items.forEach(zone => {
            const btn = document.createElement('button');
            btn.type      = 'button';
            btn.className = 'w-full text-left px-3 py-2 text-xs hover:bg-blue-50 hover:text-blue-700 text-gray-700 flex items-center gap-2 cursor-pointer';
            btn.innerHTML = `<span>📍</span><span></span>`;
            btn.lastElementChild.textContent = zone.name;   // textContent = no XSS
            btn.addEventListener('mousedown', e => {
                e.preventDefault();
                input.value  = zone.name;
                hidden.value = zone.id || zone.name;
                input.dispatchEvent(new Event('input', { bubbles: true })); // clears error
                hidden.value = zone.id || zone.name;                         // re-set (input handler clears it)
                dropdown.classList.add('hidden');
            });
            listEl.appendChild(btn);
        });
        dropdown.classList.remove('hidden');
    }

    function getFiltered(q) {
        if (!q) return DEFAULT_ZONES.slice(0, 30);
        return DEFAULT_ZONES.filter(z => (z.name || '').toLowerCase().includes(q.toLowerCase())).slice(0, 30);
    }

    async function fetchCities(q) {
        showLoading();
        try {
            const res  = await fetch(`/location/getAjaxCity?q=${encodeURIComponent(q)}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': csrf() }
            });
            const data = await res.json();
            const raw  = Array.isArray(data.data) ? data.data : Array.isArray(data) ? data : [];
            const mapped = raw.map(i => ({
                id:   i.id ?? null,
                name: i.cityDetails ?? i.city ?? i.name ?? '',
            })).filter(c => c.name);
            renderList(mapped.length ? mapped : getFiltered(q));
        } catch {
            renderList(getFiltered(q));
        }
    }

    input.addEventListener('focus', () => {
        if (!input.value.trim()) renderList(DEFAULT_ZONES.slice(0, 30));
        else dropdown.classList.remove('hidden');
    });

    input.addEventListener('input', () => {
        const q = input.value.trim();
        hidden.value = '';                 // typed text is not a selection
        clearTimeout(_timer);
        if (q.length < 2) { renderList(getFiltered(q)); return; }
        showLoading();
        _timer = setTimeout(() => fetchCities(q), 350);
    });

    document.addEventListener('click', e => {
        if (wrapper && !wrapper.contains(e.target)) dropdown.classList.add('hidden');
    });
})();


/* ════════════════════════════════════════════════
   SERVICE SEARCH — /service/getAjaxKeyword
   ════════════════════════════════════════════════ */
(function initServiceSearch() {
    const input    = document.getElementById('side-service-input');
    const hidden   = document.getElementById('side-kw_text-id');
    const dropdown = document.getElementById('side-kw_text-dropdown');
    const listEl   = document.getElementById('side-kw_text-list');

    if (!input) return;

    let _timer = null;
    const csrf = () => document.querySelector('meta[name="csrf-token"]')?.content || '';

    function showLoading() {
        listEl.innerHTML = `
            <div class="px-3 py-2 text-xs text-gray-400 italic flex items-center gap-2">
                <svg class="animate-spin w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"/>
                </svg>Searching…
            </div>`;
        dropdown.classList.remove('hidden');
    }

    function renderList(items) {
        listEl.innerHTML = '';
        if (!items.length) {
            listEl.innerHTML = '<div class="px-3 py-2 text-xs text-gray-400 italic">No services found</div>';
            dropdown.classList.remove('hidden');
            return;
        }
        items.forEach(svc => {
            const btn = document.createElement('button');
            btn.type      = 'button';
            btn.className = 'w-full text-left px-3 py-2 text-xs hover:bg-blue-50 hover:text-blue-700 text-gray-700 flex items-center gap-2 cursor-pointer';
            btn.innerHTML = `<span>🔍</span><span></span>`;
            btn.lastElementChild.textContent = svc.label;
            btn.addEventListener('mousedown', e => {
                e.preventDefault();
                input.value = svc.label;
                input.dispatchEvent(new Event('input', { bubbles: true })); // clears error + hidden
                hidden.value = svc.value;                                    // set AFTER the clear
                dropdown.classList.add('hidden');
            });
            listEl.appendChild(btn);
        });
        dropdown.classList.remove('hidden');
    }

    async function fetchServices(q) {
        showLoading();
        try {
            const res  = await fetch(`/service/getAjaxKeyword?q=${encodeURIComponent(q)}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': csrf() }
            });
            const data = await res.json();
            const raw = Array.isArray(data.keywords) ? data.keywords
                      : Array.isArray(data.data)     ? data.data
                      : Array.isArray(data)          ? data : [];
            renderList(raw.map(i => ({
                value: i.slug    ?? i.value ?? i.keyword ?? '',
                label: i.keyword ?? i.label ?? i.name    ?? '',
            })).filter(s => s.label));
        } catch {
            listEl.innerHTML = '<div class="px-3 py-2 text-xs text-gray-400 italic">Error loading services</div>';
            dropdown.classList.remove('hidden');
        }
    }

    input.addEventListener('input', () => {
        const q = input.value.trim();
        hidden.value = '';                 // typed text is not a selection
        clearTimeout(_timer);
        if (q.length < 2) { dropdown.classList.add('hidden'); return; }
        showLoading();
        _timer = setTimeout(() => fetchServices(q), 350);
    });

    input.addEventListener('focus', () => {
        if (input.value.trim().length >= 2) dropdown.classList.remove('hidden');
    });

    document.addEventListener('click', e => {
        if (!input.parentElement.contains(e.target)) dropdown.classList.add('hidden');
    });
})();

(function () {
    const VALIDATE_URL = @js(route('form.validate.step'));
    const SUBMIT_URL   = @js(url('/client/lead/saveEnquiry'));

    const FIRST_STEP = 0;
    const LAST_STEP  = 2;

    // Server field name -> visible input that should show the error
    const FIELD_TARGET = {
        location_id:  '#pf-city-input',
        kw_text:      '#side-service-input',
        country_code: '[name="phone"]',
    };

    const csrf = () => document.querySelector('meta[name="csrf-token"]')?.content ?? '';
    const headers = () => ({
        'X-CSRF-TOKEN': csrf(),
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    });

    document.querySelectorAll('[data-all-enquiry-form]').forEach(form => {
        const steps = form.querySelectorAll('[data-step]');
        const dots  = form.querySelectorAll('[data-dot]');
        const lines = form.querySelectorAll('[data-line]');
        let current = FIRST_STEP;

        /* ── UI ── */
        const show = (n) => {
            current = n;
            steps.forEach(s => s.classList.toggle('hidden', +s.dataset.step !== n));
            dots.forEach(d => {
                const dn = +d.dataset.dot;
                d.className   = 'step-dot ' + (dn < n ? 'done' : dn === n ? 'active' : 'pending');
                d.textContent = dn < n ? '✓' : String(dn + 1);   // display is 1-based
            });
            lines.forEach(l => {
                l.style.background = +l.dataset.line < n ? 'rgba(255,255,255,.7)' : 'rgba(255,255,255,.2)';
            });
            // Step labels under the dots
            dots.forEach(d => {
                const label = d.nextElementSibling;
                if (!label) return;
                const active = +d.dataset.dot <= n;
                label.classList.toggle('text-white', active);
                label.classList.toggle('text-white/50', !active);
            });
        };

        /* ── Errors ── */
        const removeError = (el) => {
            el.classList.remove('border-red-500');
            el._err?.remove();
            el._err = null;
        };

        const showError = (el, msg) => {
            removeError(el);
            const err = document.createElement('p');
            err.className   = 'error-msg text-xs text-red-500 mt-1';
            err.textContent = msg;
            const host = el.closest('.phone-row')
                      || (el.parentElement.classList.contains('relative') ? el.parentElement : null);
            (host || el).insertAdjacentElement('afterend', err);
            el.classList.add('border-red-500');
            el._err = err;
        };

        const clearStepErrors = (scope) =>
            scope.querySelectorAll('.border-red-500').forEach(removeError);

        const findInput = (field) => form.querySelector(FIELD_TARGET[field] ?? `[name="${field}"]`);

        // Returns the lowest step index that had an error (or null).
        // NOTE: step 0 is falsy, so we compare against null explicitly.
        const applyServerErrors = (errors = {}) => {
            let firstStep = null;
            Object.entries(errors).forEach(([field, msgs]) => {
                const el = findInput(field);
                if (!el) return;
                showError(el, msgs[0]);
                const raw    = el.closest('[data-step]')?.dataset.step;
                const stepNo = raw === undefined ? null : +raw;
                if (stepNo !== null && (firstStep === null || stepNo < firstStep)) firstStep = stepNo;
            });
            return firstStep;
        };

        /* ── Client-side quick check (saves a round trip) ── */
        const quickCheck = (n) => {
            const stepEl = form.querySelector(`[data-step="${n}"]`);
            let ok = true;

            stepEl.querySelectorAll('[validated]').forEach(el => {
                const val = el.value.trim();
                if (!val) { showError(el, 'This field is required'); ok = false; return; }
                if (el.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                    showError(el, 'Enter a valid email'); ok = false; return;
                }
                if (el.type === 'tel' && !/^\d{6,15}$/.test(val.replace(/[\s+\-()]/g, ''))) {
                    showError(el, 'Enter a valid phone number'); ok = false;
                }
            });

            // Must pick from the dropdown, not just type
            if (n === 1) {
                const city = form.querySelector('#pf-city-input');
                if (city.value.trim() && !form.querySelector('#pf-city-id').value) {
                    showError(city, 'Please select a city from the list'); ok = false;
                }
            }
            if (n === 2) {
                const svc = form.querySelector('#side-service-input');
                if (svc.value.trim() && !form.querySelector('#side-kw_text-id').value) {
                    showError(svc, 'Please select a service from the list'); ok = false;
                }
            }
            return ok;
        };

        /* ── Server validation for one step ── */
        const validateStep = async (n) => {
            const stepEl = form.querySelector(`[data-step="${n}"]`);
             
            clearStepErrors(stepEl);
            if (!quickCheck(n)) return false;

            const fd = new FormData();
            fd.append('step', n);   // server rules are keyed 1..3
            stepEl.querySelectorAll('input[name], select[name], textarea[name]')
                  .forEach(el => fd.append(el.name, el.value));

            try {
                const res = await fetch(VALIDATE_URL, { method: 'POST', headers: headers(), body: fd });
                if (res.status === 422) {
                    applyServerErrors((await res.json()).errors);
                    return false;
                }
                if (!res.ok) { alert('Something went wrong. Please try again.'); return false; }
                return true;
            } catch {
                alert('Network error. Please check your connection.');
                return false;
            }
        };

        const withLoading = async (btn, label, fn) => {
            const orig = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = label;
            try { return await fn(); }
            finally { btn.disabled = false; btn.innerHTML = orig; }
        };

        /* ── Next / Back ── */
        form.querySelectorAll('[data-next]').forEach(btn => {
            btn.addEventListener('click', () =>
                withLoading(btn, 'Checking…', async () => {
                    if (await validateStep(current)) show(Math.min(current + 1, LAST_STEP));
                })
            );
        });

        form.querySelectorAll('[data-back]').forEach(btn => {
            btn.addEventListener('click', () => show(Math.max(current - 1, FIRST_STEP)));
        });

        /* ── Final submit ── */
        const showSuccess = () => {
            steps.forEach(s => s.classList.add('hidden'));
            form.querySelector('[data-success]')?.classList.remove('hidden');
        };

        form.querySelectorAll('[data-send]').forEach(btn => {
            btn.addEventListener('click', () =>
                withLoading(btn, 'Sending…', async () => {
                    if (!(await validateStep(LAST_STEP))) return;

                    const fd = new FormData();
                    form.querySelectorAll('input[name], textarea[name], select[name]')
                        .forEach(el => fd.append(el.name, el.value));

                    try {
                        const res  = await fetch(SUBMIT_URL, { method: 'POST', headers: headers(), body: fd });
                        const data = await res.json().catch(() => ({}));

                        if (res.ok && data.success) { showSuccess(); return; }

                        if (res.status === 422 && data.errors) {
                            const stepNo = applyServerErrors(data.errors);
                            if (stepNo !== null) show(stepNo);   // jump to the step with the error
                            return;
                        }
                        alert(data.message || 'Could not send enquiry. Please try again.');
                    } catch {
                        alert('Network error. Please check your connection.');
                    }
                })
            );
        });

        /* ── Clear error as user types ── */
        form.querySelectorAll('input, textarea, select').forEach(el => {
            el.addEventListener('input', () => removeError(el));
        });
    });
})();

 
</script>