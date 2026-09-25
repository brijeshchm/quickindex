<x-layouts.sales.app
    :title="($isCreating ? 'Add vendor' : 'Edit '.$vendor->business_name).' · Vendorflow'"
    header="Vendor editor"
>

@php

    /*
    |--------------------------------------------------------------------------
    | Sidebar Sections
    |--------------------------------------------------------------------------
    */

    $sections = [
        'personal-details'      => 'Personal Details',
        'business-information'  => 'Business Information',
        'business-meta'         => 'Business Meta',
        'business-overview'     => 'Business Overview',
        'faqs'                  => 'FAQs',
        'business-location'     => 'Business Location',
        'company-logo'          => 'Company Logo',
        'gallery'               => 'Gallery',
        'certificates'          => 'Certificates',
        'awards'                => 'Awards',
        'recent-activity'       => 'Recent Activity',
        'assigned-keywords'     => 'Assigned Keywords',
        'account-settings'      => 'Account Settings',
        'leads'                 => 'Leads',
        'discussion'            => 'Discussion',
        'payment-orders'        => 'Payment Orders',
    ];

    /*
    |--------------------------------------------------------------------------
    | Default Active Tab
    |--------------------------------------------------------------------------
    */

    $activeSection = request('section', 'personal-details');

@endphp

<style>

[x-cloak] {
    display: none !important;
}


/*
|--------------------------------------------------------------------------
| Mobile horizontal tabs
|--------------------------------------------------------------------------
*/

.editor-tabs-scroll,
.vendor-tabs-scroll {
    width: 100%;
    max-width: 100%;

    overflow-x: auto !important;
    overflow-y: hidden !important;

    -webkit-overflow-scrolling: touch;

    scrollbar-width: none;

    scroll-behavior: smooth;

    touch-action: pan-x;
}

.editor-tabs-scroll::-webkit-scrollbar,
.vendor-tabs-scroll::-webkit-scrollbar {
    display: none;
}


/*
|--------------------------------------------------------------------------
| Inputs
|--------------------------------------------------------------------------
*/

.vendor-input {
    display: block;

    width: 100%;
    min-width: 0;

    height: 44px;

    margin-top: 8px;

    padding: 0 12px;

    border: 1px solid #dfe7ec;

    border-radius: 8px;

    background: #fff;

    color: #243746;

    font-size: 16px;

    outline: none;
}

.vendor-input:focus {
    border-color: #315b80;

    box-shadow:
        0 0 0 4px
        rgba(49, 91, 128, 0.10);
}


.vendor-textarea {
    display: block;

    width: 100%;
    min-width: 0;

    margin-top: 8px;

    padding: 12px;

    border: 1px solid #dfe7ec;

    border-radius: 8px;

    background: #fff;

    color: #243746;

    font-size: 16px;

    line-height: 1.5;

    resize: vertical;

    outline: none;
}

.vendor-textarea:focus {
    border-color: #315b80;

    box-shadow:
        0 0 0 4px
        rgba(49, 91, 128, 0.10);
}


@media (min-width: 640px) {

    .vendor-input,
    .vendor-textarea {
        font-size: 14px;
    }

}

</style>
<div
    x-data="vendorEditor()"
    class="w-full min-w-0 space-y-4 px-3 sm:px-4 lg:px-0"
>

    {{-- PAGE HEADER --}}
    <div class="flex min-w-0 flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

        <div class="min-w-0">

            <a
                href="{{ route('sales.vendors.index') }}"
                class="text-xs font-semibold text-[#315b80] hover:underline"
            >
                ← Back to vendors
            </a>

            <h1
                class="mt-3 font-display text-2xl font-semibold tracking-[-0.04em]"
            >
                {{ $isCreating ? 'Add vendor' : $vendor->business_name }}
            </h1>

            <p class="mt-1 text-sm text-[#718394]">

                {{ $isCreating
                    ? 'Create a vendor profile for review.'
                    : 'Keep this profile, its activity, and its account health current.'
                }}

            </p>

        </div>


       @if (!$isCreating)

        <div class="flex shrink-0">

            <span
                class="
                    rounded-full
                    bg-[#e4f4eb]
                    px-3 py-1.5
                    text-xs
                    font-semibold
                    text-[#26734b]
                "
            >
                {{ ucfirst($vendor->status) }}
            </span>

        </div>

    @endif

    </div>


    {{-- VENDOR TOP TABS --}}
    @if(!$isCreating)

    

 

    <div
        data-vendor-tabs
        data-current-id="{{ $vendor->id }}"
        data-vendors='@json($tabVendors)'
        class="
            vendor-tabs-scroll
            flex
            max-w-full
            gap-2
            overflow-x-auto
            overscroll-x-contain
            pb-2
        "
    ></div>
 

    @endif

<div
    class="
        grid
        w-full
        min-w-0
        grid-cols-1
        gap-4
        overflow-hidden

        lg:grid-cols-[230px_minmax(0,1fr)]
        lg:gap-5
    "
> 

    


        {{-- ====================================================== --}}
        {{-- LEFT SIDEBAR --}}
        {{-- ====================================================== --}}

   
<aside
    class="
        w-full
        min-w-0
        max-w-full
        overflow-hidden
        rounded-xl
        border border-[#dfe7ec]
        bg-white
        p-2
        shadow-[0_5px_18px_rgba(18,38,58,0.035)]

        sm:rounded-2xl
        sm:p-3

        lg:sticky
         
        lg:h-fit
    "
>
    <p
        class="
            mb-2
            hidden
            px-2
            text-[10px]
            font-semibold
            uppercase
            tracking-[0.12em]
            text-[#9aa9b5]

            lg:block
        "
    >
        Editor sections
    </p>

    <div
        x-ref="editorTabs"
        class="
            editor-tabs-scroll
            flex
            w-full
            min-w-0
            max-w-full
            touch-pan-x
            gap-2
            overflow-x-auto
            overflow-y-hidden
            overscroll-x-contain
            scroll-smooth
            pb-2

            lg:block
            lg:overflow-visible
            lg:pb-0
        "
    >
        @foreach ($sections as $key => $section)

            <button
                type="button"

                @click="openSection('{{ $key }}', $event)"

                class="
                    mb-0
                    inline-flex
                    min-h-10
                    flex-none
                    shrink-0
                    items-center
                    justify-center
                    whitespace-nowrap
                    rounded-lg
                    px-3
                    py-2
                    text-xs
                    font-medium
                    transition

                    lg:mb-1
                    lg:flex
                    lg:w-full
                    lg:justify-start
                    lg:px-2.5
                    lg:text-left
                "

                :class="
                    activeSection === '{{ $key }}'
                        ? 'bg-[#315b80] text-white shadow-sm'
                        : 'text-[#718394] hover:bg-[#e9f2f7] hover:text-[#315b80]'
                "
            >
                {{ $section }}
            </button>

        @endforeach
    </div>
</aside>


     
        


            {{-- ================================================== --}}
            {{-- PERSONAL DETAILS --}}
            {{-- ================================================== --}}

            <section
                x-show="activeSection === 'personal-details'"
                x-cloak
            >
 

            <form
                id="vendorEditorForm"
                method="POST"
                action="{{ $isCreating
                    ? route('sales.vendors.store')
                    : route('sales.vendors.update', $vendor)
                }}"
                class="
                    w-full
                    min-w-0
                    max-w-full
                    overflow-hidden
                    rounded-xl
                    border border-[#dfe7ec]
                    bg-white
                    shadow-[0_5px_18px_rgba(18,38,58,0.035)]

                    sm:rounded-2xl
                ">

            @csrf
                
                            
                        


            @php
                $person = $vendor ?? null;
                $vendorRecord = $vendor ?? null;

                $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
                $labelClass = 'block text-sm font-semibold text-slate-700';

                $selectedState = old('personal_state', $person?->personal_state_id);
                $selectedCity = old('personal_city', $person?->personal_city_id);
                $selectedZone = old('personal_zone', $person?->personal_zone_id);
            @endphp

            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="border-b border-slate-200 px-5 py-4 sm:px-7">
                    <h2 class="text-lg font-bold text-slate-900">Personal & contact details</h2>
                    <p class="mt-1 text-sm text-slate-500">Fields marked * are required.</p>
                </div>

                <div class="grid grid-cols-1 gap-x-5 gap-y-5 p-5 sm:grid-cols-2 sm:p-7">
                    {{-- Title --}}
                    <div>
                        <label for="sirName" class="{{ $labelClass }}">Title *</label>
                        <select id="sirName" name="sirName" required class="{{ $inputClass }}">
                            <option value="">Select title</option>
                            @foreach(['Ms', 'Mr', 'Mrs'] as $title)
                                <option value="{{ $title }}"
                                    @selected(old('sirName', $person?->sirName) === $title)>
                                    {{ $title }}
                                </option>
                            @endforeach
                        </select>
                        @error('sirName') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- First name --}}
                    <div>
                        <label for="first_name" class="{{ $labelClass }}">First name *</label>
                        <input id="first_name" type="text" name="first_name" required
                            value="{{ old('first_name', $person?->first_name) }}"
                            placeholder="Enter first name" class="{{ $inputClass }}">
                        @error('first_name') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Middle name --}}
                    <div>
                        <label for="middle_name" class="{{ $labelClass }}">Middle name</label>
                        <input id="middle_name" type="text" name="middle_name"
                            value="{{ old('middle_name', $person?->middle_name) }}"
                            placeholder="Enter middle name" class="{{ $inputClass }}">
                    </div>

                    {{-- Last name --}}
                    <div>
                        <label for="last_name" class="{{ $labelClass }}">Last name</label>
                        <input id="last_name" type="text" name="last_name"
                            value="{{ old('last_name', $person?->last_name) }}"
                            placeholder="Enter last name" class="{{ $inputClass }}">
                    </div>

                    {{-- Date of birth --}}
                    <div>
                        <label for="dob" class="{{ $labelClass }}">Date of birth *</label>
                        <input id="dob" type="date" name="dob" required
                            value="{{ old('dob', $person?->dob ? \Illuminate\Support\Carbon::parse($person->dob)->format('Y-m-d') : '') }}"
                            class="{{ $inputClass }}">
                        @error('dob') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Personal email --}}
                    <div>
                        <label for="personal_email" class="{{ $labelClass }}">Personal email *</label>
                        <input id="personal_email" type="email" name="personal_email" required
                            value="{{ old('personal_email', $person?->personal_email) }}"
                            placeholder="Enter email" class="{{ $inputClass }}">
                        @error('personal_email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Marital status --}}
                    <div>
                        <label for="marital" class="{{ $labelClass }}">Marital status *</label>
                        <select id="marital" name="marital" required class="{{ $inputClass }}">
                            <option value="">Select status</option>
                            @foreach(['Single', 'Married', 'Widowed', 'Divorced'] as $status)
                                <option value="{{ $status }}"
                                    @selected(old('marital', $person?->marital) === $status)>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                        @error('marital') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Personal mobile --}}
                    <div>
                        <label for="personal_phone" class="{{ $labelClass }}">Personal mobile *</label>
                        <input id="personal_phone" type="tel" name="personal_phone" required
                            inputmode="numeric" maxlength="10"
                            value="{{ old('personal_phone', $person?->personal_phone) }}"
                            placeholder="10-digit mobile number" class="{{ $inputClass }}">
                        @error('personal_phone') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Country --}}
                    <div>
                        <label for="country" class="{{ $labelClass }}">Country</label>
                        <select id="country" name="country" class="{{ $inputClass }}">
                            <option value="101" @selected((string) old('country', $person?->country ?? '101') === '101')>
                                India
                            </option>
                        </select>
                    </div>

                    {{-- State --}}
                    <div>
                        <label for="personal_state" class="{{ $labelClass }}">State</label>
                        <select id="personal_state" name="personal_state"
                                onchange="per_select_city(this.value)"
                                class="{{ $inputClass }} select2-single-state">
                            <option value="">Select state</option>
                            @foreach(($statesis ?? []) as $state)
                                <option value="{{ $state->id }}"
                                    @selected((string) $selectedState === (string) $state->id)>
                                    {{ $state->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- City: populated by your existing per_select_city() --}}
                    <div>
                        <label for="personal_city" class="{{ $labelClass }}">City</label>
                        <select id="personal_city" name="personal_city"
                                data-selected="{{ $selectedCity }}"
                                onchange="per_select_zone(this.value)"
                                class="{{ $inputClass }} show_cityList">
                            <option value="">Select city</option>
                        </select>
                    </div>

                    {{-- Zone: populated by your existing per_select_zone() --}}
                    <div>
                        <label for="personal_zone" class="{{ $labelClass }}">Zone</label>
                        <select id="personal_zone" name="personal_zone"
                                data-selected="{{ $selectedZone }}"
                                class="{{ $inputClass }} show_zoneList">
                            <option value="">Select zone</option>
                        </select>
                    </div>

                    {{-- Area --}}
                    <div>
                        <label for="personal_area" class="{{ $labelClass }}">Area</label>
                        <input id="personal_area" type="text" name="personal_area"
                            value="{{ old('personal_area', $person?->personal_area) }}"
                            placeholder="Enter area" class="{{ $inputClass }}">
                    </div>

                    {{-- Pincode --}}
                    <div>
                        <label for="personal_pincode" class="{{ $labelClass }}">Pincode</label>
                        <input id="personal_pincode" type="text" name="personal_pincode"
                            inputmode="numeric" maxlength="6"
                            value="{{ old('personal_pincode', $person?->personal_pincode) }}"
                            placeholder="6-digit pincode" class="{{ $inputClass }}">
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label for="gender" class="{{ $labelClass }}">Gender</label>
                        <select id="gender" name="gender" class="{{ $inputClass }}">
                            <option value="">Select gender</option>
                            @foreach(['Male', 'Female', 'Other'] as $gender)
                                <option value="{{ $gender }}"
                                    @selected(old('gender', $person?->gender) === $gender)>
                                    {{ $gender }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Address --}}
                    <div class="sm:col-span-2">
                        <label for="personal_address" class="{{ $labelClass }}">Address</label>
                        <textarea id="personal_address" name="personal_address" rows="3"
                                placeholder="Enter personal address"
                                class="{{ $inputClass }}">{{ old('personal_address', $person?->personal_address) }}</textarea>
                    </div>

                    {{-- Vendor contact fields --}}
                    <div class="sm:col-span-2 border-t border-slate-200 pt-5">
                        <h3 class="font-bold text-slate-900">Vendor contact</h3>
                    </div>

                    
                    </div>
            </div>


                        


                <div
                class="
                    flex
                    flex-col-reverse
                    gap-2
                    border-t
                    border-[#edf1f3]
                    p-5

                    sm:flex-row
                    sm:justify-end
                    sm:p-7
                "
            >

               


                <button
                    type="submit"
                    class="
                        h-11
                        rounded-lg
                        bg-[#243746]
                        px-5
                        text-sm
                        font-semibold
                        text-white
                        transition
                        hover:bg-[#8f433d]
                    "
                >

                    {{ $isCreating ? 'Save Next' : 'Save Next' }}

                </button>

            </div>

                </form>
            </section>



            {{-- ================================================== --}}
            {{-- BUSINESS INFORMATION --}}
            {{-- ================================================== --}}

            <section
                x-show="activeSection === 'business-information'"
                x-cloak
            >
                
  
   @php
    $vendor = $vendor ?? null;

    $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
    $labelClass = 'block text-sm font-semibold text-slate-700';

    $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

    $times = [
        '' => 'Select time',
        '24:00' => 'Open 24 Hrs',
        '00:00' => 'Closed',
    ];

    for ($hour = 0; $hour < 24; $hour++) {
        foreach (['00', '30'] as $minute) {
            $slot = sprintf('%02d:%s', $hour, $minute);
            $times[$slot] = $slot;
        }
    }

    $savedTime = json_decode($vendor?->time ?? '{}', true);
    $savedTime = is_array($savedTime) ? $savedTime : [];

    $selectedState = old('state', $vendor?->state_id);
    $selectedCity = old('city', $vendor?->city_id);
    $selectedZone = old('zone', $vendor?->zone_id);

    $displayHours = (string) old(
        'display_hofo',
        $vendor?->display_hofo ?? '0'
    );
@endphp

<form
    action=""
    method="POST"
    onsubmit="return ClientController.ediSaveBusinessInfo(this, @js($vendor?->id))"
    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
>
    @csrf

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business information</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add your business contact details, location and opening hours.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-x-5 gap-y-5 p-5 sm:grid-cols-2 sm:p-7">
        {{-- Business name --}}
        <div>
            <label for="business_name" class="{{ $labelClass }}">Business name</label>
            <input
                id="business_name"
                name="business_name"
                type="text"
                value="{{ old('business_name', $vendor?->business_name) }}"
                placeholder="Enter business name"
                class="{{ $fieldClass }}"
            >
            @error('business_name')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Business slug --}}
        <div>
            <label for="business_slug" class="{{ $labelClass }}">Business slug</label>
            <input
                id="business_slug"
                name="business_slug"
                type="text"
                value="{{ old('business_slug', $vendor?->business_slug) }}"
                placeholder="Enter business slug"
                class="{{ $fieldClass }}"
            >
            @error('business_slug')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label for="business_email" class="{{ $labelClass }}">
                Email <span class="text-red-600">*</span>
            </label>
            <input
                id="business_email"
                name="email"
                type="email"
                required
                value="{{ old('email', $vendor?->email) }}"
                placeholder="Enter email address"
                class="{{ $fieldClass }}"
            >
            @error('email')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Mobile --}}
        <div>
            <label for="mobile" class="{{ $labelClass }}">
                Primary mobile <span class="text-red-600">*</span>
            </label>
            <input
                id="mobile"
                name="mobile"
                type="tel"
                inputmode="numeric"
                required
                value="{{ old('mobile', $vendor?->mobile) }}"
                placeholder="Enter primary mobile number"
                class="{{ $fieldClass }}"
            >
            @error('mobile')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- WhatsApp --}}
        <div>
            <label for="whatsapp" class="{{ $labelClass }}">WhatsApp</label>
            <input
                id="whatsapp"
                name="whatsapp"
                type="tel"
                inputmode="numeric"
                value="{{ old('whatsapp', $vendor?->whatsapp) }}"
                placeholder="Enter WhatsApp number"
                class="{{ $fieldClass }}"
            >
        </div>

        {{-- Country --}}
        <div>
            <label for="country" class="{{ $labelClass }}">Country</label>
            <select id="country" name="country" class="{{ $fieldClass }}">
                <option
                    value="101"
                    @selected((string) old('country', $vendor?->country ?? '101') === '101')
                >
                    India
                </option>
            </select>
        </div>

        {{-- State --}}
        <div>
            <label for="state" class="{{ $labelClass }}">State</label>
            <select
                id="state"
                name="state"
                onchange="select_city(this.value)"
                class="{{ $fieldClass }} select2-single-state state"
            >
                <option value="">Select state</option>

                @foreach(($statesis ?? []) as $state)
                    <option
                        value="{{ $state->id }}"
                        @selected((string) $selectedState === (string) $state->id)
                    >
                        {{ $state->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- City --}}
        <div>
            <label for="city" class="{{ $labelClass }}">City</label>
            <select
                id="city"
                name="city"
                data-selected="{{ $selectedCity }}"
                onchange="select_zone(this.value)"
                class="{{ $fieldClass }} city-form select_cityList"
            >
                <option value="">Select city</option>

                @if($selectedCity && $vendor?->city)
                    <option value="{{ $selectedCity }}" selected>
                        {{ $vendor->city }}
                    </option>
                @endif
            </select>
        </div>

        {{-- Zone --}}
        <div>
            <label for="zone" class="{{ $labelClass }}">Zone</label>
            <select
                id="zone"
                name="zone"
                data-selected="{{ $selectedZone }}"
                class="{{ $fieldClass }} select_zoneList search_zone"
            >
                <option value="">Select zone</option>
            </select>
        </div>

        {{-- Area --}}
        <div>
            <label for="area" class="{{ $labelClass }}">Area</label>
            <input
                id="area"
                name="area"
                type="text"
                value="{{ old('area', $vendor?->area) }}"
                placeholder="Enter area"
                class="{{ $fieldClass }}"
            >
        </div>

        {{-- Pincode --}}
        <div>
            <label for="pincode" class="{{ $labelClass }}">Pincode</label>
            <input
                id="pincode"
                name="pincode"
                type="text"
                inputmode="numeric"
                maxlength="6"
                value="{{ old('pincode', $vendor?->pincode) }}"
                placeholder="Enter pincode"
                class="{{ $fieldClass }}"
            >
        </div>

        {{-- Landmark --}}
        <div>
            <label for="landmark" class="{{ $labelClass }}">Landmark</label>
            <input
                id="landmark"
                name="landmark"
                type="text"
                value="{{ old('landmark', $vendor?->landmark) }}"
                placeholder="Enter nearby landmark"
                class="{{ $fieldClass }}"
            >
        </div>

        {{-- Address --}}
        <div class="sm:col-span-2">
            <label for="address" class="{{ $labelClass }}">Address</label>
            <textarea
                id="address"
                name="address"
                rows="3"
                placeholder="Enter business address"
                class="{{ $fieldClass }}"
            >{{ old('address', $vendor?->address) }}</textarea>
        </div>

        {{-- Google Map --}}
        <div>
            <label for="business_map" class="{{ $labelClass }}">Google Map link</label>
            <input
                id="business_map"
                name="business_map"
                type="url"
                value="{{ old('business_map', $vendor?->business_map) }}"
                placeholder="https://maps.google.com/..."
                class="{{ $fieldClass }}"
            >
        </div>

        {{-- Website --}}
        <div>
            <label for="website" class="{{ $labelClass }}">Website</label>
            <input
                id="website"
                name="website"
                type="url"
                value="{{ old('website', $vendor?->website) }}"
                placeholder="https://example.com"
                class="{{ $fieldClass }}"
            >
        </div>
    </div>

    {{-- Opening hours --}}
    <div class="border-t border-slate-200 px-5 py-6 sm:px-7">
        <h3 class="text-base font-bold text-slate-900">Hours of operation</h3>
        <p class="mt-1 text-sm text-slate-500">
            Choose opening and closing times for each day.
        </p>

        <div class="mt-5 space-y-3">
            @foreach($days as $day)
                <div class="grid grid-cols-1 gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3 sm:grid-cols-[110px_minmax(0,1fr)_minmax(0,1fr)] sm:items-end sm:p-4">
                    <div class="text-sm font-semibold text-slate-800 sm:pb-3">
                        {{ ucfirst($day) }}
                    </div>

                    <div>
                        <label for="{{ $day }}_from" class="{{ $labelClass }}">From</label>
                        <select
                            id="{{ $day }}_from"
                            name="time[{{ $day }}][from]"
                            class="{{ $fieldClass }} time-from"
                        >
                            @foreach($times as $value => $label)
                                <option
                                    value="{{ $value }}"
                                    @selected((string) old("time.$day.from", data_get($savedTime, "$day.from", '')) === (string) $value)
                                >
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="{{ $day }}_to" class="{{ $labelClass }}">To</label>
                        <select
                            id="{{ $day }}_to"
                            name="time[{{ $day }}][to]"
                            class="{{ $fieldClass }} time-to"
                        >
                            @foreach($times as $value => $label)
                                <option
                                    value="{{ $value }}"
                                    @selected((string) old("time.$day.to", data_get($savedTime, "$day.to", '')) === (string) $value)
                                >
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Show/hide hours --}}
        <fieldset class="mt-6">
            <legend class="{{ $labelClass }}">Display hours on business profile?</legend>

            <div class="mt-3 flex flex-col gap-3 sm:flex-row sm:gap-6">
                <label class="inline-flex cursor-pointer items-center gap-2 text-sm text-slate-700">
                    <input
                        type="radio"
                        name="display_hofo"
                        value="1"
                        @checked($displayHours === '1')
                        class="h-4 w-4 border-slate-300 text-blue-600 focus:ring-blue-500"
                    >
                    Display hours
                </label>

                <label class="inline-flex cursor-pointer items-center gap-2 text-sm text-slate-700">
                    <input
                        type="radio"
                        name="display_hofo"
                        value="0"
                        @checked($displayHours === '0')
                        class="h-4 w-4 border-slate-300 text-blue-600 focus:ring-blue-500"
                    >
                    Do not display hours
                </label>
            </div>
        </fieldset>
    </div>

    <input type="hidden" name="contact_info" value="contact_info">

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save business information
        </button>
    </div>
</form>
            
            </section>



            {{-- ================================================== --}}
            {{-- BUSINESS META --}}
            {{-- ================================================== --}}

            <section
                x-show="activeSection === 'business-meta'"
                x-cloak
            >
@php
     

    $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
    $labelClass = 'block text-sm font-semibold text-slate-700';
@endphp

<form
    method="POST"
    action=""
    onsubmit="return ClientController.ediSaveBusinessMeta(this, @js($vendor?->id))"
    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
>
    @csrf

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business SEO & introduction</h2>
        <p class="mt-1 text-sm text-slate-500">
            Update the heading and description shown on your business page.
        </p>
    </div>

    <div class="space-y-5 p-5 sm:p-7">
        {{-- Meta title --}}
        <div>
            <label for="meta_title" class="{{ $labelClass }}">Meta title</label>
            <textarea
                id="meta_title"
                name="meta_title"
                rows="2"
                placeholder="Enter meta title"
                class="{{ $inputClass }}"
            >{{ old('meta_title', $vendor?->meta_title) }}</textarea>

            @error('meta_title')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- H1 heading --}}
        <div>
            <label for="h1_heading" class="{{ $labelClass }}">H1 heading</label>
            <input
                id="h1_heading"
                name="h1_heading"
                type="text"
                value="{{ old('h1_heading', $vendor?->h1_heading) }}"
                placeholder="Enter page heading"
                class="{{ $inputClass }}"
            >

            @error('h1_heading')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Meta description --}}
        <div>
            <label for="meta_description" class="{{ $labelClass }}">Meta description</label>
            <textarea
                id="meta_description"
                name="meta_description"
                rows="3"
                placeholder="Enter meta description"
                class="{{ $inputClass }}"
            >{{ old('meta_description', $vendor?->meta_description) }}</textarea>

            @error('meta_description')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Business introduction --}}
        <div>
            <label for="business_intro" class="{{ $labelClass }}">Business introduction</label>
            <textarea
                id="business_intro"
                name="business_intro"
                rows="8"
                placeholder="Describe the business, services and experience"
                class="{{ $inputClass }}"
            >{{ old('business_intro', $vendor?->business_intro) }}</textarea>

            @error('business_intro')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <input type="hidden" name="business_meta" value="business_meta">

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save changes
        </button>
    </div>
</form>
              
            </section>



            {{-- ================================================== --}}
            {{-- BUSINESS OVERVIEW --}}
            {{-- ================================================== --}}

            <section
                x-show="activeSection === 'business-overview'"
                x-cloak
            >

              @php
     

    $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
@endphp

<form
    action=""
    method="POST"
    onsubmit="return ClientController.ediSaveBusinessOverView(this, @js($vendor?->id))"
    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
>
    @csrf

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business overview</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add a short summary and a detailed description of your business.
        </p>
    </div>

    <div class="space-y-6 p-5 sm:p-7">
        {{-- Short description --}}
        <div>
            <div class="flex items-center justify-between gap-3">
                <label for="business_description"
                       class="text-sm font-semibold text-slate-700">
                    Short description
                </label>
                <span id="description-count" class="text-xs text-slate-500">
                    0/350
                </span>
            </div>

            <textarea
                id="business_description"
                name="business_description"
                rows="4"
                maxlength="350"
                placeholder="Briefly describe your business"
                oninput="updateDescriptionCount(this)"
                class="{{ $fieldClass }}"
            >{{ old('business_description', $vendor?->business_description) }}</textarea>

            @error('business_description')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Business overview --}}
        <div>
            <label for="business_overview"
                   class="block text-sm font-semibold text-slate-700">
                Business overview
            </label>

            <textarea
                id="business_overview"
                name="business_overview"
                rows="10"
                placeholder="Describe your services, experience and what makes your business different"
                class="{{ $fieldClass }}"
            >{{ old('business_overview', $vendor?->business_overview) }}</textarea>

            @error('business_overview')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <input type="hidden" name="business_overView" value="business_overView">

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save changes
        </button>
    </div>
</form>

<script>
    function updateDescriptionCount(textarea) {
        const counter = document.getElementById('description-count');
        if (counter) {
            counter.textContent = `${textarea.value.length}/350`;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const description = document.getElementById('business_description');
        if (description) updateDescriptionCount(description);
    });
</script>
 

            </section>



            {{-- ================================================== --}}
            {{-- BUSINESS LOCATION --}}
            {{-- ================================================== --}}

            <section
                x-show="activeSection === 'business-location'"
                x-cloak
            >
@php
    

    $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
    $labelClass = 'block text-sm font-semibold text-slate-700';
@endphp

<div class="space-y-6">
    {{-- Assign zone form --}}
    <form
        id="assignedZone"
        method="POST"
        action="#"
        onsubmit="return assignedZoneController.submit(this, @js($vendor?->id))"
        class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    >
        @csrf

        <input type="hidden" name="client_id" value="{{ $vendor?->id }}">

        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">
            <h2 class="text-lg font-bold text-slate-900">Assign service zone</h2>
            <p class="mt-1 text-sm text-slate-500">
                Select the location where this vendor provides services.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 sm:p-6">
            {{-- Country --}}
            <div>
                <label for="assigned-country" class="{{ $labelClass }}">Country</label>
                <select
                    id="assigned-country"
                    name="country"
                    class="{{ $fieldClass }}"
                >
                    <option value="">Select country</option>
                    <option
                        value="101"
                        @selected((string) old('country', $vendor?->country) === '101')
                    >
                        India
                    </option>
                </select>
            </div>

            {{-- State --}}
            <div>
                <label for="assigned-state" class="{{ $labelClass }}">
                    State <span class="text-red-600">*</span>
                </label>

                <select
                    id="assigned-state"
                    name="state_id"
                    required
                    class="{{ $fieldClass }} select2-single-state"
                >
                    <option value="">Select state</option>

                    @foreach(($statesis ?? []) as $state)
                        <option
                            value="{{ $state->id }}"
                            @selected((string) old('state_id') === (string) $state->id)
                        >
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>

                @error('state_id')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- City --}}
            <div>
                <label for="assigned-city" class="{{ $labelClass }}">City</label>
                <select
                    id="assigned-city"
                    name="cityid"
                    class="{{ $fieldClass }} city-form select2_single"
                >
                    <option value="">Select city</option>
                </select>

                @error('cityid')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Zone --}}
            <div>
                <label for="assigned-zone" class="{{ $labelClass }}">Zone</label>
                <select
                    id="assigned-zone"
                    name="zone_id"
                    class="{{ $fieldClass }}"
                >
                    <option value="">Select zone</option>
                </select>

                @error('zone_id')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Existing JS can insert the "Other zone" input here --}}
            <div class="other-zone sm:col-span-2">
                <div class="show_otherInput"></div>
            </div>
        </div>

        <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-6">
            <button
                type="submit"
                class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
            >
                Assign zone
            </button>
        </div>
    </form>

    {{-- Assigned zones table --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">
            <h2 class="text-lg font-bold text-slate-900">Assigned zones</h2>
        </div>

        <div class="w-full overflow-x-auto">
            <table
                id="datatable-assigned-zones"
                class="w-full min-w-[580px] border-collapse text-left text-sm"
            >
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-600">
                    <tr>
                        <th class="w-12 px-4 py-3">
                            <input
                                id="check-all"
                                type="checkbox"
                                aria-label="Select all zones"
                                class="check-box h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            >
                        </th>
                        <th class="px-4 py-3 font-semibold">City</th>
                        <th class="px-4 py-3 font-semibold">Zone</th>
                        <th class="px-4 py-3 font-semibold">Action</th>
                    </tr>
                </thead>

                {{-- Existing DataTables/AJAX code can populate the rows --}}
                <tbody class="divide-y divide-slate-100"></tbody>
            </table>
        </div>

        <div class="border-t border-slate-200 px-5 py-4 sm:px-6">
            <button
                type="button"
                onclick="assignedZoneController.selectDeleteParmanent()"
                class="inline-flex min-h-10 items-center justify-center rounded-xl bg-red-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
            >
                Delete selected
            </button>
        </div>
    </div>
</div>
             
                

            </section>



         
            





              <section
                x-show="activeSection === 'faqs'"
                x-cloak
            >
        
        @php
    

    $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
@endphp

<form
    action=""
    method="POST"
    onsubmit="return ClientController.ediSaveBusinessFAQ(this, @js($vendor?->id))"
    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
>
    @csrf

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Frequently asked questions</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add up to 10 questions and answers for the business profile.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-5 p-5 lg:grid-cols-2 sm:p-7">
        @for($i = 1; $i <= 10; $i++)
            @php
                $questionField = 'faqq' . $i;
                $answerField = 'faqa' . $i;
            @endphp

            <section class="rounded-xl border border-slate-200 bg-slate-50 p-4 sm:p-5">
                <h3 class="mb-4 text-sm font-bold text-slate-900">
                    FAQ {{ $i }}
                </h3>

                <div class="space-y-4">
                    <div>
                        <label
                            for="{{ $questionField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Question {{ $i }}
                        </label>

                        <input
                            id="{{ $questionField }}"
                            name="{{ $questionField }}"
                            type="text"
                            value="{{ old($questionField, data_get($vendor, $questionField)) }}"
                            placeholder="Enter FAQ question {{ $i }}"
                            class="{{ $fieldClass }}"
                        >

                        @error($questionField)
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            for="{{ $answerField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Answer {{ $i }}
                        </label>

                        <textarea
                            id="{{ $answerField }}"
                            name="{{ $answerField }}"
                            rows="4"
                            placeholder="Enter FAQ answer {{ $i }}"
                            class="{{ $fieldClass }}"
                        >{{ old($answerField, data_get($vendor, $answerField)) }}</textarea>

                        @error($answerField)
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </section>
        @endfor
    </div>

    <input type="hidden" name="business_faq" value="business_faq">

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save FAQs
        </button>
    </div>
</form>
        </section>
        
         



           <section
                x-show="activeSection === 'company-logo'"
                x-cloak
            >

@php
    

    $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
    $labelClass = 'block text-sm font-semibold text-slate-700';

    $logoData = !empty($vendor?->logo)
        ? @unserialize($vendor->logo, ['allowed_classes' => false])
        : [];

    $profileData = !empty($vendor?->profile_pic)
        ? @unserialize($vendor->profile_pic, ['allowed_classes' => false])
        : [];

    $logoData = is_array($logoData) ? $logoData : [];
    $profileData = is_array($profileData) ? $profileData : [];

    $logoPath = data_get($logoData, 'thumbnail.src')
        ?: data_get($logoData, 'large.src');

    $profilePath = data_get($profileData, 'thumbnail.src')
        ?: data_get($profileData, 'large.src');
@endphp

<form
    id="profileLogo"
    class="profile-logo overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    action=""
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    <input type="hidden" name="business_id" value="{{ $vendor?->id }}">
    <input type="hidden" name="upload_pics" value="upload_pics">

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business profile & images</h2>
        <p class="mt-1 text-sm text-slate-500">
            Update business details, logo and profile photo.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-6 p-5 sm:grid-cols-2 sm:p-7">
        {{-- Establishment year --}}
        <div>
            <label for="year_of_estb" class="{{ $labelClass }}">
                Year of establishment
            </label>

            <select
                id="year_of_estb"
                name="year_of_estb"
                class="{{ $fieldClass }}"
            >
                <option value="">Select year</option>

                @for($year = 1970; $year <= now()->year; $year++)
                    <option
                        value="{{ $year }}"
                        @selected((string) old('year_of_estb', $vendor?->year_of_estb) === (string) $year)
                    >
                        {{ $year }}
                    </option>
                @endfor
            </select>

            @error('year_of_estb')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Certifications --}}
        <div>
            <label for="certifications" class="{{ $labelClass }}">
                Certifications
            </label>

            <input
                id="certifications"
                type="text"
                name="certifications"
                value="{{ old('certifications', $vendor?->certifications) }}"
                placeholder="Example: ISO 9001, ISO 14001"
                class="{{ $fieldClass }}"
            >

            <p class="mt-1 text-xs text-slate-500">
                Separate multiple certifications with commas.
            </p>

            @error('certifications')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Logo --}}
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
            <label for="logo" class="{{ $labelClass }}">Business logo</label>

            @if($logoPath)
                <div class="mt-3 flex items-center gap-4">
                    <img
                        src="{{ asset(ltrim($logoPath, '/')) }}"
                        alt="Current business logo"
                        loading="lazy"
                        class="h-20 w-20 rounded-xl border border-slate-200 bg-white object-contain p-1"
                    >

                    @if($vendor?->username)
                        <a
                            href="{{ url('developer/clients/update/profileLogo/logoDel/'.$vendor->username) }}"
                            class="inline-flex items-center rounded-lg border border-red-200 bg-white px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-50"
                        >
                            Remove logo
                        </a>
                    @endif
                </div>
            @endif

            <input
                id="logo"
                type="file"
                name="logo"
                accept=".png,.jpeg,.jpg,.webp,.svg"
                class="mt-4 block w-full rounded-xl border border-slate-300 bg-white text-sm text-slate-700 file:mr-4 file:border-0 file:bg-blue-50 file:px-4 file:py-3 file:font-semibold file:text-blue-700 hover:file:bg-blue-100"
            >

            <p class="mt-2 text-xs text-slate-500">
                {{ $logoPath ? 'Choose a file to replace the current logo.' : 'Choose a logo to upload.' }}
            </p>

            @error('logo')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Profile photo --}}
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
            <label for="profile_pic" class="{{ $labelClass }}">
                Profile photo
            </label>

            @if($profilePath)
                <div class="mt-3 flex items-center gap-4">
                    <img
                        src="{{ asset(ltrim($profilePath, '/')) }}"
                        alt="Current profile photo"
                        loading="lazy"
                        class="h-20 w-20 rounded-xl border border-slate-200 bg-white object-cover"
                    >

                    @if($vendor?->username)
                        <a
                            href="{{ url('developer/clients/update/profileLogo/profilePicDel/'.$vendor->username) }}"
                            class="inline-flex items-center rounded-lg border border-red-200 bg-white px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-50"
                        >
                            Remove photo
                        </a>
                    @endif
                </div>
            @endif

            <input
                id="profile_pic"
                type="file"
                name="profile_pic"
                accept=".png,.jpeg,.jpg,.webp,.svg"
                class="mt-4 block w-full rounded-xl border border-slate-300 bg-white text-sm text-slate-700 file:mr-4 file:border-0 file:bg-blue-50 file:px-4 file:py-3 file:font-semibold file:text-blue-700 hover:file:bg-blue-100"
            >

            <p class="mt-2 text-xs text-slate-500">
                {{ $profilePath ? 'Choose a file to replace the current photo.' : 'Choose a photo to upload.' }}
            </p>

            @error('profile_pic')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 hover:bg-amber-400 sm:w-auto"
        >
            Save changes
        </button>
    </div>
</form>


           </section>


           
           <section
                x-show="activeSection === 'gallery'"
                x-cloak
            >


@php
    $pictures = [];

    if (!empty($vendor?->pictures)) {
        $decoded = @unserialize($vendor->pictures, ['allowed_classes' => false]);
        $pictures = is_array($decoded) ? $decoded : [];
    }
@endphp

<form
    id="uploadGalleryform"
    action=""
    method="POST"
    enctype="multipart/form-data"
    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
>
    @csrf

    <input type="hidden" name="business_id" value="{{ $vendor->id }}">
    <input type="hidden" name="upload_pics" value="upload_pics">

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business gallery</h2>
        <p class="mt-1 text-sm text-slate-500">
            Upload up to 30 business images.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-4 p-5 sm:grid-cols-2 sm:p-7 lg:grid-cols-3">
        @for($i = 0; $i < 30; $i++)
            @php
                $fieldName = 'image' . ($i + 1);
                $imageSrc = data_get($pictures, "$i.large.src");
            @endphp

            <div
                id="{{ $fieldName }}"
                class="rounded-xl border border-slate-200 bg-slate-50 p-4"
            >
                <div class="mb-3 flex items-center justify-between">
                    <label
                        for="gallery-{{ $fieldName }}"
                        class="text-sm font-semibold text-slate-800"
                    >
                        Image {{ $i + 1 }}
                    </label>

                    <span class="text-xs text-slate-500">
                        {{ $imageSrc ? 'Uploaded' : 'Empty' }}
                    </span>
                </div>

                {{-- Keep this wrapper for your existing remove-thumbnail JS --}}
                <span class="img-help block">
                    @if($imageSrc)
                        <img
                            src="{{ asset(ltrim($imageSrc, '/')) }}"
                            alt="Gallery image {{ $i + 1 }}"
                            loading="lazy"
                            class="h-32 w-full rounded-lg border border-slate-200 bg-white object-cover"
                        >

                        <button
                            type="button"
                            class="remove-thumbnail mt-3 inline-flex items-center gap-2 rounded-lg bg-red-50 px-3 py-2 text-xs font-semibold text-red-600 transition hover:bg-red-100"
                            data-srno="{{ $fieldName }}"
                            aria-label="Remove image {{ $i + 1 }}"
                        >
                            <span aria-hidden="true">×</span>
                            Remove image
                        </button>
                    @else
                        <label
                            for="gallery-{{ $fieldName }}"
                            class="flex h-32 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-slate-300 bg-white text-center hover:border-blue-400 hover:bg-blue-50"
                        >
                            <span class="text-2xl text-slate-400">+</span>
                            <span class="mt-1 text-xs font-medium text-slate-600">
                                Choose an image
                            </span>
                        </label>

                        <input
                            id="gallery-{{ $fieldName }}"
                            type="file"
                            name="{{ $fieldName }}"
                            accept=".png,.jpg,.jpeg,.webp,.svg"
                            class="fff mt-3 block w-full text-xs text-slate-600 file:mr-3 file:rounded-lg file:border-0 file:bg-blue-100 file:px-3 file:py-2 file:font-semibold file:text-blue-700 hover:file:bg-blue-200"
                        >
                    @endif
                </span>

                @error($fieldName)
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
        @endfor
    </div>

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save gallery images
        </button>
    </div>
</form>

           </section>


           <section
                x-show="activeSection === 'certificates'"
                x-cloak
            >
@php
    

    $certificates = [
        ['field' => 'pan_certificate',  'number' => 'pan_no',  'label' => 'PAN certificate'],
        ['field' => 'iso_certificate',  'number' => 'iso_no',  'label' => 'ISO certificate'],
        ['field' => 'gst_certificate',  'number' => 'gst_no',  'label' => 'GST certificate'],
        ['field' => 'cin_certificate',  'number' => 'cin_no',  'label' => 'CIN certificate'],
        ['field' => 'msme_certificate', 'number' => 'msme_no', 'label' => 'MSME certificate'],
        ['field' => 'coi_certificate',  'number' => 'coi_no',  'label' => 'Certificate of Incorporation'],
        ['field' => 'other_certificate1', 'number' => null, 'label' => 'Other certificate 1'],
        ['field' => 'other_certificate2', 'number' => null, 'label' => 'Other certificate 2'],
        ['field' => 'other_certificate3', 'number' => null, 'label' => 'Other certificate 3'],
    ];

    $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
@endphp

<form
    id="certificateForm"
    class="certificate_form overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    action=""
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    <input type="hidden" name="business_id" value="{{ $vendor?->id }}">

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business certificates</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add registration details and upload supporting documents.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 sm:p-7 xl:grid-cols-3">
        @foreach($certificates as $certificate)
            @php
                $field = $certificate['field'];
                $numberField = $certificate['number'];

                $fileData = json_decode(data_get($vendor, $field) ?? '{}', true);
                $fileData = is_array($fileData) ? $fileData : [];

                $path = data_get($fileData, 'large.src');
                $fileUrl = $path ? asset(ltrim($path, '/')) : null;
                $isPdf = $path && strtolower(pathinfo($path, PATHINFO_EXTENSION)) === 'pdf';
            @endphp

            <section class="flex flex-col rounded-xl border border-slate-200 bg-slate-50 p-4">
                <h3 class="text-sm font-bold text-slate-900">
                    {{ $certificate['label'] }}
                </h3>

                @if($numberField)
                    <div class="mt-4">
                        <label
                            for="{{ $numberField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            {{ strtoupper(str_replace('_no', '', $numberField)) }} number
                        </label>

                        <input
                            id="{{ $numberField }}"
                            type="text"
                            name="{{ $numberField }}"
                            value="{{ old($numberField, data_get($vendor, $numberField)) }}"
                            placeholder="Enter {{ $certificate['label'] }} number"
                            class="{{ $inputClass }}"
                        >

                        @error($numberField)
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endif

                <div class="mt-4 flex-1">
                    @if($fileUrl)
                        <div class="images-div overflow-hidden rounded-lg border border-slate-200 bg-white">
                            @if($isPdf)
                                <div class="flex h-36 items-center justify-center bg-red-50 text-sm font-bold text-red-700">
                                    PDF document
                                </div>
                            @else
                                <img
                                    src="{{ $fileUrl }}"
                                    alt="{{ $certificate['label'] }}"
                                    loading="lazy"
                                    class="h-36 w-full object-contain"
                                >
                            @endif
                        </div>

                        <div class="mt-3 flex flex-wrap gap-2">
                            <a
                                href="{{ $fileUrl }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center rounded-lg bg-blue-50 px-3 py-2 text-xs font-semibold text-blue-700 hover:bg-blue-100"
                            >
                                View document
                            </a>

                            @if($vendor?->id)
                                <a
                                    href="{{ url('developer/clients/certificate/'.$field.'/'.$vendor->id) }}"
                                    class="inline-flex items-center rounded-lg bg-red-50 px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-100"
                                >
                                    Remove
                                </a>
                            @endif
                        </div>
                    @else
                        <label
                            for="{{ $field }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Upload document
                        </label>

                        <input
                            id="{{ $field }}"
                            type="file"
                            name="{{ $field }}"
                            accept=".jpg,.jpeg,.png,.webp,.pdf"
                            class="mt-2 block w-full rounded-xl border border-slate-300 bg-white text-xs text-slate-700 file:mr-3 file:border-0 file:bg-blue-50 file:px-3 file:py-2.5 file:font-semibold file:text-blue-700 hover:file:bg-blue-100"
                        >
                    @endif

                    @error($field)
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </section>
        @endforeach
    </div>

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 hover:bg-amber-400 sm:w-auto"
        >
            Save certificates
        </button>
    </div>
</form>



           </section>


           <section
                x-show="activeSection === 'awards'"
                x-cloak
            >

@php
     

    $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
@endphp

<form
    id="awardFrom"
    class="award_form overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    action=""
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    <input type="hidden" name="business_id" value="{{ $vendor?->id }}">

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Business awards</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add award names and upload their supporting images or documents.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 sm:p-7 xl:grid-cols-3">
        @for($i = 1; $i <= 9; $i++)
            @php
                $nameField = 'award_name' . $i;
                $imageField = 'award_img' . $i;

                $awardData = json_decode(
                    data_get($vendor, $imageField) ?? '{}',
                    true
                );

                $awardData = is_array($awardData) ? $awardData : [];
                $imagePath = data_get($awardData, 'large.src');
                $imageUrl = $imagePath ? asset(ltrim($imagePath, '/')) : null;
                $isPdf = $imagePath
                    && strtolower(pathinfo($imagePath, PATHINFO_EXTENSION)) === 'pdf';
            @endphp

            <section class="flex flex-col rounded-xl border border-slate-200 bg-slate-50 p-4">
                <h3 class="text-sm font-bold text-slate-900">
                    Award {{ $i }}
                </h3>

                <div class="mt-4">
                    <label
                        for="{{ $nameField }}"
                        class="block text-sm font-semibold text-slate-700"
                    >
                        Award name
                    </label>

                    <input
                        id="{{ $nameField }}"
                        type="text"
                        name="{{ $nameField }}"
                        value="{{ old($nameField, data_get($vendor, $nameField)) }}"
                        placeholder="Enter award name"
                        class="{{ $inputClass }}"
                    >

                    @error($nameField)
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4 flex-1">
                    @if($imageUrl)
                        <div class="images-div overflow-hidden rounded-lg border border-slate-200 bg-white">
                            @if($isPdf)
                                <div class="flex h-36 items-center justify-center bg-red-50 text-sm font-bold text-red-700">
                                    PDF document
                                </div>
                            @else
                                <img
                                    src="{{ $imageUrl }}"
                                    alt="Award {{ $i }}"
                                    loading="lazy"
                                    class="h-36 w-full object-contain"
                                >
                            @endif
                        </div>

                        <div class="mt-3 flex flex-wrap gap-2">
                            <a
                                href="{{ $imageUrl }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-semibold text-blue-700 hover:bg-blue-100"
                            >
                                View
                            </a>

                            @if($vendor?->id)
                                <a
                                    href="{{ url('developer/clients/award/'.$imageField.'/'.$vendor->id) }}"
                                    class="rounded-lg bg-red-50 px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-100"
                                >
                                    Remove
                                </a>
                            @endif
                        </div>
                    @else
                        <label
                            for="{{ $imageField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Upload award file
                        </label>

                        <input
                            id="{{ $imageField }}"
                            type="file"
                            name="{{ $imageField }}"
                            accept=".jpg,.jpeg,.png,.webp,.pdf"
                            class="mt-2 block w-full rounded-xl border border-slate-300 bg-white text-xs text-slate-700 file:mr-3 file:border-0 file:bg-blue-50 file:px-3 file:py-2.5 file:font-semibold file:text-blue-700 hover:file:bg-blue-100"
                        >
                    @endif

                    @error($imageField)
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </section>
        @endfor
    </div>

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 hover:bg-amber-400 sm:w-auto"
        >
            Save awards
        </button>
    </div>
</form>


           </section>
           <section
                x-show="activeSection === 'recent-activity'"
                x-cloak
            >

@php
    

    $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
@endphp

<form
    id="recentActivityFrom"
    class="recent_form overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    action=""
    method="POST"
    enctype="multipart/form-data"
>
    @csrf

    <input type="hidden" name="business_id" value="{{ $vendor?->id }}">

    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
        <h2 class="text-lg font-bold text-slate-900">Recent activities</h2>
        <p class="mt-1 text-sm text-slate-500">
            Add up to six activities with an image, title and description.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 sm:p-7 xl:grid-cols-3">
        @for($i = 1; $i <= 6; $i++)
            @php
                $imgField = "recent_img{$i}";
                $nameField = "recent_name{$i}";
                $paraField = "recent_paragraph{$i}";

                $imageData = json_decode(
                    data_get($vendor, $imgField) ?? '{}',
                    true
                );

                $imageData = is_array($imageData) ? $imageData : [];
                $imagePath = data_get($imageData, 'large.src');
                $imageUrl = $imagePath ? asset(ltrim($imagePath, '/')) : null;

                $isPdf = $imagePath
                    && strtolower(pathinfo($imagePath, PATHINFO_EXTENSION)) === 'pdf';

                $isRequired = $i === 1;
            @endphp

            <section class="flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                {{-- Card heading --}}
                <div class="flex items-center gap-3 border-b border-slate-200 px-4 py-3">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-xs font-bold text-blue-700">
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h3 class="text-sm font-bold text-slate-900">
                        Recent activity {{ $i }}
                        @if($isRequired)
                            <span class="text-red-600">*</span>
                        @endif
                    </h3>
                </div>

                <div class="flex-1 space-y-4 p-4">
                    {{-- Existing image or upload --}}
                    @if($imageUrl)
                        <div class="relative overflow-hidden rounded-xl border border-slate-200 bg-white">
                            @if($isPdf)
                                <div class="flex h-40 items-center justify-center bg-red-50 text-sm font-bold text-red-700">
                                    PDF document
                                </div>
                            @else
                                <img
                                    src="{{ $imageUrl }}"
                                    alt="Recent activity {{ $i }}"
                                    loading="lazy"
                                    class="h-40 w-full object-cover"
                                >
                            @endif

                            <div class="flex flex-wrap gap-2 border-t border-slate-100 p-3">
                                <a
                                    href="{{ $imageUrl }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="rounded-lg bg-blue-50 px-3 py-2 text-xs font-semibold text-blue-700 hover:bg-blue-100"
                                >
                                    View file
                                </a>

                                @if($vendor?->id)
                                    <a
                                        href="{{ url("developer/clients/recent/{$imgField}/{$vendor->id}") }}"
                                        onclick="return confirm('Remove this file?')"
                                        class="rounded-lg bg-red-50 px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-100"
                                    >
                                        Remove
                                    </a>
                                @endif
                            </div>
                        </div>
                    @else
                        <label
                            for="{{ $imgField }}_input"
                            class="flex h-40 cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-slate-300 bg-white px-3 text-center transition hover:border-blue-400 hover:bg-blue-50"
                        >
                            <span class="text-3xl text-blue-500">+</span>
                            <span class="mt-1 text-sm font-semibold text-slate-700">
                                Click to upload
                            </span>
                            <span class="mt-1 text-xs text-slate-500">
                                JPG, PNG or WEBP · max 5 MB
                            </span>
                        </label>

                        <input
                            id="{{ $imgField }}_input"
                            type="file"
                            name="{{ $imgField }}"
                            accept=".jpg,.jpeg,.png,.webp"
                            @required($isRequired)
                            class="preview-input block w-full text-xs text-slate-600 file:mr-3 file:rounded-lg file:border-0 file:bg-blue-100 file:px-3 file:py-2 file:font-semibold file:text-blue-700 hover:file:bg-blue-200"
                        >
                    @endif

                    @error($imgField)
                        <p class="text-xs text-red-600">{{ $message }}</p>
                    @enderror

                    {{-- Activity name --}}
                    <div>
                        <label
                            for="{{ $nameField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Activity name
                        </label>

                        <input
                            id="{{ $nameField }}"
                            type="text"
                            name="{{ $nameField }}"
                            value="{{ old($nameField, data_get($vendor, $nameField)) }}"
                            placeholder="Enter activity title"
                            @required($isRequired)
                            class="{{ $inputClass }}"
                        >

                        @error($nameField)
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div>
                        <label
                            for="{{ $paraField }}"
                            class="block text-sm font-semibold text-slate-700"
                        >
                            Description
                        </label>

                        <textarea
                            id="{{ $paraField }}"
                            name="{{ $paraField }}"
                            rows="3"
                            placeholder="Briefly describe this activity"
                            class="{{ $inputClass }}"
                        >{{ old($paraField, data_get($vendor, $paraField)) }}</textarea>

                        @error($paraField)
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </section>
        @endfor
    </div>

    <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
        <button
            type="submit"
            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
        >
            Save activities
        </button>
    </div>
</form>


           </section>
           <section
                x-show="activeSection === 'assigned-keywords'"
                x-cloak
            >
@php
    $updateUrl = url('developer/clients/update/'.$vendor->username);
    $currentUser = auth()->user();

    $canExport = $currentUser
        && (
            $currentUser->current_user_can('administrator')
            || $currentUser->current_user_can('export_assign_keyword')
        );

    $canDelete = $currentUser
        && (
            $currentUser->current_user_can('administrator')
            || $currentUser->current_user_can('assign_keyword_delete')
        );
@endphp

<div class="space-y-6">
    {{-- Assign keywords --}}
    <form
        id="kw_form"
        name="kw_form"
        action="{{ $updateUrl }}"
        method="POST"
        enctype="multipart/form-data"
        class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
    >
        @csrf

        <input
            type="hidden"
            name="client_id"
            id="clientIDASSKW"
            value="{{ $vendor->username }}"
        >
        <input type="hidden" name="kw-submit" value="kw-submit">

        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">
            <h2 class="text-lg font-bold text-slate-900">Assign keywords</h2>
            <p class="mt-1 text-sm text-slate-500">
                Select one or more keywords for this business.
            </p>
        </div>

        <div class="p-5 sm:p-6">
            <label
                for="keyword"
                class="block text-sm font-semibold text-slate-700"
            >
                Keywords
            </label>

            <select
                id="keyword"
                name="keyword[]"
                multiple
                class="select2_single keyword_m mt-2 block min-h-32 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
            >
                @foreach(($keywordlist ?? []) as $keyword)
                    <option
                        value="{{ $keyword->id }}"
                        @selected(in_array(
                            (string) $keyword->id,
                            array_map('strval', old('keyword', [])),
                            true
                        ))
                    >
                        {{ $keyword->keyword }}
                    </option>
                @endforeach
            </select>

            @error('keyword')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-6">
            {{-- Kept for existing JS that calls .reset_kw_submit --}}
            <button type="reset" class="reset_kw_submit hidden">Reset</button>

            <button
                type="submit"
                class="kw-submit inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 sm:w-auto"
            >
                Assign keywords
            </button>
        </div>
    </form>

    {{-- Assigned keywords --}}
    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4 sm:px-6">
            <h2 class="text-lg font-bold text-slate-900">Assigned keywords</h2>
        </div>

        <div class="w-full overflow-x-auto">
            <table
                id="datatable-assigned-keywords"
                class="w-full min-w-[650px] border-collapse text-left text-sm"
            >
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-600">
                    <tr>
                        <th class="w-12 px-4 py-3">
                            <input
                                id="check-all"
                                type="checkbox"
                                aria-label="Select all keywords"
                                class="check-box h-4 w-4 cursor-pointer rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                            >
                        </th>
                        <th class="px-4 py-3 font-semibold">Keyword</th>
                        <th class="px-4 py-3 font-semibold">Child category</th>
                        <th class="px-4 py-3 font-semibold">Parent category</th>
                        <th class="px-4 py-3 font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100"></tbody>
            </table>
        </div>

        @if($canExport || $canDelete)
            <div class="flex flex-col gap-3 border-t border-slate-200 bg-slate-50 px-5 py-4 sm:flex-row sm:justify-end sm:px-6">
                @if($canExport)
                    <form action="{{ $updateUrl }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            name="kw-export"
                            value="Export"
                            class="inline-flex min-h-10 w-full items-center justify-center rounded-xl border border-emerald-600 bg-white px-4 py-2 text-sm font-semibold text-emerald-700 hover:bg-emerald-50 sm:w-auto"
                        >
                            Export
                        </button>
                    </form>
                @endif

                @if($canDelete)
                    <button
                        type="button"
                        onclick="assignedKeywordController.deleteSelectedAssignedKwds()"
                        class="inline-flex min-h-10 w-full items-center justify-center rounded-xl bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700 sm:w-auto"
                    >
                        Delete selected
                    </button>
                @endif
            </div>
        @endif
    </section>
</div>



           </section>
          
           <section
                x-show="activeSection === 'account-settings'"
                x-cloak
            >


            @php
                $updateUrl = url('developer/clients/update/'.$vendor->username);
                $currentUser = auth()->user();

                $canManagePackage = $currentUser
                    && (
                        $currentUser->current_user_can('administrator')
                        || $currentUser->current_user_can('client_package_name')
                    );

                $canManageSubscription = $currentUser
                    && (
                        $currentUser->current_user_can('administrator')
                        || $currentUser->current_user_can('manager')
                    );

                $userList = getUserList();
                $categoryServices = getOverViewBusiness();
                $clientTypes = getClientsType();

                $statuses = [
                    ['id' => 'submitActiveStatus', 'field' => 'active_status', 'flag' => 'submit_active_status', 'label' => 'Client active'],
                    ['id' => 'submitPaidStatus', 'field' => 'paid_status', 'flag' => 'submit_paid_status', 'label' => 'Paid client'],
                    ['id' => 'submitCertifiedStatus', 'field' => 'certified_status', 'flag' => 'submit_certified_status', 'label' => 'Certified client'],
                    ['id' => 'submitTrustedStatus', 'field' => 'trusted_status', 'flag' => 'submit_trusted_status', 'label' => 'Trusted client'],
                    ['id' => 'submitGSTtatus', 'field' => 'gst_status', 'flag' => 'submit_gst_status', 'label' => 'GST verified'],
                ];

                $fieldClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
                $buttonClass = 'inline-flex min-h-10 items-center justify-center rounded-xl bg-amber-500 px-4 py-2 text-sm font-bold text-slate-900 hover:bg-amber-400';

                $showLeadsCount = in_array($vendor->client_type, ['gold', 'diamond', 'platinum'], true);
            @endphp

            <div class="space-y-6">
                {{-- Status switches --}}
                <section class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <h2 class="text-lg font-bold text-slate-900">Client status</h2>

                    <div class="mt-5 grid gap-3 sm:grid-cols-2">
                        @foreach($statuses as $status)
                            <form
                                id="{{ $status['id'] }}"
                                action="{{ $updateUrl }}"
                                method="POST"
                                class="flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 p-4"
                            >
                                @csrf
                                <input type="hidden" name="{{ $status['flag'] }}" value="1">
                                {{-- Ensures unchecked status submits 0 --}}
                                <input type="hidden" name="{{ $status['field'] }}" value="0">

                                <label for="{{ $status['field'] }}" class="text-sm font-semibold text-slate-800">
                                    {{ $status['label'] }}
                                </label>

                                <div class="flex items-center gap-3">
                                    <input
                                        id="{{ $status['field'] }}"
                                        type="checkbox"
                                        name="{{ $status['field'] }}"
                                        value="1"
                                        @checked((string) old($status['field'], data_get($vendor, $status['field'])) === '1')
                                        class="{{ $status['field'] }} h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"
                                    >

                                    <button type="submit" class="text-xs font-bold text-blue-700 hover:underline">
                                        Save
                                    </button>
                                </div>
                            </form>
                        @endforeach
        </div>
    </section>

    {{-- Assignment and package --}}
    <section class="grid gap-5 lg:grid-cols-3">
        <form
            id="submitAssignClient"
            action="{{ $updateUrl }}"
            method="POST"
            class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm"
        >
            @csrf
            <input type="hidden" name="client_id" value="{{ $vendor->username }}">
            <input type="hidden" name="submit_client_assign" value="1">

            <label for="created_by" class="text-sm font-semibold text-slate-700">
                Assign client
            </label>

            @if($canManagePackage)
                <select
                    id="created_by"
                    name="created_by"
                    class="select2-single assign_client {{ $fieldClass }}"
                >
                    @foreach($userList as $user)
                        <option
                            value="{{ $user->id }}"
                            @selected((string) old('created_by', $vendor->created_by) === (string) $user->id)
                        >
                            {{ trim($user->first_name.' '.$user->last_name) }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="{{ $buttonClass }} mt-4">Save assignment</button>
            @else
                @php
                    $assignedUser = collect($userList)->firstWhere('id', $vendor->created_by);
                @endphp
                <p class="mt-2 text-sm text-slate-700">
                    {{ $assignedUser ? trim($assignedUser->first_name.' '.$assignedUser->last_name) : 'Not assigned' }}
                </p>
            @endif
        </form>

        <form
            id="submitClientCategoryService"
            action="{{ $updateUrl }}"
            method="POST"
            class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm"
        >
            @csrf
            <input type="hidden" name="client_id" value="{{ $vendor->username }}">
            <input type="hidden" name="client_cat_service" value="1">

            <label for="category_service" class="text-sm font-semibold text-slate-700">
                Category service
            </label>

            <select
                id="category_service"
                name="category_service"
                class="client_cat_service select2-cat-service {{ $fieldClass }}"
            >
                @foreach($categoryServices as $key => $value)
                    <option
                        value="{{ $key }}"
                        @selected((string) old('category_service', $vendor->category_service) === (string) $key)
                    >
                        {{ ucfirst($key) }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="{{ $buttonClass }} mt-4">Save category</button>
        </form>

        <form
            id="submitClientType"
            action="{{ $updateUrl }}"
            method="POST"
            class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm"
        >
            @csrf
            <input type="hidden" name="submit_client_type" value="1">

            <label for="client_type" class="text-sm font-semibold text-slate-700">
                Client package
            </label>

            @if($canManagePackage)
                <select
                    id="client_type"
                    name="client_type"
                    class="select2-single client_type {{ $fieldClass }}"
                >
                    @foreach($clientTypes as $key => $value)
                        <option
                            value="{{ $key }}"
                            @selected((string) old('client_type', $vendor->client_type) === (string) $key)
                        >
                            {{ $value }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="{{ $buttonClass }} mt-4">Save package</button>
            @else
                <p class="mt-2 text-sm text-slate-700">
                    {{ $clientTypes[$vendor->client_type] ?? 'Not selected' }}
                </p>
            @endif
        </form>
    </section>

    {{-- Subscription settings --}}
    @if($showLeadsCount)
        <section id="leads_count" class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
            <h2 class="text-lg font-bold text-slate-900">Subscription settings</h2>

            <div class="mt-5 grid gap-5 md:grid-cols-2">
                {{-- Coins: display only; original form had no editable value --}}
                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                    <p class="text-sm font-semibold text-slate-700">Coins remaining</p>
                    <p class="mt-2 text-2xl font-bold text-slate-900">
                        {{ $vendor->coins_amt ?? 0 }}
                    </p>
                </div>

                <form
                    id="yearly_subs_form"
                    action="{{ $updateUrl }}"
                    method="POST"
                    class="rounded-xl border border-slate-200 bg-slate-50 p-4"
                >
                    @csrf

                    <p class="text-sm font-bold text-slate-900">Subscription dates</p>

                    <div class="mt-3 grid gap-3 sm:grid-cols-2">
                        <div>
                            <label for="expired_from" class="text-sm font-semibold text-slate-700">
                                Starting date
                            </label>
                            <input
                                id="expired_from"
                                type="date"
                                name="expired_from"
                                value="{{ old('expired_from', $vendor->expired_from ? \Illuminate\Support\Carbon::parse($vendor->expired_from)->format('Y-m-d') : '') }}"
                                @disabled(!$canManageSubscription)
                                class="x_date {{ $fieldClass }}"
                            >
                        </div>

                        <div>
                            <label for="expired_on" class="text-sm font-semibold text-slate-700">
                                End date
                            </label>
                            <input
                                id="expired_on"
                                type="date"
                                name="expired_on"
                                value="{{ old('expired_on', $vendor->expired_on ? \Illuminate\Support\Carbon::parse($vendor->expired_on)->format('Y-m-d') : '') }}"
                                @disabled(!$canManageSubscription)
                                class="y_date {{ $fieldClass }}"
                            >
                        </div>
                    </div>

                    @if($canManageSubscription)
                        <input type="hidden" name="submit_yrly_subs_starting_date" value="1">
                        <button type="submit" class="{{ $buttonClass }} mt-4">Save dates</button>
                    @endif
                </form>

                <form
                    id="max_kw_form"
                    action="{{ $updateUrl }}"
                    method="POST"
                    class="rounded-xl border border-slate-200 bg-slate-50 p-4"
                >
                    @csrf

                    <label for="max_kw" class="text-sm font-semibold text-slate-700">
                        Maximum keywords
                    </label>

                    <input
                        id="max_kw"
                        type="number"
                        name="max_kw"
                        min="0"
                        step="1"
                        value="{{ old('max_kw', $vendor->max_kw) }}"
                        @disabled(!$canManageSubscription)
                        class="{{ $fieldClass }}"
                    >

                    @if($canManageSubscription)
                        <input type="hidden" name="submit_max_kw" value="1">
                        <button type="submit" class="{{ $buttonClass }} mt-4">Save limit</button>
                    @endif
                </form>

                @if((string) $vendor->coins_free === '0' && $canManageSubscription)
                    <form
                        id="free_coins_form"
                        action="{{ $updateUrl }}"
                        method="POST"
                        class="rounded-xl border border-slate-200 bg-slate-50 p-4"
                    >
                        @csrf
                        <input type="hidden" name="amt" value="555">
                        <input type="hidden" name="submit_free_amt" value="1">

                        <p class="text-sm font-semibold text-slate-900">
                            555 complimentary coins
                        </p>

                        <button type="submit" class="{{ $buttonClass }} mt-4">
                            Add free coins
                        </button>
                    </form>
                @endif
            </div>
        </section>
    @endif
</div>



           </section>


           <section
                x-show="activeSection === 'leads'"
                x-cloak
            >
<div class="w-full overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <div class="border-b border-slate-200 px-4 py-4 sm:px-6">
        <h2 class="text-base font-bold text-slate-900">All leads</h2>
    </div>

    <div class="w-full overflow-x-auto">
        <table
            id="datatable-view-all-leads"
            class="w-full min-w-[850px] border-collapse text-left text-sm"
        >
            <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-600">
                <tr>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Name</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Mobile</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Email</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Course</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">City</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Date</th>
                    <th class="whitespace-nowrap px-4 py-3 font-semibold">Action</th>
                </tr>
            </thead>

            {{-- Existing DataTables/AJAX code populates this --}}
            <tbody class="divide-y divide-slate-100 bg-white"></tbody>
        </table>
    </div>
</div>



           </section>


           <section
                x-show="activeSection === 'discussion'"
                x-cloak
            >

<div id="client-discussions" class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-200 px-5 py-4 sm:px-6">
        <div>
            <h4 class="text-lg font-bold text-slate-900">Client Discussion</h4>
            <p class="mt-1 text-sm text-slate-500">
                Record calls, discussions and follow-up dates.
            </p>
        </div>

        <button
            type="button"
            onclick="document.getElementById('discussion-dialog').showModal()"
            class="inline-flex min-h-10 items-center justify-center rounded-xl bg-[#a14f47] px-4 py-2 text-sm font-semibold text-white hover:bg-[#8f433d]"
        >
            + Add Discussion
        </button>
    </div>

    @if(session('discussion_success'))
        <div class="mx-5 mt-4 rounded-xl bg-green-50 px-4 py-3 text-sm font-medium text-green-700 sm:mx-6">
            {{ session('discussion_success') }}
        </div>
    @endif

    {{-- History --}}
    <div class="space-y-4 p-5 sm:p-6">
        @forelse($discussions as $discussion)
            <article class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">
                        {{ $discussion->status }}
                    </span>

                    <time class="text-xs text-slate-500">
                        {{ $discussion->discussed_at->format('d M Y, h:i A') }}
                    </time>
                </div>

                <p class="mt-3 whitespace-pre-line text-sm leading-6 text-slate-700">{{ $discussion->remark }}</p>

                @if($discussion->follow_up_at)
                    <div class="mt-3 border-t border-slate-200 pt-3 text-xs font-semibold text-amber-700">
                        Next follow-up:
                        {{ $discussion->follow_up_at->format('d M Y, h:i A') }}
                    </div>
                @endif
            </article>
        @empty
            <div class="py-10 text-center text-sm text-slate-500">
                No discussions recorded yet.
            </div>
        @endforelse
    </div>
</div>

{{-- Native browser modal; no Alpine or jQuery needed --}}
<dialog
    id="discussion-dialog"
    class="m-auto w-[calc(100%-2rem)] max-w-lg rounded-2xl border border-slate-200 p-0 shadow-2xl backdrop:bg-slate-900/60"
>
    <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
        <h3 class="text-lg font-bold text-slate-900">Add client discussion</h3>
        <button
            type="button"
            onclick="document.getElementById('discussion-dialog').close()"
            aria-label="Close"
            class="rounded-lg px-2 py-1 text-xl text-slate-500 hover:bg-slate-100"
        >×</button>
    </div>

    <form
        method="POST"
        action=""
        class="space-y-4 p-5"
    >
        @csrf

        <div>
            <label for="discussion-status" class="block text-sm font-semibold text-slate-700">
                Status *
            </label>
            <select
                id="discussion-status"
                name="status"
                required
                class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
            >
                <option value="">Select status</option>
                @foreach(['Interested', 'Follow Up', 'Not Interested', 'Converted'] as $status)
                    <option value="{{ $status }}" @selected(old('status') === $status)>
                        {{ $status }}
                    </option>
                @endforeach
            </select>
            @error('status') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="discussion-remark" class="block text-sm font-semibold text-slate-700">
                Discussion / remark *
            </label>
            <textarea
                id="discussion-remark"
                name="remark"
                rows="4"
                required
                placeholder="What was discussed with the client?"
                class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
            >{{ old('remark') }}</textarea>
            @error('remark') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label for="discussed_at" class="block text-sm font-semibold text-slate-700">
                    Discussion date *
                </label>
                <input
                    id="discussed_at"
                    type="datetime-local"
                    name="discussed_at"
                    required
                    value="{{ old('discussed_at', now()->format('Y-m-d\TH:i')) }}"
                    class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm"
                >
                @error('discussed_at') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="follow_up_at" class="block text-sm font-semibold text-slate-700">
                    Next follow-up
                </label>
                <input
                    id="follow_up_at"
                    type="datetime-local"
                    name="follow_up_at"
                    value="{{ old('follow_up_at') }}"
                    class="mt-1 w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm"
                >
                @error('follow_up_at') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="flex justify-end gap-3 border-t border-slate-200 pt-4">
            <button
                type="button"
                onclick="document.getElementById('discussion-dialog').close()"
                class="rounded-xl border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700"
            >
                Cancel
            </button>
            <button
                type="submit"
                class="rounded-xl bg-[#a14f47] px-5 py-2 text-sm font-semibold text-white hover:bg-[#8f433d]"
            >
                Save discussion
            </button>
        </div>
    </form>
</dialog>

@if($errors->hasAny(['status', 'remark', 'discussed_at', 'follow_up_at']))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('discussion-dialog')?.showModal();
        });
    </script>
@endif


           </section>

           <section
                x-show="activeSection === 'payment-orders'"
                x-cloak
            >

@php
    $modes = collect($moderesults ?? [])
        ->pluck('mode', 'slug')
        ->all();

    $bankOptions = \App\Models\Banksdetails::query()
        ->whereIn('mode', array_keys($modes))
        ->get()
        ->groupBy('mode');

    $inputClass = 'mt-1 block w-full rounded-xl border border-slate-300 bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20';
    $labelClass = 'block text-sm font-semibold text-slate-700';
@endphp

<div class="space-y-6">
    <form
        class="order_validation overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm"
        action=""
        method="POST"
        onsubmit="return client.submitClientPayOrder(this)"
    >
        @csrf

        <input type="hidden" name="client-id" value="{{ $vendor->username }}">
        <input type="hidden" name="pay-submit" value="savepay">

        <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
            <h2 class="text-lg font-bold text-slate-900">Record payment</h2>
            <p class="mt-1 text-sm text-slate-500">
                Enter the payment, tax and transaction details.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 sm:p-7">
            <div>
                <label for="business_name" class="{{ $labelClass }}">Business name *</label>
                <input id="business_name" name="business_name" type="text" required
                       value="{{ old('business_name', $vendor->business_name) }}"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="package_name" class="{{ $labelClass }}">Package name *</label>
                <input id="package_name" name="package_name" type="text" readonly
                       value="{{ old('package_name', $vendor->client_type) }}"
                       class="{{ $inputClass }} bg-slate-50">
            </div>

            <div>
                <label for="paid_amount" class="{{ $labelClass }}">Paid amount *</label>
                <input id="paid_amount" name="paid_amount" type="number"
                       min="0" step="0.01" required
                       value="{{ old('paid_amount') }}"
                       placeholder="Enter paid amount"
                       onblur="handlingPaiAmt()"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="coins_per_lead" class="{{ $labelClass }}">Coins *</label>
                <input id="coins_per_lead" name="coins_amt" type="number"
                       min="0" step="1" readonly
                       value="{{ old('coins_amt') }}"
                       class="{{ $inputClass }} bg-slate-50">
            </div>

            <fieldset>
                <legend class="{{ $labelClass }}">GST *</legend>
                <div class="mt-3 flex gap-5">
                    <label class="flex items-center gap-2 text-sm text-slate-700">
                        <input type="radio" name="gst_status" value="Yes"
                               @checked(old('gst_status') === 'Yes')
                               onchange="paidgst(this.value)"
                               class="h-4 w-4 text-blue-600">
                        Yes
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700">
                        <input type="radio" name="gst_status" value="No"
                               @checked(old('gst_status') === 'No')
                               onchange="nopaidgst(this.value)"
                               class="h-4 w-4 text-blue-600">
                        No
                    </label>
                </div>
            </fieldset>

            <div>
                <label for="gst_tax" class="{{ $labelClass }}">GST amount</label>
                <input id="gst_tax" name="gst_tax" type="number" min="0" step="0.01"
                       value="{{ old('gst_tax') }}"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="gst_total_amount" class="{{ $labelClass }}">GST total amount *</label>
                <input id="gst_total_amount" name="gst_total_amount"
                       type="number" min="0" step="0.01"
                       value="{{ old('gst_total_amount') }}"
                       class="{{ $inputClass }}">
            </div>

            <fieldset>
                <legend class="{{ $labelClass }}">TDS *</legend>
                <div class="mt-3 flex gap-5">
                    <label class="flex items-center gap-2 text-sm text-slate-700">
                        <input type="radio" name="tds_status" value="Yes"
                               @checked(old('tds_status') === 'Yes')
                               onchange="paidtds(this.value)"
                               class="h-4 w-4 text-blue-600">
                        Yes
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700">
                        <input type="radio" name="tds_status" value="No"
                               @checked(old('tds_status') === 'No')
                               onchange="nopaidtds(this.value)"
                               class="h-4 w-4 text-blue-600">
                        No
                    </label>
                </div>
            </fieldset>

            <div>
                <label for="tds_amount" class="{{ $labelClass }}">TDS amount</label>
                <input id="tds_amount" name="tds_amount" type="number"
                       min="0" step="0.01" value="{{ old('tds_amount') }}"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="total_amount" class="{{ $labelClass }}">Total amount *</label>
                <input id="total_amount" name="total_amount" type="number"
                       min="0" step="0.01" required
                       value="{{ old('total_amount') }}"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="stud-payment_mode" class="{{ $labelClass }}">Payment mode *</label>
                <select id="stud-payment_mode" name="stud-payment_mode" required
                        onchange="togglePaymentModeFields(this.value)"
                        class="{{ $inputClass }}">
                    <option value="">Select payment mode</option>
                    @foreach($modes as $key => $value)
                        <option value="{{ $key }}"
                            @selected(old('stud-payment_mode', 'cash') === $key)>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>

            @foreach($modes as $key => $value)
                @if(!in_array($key, ['cash', 'cheque'], true))
                    <div class="payment-mode-field hidden"
                         data-payment-mode="{{ $key }}">
                        <label for="stud-{{ $key }}" class="{{ $labelClass }}">
                            {{ $value }}
                        </label>
                        <select id="stud-{{ $key }}" name="stud-{{ $key }}"
                                class="{{ $inputClass }}">
                            <option value="">Select {{ $value }}</option>
                            @foreach($bankOptions->get($key, collect()) as $bank)
                                <option value="{{ $bank->name }}"
                                    @selected(old('stud-'.$key) === $bank->name)>
                                    {{ $bank->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif
            @endforeach

            <div class="payment-mode-field hidden" data-payment-mode="cheque">
                <label for="stud-chq_no" class="{{ $labelClass }}">Cheque number</label>
                <input id="stud-chq_no" name="stud-chq_no" type="text"
                       value="{{ old('stud-chq_no') }}"
                       class="{{ $inputClass }}">
            </div>

            <div class="payment-mode-field hidden" data-payment-mode="bank">
                <label for="stud-card_no" class="{{ $labelClass }}">
                    Last 4 digits of card
                </label>
                <input id="stud-card_no" name="stud-card_no" type="text"
                       inputmode="numeric" maxlength="4" pattern="[0-9]{4}"
                       value="{{ old('stud-card_no') }}"
                       placeholder="1234"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="transactionid" class="{{ $labelClass }}">Transaction ID</label>
                <input id="transactionid" name="transactionid" type="text"
                       value="{{ old('transactionid') }}"
                       placeholder="Enter transaction ID"
                       class="{{ $inputClass }}">
            </div>

            <div>
                <label for="selectproofid" class="{{ $labelClass }}">ID proof type</label>
                <select id="selectproofid" name="selectproofid" class="{{ $inputClass }}">
                    <option value="">Select ID proof</option>
                    @foreach(['Pan Card', 'Adhar Card', 'Passport', 'Driver Licence'] as $proof)
                        <option value="{{ $proof }}"
                            @selected(old('selectproofid') === $proof)>
                            {{ $proof }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="proofid" class="{{ $labelClass }}">ID proof number</label>
                <input id="proofid" name="proofid" type="text"
                       value="{{ old('proofid') }}"
                       placeholder="Enter ID proof number"
                       class="{{ $inputClass }}">
            </div>
        </div>

        <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
            <button type="submit"
                    class="payOrder inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 hover:bg-amber-400 sm:w-auto">
                Save payment
            </button>
        </div>
    </form>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="border-b border-slate-200 px-5 py-4 sm:px-7">
            <h2 class="text-lg font-bold text-slate-900">Payment history</h2>
        </div>

        <div class="w-full overflow-x-auto">
            <table id="datatable-payment-history"
                   class="w-full min-w-[1100px] border-collapse text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-600">
                    <tr>
                        @foreach([
                            'Date', 'Paid Amount', 'GST', 'Total Amount',
                            'Pay Mode', 'Order PDF', 'Proforma Invoice',
                            'Invoice PDF', 'Action'
                        ] as $heading)
                            <th class="whitespace-nowrap px-4 py-3 font-semibold">
                                {{ $heading }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100"></tbody>
            </table>
        </div>
    </section>
</div>

<script>
    function togglePaymentModeFields(mode) {
        document.querySelectorAll('.payment-mode-field').forEach(field => {
            const selected = field.dataset.paymentMode === mode;
            field.classList.toggle('hidden', !selected);

            // "bank" extra card field was present in the original form.
            // Keep its bank-specific visibility separate from other bank fields.
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const select = document.getElementById('stud-payment_mode');
        if (select) togglePaymentModeFields(select.value);
    });
</script>


           </section>



             
 


        

    </div>

</div>



{{-- ============================================================ --}}
{{-- ALPINE JS --}}
{{-- ============================================================ --}}

<script>

function vendorEditor() {

    return {

        activeSection: @js($activeSection),

        openSection(section) {

            this.activeSection = section;

            const url = new URL(window.location.href);

            url.searchParams.set('section', section);

            window.history.replaceState(
                {},
                '',
                url.toString()
            );


            if (window.innerWidth < 1024) {

                this.$nextTick(() => {

                    const form = document.getElementById(
                        'vendorEditorForm'
                    );

                    if (form) {

                        form.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                    }

                });

            }

        }

    };

}

</script>


{{-- ============================================================ --}}
{{-- REUSABLE TAILWIND CLASSES --}}
{{-- If you don't use @apply, replace these with full classes --}}
{{-- ============================================================ --}}

<style>

    [x-cloak] {
        display: none !important;
    }

</style>

</x-layouts.sales.app>