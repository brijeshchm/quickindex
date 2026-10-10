
@extends('client.layouts.app')
@section('title', 'Careers | Join QuickDials - Build Your Future With Us')
@section('description', 'Explore career opportunities at QuickDials. Join our growing team in technology, digital marketing, sales, customer support, business development, and more.')
@section('keywords', 'QuickDials careers, jobs at QuickDials, career opportunities India, digital marketing jobs, software developer jobs, sales jobs, customer support jobs, business development careers, local business platform jobs, IT company careers, startup jobs India, QuickDials hiring')
@section('content') 
    <style>
        
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .anim-fade-down { animation: fadeDown .55s ease both; }
        .anim-fade-up   { animation: fadeUp   .55s ease both; }

        .job-card {
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px -6px rgba(0,0,0,.1);
        }

        .input-focus {
            transition: border-color .2s, box-shadow .2s, background .2s;
        }
        .input-focus:focus {
            outline: none;
            border-color: #6366f1;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(99,102,241,.12);
        }
    </style>


{{-- ══════════════════════════
     BANNER
══════════════════════════ --}}
<!-- <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-7 text-center">
    <p class="text-xl font-bold">QuickDials – Grow With Us</p>
    <p class="text-indigo-200 mt-1 text-sm">Globally recognised training programmes</p>
</div> -->

{{-- ══════════════════════════
     HERO
══════════════════════════ --}}
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16 text-center">
    <h1 class="text-3xl md:text-5xl font-bold mb-4 anim-fade-down">
        Careers at QuickDials – Join Our Growing Team
    </h1>
    <p class="text-lg opacity-90 anim-fade-down" style="animation-delay:.12s">
        Build your career with us and grow together
    </p>
</section>

{{-- ══════════════════════════
     OPEN POSITIONS
══════════════════════════ --}}
<section class="max-w-6xl mx-auto px-4 py-14">

    <h2 class="text-2xl font-bold mb-8 text-center">Open Positions</h2>

    @php
    $jobs = [
       /* [
            'id'         => 1,
            'title'      => 'Frontend Developer',
            'type'       => 'Full Time',
            'location'   => 'Noida, India',
            'experience' => '2-4 Years',
        ],
        [
            'id'         => 2,
            'title'      => 'Backend Developer (Laravel)',
            'type'       => 'Full Time',
            'location'   => 'Remote',
            'experience' => '3-5 Years',
        ],*/
        [
            'id'         => 3,
            'title'      => 'SEO Executive',
            'type'       => 'Full Time',
            'location'   => 'Delhi',
            'experience' => '1-3 Years',
        ],
        [
            'id'         => 4,
            'title'      => 'Digital Marketing Manager',
            'type'       => 'Full Time',
            'location'   => 'Hybrid',
            'experience' => '3-6 Years',
        ],
    ];
    @endphp

    <div class="grid md:grid-cols-2 gap-6">
        @foreach($jobs as  $job)
        <?php $i =0; $i++; ?>
        <div class="job-card bg-white p-6 rounded-2xl shadow border border-slate-100 anim-fade-up"
             style="animation-delay:{{ $i * 0.1 }}s">

            <h3 class="text-lg font-semibold mb-2">{{ $job['title'] }}</h3>

            <div class="flex flex-wrap gap-2 text-sm text-gray-500 mb-4">
                <span class="flex items-center gap-1 px-2.5 py-1 bg-slate-100 rounded-full">
                    📍 {{ $job['location'] }}
                </span>
                <span class="flex items-center gap-1 px-2.5 py-1 bg-blue-50 text-blue-700 rounded-full font-medium">
                    💼 {{ $job['type'] }}
                </span>
                <span class="flex items-center gap-1 px-2.5 py-1 bg-indigo-50 text-indigo-700 rounded-full">
                    ⏳ {{ $job['experience'] }}
                </span>
            </div>

            {{-- Apply button triggers modal --}}
            <button
                @click="openModal('{{ addslashes($job['title']) }}')"
                x-data
                class="mt-1 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors">
                Apply Now
            </button>
        </div>
        @endforeach
    </div>
</section>

{{-- ══════════════════════════
     CTA BANNER
══════════════════════════ --}}
<section class="text-center py-14 bg-white border-t border-slate-100">
    <h3 class="text-xl font-semibold mb-2">Didn't find a suitable role?</h3>
    <p class="text-gray-500 mb-5">Send your resume and we'll get back to you</p>
    <a href="mailto:hr@quickdials.com" rel="nofollow"
       class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-7 py-3 rounded-lg transition-colors">
        Send Resume
    </a>
</section>

 

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div
    x-data="applyModal()"
    @open-modal.window="open($event.detail)"
    @keydown.escape.window="close()"
    x-cloak
>
    <div
        x-show="isOpen"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black/50 p-4"
        @click.self="close()"
    >
        <div
            role="dialog"
            aria-modal="true"
            aria-labelledby="career-modal-title"
            class="max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-2xl bg-white shadow-2xl"
        >
            <div class="flex items-start justify-between gap-4 bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-5 text-white">
                <div>
                    <p class="text-xs uppercase tracking-wider text-blue-200">
                        Applying for
                    </p>

                    <h2
                        id="career-modal-title"
                        class="mt-1 text-lg font-bold"
                        x-text="jobTitle || 'Career opportunity'"
                    ></h2>
                </div>

                <button
                    type="button"
                    @click="close()"
                    :disabled="loading"
                    aria-label="Close application form"
                    class="text-2xl leading-none disabled:opacity-50"
                >
                    &times;
                </button>
            </div>

            <div x-show="submitted" class="px-6 py-10 text-center">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-3xl text-green-600">
                    ✓
                </div>

                <h3 class="text-xl font-bold text-slate-900">
                    Application submitted!
                </h3>

                <p
                    class="mt-2 text-sm text-slate-600"
                    x-text="successMessage"
                ></p>

                <button
                    type="button"
                    @click="close()"
                    class="mt-5 rounded-lg bg-blue-600 px-6 py-2.5 font-semibold text-white"
                >
                    Close
                </button>
            </div>

            <form
                x-show="!submitted"
                x-ref="applicationForm"
                action="{{ route('careers.apply') }}"
                method="POST"
                enctype="multipart/form-data"
                @submit.prevent="submit($event)"
                @input="clearError($event.target.name)"
                @change="clearError($event.target.name)"
                class="space-y-4 p-6"
            >
                @csrf

                <input type="hidden" name="job" :value="jobTitle">

                <div
                    x-show="errorMessage"
                    role="alert"
                    class="rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700"
                    x-text="errorMessage"
                ></div>

                <div>
                    <label for="career-name" class="mb-1 block text-sm font-semibold">
                        Full name
                    </label>

                    <input
                        id="career-name"
                        x-ref="nameInput"
                        type="text"
                        name="name"
                        placeholder="Enter Full name"
                        maxlength="255"
                                                class="w-full rounded-xl border border-slate-300 px-4 py-2.5"
                        :class="{ 'border-red-500': errors.name }"
                    >

                    <p x-show="errors.name" x-text="errors.name?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <div>
                    <label for="career-email" class="mb-1 block text-sm font-semibold">
                        Email
                    </label>

                    <input
                        id="career-email"
                        type="email"
                        name="email"
                        placeholder="Enter Email"
                        maxlength="255"
                                                class="w-full rounded-xl border border-slate-300 px-4 py-2.5"
                        :class="{ 'border-red-500': errors.email }"
                    >

                    <p x-show="errors.email" x-text="errors.email?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <div>
                    <label for="career-mobile" class="mb-1 block text-sm font-semibold">
                        Mobile
                    </label>

                    <input
                        id="career-mobile"
                        type="tel"
                        name="mobile"
                        placeholder="Enter Mobile"
                        maxlength="30"
                                                class="w-full rounded-xl border border-slate-300 px-4 py-2.5"
                        :class="{ 'border-red-500': errors.mobile }"
                    >

                    <p x-show="errors.mobile" x-text="errors.mobile?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <div>
                    <label for="career-subject" class="mb-1 block text-sm font-semibold">
                        Subject
                    </label>

                    <input
                        id="career-subject"
                        type="text"
                        name="subject"
                        x-model="subject"
                        placeholder="Enter subject"
                        maxlength="255"
                        class="w-full rounded-xl border border-slate-300 px-4 py-2.5"
                    >

                    <p x-show="errors.subject" x-text="errors.subject?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <div>
                    <label for="career-resume" class="mb-1 block text-sm font-semibold">
                        Resume
                    </label>

                    <input
                        id="career-resume"
                        type="file"
                        name="resume"
                        accept=".pdf,.doc,.docx" class="w-full rounded-xl border border-slate-300 p-3 text-sm"
                        :class="{ 'border-red-500': errors.resume }"
                    >

                    <p class="mt-1 text-xs text-slate-500">
                        PDF, DOC or DOCX. Maximum 5 MB.
                    </p>

                    <p x-show="errors.resume" x-text="errors.resume?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <div>
                    <label for="career-message" class="mb-1 block text-sm font-semibold">
                        Cover letter / Message
                    </label>

                    <textarea
                        id="career-message"
                        name="message"
                        rows="4"
                        placeholder="Enter career message"
                        maxlength="5000"
                                               class="w-full rounded-xl border border-slate-300 px-4 py-2.5"
                        :class="{ 'border-red-500': errors.message }"
                    ></textarea>

                    <p x-show="errors.message" x-text="errors.message?.[0]" class="mt-1 text-sm text-red-600"></p>
                </div>

                <button
                    type="submit"
                    :disabled="loading"
                    class="w-full rounded-xl bg-blue-600 py-3 font-semibold text-white hover:bg-blue-700 disabled:cursor-not-allowed disabled:opacity-60"
                    x-text="loading ? 'Submitting...' : 'Submit application'"
                ></button>
            </form>
        </div>
    </div>
</div>

<script>
function openModal(title) {
    window.dispatchEvent(new CustomEvent('open-modal', {
        detail: title
    }));
}

function applyModal() {
    return {
        isOpen: false,
        submitted: false,
        loading: false,
        jobTitle: '',
        subject: '',
        errors: {},
        errorMessage: '',
        successMessage: '',
        previousOverflow: '',
        previousFocus: null,

        open(title) {
            if (this.loading || this.isOpen) return;

            this.previousFocus = document.activeElement;
            this.previousOverflow = document.body.style.overflow;

            this.jobTitle = title || '';
            this.submitted = false;
            this.errors = {};
            this.errorMessage = '';
            this.successMessage = '';

            this.$refs.applicationForm.reset();
            this.subject = title ? `Applying for ${title}` : '';

            this.isOpen = true;
            document.body.style.overflow = 'hidden';

            this.$nextTick(() => this.$refs.nameInput.focus());
        },

        close() {
            if (this.loading || !this.isOpen) return;

            this.isOpen = false;
            document.body.style.overflow = this.previousOverflow;

            if (this.previousFocus?.isConnected) {
                this.previousFocus.focus();
            }
        },

        clearError(name) {
            if (!name) return;

            const nextErrors = { ...this.errors };
            delete nextErrors[name];
            this.errors = nextErrors;
        },

        async submit(event) {
            if (this.loading) return;

            this.errors = {};
            this.errorMessage = '';

            const form = event.currentTarget;

            if (!form.reportValidity()) return;

            const data = new FormData(form);
            const resume = data.get('resume');

            if (resume && resume.size > 5 * 1024 * 1024) {
                this.errors = {
                    resume: ['Resume must not exceed 5 MB.']
                };
                return;
            }

            this.loading = true;

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value
                    },
                    body: data
                });

                if (response.status === 419) {
                    this.errorMessage = 'Session expired. Please refresh the page.';
                    return;
                }

                if (response.status === 413) {
                    this.errorMessage = 'Upload is too large for the server.';
                    return;
                }

                const isJSON = response.headers
                    .get('content-type')
                    ?.includes('application/json');

                const result = isJSON ? await response.json() : null;

                if (response.status === 422) {
                    this.errors = result?.errors || {};
                    this.errorMessage = result?.message || 'Please check the form fields.';

                    this.$nextTick(() => {
                        const firstField = [...form.elements].find(
                            field => this.errors[field.name] && field.type !== 'hidden'
                        );

                        firstField?.focus();
                    });

                    return;
                }

                if (!response.ok || result?.status !== true) {
                    this.errorMessage =
                        'Submission could not be confirmed. Please contact HR before submitting again.';
                    return;
                }

                this.successMessage = result.message;
                this.submitted = true;
                form.reset();

            } catch (error) {
                this.errorMessage =
                    'Submission could not be confirmed. Please check your connection before trying again.';
            } finally {
                this.loading = false;
            }
        }
    };
}
</script>

 
 
 @endsection
