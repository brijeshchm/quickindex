@extends('client.layouts.app')
@section('title', 'QuickDials Features | Business Leads, Counselling & Learning')
@section('description', 'Explore QuickDials features for business lead generation, personalized counselling, interactive learning, and support for your education and career goals.')
@section('content')
@include('client.components.banner-section')
@php

$image= '/client/images/business/group.png';
@endphp

<section class="relative overflow-hidden bg-slate-950 py-14 sm:py-20"   
        style="background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 50%, #0891b2 100%);"
    >


 <div class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full bg-blue-500/20 blur-3xl" aria-hidden="true"></div>
 <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
  <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-300"><a href="{{ route('home') }}" class="hover:text-black">Home</a><span aria-hidden="true" class="mx-2">/</span><span class="text-black">Features</span></nav>
  <span class="inline-flex rounded-full border border-blue-400/30 bg-blue-400/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-blue-200">Explore QuickDials</span>
  <h1 class="mt-5 max-w-3xl text-3xl font-bold leading-tight tracking-tight text-white sm:text-5xl">Discover what makes QuickDials useful</h1>
  <p class="mt-5 max-w-2xl text-base leading-7 text-slate-300">Explore tools and support for business connections, informed learning choices, and practical training.</p>
  <div class="mt-8 flex flex-wrap gap-3 text-sm font-medium">
   <a href="#business-leads" class="rounded-xl bg-white px-4 py-3 text-slate-900 transition hover:bg-blue-100">Business leads <span aria-hidden="true">↗</span></a>
   <a href="#counselling" class="rounded-xl border border-white/20 px-4 py-3 text-white transition hover:bg-white/10">Counselling <span aria-hidden="true">↗</span></a>
   <a href="#interactive-learning" class="rounded-xl border border-white/20 px-4 py-3 text-white transition hover:bg-white/10">Interactive learning <span aria-hidden="true">↗</span></a>
  </div>
 </div>
</section>


<section id="features" class="bg-slate-50 py-12 sm:py-16">
 <div class="mx-auto max-w-7xl space-y-10 px-4 sm:px-6 lg:px-8">
<section id="business-leads" aria-labelledby="feature-heading-0" class="scroll-mt-24 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
 <div class="flex flex-col gap-5 border-b border-slate-100 p-6 sm:flex-row sm:items-center sm:p-8">
  <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-blue-700"><img src="{{ asset('client/images/business/group.png') }}" alt="" width="40" height="40" loading="lazy" class="h-10 w-10 object-contain"></div>
  <div><p class="text-xs font-bold uppercase tracking-widest text-slate-500">Feature 01</p><h2 id="feature-heading-0" class="mt-2 text-xl font-bold text-slate-900 sm:text-2xl">Lead Generation for Your Business</h2></div>
  <span class="self-start rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 sm:ml-auto">11 highlights</span>
 </div>
 <div class="grid items-start gap-4 p-5 sm:grid-cols-2 sm:p-8 lg:grid-cols-3">
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">01</span><span class="pt-0.5 text-sm leading-6">Quality Leads</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Generate high-quality leads for educational institutions and service providers.</li>
<li>Connects institutions with highly motivated and suitable candidates.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">02</span><span class="pt-0.5 text-sm leading-6">Targeted Marketing</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Reach specific demographics and target audiences based on location, interests, and educational needs.</li>
<li>Customized marketing campaigns to attract potential students.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">03</span><span class="pt-0.5 text-sm leading-6">Personalized Counselling</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Extensive in-house one-on-one counseling helps in understanding the needs and preferences of potential students.</li>
<li>Provides educational institutions with detailed insights and qualified leads.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">04</span><span class="pt-0.5 text-sm leading-6">Interactive Platform</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Use interactive tools and features to engage with potential students.</li>
<li>Facilitate direct communication between students and educational institutions.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">05</span><span class="pt-0.5 text-sm leading-6">Database Access</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Access to a vast database of students looking for various courses and educational opportunities.</li>
<li>Detailed profiles and data to help institutions tailor their offerings.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">06</span><span class="pt-0.5 text-sm leading-6">Reviews and Ratings</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Leverage user reviews and ratings to build credibility and attract more leads.</li>
<li>Positive feedback and testimonials can enhance reputation and lead generation.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">07</span><span class="pt-0.5 text-sm leading-6">Certified Partnerships</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Being a QuickDials Certified Business Partner boosts credibility and trust.</li>
<li>Assurance of quality education and services attracts more leads.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">08</span><span class="pt-0.5 text-sm leading-6">Analytics and Reporting</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Detailed analytics and reporting tools to track the effectiveness of lead generation efforts.</li>
<li>Insights into student preferences and behavior to refine marketing strategies.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">09</span><span class="pt-0.5 text-sm leading-6">Location-Based Leads</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Generate leads based on specific geographic locations to target local students.</li>
<li>Customize offerings to meet the needs of the local student population.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">10</span><span class="pt-0.5 text-sm leading-6">Engagement Tools</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Use forums, discussion boards, and community features to engage with potential leads.</li>
<li>Foster a sense of community and belonging to attract more students.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-blue-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-blue-50 text-blue-700">11</span><span class="pt-0.5 text-sm leading-6">Career Counselling Integration</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Integrate career counseling services to attract students looking for career guidance.</li>
<li>Position your institution as a comprehensive solution for education and career planning.</li>
</ul>
</details>
</div>
</section>
<section id="counselling" aria-labelledby="feature-heading-1" class="scroll-mt-24 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
 <div class="flex flex-col gap-5 border-b border-slate-100 p-6 sm:flex-row sm:items-center sm:p-8">
  <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700"><img src="{{ asset('client/images/business/head_phone.png') }}" alt="" width="40" height="40" loading="lazy" class="h-10 w-10 object-contain"></div>
  <div><p class="text-xs font-bold uppercase tracking-widest text-slate-500">Feature 02</p><h2 id="feature-heading-1" class="mt-2 text-xl font-bold text-slate-900 sm:text-2xl">Personalized Counselling & Support</h2></div>
  <span class="self-start rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 sm:ml-auto">10 highlights</span>
 </div>
 <div class="grid items-start gap-4 p-5 sm:grid-cols-2 sm:p-8 lg:grid-cols-3">
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">01</span><span class="pt-0.5 text-sm leading-6">Real-Time Support</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Students can chat with certified counselors in real-time to get their queries answered promptly.</li>
<li>Immediate assistance for any doubts regarding courses, admissions, career paths, and more.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">02</span><span class="pt-0.5 text-sm leading-6">Personalized Guidance</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>One-on-one chat sessions to provide tailored advice based on individual student needs and preferences.</li>
<li>Helps in making informed decisions about educational and career choices.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">03</span><span class="pt-0.5 text-sm leading-6">Convenient and Accessible</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Accessible through both desktop and mobile platforms, ensuring students can reach counselors anytime, anywhere.</li>
<li>User-friendly interface to facilitate smooth communication.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">04</span><span class="pt-0.5 text-sm leading-6">Comprehensive Assistance</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Counselors can provide information on a wide range of topics, including course details, admission processes, scholarship opportunities, and more.</li>
<li>Support for both academic and career-related inquiries.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">05</span><span class="pt-0.5 text-sm leading-6">Interactive Tools</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Use of interactive features such as document sharing, video calls, and screen sharing to enhance the chat experience.</li>
<li>Enables a more thorough and interactive counseling session.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">06</span><span class="pt-0.5 text-sm leading-6">Confidential and Secure</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Ensures privacy and confidentiality of student information during chat sessions.</li>
<li>Secure platform to protect sensitive data and maintain trust.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">07</span><span class="pt-0.5 text-sm leading-6">Follow-Up Support</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Counselors can schedule follow-up sessions to ensure all doubts are cleared and students are on the right path.</li>
<li>Continuous support throughout the decision-making process.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">08</span><span class="pt-0.5 text-sm leading-6">Feedback Mechanism</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Students can provide feedback on their chat experience, helping to improve the quality of counseling services.</li>
<li>Counselors can track the effectiveness of their guidance and make necessary adjustments.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">09</span><span class="pt-0.5 text-sm leading-6">Resource Sharing</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Counselors can share links, documents, and other resources directly through the chat to assist students.</li>
<li>Access to additional reading material, application forms, and relevant websites.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-emerald-200" >
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-emerald-50 text-emerald-700">10</span><span class="pt-0.5 text-sm leading-6">Integration with Other Features</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Seamless integration with other platform features such as course comparisons, application tracking, and reviews.</li>
<li>Comprehensive support system combining various tools for a holistic counseling experience.</li>
</ul>
</details>
</div>
</section>
<section id="interactive-learning" aria-labelledby="feature-heading-2" class="scroll-mt-24 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
 <div class="flex flex-col gap-5 border-b border-slate-100 p-6 sm:flex-row sm:items-center sm:p-8">
  <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-violet-50 text-violet-700"><img src="{{ asset('client/images/business/customized-training.png') }}" alt="" width="40" height="40" loading="lazy" class="h-10 w-10 object-contain"></div>
  <div><p class="text-xs font-bold uppercase tracking-widest text-slate-500">Feature 03</p><h2 id="feature-heading-2" class="mt-2 text-xl font-bold text-slate-900 sm:text-2xl">Interactive Learning & Expert Faculty</h2></div>
  <span class="self-start rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600 sm:ml-auto">10 highlights</span>
 </div>
 <div class="grid items-start gap-4 p-5 sm:grid-cols-2 sm:p-8 lg:grid-cols-3">
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">01</span><span class="pt-0.5 text-sm leading-6">Live Virtual Classes</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Real-time interactive sessions conducted by expert faculty members.</li>
<li>Engage students with dynamic content delivery and interactive learning tools.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">02</span><span class="pt-0.5 text-sm leading-6">Expertise and Experience</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Faculty members with extensive knowledge and experience in their respective fields.</li>
<li>Provide insights, practical examples, and industry-relevant knowledge.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">03</span><span class="pt-0.5 text-sm leading-6">Engagement Tools</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Use of interactive tools such as polls, quizzes, and live Q&amp;A sessions to keep students engaged.</li>
<li>Foster active participation and discussion among students.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">04</span><span class="pt-0.5 text-sm leading-6">Personalized Learning</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Tailored teaching approaches to address individual learning styles and preferences.</li>
<li>Adaptive learning techniques to cater to diverse student needs.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">05</span><span class="pt-0.5 text-sm leading-6">Collaborative Learning Environment</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Facilitate group discussions, peer-to-peer interaction, and collaborative projects.</li>
<li>Encourage teamwork and communication skills development.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">06</span><span class="pt-0.5 text-sm leading-6">Hands-on Activities</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Incorporate practical demonstrations, case studies, and simulations to enhance learning outcomes.</li>
<li>Bridge theoretical knowledge with real-world applications.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">07</span><span class="pt-0.5 text-sm leading-6">Multimedia Integration</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Utilize multimedia resources such as videos, presentations, and virtual labs to enrich the learning experience.</li>
<li>Enhance understanding and retention of complex concepts.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">08</span><span class="pt-0.5 text-sm leading-6">Feedback and Assessment</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Provide immediate feedback on assignments, assessments, and student progress.</li>
<li>Continuous evaluation to track learning outcomes and address areas of improvement.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">09</span><span class="pt-0.5 text-sm leading-6">Accessible Learning Platform</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Accessible through desktop and mobile devices, ensuring flexibility in learning.</li>
<li>Seamless integration with learning management systems for easy navigation and resource access.</li>
</ul>
</details>
<details class="group rounded-2xl border border-slate-200 bg-white transition open:border-violet-200" open>
 <summary class="flex cursor-pointer list-none items-start justify-between gap-3 p-4 font-semibold text-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-blue-600 [&::-webkit-details-marker]:hidden">
  <span class="flex items-start gap-3"><span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-xs font-bold bg-violet-50 text-violet-700">10</span><span class="pt-0.5 text-sm leading-6">Continuous Improvement</span></span>
  <svg class="mt-1 h-4 w-4 shrink-0 text-slate-400 transition-transform group-open:rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
 </summary>
 <ul class="list-disc space-y-2 border-t border-slate-100 pb-5 pl-9 pr-5 pt-4 text-sm leading-7 text-slate-600 marker:text-blue-500">
<li>Faculty regularly update content and teaching methods based on student feedback and industry trends.</li>
<li>Commitment to delivering high-quality education and enhancing the learning experience.</li>
</ul>
</details>
</div>
</section>
<div class="flex flex-col gap-5 rounded-3xl bg-blue-700 p-6 text-white sm:flex-row sm:items-center sm:justify-between sm:p-8">
 <div><h2 class="text-xl font-bold">Find the right next step</h2><p class="mt-2 text-sm leading-6 text-blue-100">Contact QuickDials to discuss your business or learning needs.</p></div>
 <a href="{{ route('contactUs') }}" class="inline-flex shrink-0 items-center justify-center rounded-xl bg-white px-5 py-3 text-sm font-bold text-blue-700 transition hover:bg-blue-50">Contact us <span class="ml-2" aria-hidden="true">→</span></a>
</div>
 </div>
</section>
@endsection
