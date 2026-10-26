@extends('client.layouts.app')

@section('title', 'Disclaimer | QuickDials')
@section('description', 'Read the QuickDials website disclaimer, including information about website use, content accuracy, warranties, and liability.')
@include('client.components.banner-section')
@section('content')

    {{-- Page header --}}
    <section class="relative overflow-hidden bg-slate-950 py-12 sm:py-16"  style="background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 50%, #0891b2 100%);">
        <div
            class="pointer-events-none absolute -right-16 -top-20 h-64 w-64 rounded-full bg-blue-500/20 blur-3xl"
            aria-hidden="true"
        ></div>

        <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300">
                <a
                    href="{{ url('/') }}"
                    class="transition hover:text-white"
                >
                    Home
                </a>

                <span class="mx-2" aria-hidden="true">/</span>
                <span class="text-white">Disclaimer</span>
            </nav>

            <span class="inline-flex rounded-full border border-blue-400/30 bg-blue-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-blue-200">
                Website Information
            </span>

            <h1 class="mt-5 text-3xl font-bold tracking-tight text-white sm:text-5xl">
                Disclaimer
            </h1>

            <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300 sm:text-base">
                Please read the following information about using
                the QuickDials website.
            </p>
        </div>
    </section>

    {{-- Disclaimer content --}}
    <section class="bg-slate-50 py-10 sm:py-14">
        <div class="mx-auto grid max-w-6xl items-start gap-6 px-4 sm:px-6 lg:grid-cols-4 lg:gap-8 lg:px-8">

            {{-- Navigation --}}
            <aside class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm lg:sticky lg:top-24">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500">
                    On this page
                </p>

                <nav aria-label="Disclaimer sections" class="mt-4 space-y-2">
                    <a
                        href="#website-use"
                        class="block rounded-xl bg-blue-50 px-4 py-3 text-sm font-semibold text-blue-700 transition hover:bg-blue-100"
                    >
                        Using this website
                    </a>

                    <a
                        href="#warranties-liability"
                        class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900"
                    >
                        Warranties & liability
                    </a>
                </nav>

                <div class="mt-5 border-t border-slate-100 pt-5">
                    <p class="text-sm leading-6 text-slate-500">
                        Have a question about this notice?
                    </p>

                    <a
                        href="{{ url('/contact-us') }}"
                        class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 hover:underline"
                    >
                        Contact us
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </aside>

            <div class="space-y-6 lg:col-span-3">

                {{-- Website use --}}
                <section
                    id="website-use"
                    aria-labelledby="website-use-heading"
                    class="scroll-mt-24 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8"
                >
                    <div class="mb-5 flex items-center gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-700"
                            aria-hidden="true"
                        >
                            <svg
                                class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 16v-4"/>
                                <path d="M12 8h.01"/>
                            </svg>
                        </span>

                        <h2
                            id="website-use-heading"
                            class="text-xl font-bold text-slate-900 sm:text-2xl"
                        >
                            About Using This Website
                        </h2>
                    </div>

                    <p class="text-sm leading-8 text-slate-600 sm:text-base">
                        By using this website you are accepting all the terms
                        and conditions of this disclaimer notice. If you do
                        not agree with anything in this notice you should
                        not use this website.
                    </p>
                </section>

                {{-- Warranties and liability --}}
                <section
                    id="warranties-liability"
                    aria-labelledby="warranties-heading"
                    class="scroll-mt-24 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8"
                >
                    <div class="mb-6 flex items-center gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-700"
                            aria-hidden="true"
                        >
                            <svg
                                class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M12 3 2 21h20L12 3z"/>
                                <path d="M12 9v4"/>
                                <path d="M12 17h.01"/>
                            </svg>
                        </span>

                        <h2
                            id="warranties-heading"
                            class="text-xl font-bold text-slate-900 sm:text-2xl"
                        >
                            Warranties & Liability
                        </h2>
                    </div>

                    <div class="space-y-5 text-sm leading-8 text-slate-600 sm:text-base">
                        <p>
                            While every effort is made to ensure that the
                            content of this website is accurate, the website
                            is provided “as is” and quickdials makes no
                            representations or warranties in relation to the
                            accuracy or completeness of the information found
                            on it. While the content of this site is provided
                            in good faith, we do not warrant that the
                            information will be kept up to date, be true and
                            not misleading or that this site will always
                            (or ever) be available for use.
                        </p>

                        <p>
                            We do not warrant that the servers that make this
                            website available will be error, virus or bug free
                            and you accept that it is your responsibility to
                            make adequate provision for protection against
                            such threats. We recommend use any antivirus
                            for bug free access.
                        </p>

                        <p>
                            Nothing on this website should be taken to
                            constitute professional advice or a formal
                            recommendation and we execute all representations
                            and warranties relating to the content and use
                            of this site.
                        </p>

                        <p>
                            In no event will quickdials be liable for any
                            incidental, indirect, consequential or special
                            damages of any kind, or any damages whatsoever,
                            including, without limitation, those resulting
                            from loss of profit, loss of contracts, goodwill,
                            data information, income, anticipated savings or
                            business relationships, whether or not advised
                            of the possibility of such damage, arising out
                            of or in connection with the use of this website
                            or any linked websites.
                        </p>

                        <p>
                            Information, materials & technical assistance
                            are intended solely as informal guidance and
                            are neither a determination of any legal rights
                            or responsibilities, nor binding on any agency
                            with enforcement responsibility.
                        </p>

                        <p>
                            The information in this website is true and
                            complete to the best of our knowledge. All
                            recommendation is made without guarantee on
                            the part of the author and publisher disclaims
                            any liability in connection with the use of
                            this information.
                        </p>
                    </div>
                </section>

            </div>
        </div>
    </section>

@endsection