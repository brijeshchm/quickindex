@extends('business.layouts.app')

@section('title', 'Profile')

@section('content')
<style>
    #autoSaveStatus {
        padding: 12px 16px;
        border: 1px solid;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
    }

    #autoSaveStatus[data-type="success"],
    .profile-toast[data-type="success"] {
        background-color: #dcfce7 !important;
        border-color: #86efac !important;
        color: #166534 !important;
    }

    #autoSaveStatus[data-type="error"],
    .profile-toast[data-type="error"] {
        background-color: #fee2e2 !important;
        border-color: #fca5a5 !important;
        color: #991b1b !important;
    }

    #autoSaveStatus[data-type="info"] {
        background-color: #dbeafe;
        border-color: #93c5fd;
        color: #1e40af;
    }

    #toast-container {
        position: fixed;
        top: 20px;
        right: 16px;
        z-index: 9999;
        width: 340px;
        max-width: calc(100vw - 32px);
        pointer-events: none;
    }

    .profile-toast {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px;
        border: 1px solid;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgb(0 0 0 / 12%);
        pointer-events: auto;
    }

    .profile-toast p {
        margin: 0;
        color: inherit !important;
        overflow-wrap: anywhere;
    }

    .profile-toast button {
        margin-left: auto;
        padding: 4px 8px;
        border: 0;
        background: transparent;
        color: inherit !important;
        font-size: 22px;
        cursor: pointer;
    }

    #personalDetailsForm .has-error {
        border-color: #ef4444 !important;
    }

    #personalDetailsForm .field-error {
        margin-top: 4px;
        color: #dc2626;
        font-size: 12px;
    }
</style>

<div
    id="toast-container"
    aria-live="polite"
    aria-atomic="true"
></div>

<div class="animate-fade-in max-w-5xl space-y-4 md:space-y-6">
    <h1 class="font-display text-xl font-bold md:text-3xl">
        {{ $tabs[$tab] }}
    </h1>

    <div
        id="autoSaveStatus"
        hidden
        role="status"
        aria-live="polite"
    ></div>

    <div class="md:hidden">
        <select
            onchange="window.location.href = this.value"
            class="form-input h-12 bg-white text-base font-medium shadow-sm"
        >
            @foreach($tabs as $key => $label)
                <option
                    value="{{ route('profile', ['tab' => $key]) }}"
                    @selected($tab === $key)
                >
                    {{ $label }}
                </option>
            @endforeach
        </select>
    </div>

    @if($tab === 'personal')
        <form
            id="personalDetailsForm"
            action="{{ route('business.profile.update') }}"
            method="POST"
            class="card space-y-6 p-6"
            novalidate
        >
            @csrf

            <input type="hidden" name="redirect_tab" value="personal">
            <input type="hidden" name="client_id" value="{{ $client->id }}">

            <div class="grid gap-6 md:grid-cols-3">
                <div class="space-y-2">
                    <label for="first_name" class="text-sm font-medium">
                        First Name*
                    </label>
                    <input
                        id="first_name"
                        type="text"
                        name="first_name"
                        value="{{ old('first_name', $client->first_name ?? '') }}"
                        placeholder="Enter First Name"
                        class="form-input auto-save-field"
                    >
                </div>

                <div class="space-y-2">
                    <label for="middle_name" class="text-sm font-medium">
                        Middle Name
                    </label>
                    <input
                        id="middle_name"
                        type="text"
                        name="middle_name"
                        value="{{ old('middle_name', $client->middle_name ?? '') }}"
                        placeholder="Enter Middle Name"
                        class="form-input auto-save-field"
                    >
                </div>

                <div class="space-y-2">
                    <label for="last_name" class="text-sm font-medium">
                        Last Name*
                    </label>
                    <input
                        id="last_name"
                        type="text"
                        name="last_name"
                        value="{{ old('last_name', $client->last_name ?? '') }}"
                        placeholder="Enter Last Name"
                        class="form-input auto-save-field"
                    >
                </div>
            </div>

            <div class="border-t pt-6">
                <div class="grid gap-4 md:grid-cols-3">
                    <div>
                        <label for="personal_email" class="mb-2 block text-sm font-medium">
                            Personal Email
                        </label>
                        <input
                            id="personal_email"
                            type="email"
                            name="personal_email"
                            value="{{ old('personal_email', $client->personal_email ?? '') }}"
                            placeholder="Enter personal email"
                            class="form-input auto-save-field"
                        >
                    </div>

                    <div>
                        <label for="personal_phone" class="mb-2 block text-sm font-medium">
                            Personal Phone
                        </label>
                        <input
                            id="personal_phone"
                            type="tel"
                            name="personal_phone"
                            value="{{ old('personal_phone', $client->personal_phone ?? '') }}"
                            placeholder="Enter personal phone"
                            class="form-input auto-save-field"
                        >
                    </div>

                    <div>
                        <label for="state" class="mb-2 block text-sm font-medium">
                            State
                        </label>
                        <select
                            id="state"
                            name="personal_state"
                            class="form-input auto-save-field w-full"
                        >
                            <option value="">Select State</option>

                            @foreach($states as $state)
                                <option
                                    value="{{ $state->id }}"
                                    @selected(
                                        (string) old('personal_state', $client->personal_state_id ?? '')
                                        === (string) $state->id
                                    )
                                >
                                    {{ $state->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="show_cityList">
                        <label for="city" class="mb-2 block text-sm font-medium">
                            City
                        </label>
                        <select
                            id="city"
                            name="personal_city"
                            class="form-input auto-save-field w-full"
                        >
                            <option value="">Select City</option>
                        </select>

                        <p id="cityLoadError" class="mt-1 text-xs text-red-600" hidden></p>
                    </div>

                    <div>
                        <label for="personal_area" class="mb-2 block text-sm font-medium">
                            Personal Area
                        </label>
                        <input
                            id="personal_area"
                            type="text"
                            name="personal_area"
                            value="{{ old('personal_area', $client->personal_area ?? '') }}"
                            placeholder="Enter personal area"
                            class="form-input auto-save-field"
                        >
                    </div>

                    <div>
                        <label for="personal_pincode" class="mb-2 block text-sm font-medium">
                            Personal Pincode
                        </label>
                        <input
                            id="personal_pincode"
                            type="text"
                            name="personal_pincode"
                            value="{{ old('personal_pincode', $client->personal_pincode ?? '') }}"
                            maxlength="6"
                            inputmode="numeric"
                            placeholder="Enter personal pincode"
                            class="form-input auto-save-field"
                        >
                    </div>

                    <div class="md:col-span-3">
                        <label for="personal_address" class="mb-2 block text-sm font-medium">
                            Address
                        </label>
                        <input
                            id="personal_address"
                            type="text"
                            name="personal_address"
                            value="{{ old('personal_address', $client->personal_address ?? '') }}"
                            placeholder="Enter Address"
                            class="form-input auto-save-field"
                        >
                    </div>
                </div>
            </div>

            <div class="sticky bottom-24 flex justify-end border-t bg-white/90 pt-5 backdrop-blur md:bottom-4">
                <button id="saveProfileButton" type="submit" class="btn btn-primary">
                    <i data-lucide="save" class="h-4 w-4"></i>
                    <span>Save Profile</span>
                </button>
            </div>
        </form>
    @endif
</div>

{{-- Remove this include if jQuery is already loaded in the layout. --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(function () {
    const form = document.getElementById('personalDetailsForm');
    if (!form) return;

    const $form = $(form);
    const $city = $('#city');
    const $button = $('#saveProfileButton');
    const $status = $('#autoSaveStatus');
    const token = $form.find('[name="_token"]').val();

    const initialCity = @json(old('personal_city', $client->personal_city_id ?? ''));

    let saveTimer = null;
    let toastTimer = null;
    let statusTimer = null;
    let isSaving = false;
    let cityLoading = false;
    let cityLoadFailed = false;
    let cityRequest = null;
    let cityVersion = 0;
    let hasEdited = false;
    let pendingManualSave = false;
    let lastSnapshot = $form.serialize();

    function getMessage(response, fallback) {
        // Support both controller message keys.
        for (const value of [response?.msg, response?.message]) {
            if (typeof value === 'string' && value.trim()) {
                return value;
            }
        }

        return fallback;
    }

    function isSuccessResponse(response) {
        if (!response || typeof response !== 'object') return false;

        // An explicit success key takes precedence over status.
        const value = response.success ?? response.status;

        return value === true ||
            value === 1 ||
            value === '1' ||
            (typeof value === 'string' &&
                ['true', 'success'].includes(value.trim().toLowerCase()));
    }

    function showStatus(message, type = 'info') {
        clearTimeout(statusTimer);

        $status
            .prop('hidden', false)
            .attr('data-type', type)
            .text(message);

        if (type === 'success') {
            statusTimer = setTimeout(function () {
                $status.prop('hidden', true);
            }, 4000);
        }
    }

    function showToast(message, type = 'success') {
        const container = document.getElementById('toast-container');

        clearTimeout(toastTimer);
        container.replaceChildren();

        const toast = document.createElement('div');
        toast.className = 'profile-toast';
        toast.dataset.type = type;

        const icon = document.createElement('span');
        icon.textContent = type === 'success' ? '✓' : '!';
        icon.style.fontSize = '24px';
        icon.style.fontWeight = '700';

        const content = document.createElement('div');
        content.style.flex = '1';
        content.style.minWidth = '0';

        const title = document.createElement('p');
        title.textContent = type === 'success' ? 'Success' : 'Save failed';
        title.style.fontWeight = '700';

        const text = document.createElement('p');
        text.textContent = message;
        text.style.fontSize = '14px';

        const close = document.createElement('button');
        close.type = 'button';
        close.textContent = '×';
        close.setAttribute('aria-label', 'Close notification');

        function dismiss() {
            clearTimeout(toastTimer);
            toast.remove();
        }

        close.addEventListener('click', dismiss);

        content.append(title, text);
        toast.append(icon, content, close);
        container.appendChild(toast);

        toastTimer = setTimeout(dismiss, 4000);
    }

    function showError(message) {
        showStatus(message, 'error');
        showToast(message, 'error');
    }

    function clearFieldError(field) {
        $(field)
            .removeClass('has-error')
            .removeAttr('aria-invalid')
            .siblings('.field-error, .help-block')
            .remove();

        if (
            !$form.find('.field-error, .help-block').length &&
            $status.attr('data-type') === 'error'
        ) {
            $status.prop('hidden', true);
        }
    }

    function clearAllErrors() {
        $form.find('.field-error, .help-block').remove();
        $form.find('.has-error')
            .removeClass('has-error')
            .removeAttr('aria-invalid');
    }

    function showValidationErrors(errors) {
        clearAllErrors();

        Object.entries(errors || {}).forEach(function ([name, messages]) {
            const $fields = $form.find('[name]').filter(function () {
                return this.name === name;
            });

            if (!$fields.length) return;

            $fields.addClass('has-error').attr('aria-invalid', 'true');

            $('<p>')
                .addClass('field-error')
                .text(Array.isArray(messages) ? messages[0] : messages)
                .insertAfter($fields.last());
        });
    }

    function scheduleSave(delay = 1200) {
        clearTimeout(saveTimer);
        saveTimer = setTimeout(function () {
            saveForm(false);
        }, delay);
    }

    function saveForm(isManual = false) {
        clearTimeout(saveTimer);

        if (isManual) pendingManualSave = true;
        if (isSaving || cityLoading) return;

        if (cityLoadFailed) {
            if (pendingManualSave) {
                showError('Select the state again to load cities before saving.');
            }

            pendingManualSave = false;
            return;
        }

        const manual = pendingManualSave;
        const snapshot = $form.serialize();

        if (!manual && snapshot === lastSnapshot) return;

        pendingManualSave = false;
        isSaving = true;

        $button.prop('disabled', true).addClass('opacity-60');
        $button.find('span').text('Saving...');
        showStatus('Saving...', 'info');

        $.ajax({
            type: 'POST',
            url: form.action,
            data: snapshot,
            dataType: 'json',
            timeout: 30000,
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },

            success: function (response) {
                const unchanged = !cityLoading && $form.serialize() === snapshot;

                if (!isSuccessResponse(response)) {
                    if (unchanged) {
                        showValidationErrors(response?.errors);

                        showError(getMessage(
                            response,
                            'Profile could not be saved.'
                        ));
                    }

                    return;
                }

                lastSnapshot = snapshot;

                if (unchanged) {
                    clearAllErrors();

                    const message = getMessage(
                        response,
                        manual
                            ? 'Profile saved successfully.'
                            : 'Your changes have been saved automatically.'
                    );

                    // Both the page message and popup use green success styling.
                    showStatus(message, 'success');
                    showToast(message, 'success');
                }
            },

            error: function (xhr, textStatus) {
                const response = xhr.responseJSON || {};
                const unchanged = !cityLoading && $form.serialize() === snapshot;

                if (xhr.status === 422) {
                    if (unchanged) {
                        showValidationErrors(response.errors);

                        showError(getMessage(
                            response,
                            'Please correct the highlighted fields.'
                        ));
                    }

                    return;
                }

                let message;

                if (xhr.status === 419) {
                    message = 'Session expired. Refresh the page and try again.';
                } else if (xhr.status === 401 || xhr.status === 403) {
                    message = 'You are not authorized to save this profile.';
                } else if (textStatus === 'parsererror') {
                    message = 'The controller must return a valid JSON response.';
                } else if (textStatus === 'timeout') {
                    message = 'Request timed out. Click Save Profile to retry.';
                } else {
                    message = getMessage(
                        response,
                        'Save failed. Check your connection and try again.'
                    );
                }

                showError(message);
            },

            complete: function () {
                // Reset after success, validation errors, and server errors.
                isSaving = false;

                $button.prop('disabled', false).removeClass('opacity-60');
                $button.find('span').text('Save Profile');

                if (pendingManualSave) {
                    saveForm(true);
                } else if (!cityLoading && $form.serialize() !== snapshot) {
                    scheduleSave(300);
                }
            }
        });
    }

    function loadCities(stateId, selectedCity = '', initializing = false) {
        const version = ++cityVersion;

        clearTimeout(saveTimer);

        if (cityRequest) {
            cityRequest.abort();
            cityRequest = null;
        }

        cityLoading = true;
        cityLoadFailed = false;

        $('#cityLoadError').prop('hidden', true).text('');

        $city
            .prop('disabled', true)
            .empty()
            .append(new Option(
                stateId ? 'Loading cities...' : 'Select City',
                ''
            ));

        if (!stateId) {
            finish();
            return;
        }

        cityRequest = $.ajax({
            type: 'POST',
            url: @json(route('business.cities.ajax')),
            data: { sid: stateId, cid: selectedCity },
            dataType: 'html',
            timeout: 30000,
            headers: { 'X-CSRF-TOKEN': token },

            success: function (html) {
                if (version !== cityVersion) return;

                // This endpoint must return city <option> elements.
                $city.html(html);

                if (!$city.find('option[value=""]').length) {
                    $city.prepend(new Option('Select City', ''));
                }

                const wanted = String(selectedCity ?? '');
                const exists = $city.find('option').toArray().some(function (option) {
                    return option.value === wanted;
                });

                $city.val(exists ? wanted : '');
            },

            error: function (xhr, status) {
                if (status === 'abort' || version !== cityVersion) return;

                cityLoadFailed = true;
                $city.empty().append(new Option('Select City', ''));

                if (initializing && selectedCity) {
                    $city.append(new Option(
                        'Current city',
                        String(selectedCity),
                        true,
                        true
                    ));
                }

                $('#cityLoadError')
                    .text('Cities could not be loaded. Select the state again to retry.')
                    .prop('hidden', false);
            },

            complete: function () {
                if (version !== cityVersion) return;

                cityRequest = null;
                finish();
            }
        });

        function finish() {
            if (version !== cityVersion) return;

            cityLoading = false;
            $city.prop('disabled', false);

            if (initializing && !hasEdited) {
                lastSnapshot = $form.serialize();
            }

            if (pendingManualSave) {
                saveForm(true);
            } else if (hasEdited && !cityLoadFailed) {
                scheduleSave(300);
            }
        }
    }

    $form.on('input change', '.auto-save-field', function (event) {
        hasEdited = true;
        clearFieldError(this);

        if (this.id === 'state') {
            if (event.type === 'change') {
                clearFieldError($city[0]);
                loadCities(this.value, '');
            }
            return;
        }

        scheduleSave(event.type === 'change' ? 400 : 1200);
    });

    $form.on('blur', 'input.auto-save-field, textarea.auto-save-field', function () {
        scheduleSave(300);
    });

    $form.on('submit', function (event) {
        event.preventDefault();
        saveForm(true);
    });

    loadCities($('#state').val(), initialCity, true);
});
</script>
@endsection