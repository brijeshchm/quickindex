@extends('business.layouts.app')

@section('title', 'Profile')

@section('content')
<div
    id="toast-container"
    class="pointer-events-none fixed right-4 top-5 z-[9999] flex w-80 max-w-[calc(100vw-2rem)] flex-col gap-3"
    aria-live="polite"
    aria-atomic="true"
></div>

<div class="animate-fade-in max-w-5xl space-y-4 md:space-y-6">
    <div>
        <h1 class="font-display text-xl font-bold md:text-3xl">
            {{ $tabs[$tab] }}
        </h1>
    </div>

    <div
        id="autoSaveStatus"
        class="hidden"
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
                        <label
                            for="personal_email"
                            class="mb-2 block text-sm font-medium"
                        >
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
                        <label
                            for="personal_phone"
                            class="mb-2 block text-sm font-medium"
                        >
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

                        <p
                            id="cityLoadError"
                            class="mt-1 hidden text-xs text-red-600"
                        ></p>
                    </div>

                    <div>
                        <label
                            for="personal_area"
                            class="mb-2 block text-sm font-medium"
                        >
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
                        <label
                            for="personal_pincode"
                            class="mb-2 block text-sm font-medium"
                        >
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
                        <label
                            for="personal_address"
                            class="mb-2 block text-sm font-medium"
                        >
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
                <button
                    id="saveProfileButton"
                    type="submit"
                    class="btn btn-primary"
                >
                    <i data-lucide="save" class="h-4 w-4"></i>
                    <span>Save Profile</span>
                </button>
            </div>
        </form>
    @endif
</div>

{{-- Remove this include if your layout already loads jQuery. --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(function () {
    const form = document.getElementById('personalDetailsForm');

    if (!form) return;

    const $form = $(form);
    const $city = $('#city');
    const $saveButton = $('#saveProfileButton');
    const $buttonText = $saveButton.find('span');
    const $status = $('#autoSaveStatus');

    const token = $form.find('input[name="_token"]').val();
    const initialCity = @json(old('personal_city', $client->personal_city_id ?? ''));

    let debounceTimer = null;
    let toastTimer = null;
    let isSaving = false;
    let cityLoading = false;
    let cityLoadFailed = false;
    let cityRequest = null;
    let cityRequestVersion = 0;
    let hasEdited = false;
    let pendingManualSave = false;
    let lastSnapshot = $form.serialize();

    function showToast(message, type = 'success', duration = 3000) {
        const container = document.getElementById('toast-container');

        if (!container) return;

        clearTimeout(toastTimer);
        container.replaceChildren();

        const styles = {
            success: 'border-emerald-200 bg-emerald-50 text-emerald-800',
            error: 'border-red-200 bg-red-50 text-red-800',
            info: 'border-blue-200 bg-blue-50 text-blue-800'
        };

        const toast = document.createElement('div');

        toast.className =
            'pointer-events-auto flex items-center gap-3 rounded-xl border ' +
            'px-4 py-3 shadow-lg ' +
            (styles[type] || styles.info);

        const icon = document.createElement('span');

        icon.className =
            'flex h-8 w-8 shrink-0 items-center justify-center ' +
            'rounded-full bg-white text-lg font-bold';

        icon.textContent =
            type === 'success' ? '✓' :
            type === 'error' ? '!' : 'i';

        const content = document.createElement('div');
        content.className = 'min-w-0 flex-1';

        const title = document.createElement('p');
        title.className = 'text-sm font-semibold';

        title.textContent =
            type === 'success' ? 'Success' :
            type === 'error' ? 'Save failed' : 'Please wait';

        const text = document.createElement('p');
        text.className = 'break-words text-sm';
        text.textContent = String(message);

        const closeButton = document.createElement('button');

        closeButton.type = 'button';
        closeButton.className =
            'shrink-0 rounded px-2 py-1 text-xl opacity-60 hover:opacity-100';

        closeButton.setAttribute('aria-label', 'Close notification');
        closeButton.textContent = '×';

        function dismiss() {
            clearTimeout(toastTimer);
            toast.remove();
        }

        closeButton.addEventListener('click', dismiss);

        content.append(title, text);
        toast.append(icon, content, closeButton);
        container.appendChild(toast);

        if (duration > 0) {
            toastTimer = setTimeout(dismiss, duration);
        }
    }

    function showStatus(message, type = 'info') {
        const styles = {
            info: 'bg-blue-100 text-blue-800',
            danger: 'bg-red-100 text-red-800'
        };

        $status
            .attr(
                'class',
                'rounded-md px-3 py-2 text-sm font-medium ' +
                (styles[type] || styles.info)
            )
            .attr('data-type', type)
            .text(message);
    }

    function showSaveError(message) {
        showStatus(message, 'danger');
        showToast(message, 'error', 5000);
    }

    function clearFieldError(field) {
        $(field)
            .removeClass('has-error border-red-500 ring-1 ring-red-500')
            .removeAttr('aria-invalid')
            .siblings('.field-error, .help-block')
            .remove();

        if (
            !$form.find('.field-error, .help-block').length &&
            $status.attr('data-type') === 'danger'
        ) {
            $status.addClass('hidden');
        }
    }

    function clearAllErrors() {
        $form.find('.field-error, .help-block').remove();

        $form.find('.form-input')
            .removeClass('has-error border-red-500 ring-1 ring-red-500')
            .removeAttr('aria-invalid');
    }

    function showValidationErrors(errors) {
        clearAllErrors();

        Object.entries(errors).forEach(function ([name, messages]) {
            const $fields = $form.find('[name]').filter(function () {
                return this.name === name;
            });

            if (!$fields.length) return;

            $fields
                .addClass('has-error border-red-500 ring-1 ring-red-500')
                .attr('aria-invalid', 'true');

            $('<p>')
                .addClass('field-error mt-1 text-xs text-red-600')
                .text(Array.isArray(messages) ? messages[0] : messages)
                .insertAfter($fields.last());
        });
    }

    function scheduleSave(delay = 1200) {
        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(function () {
            saveForm(false);
        }, delay);
    }

    function saveForm(isManual = false) {
        clearTimeout(debounceTimer);

        if (isManual) {
            pendingManualSave = true;
        }

        if (isSaving || cityLoading) return;

        // Do not submit an incomplete city selection after a loading failure.
        if (cityLoadFailed) {
            if (pendingManualSave) {
                showSaveError('Please select the state again to load cities before saving.');
            }

            pendingManualSave = false;
            return;
        }

        const manual = pendingManualSave;
        const snapshot = $form.serialize();

        if (!manual && snapshot === lastSnapshot) return;

        pendingManualSave = false;
        isSaving = true;

        $saveButton.prop('disabled', true).addClass('opacity-60');
        $buttonText.text('Saving...');

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
                const unchanged = $form.serialize() === snapshot;

                if (!response || response.status !== true) {
                    if (unchanged) {
                        if (response && response.errors) {
                            showValidationErrors(response.errors);
                        }

                        showSaveError(
                            response && response.msg
                                ? response.msg
                                : 'Profile could not be saved.'
                        );
                    }

                    return;
                }

                lastSnapshot = snapshot;

                if (unchanged) {
                    clearAllErrors();
                    $status.addClass('hidden');

                    showToast(
                        response.msg ||
                        (manual
                            ? 'Profile saved successfully.'
                            : 'Your changes have been saved automatically.'),
                        'success',
                        3000
                    );
                }
            },

            error: function (xhr, textStatus) {
                const response = xhr.responseJSON || {};
                const unchanged = $form.serialize() === snapshot;

                if (xhr.status === 422) {
                    if (unchanged) {
                        showValidationErrors(response.errors || {});

                        showSaveError(
                            'Please correct the highlighted fields.'
                        );
                    }

                    return;
                }

                if (xhr.status === 419) {
                    showSaveError(
                        'Session expired. Refresh the page and try again.'
                    );
                } else if (xhr.status === 401 || xhr.status === 403) {
                    showSaveError(
                        'You are not authorized to save this profile.'
                    );
                } else if (textStatus === 'parsererror') {
                    showSaveError(
                        'The server did not return valid JSON. Check the controller response.'
                    );
                } else if (textStatus === 'timeout') {
                    showSaveError(
                        'The save request timed out. Click Save Profile to retry.'
                    );
                } else {
                    showSaveError(
                        response.message ||
                        'Save failed. Check your connection and click Save Profile.'
                    );
                }
            },

            complete: function () {
                // Release the lock even after validation or server errors.
                isSaving = false;

                $saveButton.prop('disabled', false).removeClass('opacity-60');
                $buttonText.text('Save Profile');

                if (pendingManualSave) {
                    saveForm(true);
                } else if ($form.serialize() !== snapshot) {
                    // Save edits made while the previous request was running.
                    scheduleSave(300);
                }
            }
        });
    }

    function loadCities(stateId, selectedCity = '', initializing = false) {
        const version = ++cityRequestVersion;

        clearTimeout(debounceTimer);

        if (cityRequest) {
            cityRequest.abort();
            cityRequest = null;
        }

        cityLoading = true;
        cityLoadFailed = false;

        $('#cityLoadError').addClass('hidden').text('');

        $city
            .prop('disabled', true)
            .empty()
            .append(new Option(
                stateId ? 'Loading cities...' : 'Select City',
                ''
            ));

        if (!stateId) {
            finishCityLoad();
            return;
        }

        cityRequest = $.ajax({
            type: 'POST',
            url: @json(route('business.cities.ajax')),
            data: {
                sid: stateId,
                cid: selectedCity
            },
            dataType: 'html',
            timeout: 30000,
            headers: {
                'X-CSRF-TOKEN': token
            },

            success: function (html) {
                if (version !== cityRequestVersion) return;

                // The cities endpoint must return <option> elements.
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
                if (status === 'abort' || version !== cityRequestVersion) return;

                cityLoadFailed = true;

                $city.empty().append(new Option('Select City', ''));

                if (initializing && selectedCity) {
                    $city.append(
                        new Option(
                            'Current city',
                            String(selectedCity),
                            true,
                            true
                        )
                    );
                }

                $('#cityLoadError')
                    .text('Cities could not be loaded. Select the state again to retry.')
                    .removeClass('hidden');
            },

            complete: function () {
                if (version !== cityRequestVersion) return;

                cityRequest = null;
                finishCityLoad();
            }
        });

        function finishCityLoad() {
            if (version !== cityRequestVersion) return;

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

    // Delegated events continue working after city options are replaced.
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

    $form.on(
        'blur',
        'input.auto-save-field, textarea.auto-save-field',
        function () {
            scheduleSave(300);
        }
    );

    $form.on('submit', function (event) {
        event.preventDefault();
        saveForm(true);
    });

    loadCities($('#state').val(), initialCity, true);
});
</script>
@endsection