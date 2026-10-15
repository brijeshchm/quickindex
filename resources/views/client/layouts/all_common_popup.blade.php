@php
    $pfCountries = collect($countries ?? [])
        ->map(fn ($country) => [
            'name' => data_get($country, 'country_name', 'Country'),
            'code' => (string) data_get($country, 'phonecode', ''),
        ])
        ->filter(fn ($country) => $country['code'] !== '')
        ->unique('code')
        ->values();

    if (!$pfCountries->contains('code', '91')) {
        $pfCountries->prepend(['name' => 'India', 'code' => '91']);
    }

    $pfKeyword = is_string($keywordList ?? null) ? $keywordList : '';

    $pfAges = [
        'Under 20', '20 – 24', '25 – 29', '30 – 34',
        '35 – 39', '40 – 44', '45 – 49', '50 – 54',
        '55 – 59', '60+'
    ];

    $pfPlans = [
        'Immediately', 'Within 1 Week', 'Within 1 Month',
        'Within 3 Months', 'Within 6 Months', 'Just Exploring'
    ];
@endphp

<style>
    .qe [hidden] { display: none !important; }

    .qe {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #dbeafe;
    }

    .qe-header {
        padding: 20px 24px;
        background: linear-gradient(135deg, #2563eb, #0891b2);
        color: white;
    }

    .qe-progress {
        display: flex;
        justify-content: space-between;
        margin-top: 18px;
    }

    .qe-dot {
        display: grid;
        place-items: center;
        width: 30px;
        height: 30px;
        margin: 0 auto 5px;
        border-radius: 50%;
        background: #ffffff30;
        font-weight: bold;
    }

    .qe-dot.active, .qe-dot.done {
        background: white;
        color: #2563eb;
    }

    .qe-body {
        padding: 24px;
        max-height: 75dvh;
        overflow-y: auto;
    }

    .qe-field { margin-bottom: 16px; }

    .qe label {
        display: block;
        margin-bottom: 6px;
        color: #475569;
        font-size: 12px;
        font-weight: 600;
    }

    .qe-input {
        width: 100%;
        min-width: 0;
        box-sizing: border-box;
        padding: 11px 13px;
        border: 1px solid #cbd5e1;
        border-radius: 12px;
        background: white;
        font-size: 14px;
        color: #0f172a;
        outline: none;
    }

    .qe-input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px #2563eb15;
    }

    .qe-input[aria-invalid="true"] { border-color: #dc2626; }

    .qe-error {
        margin: 5px 0 0;
        font-size: 12px;
        color: #dc2626;
    }

    .qe-actions { display: flex; gap: 8px; }

    .qe-button {
        flex: 1;
        padding: 11px 16px;
        border: 0;
        border-radius: 12px;
        background: #2563eb;
        color: white;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
    }

    .qe-back { background: #eff6ff; color: #2563eb; }
    .qe-button:disabled { opacity: .6; cursor: wait; }

    .qe-search { position: relative; }

    .qe-results {
        position: absolute;
        top: calc(100% + 4px);
        left: 0;
        right: 0;
        z-index: 60;
        max-height: 180px;
        overflow-y: auto;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        box-shadow: 0 10px 25px #00000015;
    }

    .qe-result {
        display: block;
        width: 100%;
        padding: 10px 12px;
        border: 0;
        background: white;
        text-align: left;
        font-size: 13px;
        cursor: pointer;
    }

    .qe-result:hover, .qe-result:focus { background: #eff6ff; }

    .qe-status {
        margin-bottom: 16px;
        padding: 12px;
        border-radius: 12px;
        background: #fef2f2;
        color: #b91c1c;
        font-size: 13px;
    }

    .qe-status.success { background: #f0fdf4; color: #15803d; }
</style>

<div class="qe" data-qe>
    <header class="qe-header">
        <div style="display:flex;align-items:center;justify-content:space-between">
            <h3 style="margin:0;font-size:18px;font-weight:700">
                Make an Enquiry
            </h3>

            <button
                type="button"
                data-close
                aria-label="Close enquiry"
                style="border:0;background:transparent;color:white;cursor:pointer"
            >✕</button>
        </div>

        <div class="qe-progress">
            @foreach(['Contact', 'Details', 'Message'] as $index => $label)
                <div style="text-align:center">
                    <span data-dot="{{ $index }}" class="qe-dot">
                        {{ $index }}
                    </span>
                    <span style="font-size:11px">{{ $label }}</span>
                </div>
            @endforeach
        </div>
    </header>

    <form
        class="qe-body"
        action="{{ url('/client/lead/saveEnquiry') }}"
        method="POST"
        data-validate-url="{{ url('/form/validate-step') }}"
        data-city-url="{{ url('/location/getAjaxCity') }}"
        data-service-url="{{ url('/service/getAjaxKeyword') }}"
        novalidate
    >
        @csrf

        <input type="hidden" name="lead_form" value="1">
        <input type="hidden" name="from_page" value="{{ request()->path() }}">
        <input type="hidden" name="location_id">
        <input type="hidden" name="kw_text" value="{{ $pfKeyword }}">

        <div data-status class="qe-status" role="status" aria-live="polite" hidden></div>

        {{-- STEP 0 --}}
        <section data-step="0">
            <p style="margin-bottom:16px;color:#64748b">
                Step 0 — Contact details
            </p>

            <div class="qe-field" data-field="name">
                <label>Full Name *</label>
                <input
                    name="name"
                    type="text"
                    class="qe-input"
                    placeholder="Enter full name"
                    autocomplete="name"
                    minlength="2"
                    maxlength="100"
                    required
                >
            </div>

            <div style="display:flex;gap:8px">
                <div class="qe-field" data-field="country_code" style="width:110px;flex-shrink:0">
                    <label>Code *</label>
                    <select name="country_code" class="qe-input">
                        @foreach($pfCountries as $country)
                            <option
                                value="{{ $country['code'] }}"
                                @selected($country['code'] === '91')
                            >
                                {{ $country['name'] }} +{{ $country['code'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="qe-field" data-field="phone" style="flex:1;min-width:0">
                    <label>Mobile Number *</label>
                    <input
                        name="phone"
                        type="tel"
                        inputmode="tel"
                        autocomplete="tel-national"
                        class="qe-input"
                        placeholder="Mobile number"
                        maxlength="25"
                        required
                    >
                </div>
            </div>

            <div class="qe-field" data-field="email">
                <label>Email Address *</label>
                <input
                    name="email"
                    type="email"
                    class="qe-input"
                    autocomplete="email"
                    placeholder="Enter email"
                    maxlength="255"
                    required
                >
            </div>

            <div class="qe-actions">
                <button type="button" data-next class="qe-button">
                    Continue →
                </button>
            </div>
        </section>

        {{-- STEP 1 --}}
        <section data-step="1" hidden>
            <p style="margin-bottom:16px;color:#64748b">
                Step 1 — Booking details
            </p>

            <div class="qe-field" data-field="location">
                <label>City / Location *</label>

                <div class="qe-search" data-city-wrapper>
                    <input
                        name="location"
                        type="text"
                        class="qe-input"
                        placeholder="Type at least 2 letters"
                        autocomplete="off"
                        maxlength="255"
                        required
                    >
                    <div class="qe-results" data-city-results hidden></div>
                </div>
            </div>

            <div class="qe-field" data-field="age">
                <label>Age Range *</label>
                <select name="age" class="qe-input" required>
                    <option value="">Select age range</option>
                    @foreach($pfAges as $age)
                        <option value="{{ $age }}">{{ $age }}</option>
                    @endforeach
                </select>
            </div>

            <div class="qe-field" data-field="whenToStart">
                <label>When do you want to start? *</label>
                <select name="whenToStart" class="qe-input" required>
                    @foreach($pfPlans as $plan)
                        <option value="{{ $plan }}">{{ $plan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="qe-actions">
                <button type="button" data-back class="qe-button qe-back">
                    ← Back
                </button>
                <button type="button" data-next class="qe-button">
                    Continue →
                </button>
            </div>
        </section>

        {{-- STEP 2 --}}
        <section data-step="2" hidden>
            <p style="margin-bottom:16px;color:#64748b">
                Step 2 — Service and message
            </p>

            <div class="qe-field" data-field="kw_text">
                <label>Service *</label>

                <div class="qe-search" data-service-wrapper>
                    <input
                        data-service-input
                        type="text"
                        class="qe-input"
                        value="{{ $pfKeyword }}"
                        placeholder="Search service"
                        autocomplete="off"
                        maxlength="255"
                        required
                    >
                    <div class="qe-results" data-service-results hidden></div>
                </div>
            </div>

            <div class="qe-field" data-field="comment">
                <label>Message (optional)</label>
                <textarea
                    name="comment"
                    rows="3"
                    maxlength="5000"
                    class="qe-input"
                    placeholder="Your requirements..."
                ></textarea>
            </div>

            <div class="qe-actions">
                <button type="button" data-back class="qe-button qe-back">
                    ← Back
                </button>
                <button type="submit" data-send class="qe-button">
                    Send Enquiry ✓
                </button>
            </div>
        </section>

        <section data-success hidden style="text-align:center;padding:24px 0">
            <div style="font-size:40px;color:#16a34a">✓</div>
            <h4 style="font-size:20px;font-weight:700">Enquiry saved!</h4>
            <p style="margin:10px 0 20px;color:#64748b">
                Our team will contact you shortly.
            </p>
            <button type="button" data-reset class="qe-button">
                New Enquiry
            </button>
        </section>
    </form>
</div>

<script>
(function () {
    'use strict';

    function boot() {
        document.querySelectorAll('[data-qe]').forEach(init);
    }

    function init(root) {
        if (root.dataset.ready) return;
        root.dataset.ready = '1';

        const form = root.querySelector('form');
        const steps = [...root.querySelectorAll('[data-step]')];
        const dots = [...root.querySelectorAll('[data-dot]')];
        const status = root.querySelector('[data-status]');
        const success = root.querySelector('[data-success]');
        const serviceInput = root.querySelector('[data-service-input]');
        const controls = [...root.querySelectorAll('[data-next],[data-back],[data-send]')];

        const field = name => form.elements.namedItem(name);
        const phoneDigits = () => field('phone').value.replace(/[\s()+-]/g, '');

        let current = 0;
        let busy = false;
        let saved = false;

        function message(text, ok = false) {
            status.textContent = text;
            status.hidden = !text;
            status.classList.toggle('success', ok);
        }

        function show(index) {
            current = Math.max(0, Math.min(index, 2));
            success.hidden = true;

            steps.forEach((step, i) => step.hidden = i !== current);

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === current);
                dot.classList.toggle('done', i < current);
                dot.textContent = i < current ? '✓' : String(i);
            });
        }

        function container(name) {
            if (['location_id', 'city_id'].includes(name)) name = 'location';

            return [...root.querySelectorAll('[data-field]')]
                .find(element => element.dataset.field === name);
        }

        function clearError(name) {
            const box = container(name);
            if (!box) return;

            box.querySelector('.qe-error')?.remove();
            box.querySelectorAll('[aria-invalid]').forEach(input => {
                input.removeAttribute('aria-invalid');
            });
        }

        function error(name, text) {
            const box = container(name);
            if (!box) return;

            clearError(name);

            const input = box.querySelector('input:not([type="hidden"]),select,textarea');
            input?.setAttribute('aria-invalid', 'true');

            const paragraph = document.createElement('p');
            paragraph.className = 'qe-error';
            paragraph.textContent = text;
            box.appendChild(paragraph);
        }

        function applyErrors(errors) {
            let earliest = null;

            Object.entries(errors || {}).forEach(([name, messages]) => {
                error(name, Array.isArray(messages) ? messages[0] : String(messages));

                const step = container(name)?.closest('[data-step]');

                if (step) {
                    const number = Number(step.dataset.step);
                    earliest = earliest === null ? number : Math.min(earliest, number);
                }
            });

            if (earliest !== null) show(earliest);
        }

        function validate(index) {
            steps[index].querySelectorAll('[data-field]').forEach(box => {
                clearError(box.dataset.field);
            });

            let valid = true;

            function fail(name, text) {
                error(name, text);
                valid = false;
            }

            if (index === 0) {
                const name = field('name').value.trim();
                const email = field('email').value.trim();
                const digits = phoneDigits();
                const code = field('country_code').value;

                if (name.length < 2 || name.length > 100) {
                    fail('name', 'Enter a name.');
                }

                if (!email || field('email').validity.typeMismatch) {
                    fail('email', 'Enter a valid email address.');
                }

                const pattern = code === '91' ? /^[6-9]\d{9}$/ : /^\d{7,15}$/;

                if (!pattern.test(digits)) {
                    fail('phone', code === '91'
                        ? 'Enter a valid 10-digit Indian mobile number.'
                        : 'Enter a valid phone number.');
                }
            }

            if (index === 1) {
                if (!field('location').value.trim() || !field('location_id').value) {
                    fail('location', 'Select a city from the suggestions.');
                }

                if (!field('age').value) fail('age', 'Select an age range.');
                if (!field('whenToStart').value) {
                    fail('whenToStart', 'Select when you want to start.');
                }
            }

            if (index === 2) {
                if (!field('kw_text').value.trim()) {
                    fail('kw_text', 'Enter or select a service.');
                }

                if (field('comment').value.length > 5000) {
                    fail('comment', 'Message must not exceed 5000 characters.');
                }
            }

            return valid;
        }

        function payload() {
            const data = new FormData(form);

            ['name', 'email', 'location', 'kw_text', 'comment'].forEach(name => {
                data.set(name, String(data.get(name) || '').trim());
            });

            data.set('phone', phoneDigits());
            return data;
        }

        async function request(url, options = {}) {
            const response = await fetch(url, {
                credentials: 'same-origin',
                ...options,
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': field('_token').value,
                    ...options.headers
                }
            });

            const data = await response.json().catch(() => null);

            if (!response.ok || !data) {
                let text = data?.message || 'Request failed. Please try again.';

                if (response.status === 419) text = 'Session expired. Refresh the page.';
                if (response.status === 429) text = 'Too many attempts. Please wait.';
                if (response.ok && !data) text = 'Server returned an invalid JSON response.';

                const exception = new Error(text);
                exception.errors = data?.errors;
                throw exception;
            }

            return data;
        }

        async function run(button, label, callback) {
            if (busy || saved) return;

            busy = true;
            controls.forEach(control => control.disabled = true);

            const original = button.textContent;
            button.textContent = label;
            message('');

            try {
                await callback();
            } catch (exception) {
                applyErrors(exception.errors);
                message(exception.message || 'Network error. Please try again.');
            } finally {
                busy = false;
                controls.forEach(control => control.disabled = false);
                button.textContent = original;
            }
        }

        function autocomplete({ input, wrapper, results, url, map, select, edit }) {
            let timer;
            let controller;
            let version = 0;

            function close() {
                clearTimeout(timer);
                controller?.abort();
                version++;
                results.hidden = true;
            }

            function notice(text) {
                results.replaceChildren();

                const item = document.createElement('p');
                item.className = 'qe-result';
                item.textContent = text;

                results.appendChild(item);
                results.hidden = false;
            }

            function queue() {
                clearTimeout(timer);
                controller?.abort();

                const requestVersion = ++version;
                const query = input.value.trim();

                if (query.length < 2) {
                    results.hidden = true;
                    return;
                }

                notice('Searching…');

                timer = setTimeout(async () => {
                    controller = new AbortController();

                    try {
                        const target = new URL(url, window.location.origin);
                        target.searchParams.set('q', query);

                        const data = await request(target, {
                            signal: controller.signal
                        });

                        if (requestVersion !== version) return;

                        const rows = Array.isArray(data)
                            ? data
                            : [data.data, data.results, data.keywords]
                                .find(Array.isArray) || [];

                        const items = rows.map(map).filter(item => item.label);

                        results.replaceChildren();

                        if (!items.length) {
                            notice('No results found.');
                            return;
                        }

                        items.forEach(item => {
                            const button = document.createElement('button');
                            button.type = 'button';
                            button.className = 'qe-result';
                            button.textContent = item.label;

                            button.addEventListener('click', () => {
                                close();
                                select(item);
                            });

                            results.appendChild(button);
                        });

                        results.hidden = false;
                    } catch (exception) {
                        if (
                            exception.name !== 'AbortError' &&
                            requestVersion === version
                        ) notice('Unable to load results. Please try again.');
                    }
                }, 300);
            }

            input.addEventListener('input', () => {
                edit();
                queue();
            });

            input.addEventListener('focus', queue);

            document.addEventListener('click', event => {
                if (!wrapper.contains(event.target)) close();
            });

            wrapper.addEventListener('keydown', event => {
                if (event.key === 'Escape') close();
            });

            return { close };
        }

        const cities = autocomplete({
            input: field('location'),
            wrapper: root.querySelector('[data-city-wrapper]'),
            results: root.querySelector('[data-city-results]'),
            url: form.dataset.cityUrl,

            map: row => ({
                id: row.id,
                label: row.cityDetails ?? row.city ?? row.name ?? row.text ?? ''
            }),

            select: item => {
                field('location').value = item.label;
                field('location_id').value = item.id ?? '';
                clearError('location');
            },

            edit: () => {
                field('location_id').value = '';
                clearError('location');
            }
        });

        const services = autocomplete({
            input: serviceInput,
            wrapper: root.querySelector('[data-service-wrapper]'),
            results: root.querySelector('[data-service-results]'),
            url: form.dataset.serviceUrl,

            map: row => ({
                value: row.slug ?? row.value ?? row.keyword ?? '',
                label: row.keyword ?? row.label ?? row.name ?? row.text ?? ''
            }),

            select: item => {
                serviceInput.value = item.label;
                field('kw_text').value = item.value || item.label;
                clearError('kw_text');
            },

            edit: () => {
                field('kw_text').value = serviceInput.value.trim();
                clearError('kw_text');
            }
        });

        root.querySelectorAll('[data-next]').forEach(button => {
            button.addEventListener('click', () => {
                run(button, 'Checking…', async () => {
                    if (!validate(current)) return;

                    const data = payload();
                    data.set('step', String(current));

                    const response = await request(form.dataset.validateUrl, {
                        method: 'POST',
                        body: data
                    });

                    if (response.success !== true) {
                        throw new Error(response.message || 'Validation failed.');
                    }

                    cities.close();
                    services.close();
                    show(current + 1);
                });
            });
        });

        root.querySelectorAll('[data-back]').forEach(button => {
            button.addEventListener('click', () => {
                if (!busy && !saved) {
                    message('');
                    cities.close();
                    services.close();
                    show(current - 1);
                }
            });
        });

        form.addEventListener('submit', event => {
            event.preventDefault();

            if (current < 2) {
                steps[current].querySelector('[data-next]')?.click();
                return;
            }

            run(root.querySelector('[data-send]'), 'Saving…', async () => {
                for (let index = 0; index <= 2; index++) {
                    if (!validate(index)) {
                        show(index);
                        return;
                    }
                }

                const response = await request(form.action, {
                    method: 'POST',
                    body: payload()
                });

                if (response.success !== true) {
                    const exception = new Error(response.message || 'Enquiry was not saved.');
                    exception.errors = response.errors;
                    throw exception;
                }

                saved = true;
                cities.close();
                services.close();

                steps.forEach(step => step.hidden = true);
                success.hidden = false;

                dots.forEach(dot => {
                    dot.classList.remove('active');
                    dot.classList.add('done');
                    dot.textContent = '✓';
                });

                message(response.message || 'Enquiry saved successfully.', true);
            });
        });

        root.querySelectorAll('[data-field]').forEach(box => {
            box.addEventListener('input', () => clearError(box.dataset.field));
            box.addEventListener('change', () => clearError(box.dataset.field));
        });

        root.querySelector('[data-reset]').addEventListener('click', () => {
            form.reset();
            saved = false;
            field('location_id').value = '';

            root.querySelectorAll('[data-field]').forEach(box => {
                clearError(box.dataset.field);
            });

            message('');
            show(0);
        });

        root.querySelector('[data-close]').addEventListener('click', () => {
            root.closest('#enquiry-modal')?.classList.remove('open');
        });

        show(0);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot, { once: true });
    } else {
        boot();
    }
})();
</script>