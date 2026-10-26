@extends('client.layouts.app')

@section('title', 'QuickDials FAQ | Business Profiles, Leads & Support')
@section('description', 'Find answers to common questions about QuickDials business profiles, adding services, business leads, pricing, and customer support.')
@section('keywords', 'QuickDials FAQ, business profile, business leads, customer support')

@section('content')

@include('client.components.banner-section')
    @php
        $faqs = [
            [
                'question' => 'Why should I create a business profile on QuickDials?',
                'answer' => 'A QuickDials business profile helps you showcase your services and connect with potential customers. Educational institutions can reach prospective students, while service providers can receive relevant enquiries about their offerings.',
            ],
            [
                'question' => 'How can I add more services to my business profile?',
                'answer' => 'Contact our customer support team at help@quickdials.com for assistance with adding or updating services on your business profile.',
            ],
            [
                'question' => 'What are leads, and how can I get them?',
                'answer' => 'Leads are enquiries from people interested in your services. Contact QuickDials to learn about available lead-generation options, eligibility, pricing, and applicable terms.',
            ],
            [
                'question' => 'How can I check QuickDials pricing?',
                'answer' => 'Visit our pricing page or contact our support team to discuss the available plans and choose an option that suits your business requirements.',
            ],
        ];
    @endphp

    {{-- Page header --}}
    <section class="relative overflow-hidden bg-slate-950 py-14 sm:py-20"  style="background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 50%, #0891b2 100%);">
        <div
            class="pointer-events-none absolute -right-16 -top-20 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl"
            aria-hidden="true"
        ></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300">
                <a href="{{ route('home') }}" class="transition hover:text-black">
                    Home
                </a>

                <span class="mx-2" aria-hidden="true">/</span>

                <span class="text-white ">FAQ</span>
            </nav>

            <span class="inline-flex rounded-full border border-blue-400/30 bg-blue-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-white">
                Help & Support
            </span>

            <h1 class="mt-5 max-w-3xl text-3xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                Frequently asked questions
            </h1>

            <p class="mt-5 max-w-2xl text-base leading-7 text-white">
                Find answers about business profiles, services, leads,
                and getting started with QuickDials.
            </p>
        </div>
    </section>

    {{-- FAQ section --}}
    <section id="faq" class="bg-slate-50 py-12 sm:py-16">
        <div class="mx-auto grid max-w-7xl items-start gap-8 px-4 sm:px-6 lg:grid-cols-3 lg:px-8">

            {{-- Support card --}}
            <aside class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm lg:sticky lg:top-24">
                <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-700">
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.4 8.4 0 0 1 3.8-.9h.5a8.5 8.5 0 0 1 8 8z"/>
                    </svg>
                </span>

                <h2 class="mt-5 text-xl font-bold text-slate-900">
                    Still have a question?
                </h2>

                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Contact our support team for help with your
                    business profile or service enquiries.
                </p>

                <a
                    href="mailto:help@quickdials.com"
                    class="mt-5 block break-all text-sm font-semibold text-blue-700 hover:underline"
                >
                    help@quickdials.com
                </a>

                <a
                    href="{{ route('contactUs') }}"
                    class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-700 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-800"
                >
                    Contact support
                    <span aria-hidden="true">→</span>
                </a>
            </aside>

            {{-- Native accordion: no Bootstrap or JavaScript required --}}
            <div class="space-y-4 lg:col-span-2">
                @foreach($faqs as $faq)
                    <details
                        class="rounded-2xl border border-slate-200 bg-white shadow-sm open:border-blue-300 [&[open]_.faq-plus]:hidden [&[open]_.faq-minus]:block"
                        @if($loop->first) open @endif
                    >
                        <summary class="flex cursor-pointer list-none items-start justify-between gap-4 p-5 text-left focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden sm:p-6">
                            <span class="flex items-start gap-3">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-xs font-bold text-blue-700">
                                    {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="pt-1 text-sm font-semibold leading-6 text-slate-900 sm:text-base">
                                    {{ $faq['question'] }}
                                </span>
                            </span>

                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-100 text-xl font-medium leading-none text-blue-700"
                                aria-hidden="true"
                            >
                                <span class="faq-plus block">+</span>
                                <span class="faq-minus hidden">−</span>
                            </span>
                        </summary>

                        <div class="border-t border-slate-100 px-5 py-5 sm:px-6">
                            <p class="text-sm leading-7 text-slate-600">
                                {{ $faq['answer'] }}
                            </p>

                            @if($loop->last)
                                <a
                                    href="{{ route('pricing') }}"
                                    class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 hover:underline"
                                >
                                    View pricing
                                    <span aria-hidden="true">→</span>
                                </a>
                            @endif
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
@endsection