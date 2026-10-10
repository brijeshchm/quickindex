<x-layouts.sales.app
    title="Register Client · Vendorflow"
    header="Register Client"
>
@php
    // name, label, type, autocomplete, placeholder, required, full-width
    $fields = [
        ['business_name', 'Business name', 'text',  'organization', 'Enter business name',  true,  true],
        ['first_name',    'First name',    'text',  'given-name',   'Enter first name',     false, false],
        ['last_name',     'Last name',     'text',  'family-name',  'Enter last name',      false, false],
        ['email',         'Email',         'email', 'email',        'name@example.com',     true,  false],
        ['mobile',        'Mobile',        'tel',   'tel',          'Enter mobile number',  true,  false],
    ];

    $inputBase = 'mt-1 block w-full rounded-xl border bg-white px-3 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2';
    $inputOk   = 'border-slate-300 focus:border-blue-500 focus:ring-blue-500/20';
    $inputBad  = 'border-red-400 focus:border-red-500 focus:ring-red-100';
@endphp

<div id="page-wrapper" class="min-h-screen bg-slate-50 px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-4xl">

        <div class="mb-6">
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">Register Client</h1>
            <p class="mt-1 text-sm text-slate-500">Enter the business and contact details to create a client.</p>
        </div>

        @if(session('success_msg'))
            <div role="status" class="mb-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                {{ session('success_msg') }}
            </div>
        @endif

        @if(session('danger_msg'))
            <div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-medium text-red-800">
                {{ session('danger_msg') }}
            </div>
        @endif

        @if($errors->any())
            <div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                Please correct the highlighted fields.
            </div>
        @endif

        <form id="register-client-form"
              action="{{ route('sales.vendor.register') }}"
              method="POST"
              novalidate
              class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            @csrf

            <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
                <h2 class="text-lg font-semibold text-slate-900">Business information</h2>
                <p class="mt-1 text-sm text-slate-500">Fields marked * are required.</p>
            </div>

            <div class="grid grid-cols-1 gap-6 p-5 sm:grid-cols-2 sm:p-7">

                @foreach($fields as [$name, $label, $type, $auto, $placeholder, $required, $full])
                    <div class="{{ $full ? 'sm:col-span-2' : '' }}">
                        <label for="{{ $name }}" class="block text-sm font-semibold text-slate-700">
                            {{ $label }} @if($required)<span class="text-red-600">*</span>@endif
                        </label>

                        <input id="{{ $name }}"
                               type="{{ $type }}"
                               name="{{ $name }}"
                               value="{{ old($name) }}"
                               placeholder="{{ $placeholder }}"
                               autocomplete="{{ $auto }}"
                               @if($type === 'tel') inputmode="numeric" maxlength="15" @endif
                               @required($required)
                               @error($name) aria-invalid="true" aria-describedby="{{ $name }}-error" @enderror
                               class="{{ $inputBase }} {{ $errors->has($name) ? $inputBad : $inputOk }}">

                        @error($name)
                            <p id="{{ $name }}-error" class="mt-1 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach

                {{-- City --}}
                <div class="sm:col-span-2">
                    <label for="city" class="block text-sm font-semibold text-slate-700">
                        City <span class="text-red-600">*</span>
                    </label>

                    <select id="city"
                            name="city"                            
                            @error('city') aria-invalid="true" aria-describedby="city-error" @enderror
                            class="select2-single-city {{ $inputBase }} {{ $errors->has('city') ? $inputBad : $inputOk }}">
                        <option value="">Select city</option>
                        @foreach(($citylist ?? []) as $city)
                            <option value="{{ $city->id }}" @selected((string) old('city') === (string) $city->id)>
                                {{ $city->city ?? $city->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('city')
                        <p id="city-error" class="mt-1 text-xs font-medium text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end border-t border-slate-200 bg-slate-50 px-5 py-4 sm:px-7">
                <button type="submit"
                        id="submit-btn"
                        class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-amber-500 px-6 py-2.5 text-sm font-bold text-slate-900 transition hover:bg-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60 sm:w-auto">
                    Start Your Business
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('register-client-form');
    var btn  = document.getElementById('submit-btn');

    // Select2 (only if the plugin is loaded)
    if (window.jQuery && jQuery.fn.select2) {
        jQuery('#city').select2({ width: '100%', placeholder: 'Select city' });
    }

    // Native validation + prevent double-submit (duplicate clients)
    form.addEventListener('submit', function (e) {
        if (!form.checkValidity()) {
            e.preventDefault();
            form.reportValidity();
            return;
        }
        btn.disabled = true;
        btn.textContent = 'Saving...';
    });
});
</script>
@endpush


<style>   

    .state-search-dropdown .select2-search__field {
        padding: 8px 10px;
        border: 1px solid #cbd5e1 !important;
        border-radius: 6px;
        outline: none;
    }

    .state-search-dropdown .select2-results__option {
        padding: 10px 12px;
        font-size: 14px;
    }

    .state-search-dropdown .select2-results__option--highlighted[aria-selected] {
        background: #315b80;
        color: #fff;
    }



     .select2-single-city + .select2-container {
        width: 100% !important;
    }

    .select2-single-city + .select2-container .select2-selection--single {
        height: 44px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        background: #fff;
    }

    .select2-single-city + .select2-container .select2-selection__rendered {
        line-height: 42px;
        padding-left: 12px;
        padding-right: 30px;
        color: #334155;
        font-size: 14px;
    }

    .select2-single-city + .select2-container .select2-selection__arrow {
        height: 42px;
    }

    .select2-single-city + .select2-container--focus .select2-selection--single,
    .select2-single-city + .select2-container--open .select2-selection--single {
        border-color: #315b80;
    }




 


</style>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link
    href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css"
    rel="stylesheet"
>     
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<!-- Initialize searchable state dropdown -->
<script>
$(function () {


$('.select2-single-city').select2({
placeholder: 'Search and select city',
allowClear: true,
minimumResultsForSearch: 0,
width: '100%'
});
 
});
</script>



</x-layouts.sales.app>