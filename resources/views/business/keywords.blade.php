@extends('business.layouts.app')
@section('title','Profile')
@section('content')
@php $tabs=['general'=>'Basic Info','personal'=>'Personal Details','seo'=>'SEO Meta','keywords'=>'Service Keywords','locations'=>'Service Areas','media'=>'Media & Gallery','awards'=>'Awards','certs'=>'Certificates','socials'=>'Social Links'];

 @endphp
<div class="animate-fade-in max-w-5xl space-y-4 md:space-y-6"><div><h1 class="font-display text-xl font-bold md:text-3xl">

{{ $tabs[$tab] }}
</h1>


</div>

<div> 
 
<div id="autoSaveStatus"> </div>

</div>
 <div class="md:hidden"><select onchange="window.location=this.value" class="form-input h-12 bg-white text-base font-medium shadow-sm">
    
 @foreach($tabs as $key=>$label)
    
 <option value="{{ route('profile',['tab'=>$key]) }}" @selected($tab===$key)>{{ $label }}</option>@endforeach

</select>

</div>
  
 @if($tab === 'keywords')

<div class="card overflow-hidden">

    {{-- Header --}}
    <div class="border-b p-6">
        <h3 class="font-display text-lg font-semibold">
            Service Keywords
        </h3>

        <p class="mt-1 text-sm text-slate-500">
            Add the services customers can use to find your business.
        </p>
    </div>


    {{-- ADD KEYWORD FORM --}}
    <form
        id="serviceKeyword"
        action="{{ route('profile.keywords.add') }}"
        method="POST"
        class="grid gap-4 bg-secondary/30 p-5 md:grid-cols-4"
    >

        @csrf

        <input
            type="hidden"
            name="client_id"
            value="{{ $client->id }}"
        >
 



        {{-- Keyword --}}
        <div class="md:col-span-3">

            <label class="mb-2 block text-xs font-medium">
                Keyword *
            </label>

            <select
                id="keywordSelect"
                name="keyword"
                class="form-input select2-keyword"
            >

                <option value="">
                    Select Keyword
                </option>

                @if(!empty($keywordlist))

                    @foreach($keywordlist as $keyword)

                        <option value="{{ $keyword->id }}">
                            {{ $keyword->keyword }}
                        </option>

                    @endforeach

                @endif

            </select>


            
            <div id="keyword-error"></div>

        </div>


        {{-- Add Button --}}
        <div class="flex items-end">

            <button
                type="submit"
                id="addKeywordBtn"
                class="btn btn-primary w-full"
            >

                <i
                    data-lucide="plus"
                    class="h-4 w-4"
                ></i>

                <span>Add Keyword</span>

            </button>

        </div>

    </form>


    {{-- ASSIGNED KEYWORD LIST --}}
    <div
        id="assignedKeywordList"
        class="divide-y"
    >

        @forelse($assignKeywords as $keyword)

            <div
                class="keyword-row flex items-center justify-between gap-3 p-4 md:px-6"
            >

                <div>

                    <p class="font-semibold">
                        {{ $keyword->keyword }}
                    </p>

                    <p class="mt-1 text-xs text-slate-500">

                        {{ $keyword->parent_category }}

                        @if(!empty($keyword->child_category))
                            →
                            {{ $keyword->child_category }}
                        @endif

                    </p>

                </div>


                {{-- DELETE --}}
                <form
                    class="keyword-delete-form"
                    action="{{ route('profile.keywords.delete', $keyword->id) }}"
                    method="POST"
                >

                    @csrf

                    <button
                        type="submit"
                        class="delete-keyword-btn flex h-9 w-9 items-center justify-center rounded-lg bg-red-50 text-red-600 transition hover:bg-red-100 disabled:cursor-not-allowed disabled:opacity-50"
                        title="Delete Keyword"
                    >

                        <i
                            data-lucide="trash-2"
                            class="h-4 w-4"
                        ></i>

                    </button>

                </form>

            </div>

        @empty

            <div class="p-8 text-center text-slate-500">
                No service keywords added.
            </div>

        @endforelse

    </div>

</div>

@endif



</div>
 
  <style>
    /* Container */
    .select2-container--default .select2-selection--single {
        height: 3rem; /* h-12 to match your button */
        border: 1px solid #e2e8f0; /* slate-200 */
        border-radius: 0.5rem; /* rounded-lg */
        background-color: #ffffff;
        display: flex;
        align-items: center;
        padding: 0 0.5rem;
        transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    /* Selected text / placeholder */
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        /* line-height: normal; */
        color: #0f172a; /* slate-900 */
        font-size: 0.875rem;
        padding-left: 0.5rem;
            line-height: 35px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #94a3b8; /* slate-400 */
    }

    /* Arrow */
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
        right: 10px;
    }

    /* Focus state — match your primary brand color */
    .select2-container--default.select2-container--focus .select2-selection--single,
    .select2-container--default.select2-container--open .select2-selection--single {
        border-color: #4f46e5; /* indigo-600, swap for your primary */
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        outline: none;
    }

    /* Dropdown panel */
    .select2-dropdown {
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1);
        overflow: hidden;
        margin-top: 4px;
    }

    /* Search box inside dropdown */
    .select2-search--dropdown {
        padding: 0.5rem;
    }

    .select2-search--dropdown .select2-search__field {
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        outline: none;
    }

    .select2-search--dropdown .select2-search__field:focus {
        border-color: #4f46e5;
    }

    /* Results list */
    .select2-results__option {
        padding: 0.6rem 0.9rem;
        font-size: 0.875rem;
        color: #334155; /* slate-700 */
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #4f46e5; /* indigo-600 */
        color: #fff;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #eef2ff; /* indigo-50 */
        color: #4f46e5;
    }

    /* Clear (x) button */
    .select2-container--default .select2-selection--single .select2-selection__clear {
        margin-right: 0.5rem;
        color: #94a3b8;
    }

    .select2-container .select2-selection--single{
    height: 40px !important;

    }
</style>
 
 
 
 {{-- Toast --}}
<div
    id="toast-container"
    class="pointer-events-none fixed right-4 top-4 z-[9999] flex w-80 flex-col gap-2"
></div>


 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>


<script>
$(document).ready(function () {

    

    $('#serviceKeyword').on('submit', function (e) {

        e.preventDefault();

        const form = $(this);

        const button = $('#addKeywordBtn');

        const keyword = $('#keywordSelect').val();


        /*
        | Validation
        */

        $('#keyword-error').html('');


        if (!keyword) {

            $('#keyword-error').html(
                '<span class="mt-1 block text-sm text-red-600">' +
                'Please select a keyword.' +
                '</span>'
            );

            return;
        }


        /*
        | Disable button
        */

        button.prop('disabled', true);

        button.find('span').text('Saving...');


        showToast(
            'Adding keyword...',
            'info',
            1200
        );


        /*
        | AJAX
        */

        $.ajax({

            type: 'POST',

            url: form.attr('action'),

            data: form.serialize(),

            cache: false,


            success: function (response) {

                /*
                | Reset dropdown
                */

                $('#keywordSelect')
                    .val('')
                    .trigger('change');


                showToast(
                    response.message || 'Keyword added successfully',
                    'success'
                );


                /*
                | Refresh assigned list + dropdown
                */

                refreshKeywordSection();

            },


            error: function (xhr) {

                button.prop('disabled', false);

                button.find('span').text('Add Keyword');


                /*
                | Laravel Validation
                */

                if (
                    xhr.status === 422 &&
                    xhr.responseJSON &&
                    xhr.responseJSON.errors
                ) {

                    const errors =
                        xhr.responseJSON.errors;


                    if (errors.keyword) {

                        $('#keyword-error').html(
                            '<span class="mt-1 block text-sm font-medium text-red-600">' +
                            escapeHtml(errors.keyword[0]) +
                            '</span>'
                        );

                    }


                    showToast(
                        'Please check validation errors',
                        'error'
                    );

                    return;
                }


                /*
                | CSRF expired
                */

                if (xhr.status === 419) {

                    showToast(
                        'Session expired. Please refresh the page.',
                        'error'
                    );

                    return;
                }


                showToast(
                    xhr.responseJSON?.message ||
                    'Something went wrong',
                    'error'
                );

            }

        });

    });


 

    $(document).on(
        'submit',
        '.keyword-delete-form',
        function (e) {

            e.preventDefault();


            const form = $(this);

            const button =
                form.find('.delete-keyword-btn');


            /*
            | Disable current delete button
            */

            button.prop('disabled', true);


            showToast(
                'Deleting keyword...',
                'info',
                1200
            );


            $.ajax({

                type: 'POST',

                /*
                | IMPORTANT
                | Use THIS row's action URL
                */

                url: form.attr('action'),

                /*
                | Serialize THIS delete form
                */

                data: form.serialize(),

                cache: false,


                success: function (response) {

                    showToast(
                        response.message ||
                        'Keyword deleted successfully',
                        'success'
                    );


                    /*
                    | Automatically refresh
                    | list AND dropdown.
                    */

                    refreshKeywordSection();

                },


                error: function (xhr) {

                    button.prop('disabled', false);


                    if (xhr.status === 419) {

                        showToast(
                            'Session expired. Please refresh the page.',
                            'error'
                        );

                        return;
                    }


                    showToast(
                        xhr.responseJSON?.message ||
                        'Unable to delete keyword',
                        'error'
                    );

                }

            });

        }
    );


 

    function refreshKeywordSection() {

        $.ajax({

            url: window.location.href,

            type: 'GET',

            cache: false,


            success: function (html) {

                /*
                | Parse returned page without
                | executing its scripts
                */

                const parser =
                    new DOMParser();

                const documentNew =
                    parser.parseFromString(
                        html,
                        'text/html'
                    );


                /*
                | Fresh dropdown
                */

                const freshSelect =
                    documentNew.querySelector(
                        '#keywordSelect'
                    );


                /*
                | Fresh assigned list
                */

                const freshList =
                    documentNew.querySelector(
                        '#assignedKeywordList'
                    );


                /*
                | Update dropdown
                */

                if (freshSelect) {

                    $('#keywordSelect')
                        .html(
                            freshSelect.innerHTML
                        )
                        .val('')
                        .trigger('change');

                }


                /*
                | Update assigned keywords
                */

                if (freshList) {

                    $('#assignedKeywordList')
                        .html(
                            freshList.innerHTML
                        );

                }


                /*
                | Enable Add button again
                */

                $('#addKeywordBtn')
                    .prop('disabled', false)
                    .find('span')
                    .text('Add Keyword');


                /*
                | Re-render Lucide icons
                */

                if (
                    typeof lucide !== 'undefined'
                ) {

                    lucide.createIcons();

                }


                /*
                | If Select2 is installed
                */

                initKeywordSelect();

            },


            error: function () {

                $('#addKeywordBtn')
                    .prop('disabled', false)
                    .find('span')
                    .text('Add Keyword');


                showToast(
                    'Keyword saved but list could not refresh',
                    'error'
                );

            }

        });

    }



    
function initKeywordSelect() {

    const select = $('#keywordSelect');

    // Destroy existing instance if present
    if (select.hasClass('select2-hidden-accessible')) {
        select.select2('destroy');
    }

    select.select2({
        width: '100%',
        placeholder: 'Search & Select Keyword',
        allowClear: true,
        dropdownParent: $('#serviceKeyword') // prevents dropdown clipping inside cards
    });

}

    initKeywordSelect();

});

 

function escapeHtml(value) {

    const div =
        document.createElement('div');

    div.textContent =
        value || '';

    return div.innerHTML;

}


/*
|--------------------------------------------------------------------------
| TOAST
|--------------------------------------------------------------------------
*/

function showToast(
    message,
    type = 'success',
    duration = 3000
) {

    const container =
        document.getElementById(
            'toast-container'
        );


    if (!container) return;


    const styles = {

        success: {

            bg:
                'bg-emerald-50 border-emerald-200 text-emerald-800',

            icon: `
                <svg
                    class="h-5 w-5 shrink-0 text-emerald-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 13l4 4L19 7"
                    />
                </svg>
            `

        },


        error: {

            bg:
                'bg-red-50 border-red-200 text-red-800',

            icon: `
                <svg
                    class="h-5 w-5 shrink-0 text-red-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            `

        },


        info: {

            bg:
                'bg-blue-50 border-blue-200 text-blue-800',

            icon: `
                <svg
                    class="h-5 w-5 shrink-0 animate-spin text-blue-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <circle
                        cx="12"
                        cy="12"
                        r="9"
                        stroke-opacity=".25"
                    ></circle>

                    <path
                        stroke-linecap="round"
                        d="M21 12a9 9 0 00-9-9"
                    ></path>
                </svg>
            `

        }

    };


    const style =
        styles[type] ||
        styles.success;


    const toast =
        document.createElement('div');


    toast.className =
        `pointer-events-auto flex items-center gap-3 rounded-xl border ${style.bg} px-4 py-3 shadow-lg transition-all duration-300 translate-x-4 opacity-0`;


    toast.innerHTML = `

        ${style.icon}

        <p class="flex-1 text-sm font-medium">
            ${escapeHtml(message)}
        </p>

        <button
            type="button"
            class="shrink-0 rounded p-1 opacity-60 hover:opacity-100"
        >
            ×
        </button>

    `;


    container.appendChild(toast);


    requestAnimationFrame(function () {

        toast.classList.remove(
            'translate-x-4',
            'opacity-0'
        );

    });


    function dismiss() {

        toast.classList.add(
            'translate-x-4',
            'opacity-0'
        );


        setTimeout(function () {

            toast.remove();

        }, 300);

    }


    toast
        .querySelector('button')
        .addEventListener(
            'click',
            dismiss
        );


    setTimeout(
        dismiss,
        duration
    );

}
</script>
 



@endsection
