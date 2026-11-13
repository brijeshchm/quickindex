@extends('interview.layouts.app')
@section('title')
NextJs Interview Questions & Answers
@endsection  
@section('description'),  
Explore Next.js interview questions and answers covering routing, server components, SSR, static generation, caching, APIs, and performance optimization
@endsection


@section('content')	 
 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>NextJs<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/laravel-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/restapi-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
  
 <div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
  

<!-- Blade partial. Next.js examples are escaped display text. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js is a React framework used to build full-stack web applications. It provides features such as server-side rendering, static site generation, file-based routing, API endpoints, caching, and image optimization.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Key features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Server-side rendering (SSR).</li>
        <li>Static site generation (SSG).</li>
        <li>Incremental Static Regeneration (ISR).</li>
        <li>File-based routing.</li>
        <li>React Server Components.</li>
        <li>API Route Handlers.</li>
        <li>Image optimization.</li>
        <li>Middleware and authentication patterns.</li>
        <li>SEO-friendly rendering.</li>
        <li>Backend and frontend integration.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between React and Next.js?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">React</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Next.js</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">JavaScript UI library</td><td class="border border-slate-200 px-4 py-3 text-gray-700">React framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Requires routing solution separately</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Built-in file-based routing</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Client rendering commonly used</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports server and client rendering</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">No built-in full-stack backend conventions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports Route Handlers and server-side logic</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">SEO needs additional rendering strategy</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports server-rendered and static pages</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Build tooling configured separately</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Provides integrated framework tooling</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: React handles UI development, while Next.js provides additional application architecture, routing, rendering, and server-side capabilities.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the main features of Next.js?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>File-system-based routing.</li>
        <li>Server Components and Client Components.</li>
        <li>SSR, SSG, and ISR.</li>
        <li>Nested layouts.</li>
        <li>Route Handlers.</li>
        <li>Dynamic routes.</li>
        <li>Middleware (now also called Proxy in newer Next.js conventions).</li>
        <li>Built-in image and font optimization.</li>
        <li>Metadata and SEO support.</li>
        <li>Streaming and Suspense.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between App Router and Pages Router?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js provides two routing systems.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">App Router</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Pages Router</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">app/</code> directory</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">pages/</code> directory</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports React Server Components</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Traditionally uses client components</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses layouts and nested layouts</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">_app.js</code> and <code class="rounded bg-slate-100 px-1 text-base">_document.js</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses Server Actions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses API routes and other server mechanisms</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">route.js</code> for Route Handlers</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">pages/api</code> for API routes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports modern streaming patterns</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses older data-fetching conventions</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">App Router example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/
├── layout.js
├── page.js
├── about/
│   └── page.js
└── users/
    └── page.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Pages Router example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>pages/
├── index.js
├── about.js
├── users.js
└── api/
    └── users.js</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is file-based routing in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">File-based routing means the URL structure is automatically created based on files and folders in the routing directory.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/
├── page.js
├── about/
│   └── page.js
└── contact/
    └── page.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Routes:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">/</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">/about</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">/contact</code></li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">No separate route configuration is required for these pages.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a dynamic route in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A dynamic route allows a URL segment to be represented by a variable.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/
└── products/
    └── [id]/
        └── page.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">URL:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>/products/101
/products/102
/products/103</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Page:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default async function ProductPage({ params }) {
    const { id } = await params;

    return &lt;h1&gt;Product ID: {id}&lt;/h1&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">In current App Router versions, <code class="rounded bg-slate-100 px-1 text-base">params</code> is asynchronous and should be awaited.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are catch-all routes?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Catch-all routes capture multiple URL segments.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/docs/[...slug]/page.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">It can match:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>/docs/react
/docs/react/hooks
/docs/react/hooks/use-state</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Optional catch-all routes use:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/docs/[[...slug]]/page.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This also matches <code class="rounded bg-slate-100 px-1 text-base">/docs</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the purpose of <code class="rounded bg-slate-100 px-1 text-base">layout.js</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A layout defines shared UI that is preserved across multiple pages within a route segment.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default function RootLayout({ children }) {
    return (
        &lt;html lang="en"&gt;
            &lt;body&gt;
                &lt;header&gt;My Website&lt;/header&gt;

                &lt;main&gt;{children}&lt;/main&gt;

                &lt;footer&gt;Copyright 2026&lt;/footer&gt;
            &lt;/body&gt;
        &lt;/html&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Shared navigation.</li>
        <li>Common headers and footers.</li>
        <li>Persistent UI.</li>
        <li>Nested layouts.</li>
        <li>Consistent application structure.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">page.js</code> and <code class="rounded bg-slate-100 px-1 text-base">layout.js</code>?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">page.js</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">layout.js</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Defines route content</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Defines shared route UI</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Required to make a route publicly accessible</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can wrap multiple pages</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Changes when navigating to another page</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can preserve its state across navigation</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Receives route parameters</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Receives children and applicable layout props</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">loading.js</code> in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">loading.js</code> provides a loading UI while a route segment's content is being loaded.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default function Loading() {
    return &lt;h2&gt;Loading page...&lt;/h2&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js uses it to provide a Suspense-based loading boundary.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">error.js</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">error.js</code> defines an error boundary for a route segment.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

export default function Error({ error, reset }) {
    return (
        &lt;div&gt;
            &lt;h2&gt;Something went wrong!&lt;/h2&gt;

            &lt;button onClick={() =&gt; reset()}&gt;
                Try again
            &lt;/button&gt;
        &lt;/div&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">It must be a Client Component.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">not-found.js</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">not-found.js</code> defines the UI displayed when a route or resource cannot be found.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default function NotFound() {
    return &lt;h1&gt;404 - Page Not Found&lt;/h1&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">You can trigger it programmatically using:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { notFound } from "next/navigation";

if (!product) {
    notFound();
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 2: Rendering Concepts – Very Important</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Server-Side Rendering (SSR)?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Server-Side Rendering means generating HTML on the server for a request and sending the rendered result to the browser.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Search engines can receive rendered HTML.</li>
        <li>Initial content can be displayed quickly.</li>
        <li>Data can be fetched securely on the server.</li>
        <li>Sensitive server-side credentials can remain private.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default async function UsersPage() {
    const response = await fetch(
        "https://jsonplaceholder.typicode.com/users",
        { cache: "no-store" }
    );

    const users = await response.json();

    return (
        &lt;div&gt;
            {users.map(user =&gt; (
                &lt;h2 key={user.id}&gt;{user.name}&lt;/h2&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Static Site Generation (SSG)?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">SSG generates HTML at build time or during static generation, rather than generating it separately for every request.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Fast page delivery.</li>
        <li>CDN caching.</li>
        <li>Reduced server processing.</li>
        <li>Good SEO support.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default function AboutPage() {
    return &lt;h1&gt;About Us&lt;/h1&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">A page with no request-specific dynamic dependencies can be statically rendered by Next.js.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Incremental Static Regeneration (ISR)?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ISR allows statically generated pages to be updated after deployment without rebuilding the entire website.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export const revalidate = 60;

export default async function ProductsPage() {
    const response = await fetch(
        "https://api.example.com/products"
    );

    const products = await response.json();

    return (
        &lt;div&gt;
            {products.map(product =&gt; (
                &lt;h2 key={product.id}&gt;{product.name}&lt;/h2&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Here, the data can be revalidated according to the configured interval.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between SSR, SSG, and ISR?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Feature</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">SSR</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">SSG</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">ISR</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Rendering</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Per request</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Build/static generation</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Static generation with revalidation</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Freshness</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Request-time data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Build-time data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Updated periodically or on demand</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Server processing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Higher</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Lower for cached pages</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Moderate</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for</td><td class="border border-slate-200 px-4 py-3 text-gray-700">User dashboards</td><td class="border border-slate-200 px-4 py-3 text-gray-700">About pages and documentation</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Product and content pages</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are React Server Components?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">React Server Components are components that render on the server and do not send their component JavaScript to the browser as client-side component code.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js App Router uses Server Components by default.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Less client-side JavaScript.</li>
        <li>Direct access to server-side data sources.</li>
        <li>Better separation of server and browser responsibilities.</li>
        <li>Improved initial page delivery in appropriate applications.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default async function UsersPage() {
    const users = await getUsersFromDatabase();

    return (
        &lt;div&gt;
            {users.map(user =&gt; (
                &lt;p key={user.id}&gt;{user.name}&lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Server Components and Client Components?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Server Components</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Client Components</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Default in App Router</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Declared using <code class="rounded bg-slate-100 px-1 text-base">"use client"</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Render on server</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Support browser-side interactivity</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can directly access server resources</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Use browser APIs and event handlers</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Cannot use state/effect Hooks</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can use <code class="rounded bg-slate-100 px-1 text-base">useState</code> and <code class="rounded bg-slate-100 px-1 text-base">useEffect</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Do not ship component code as client JS</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Their code is included in the client bundle</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Client Component example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { useState } from "react";

export default function Counter() {
    const [count, setCount] = useState(0);

    return (
        &lt;button onClick={() =&gt; setCount(count + 1)}&gt;
            Count: {count}
        &lt;/button&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the <code class="rounded bg-slate-100 px-1 text-base">"use client"</code> directive?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">"use client"</code> marks a module as a Client Component entry point.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is required when a component needs browser interactivity, such as:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>State.</li>
        <li>Event handlers.</li>
        <li>Effects.</li>
        <li>Browser APIs.</li>
        <li>Client-side custom Hooks.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { useState } from "react";

export default function Search() {
    const [search, setSearch] = useState("");

    return (
        &lt;input
            value={search}
            onChange={e =&gt; setSearch(e.target.value)}
        /&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview point: Do not mark every component as <code class="rounded bg-slate-100 px-1 text-base">"use client"</code>. Keep the client boundary as small as practical.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is hydration in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Hydration is the process where React attaches client-side behavior and event handlers to HTML that was already rendered by the server.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Process:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Server generates HTML.</li>
        <li>Browser displays HTML.</li>
        <li>JavaScript loads.</li>
        <li>React hydrates the application.</li>
        <li>Event handlers and interactive behavior become active.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Hydration error example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default function Page() {
    return &lt;h1&gt;{Math.random()}&lt;/h1&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The server and browser can generate different values, causing a hydration mismatch.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Solution: Render consistent initial content, and use an effect for browser-only values when appropriate.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 3: Data Fetching and API Integration</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you fetch API data in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">In App Router, you can fetch data directly inside an asynchronous Server Component.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default async function ProductsPage() {
    const response = await fetch(
        "https://api.example.com/products"
    );

    if (!response.ok) {
        throw new Error("Failed to fetch products");
    }

    const products = await response.json();

    return (
        &lt;div&gt;
            {products.map(product =&gt; (
                &lt;div key={product.id}&gt;
                    {product.name}
                &lt;/div&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">You can also use libraries such as Axios, TanStack Query, and SWR, depending on the use case.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between server-side and client-side data fetching?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Server-side fetching:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Data is fetched on the server.</li>
        <li>Credentials can be kept private.</li>
        <li>Useful for initial page content.</li>
        <li>Can reduce browser-side API requests.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Client-side fetching:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Data is fetched from the browser.</li>
        <li>Useful for interactive dashboards.</li>
        <li>Can refresh data after user actions.</li>
        <li>Supports browser-driven updates.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Route Handler in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A Route Handler allows you to create HTTP API endpoints using a <code class="rounded bg-slate-100 px-1 text-base">route.js</code> or <code class="rounded bg-slate-100 px-1 text-base">route.ts</code> file inside the App Router.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/
└── api/
    └── users/
        └── route.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">GET API:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function GET() {
    const users = [
        { id: 1, name: "John" },
        { id: 2, name: "David" }
    ];

    return NextResponse.json(users);
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you create a POST API in Next.js?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function POST(request) {
    try {
        const body = await request.json();

        if (!body.name) {
            return NextResponse.json(
                { message: "Name is required" },
                { status: 422 }
            );
        }

        return NextResponse.json(
            {
                message: "User created successfully",
                data: body
            },
            { status: 201 }
        );

    } catch {
        return NextResponse.json(
            { message: "Invalid request" },
            { status: 400 }
        );
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are Server Actions?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Server Actions are asynchronous server-side functions that can be called from supported React interactions and forms.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">They are useful for data mutations, such as creating, updating, and deleting records.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use server";

export async function createUser(formData) {
    const name = formData.get("name");

    // Validate input and save to database here.

    return {
        success: true,
        name
    };
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Usage:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { createUser } from "./actions";

export default function UserForm() {
    return (
        &lt;form action={createUser}&gt;
            &lt;input name="name" placeholder="Name" required /&gt;
            &lt;button type="submit"&gt;Save&lt;/button&gt;
        &lt;/form&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Security point: Server Actions are server endpoints. Validate all input and verify authentication and authorization inside each action.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you connect Next.js with a Laravel API?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use Next.js as the frontend and Laravel as the backend API.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Architecture:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Browser
   |
   v
Next.js Application
   |
   v
Laravel REST API
   |
   v
MySQL Database</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel API route:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js Server Component:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export default async function ProductsPage() {
    const response = await fetch(
        `${process.env.LARAVEL_API_URL}/api/products`,
        { cache: "no-store" }
    );

    if (!response.ok) {
        throw new Error("Unable to load products");
    }

    const products = await response.json();

    return (
        &lt;div&gt;
            {products.map(product =&gt; (
                &lt;p key={product.id}&gt;{product.name}&lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Keep private backend URLs and credentials in server-only environment variables. Do not prefix secrets with <code class="rounded bg-slate-100 px-1 text-base">NEXT_PUBLIC_</code>.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 4: Routing, Navigation and Middleware</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">Link</code> in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">The <code class="rounded bg-slate-100 px-1 text-base">Link</code> component is used for client-side navigation between routes without requiring a full browser page reload.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import Link from "next/link";

export default function Navbar() {
    return (
        &lt;nav&gt;
            &lt;Link href="/"&gt;Home&lt;/Link&gt;
            &lt;Link href="/about"&gt;About&lt;/Link&gt;
            &lt;Link href="/contact"&gt;Contact&lt;/Link&gt;
        &lt;/nav&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster navigation.</li>
        <li>Client-side transitions.</li>
        <li>Automatic prefetching in appropriate situations.</li>
        <li>Better user experience.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">useRouter()</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useRouter()</code> is a Client Component Hook used for programmatic navigation and route operations.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { useRouter } from "next/navigation";

export default function Login() {
    const router = useRouter();

    function handleLogin() {
        // After successful authentication
        router.push("/dashboard");
    }

    return (
        &lt;button onClick={handleLogin}&gt;
            Login
        &lt;/button&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important methods:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Method</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.push()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Navigate to a new route</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.replace()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Navigate without adding history entry</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.back()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Go to previous page</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.forward()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Go forward</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.refresh()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Refresh the current route's server data and UI</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">router.prefetch()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Prefetch a route</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">usePathname()</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">usePathname()</code> returns the current URL pathname.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { usePathname } from "next/navigation";

export default function Navigation() {
    const pathname = usePathname();

    return &lt;p&gt;Current path: {pathname}&lt;/p&gt;;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">useSearchParams()</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useSearchParams()</code> reads query string parameters from the current URL.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">For example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>/products?category=mobile&amp;page=2</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { useSearchParams } from "next/navigation";

export default function ProductFilter() {
    const searchParams = useSearchParams();

    const category = searchParams.get("category");
    const page = searchParams.get("page");

    return (
        &lt;p&gt;
            Category: {category}, Page: {page}
        &lt;/p&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Middleware in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Middleware allows code to run before a request is completed. It can inspect requests and perform actions such as redirects, rewrites, and request or response header handling.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">In newer Next.js conventions, this functionality is called Proxy and uses <code class="rounded bg-slate-100 px-1 text-base">proxy.js</code> or <code class="rounded bg-slate-100 px-1 text-base">proxy.ts</code>. Existing projects may still use <code class="rounded bg-slate-100 px-1 text-base">middleware.js</code>.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using the newer Proxy convention:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export function proxy(request) {
    const token = request.cookies.get("token")?.value;

    if (!token &amp;&amp; request.nextUrl.pathname.startsWith("/dashboard")) {
        return NextResponse.redirect(
            new URL("/login", request.url)
        );
    }

    return NextResponse.next();
}

export const config = {
    matcher: ["/dashboard/:path*"]
};</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Proxy checks can improve request handling, but they are not a replacement for authorization inside protected pages, Server Actions, Route Handlers, and backend services.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between redirect and rewrite?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">redirect()</code> sends the browser to another URL. The URL changes.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">rewrite()</code> internally serves another destination while keeping the original URL visible in the browser.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export function proxy(request) {
    const url = request.nextUrl.clone();

    if (url.pathname === "/old-page") {
        return NextResponse.redirect(
            new URL("/new-page", request.url)
        );
    }

    return NextResponse.next();
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Redirect: old URL to new URL.</li>
        <li>Rewrite: route a public URL to an internal destination.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 5: Authentication and Security</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement authentication in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Authentication verifies the identity of a user.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Typical implementation steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Create a login form.</li>
        <li>Send credentials to a secure backend.</li>
        <li>Validate credentials on the server.</li>
        <li>Create a session or issue an authentication token.</li>
        <li>Store session credentials securely, preferably in HttpOnly cookies.</li>
        <li>Verify the session on protected requests.</li>
        <li>Implement logout and session expiration.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example setting a session cookie in a Route Handler:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function POST(request) {
    const { email, password } = await request.json();

    // Replace with real authentication against your backend.
    const authenticated = await verifyUser(email, password);

    if (!authenticated) {
        return NextResponse.json(
            { message: "Invalid credentials" },
            { status: 401 }
        );
    }

    const response = NextResponse.json({
        message: "Login successful"
    });

    response.cookies.set("session", authenticated.sessionId, {
        httpOnly: true,
        secure: process.env.NODE_ENV === "production",
        sameSite: "lax",
        path: "/"
    });

    return response;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The <code class="rounded bg-slate-100 px-1 text-base">verifyUser()</code> function is illustrative; it must be implemented using a trusted authentication service.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between authentication and authorization?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Authentication determines who the user is.</li>
        <li>Authorization determines what the authenticated user is allowed to do.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">A user successfully logs in. Authentication confirms their identity. Authorization checks whether they have permission to access the admin dashboard.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you protect private routes?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use multiple security layers:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Check session status.</li>
        <li>Verify authentication on the server.</li>
        <li>Check user roles and permissions.</li>
        <li>Protect API endpoints.</li>
        <li>Validate authorization for every sensitive operation.</li>
        <li>Redirect unauthenticated users where appropriate.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Do not rely only on hiding buttons or protecting frontend routes.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is CSRF?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">CSRF stands for Cross-Site Request Forgery. It is an attack in which a malicious website attempts to make a user's browser perform an unwanted action on another website where the user is authenticated.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Prevention:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Use appropriate SameSite cookie settings.</li>
        <li>Implement CSRF tokens where required.</li>
        <li>Validate request origins where appropriate.</li>
        <li>Avoid unsafe state-changing GET requests.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is XSS?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">XSS stands for Cross-Site Scripting. It occurs when an attacker injects malicious JavaScript into a web application and causes it to execute in another user's browser.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Prevention:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Escape untrusted content.</li>
        <li>Avoid unsafe HTML rendering.</li>
        <li>Sanitize HTML when rich HTML is required.</li>
        <li>Configure Content Security Policy.</li>
        <li>Keep dependencies updated.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 6: Caching and Data Management</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is caching in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Caching stores previously generated or fetched data so it can be reused instead of repeating expensive operations.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js has multiple caching mechanisms, and their exact defaults depend on the Next.js version and rendering configuration.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common concepts include:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Request memoization.</li>
        <li>Data caching.</li>
        <li>Full Route Cache.</li>
        <li>Client-side Router Cache.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster response times.</li>
        <li>Reduced database/API load.</li>
        <li>Better scalability.</li>
        <li>Improved user experience.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">revalidate</code> in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">revalidate</code> controls when cached data or route output should be refreshed.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export const revalidate = 60;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This configures time-based revalidation for the relevant route segment.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">You can also configure it on an individual fetch:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const response = await fetch(
    "https://api.example.com/products",
    {
        next: {
            revalidate: 60
        }
    }
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">revalidatePath()</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">revalidatePath()</code> invalidates cached data associated with a particular route path so it can be regenerated.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use server";

import { revalidatePath } from "next/cache";

export async function updateProduct() {
    // Update product in database.

    revalidatePath("/products");
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">revalidateTag()</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">revalidateTag()</code> invalidates cached data associated with a particular cache tag.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { revalidateTag } from "next/cache";

revalidateTag("products", "max");</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">When fetching tagged data, use:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const response = await fetch(
    "https://api.example.com/products",
    {
        next: {
            tags: ["products"]
        }
    }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use case: After updating a product, invalidate the product cache instead of refreshing unrelated pages.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage environment variables in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Environment variables store configuration outside source code.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example <code class="rounded bg-slate-100 px-1 text-base">.env.local</code>:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DATABASE_URL=mysql://user:password&#64;localhost/database
LARAVEL_API_URL=https://api.example.com
NEXT_PUBLIC_APP_NAME=Quick Dials</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Usage:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const apiUrl = process.env.LARAVEL_API_URL;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">NEXT_PUBLIC_</code> variables can be exposed to the browser.</li>
        <li>Keep database passwords and secret API keys server-side.</li>
        <li>Never commit secret environment files to public repositories.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 7: SEO and Performance Optimization</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement SEO in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js provides a Metadata API for managing page titles, descriptions, canonical URLs, Open Graph tags, and other SEO metadata.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Static metadata:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export const metadata = {
    title: "PHP Laravel Training | Quick Dials",
    description: "Explore PHP and Laravel training programs.",
    keywords: ["PHP", "Laravel", "Training"]
};

export default function Page() {
    return &lt;h1&gt;PHP Laravel Training&lt;/h1&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Dynamic metadata:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>export async function generateMetadata({ params }) {
    const { slug } = await params;

    const product = await getProduct(slug);

    return {
        title: product.name,
        description: product.description
    };
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">SEO best practices:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Unique title and description for each page.</li>
        <li>Correct heading hierarchy.</li>
        <li>Canonical URLs.</li>
        <li>XML sitemap.</li>
        <li>Robots configuration.</li>
        <li>Open Graph metadata.</li>
        <li>Structured data using JSON-LD.</li>
        <li>Optimized images.</li>
        <li>Internal linking.</li>
        <li>Fast page loading.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the Image component in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">next/image</code> provides optimized image rendering with features such as resizing, lazy loading, and layout stability.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import Image from "next/image";

export default function Product() {
    return (
        &lt;Image
            src="/products/mobile.jpg"
            alt="Mobile phone"
            width={500}
            height={400}
        /&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Image optimization.</li>
        <li>Responsive image delivery.</li>
        <li>Lazy loading by default in common cases.</li>
        <li>Reduced layout shifts when dimensions are provided.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">For remote images, configure permitted image hosts using <code class="rounded bg-slate-100 px-1 text-base">remotePatterns</code> in <code class="rounded bg-slate-100 px-1 text-base">next.config.js</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you improve Next.js application performance?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow these practices:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use Server Components for server-rendered content.</li>
        <li>Reduce unnecessary Client Components.</li>
        <li>Implement dynamic imports and code splitting.</li>
        <li>Optimize images using <code class="rounded bg-slate-100 px-1 text-base">next/image</code>.</li>
        <li>Use appropriate caching and revalidation.</li>
        <li>Avoid unnecessary API requests.</li>
        <li>Use pagination for large datasets.</li>
        <li>Optimize database queries.</li>
        <li>Use CDN caching where appropriate.</li>
        <li>Monitor Core Web Vitals.</li>
        <li>Reduce unused dependencies.</li>
        <li>Profile rendering and bundle sizes.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are Core Web Vitals?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Core Web Vitals are Google's user-experience metrics.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Metric</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Meaning</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">LCP</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Largest Contentful Paint – loading performance</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">INP</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Interaction to Next Paint – responsiveness</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">CLS</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Cumulative Layout Shift – visual stability</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Optimization examples:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>LCP: Optimize hero images and server response time.</li>
        <li>INP: Reduce expensive JavaScript execution.</li>
        <li>CLS: Reserve image dimensions and avoid unexpected layout changes.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is dynamic import in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Dynamic imports allow components or modules to be loaded on demand.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import dynamic from "next/dynamic";

const Chart = dynamic(
    () =&gt; import("./Chart"),
    {
        loading: () =&gt; &lt;p&gt;Loading chart...&lt;/p&gt;
    }
);

export default function Dashboard() {
    return &lt;Chart /&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Charts.</li>
        <li>Editors.</li>
        <li>Large dashboards.</li>
        <li>Components that are not immediately visible.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 8: Next.js Deployment and Production</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you deploy a Next.js application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common deployment options include Vercel, AWS, Docker-based hosting, and Node.js servers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">General deployment process:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Complete application development.</li>
        <li>Run linting and tests.</li>
        <li>Build the application.</li>
        <li>Configure production environment variables.</li>
        <li>Configure the production database and APIs.</li>
        <li>Deploy the application.</li>
        <li>Configure domain and HTTPS.</li>
        <li>Verify routes and API endpoints.</li>
        <li>Monitor logs and performance.</li>
        <li>Set up rollback and backup procedures.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Build commands:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>npm install
npm run build
npm run start</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the purpose of <code class="rounded bg-slate-100 px-1 text-base">next.config.js</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">next.config.js</code> is used to configure Next.js application behavior.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>/** &#64;type {import('next').NextConfig} */
const nextConfig = {
    images: {
        remotePatterns: [
            {
                protocol: "https",
                hostname: "images.example.com"
            }
        ]
    },

    poweredByHeader: false
};

module.exports = nextConfig;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common configurations include:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Image domains and remote patterns.</li>
        <li>Redirects and rewrites.</li>
        <li>Environment-specific settings.</li>
        <li>Build configuration.</li>
        <li>Security headers.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between development and production mode?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Development</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Production</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">npm run dev</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses build and start commands</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Detailed debugging</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Optimized output</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Fast development feedback</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Optimized application bundles</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Development error overlays</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Production error handling</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Development-oriented behavior</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Production caching and deployment behavior</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle errors in a production Next.js application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use a structured error-handling strategy:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use <code class="rounded bg-slate-100 px-1 text-base">error.js</code> boundaries for route-level rendering errors.</li>
        <li>Use <code class="rounded bg-slate-100 px-1 text-base">try...catch</code> for expected failures.</li>
        <li>Validate API request inputs.</li>
        <li>Return appropriate HTTP status codes.</li>
        <li>Log errors on the server.</li>
        <li>Avoid exposing stack traces or secrets to users.</li>
        <li>Monitor production errors.</li>
        <li>Add retry mechanisms only where appropriate.</li>
        <li>Provide useful fallback UI.</li>
        <li>Track recurring errors and fix root causes.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle database integration in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js server-side code can connect to databases through suitable drivers or ORM tools.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common choices include:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Prisma.</li>
        <li>Drizzle ORM.</li>
        <li>MySQL drivers.</li>
        <li>PostgreSQL drivers.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using a database service:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// lib/db.js
import mysql from "mysql2/promise";

export const pool = mysql.createPool({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_NAME,
    waitForConnections: true,
    connectionLimit: 10
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example query:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { pool } from "&#64;/lib/db";

export async function getUsers() {
    const [rows] = await pool.execute(
        "SELECT id, name, email FROM users"
    );

    return rows;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Keep database access in server-only modules. Use parameterized queries and avoid exposing database credentials to the browser.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 9: Practical Next.js Coding Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you create CRUD APIs in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Create a Route Handler under:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/api/employees/route.js</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">GET and POST:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function GET() {
    // Fetch employees from database.
    return NextResponse.json({
        message: "Employee list",
        data: []
    });
}

export async function POST(request) {
    try {
        const body = await request.json();

        if (!body.name) {
            return NextResponse.json(
                { message: "Name is required" },
                { status: 422 }
            );
        }

        // Save employee to database.

        return NextResponse.json(
            {
                message: "Employee created",
                data: body
            },
            { status: 201 }
        );

    } catch {
        return NextResponse.json(
            { message: "Invalid request" },
            { status: 400 }
        );
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For update and delete operations, use a dynamic route:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>app/api/employees/[id]/route.js</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function PUT(request, { params }) {
    const { id } = await params;
    const body = await request.json();

    // Validate authorization and update employee.

    return NextResponse.json({
        message: "Employee updated",
        id,
        data: body
    });
}

export async function DELETE(request, { params }) {
    const { id } = await params;

    // Validate authorization and delete employee.

    return NextResponse.json({
        message: "Employee deleted",
        id
    });
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement search functionality in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use a Client Component for interactive search and pass the search term to a backend API.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

import { useState } from "react";

export default function SearchProducts() {
    const [search, setSearch] = useState("");
    const [products, setProducts] = useState([]);

    async function handleSearch(value) {
        setSearch(value);

        const response = await fetch(
            `/api/products?search=${encodeURIComponent(value)}`
        );

        if (response.ok) {
            setProducts(await response.json());
        }
    }

    return (
        &lt;div&gt;
            &lt;input
                value={search}
                onChange={e =&gt; handleSearch(e.target.value)}
                placeholder="Search products"
            /&gt;

            {products.map(product =&gt; (
                &lt;p key={product.id}&gt;{product.name}&lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For production, add debouncing, request cancellation, backend pagination, and validation.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you upload images in Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use a form with <code class="rounded bg-slate-100 px-1 text-base">FormData</code> and send the file to a Route Handler.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Frontend:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>"use client";

export default function UploadImage() {
    async function handleUpload(event) {
        event.preventDefault();

        const formData = new FormData(event.currentTarget);

        const response = await fetch("/api/upload", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        console.log(result);
    }

    return (
        &lt;form onSubmit={handleUpload}&gt;
            &lt;input
                type="file"
                name="image"
                accept="image/*"
                required
            /&gt;

            &lt;button type="submit"&gt;Upload&lt;/button&gt;
        &lt;/form&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Backend Route Handler:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { NextResponse } from "next/server";

export async function POST(request) {
    const formData = await request.formData();
    const image = formData.get("image");

    if (!image || typeof image === "string") {
        return NextResponse.json(
            { message: "Image is required" },
            { status: 422 }
        );
    }

    if (!image.type.startsWith("image/")) {
        return NextResponse.json(
            { message: "Invalid image type" },
            { status: 400 }
        );
    }

    // Validate actual file content, size and authorization.
    // Store the file in approved object storage.

    return NextResponse.json({
        message: "Image received",
        filename: image.name
    });
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Production considerations: Validate file content rather than trusting MIME type alone, enforce file size limits, generate safe filenames, and use object storage or a secure upload service.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 10: Senior-Level Next.js Scenario-Based Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you improve a slow Next.js website?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">First, I identify the performance bottleneck using browser developer tools, server logs, and performance monitoring.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Then I apply suitable optimizations:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Reduce unnecessary Client Components.</li>
        <li>Optimize database queries and API responses.</li>
        <li>Implement caching and revalidation.</li>
        <li>Optimize images and fonts.</li>
        <li>Use lazy loading for heavy components.</li>
        <li>Reduce JavaScript bundle size.</li>
        <li>Implement pagination for large datasets.</li>
        <li>Use CDN caching.</li>
        <li>Monitor Core Web Vitals.</li>
        <li>Test performance after deployment.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you build an eCommerce website using Next.js and Laravel?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would separate the frontend and backend responsibilities.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Next.js frontend:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Home page.</li>
        <li>Product listing.</li>
        <li>Product details.</li>
        <li>Search and filters.</li>
        <li>Shopping cart.</li>
        <li>Checkout interface.</li>
        <li>Customer dashboard.</li>
        <li>SEO and metadata.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel backend:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Product and category management.</li>
        <li>User authentication.</li>
        <li>Order management.</li>
        <li>Inventory management.</li>
        <li>Payment gateway integration.</li>
        <li>REST APIs.</li>
        <li>Database operations.</li>
        <li>Admin dashboard.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Architecture:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>                 Customer
                    |
                    v
             Next.js Frontend
                    |
                    v
              Laravel REST API
                    |
          +---------+---------+
          |         |         |
          v         v         v
        MySQL    Payment    Redis
                 Gateway    Cache</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important considerations:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Secure authentication.</li>
        <li>Payment idempotency.</li>
        <li>Inventory concurrency.</li>
        <li>API validation.</li>
        <li>SEO-friendly product pages.</li>
        <li>Caching and performance.</li>
        <li>Order and payment verification.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage a legacy Next.js application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I do not immediately rewrite the entire application.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow these steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Understand the existing architecture.</li>
        <li>Identify critical modules and dependencies.</li>
        <li>Review existing API integrations.</li>
        <li>Identify security and performance issues.</li>
        <li>Add tests around important existing functionality.</li>
        <li>Refactor code incrementally.</li>
        <li>Maintain backward compatibility.</li>
        <li>Introduce reusable components.</li>
        <li>Upgrade dependencies carefully.</li>
        <li>Monitor each deployment.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage a development team working on Next.js?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">As a technical lead, I focus on architecture, task planning, delivery, and code quality.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Understand business requirements.</li>
        <li>Break work into technical tasks.</li>
        <li>Assign tasks based on developer experience.</li>
        <li>Define coding standards.</li>
        <li>Establish Git branching and pull-request processes.</li>
        <li>Review code and application architecture.</li>
        <li>Monitor progress and blockers.</li>
        <li>Conduct technical discussions.</li>
        <li>Escalate delivery risks early.</li>
        <li>Ensure testing and deployment readiness.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you test a Next.js application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use different testing levels:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Testing type</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Common tools</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Unit testing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Test individual functions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Jest, Vitest</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Component testing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Test UI behavior</td><td class="border border-slate-200 px-4 py-3 text-gray-700">React Testing Library</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Integration testing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Test connected modules</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Jest, Vitest</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">End-to-end testing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Test complete user workflows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Playwright, Cypress</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">API testing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Test endpoints and responses</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Postman</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { render, screen } from "&#64;testing-library/react";
import "&#64;testing-library/jest-dom";
import Home from "./page";

test("renders home heading", () =&gt; {
    render(&lt;Home /&gt;);

    expect(
        screen.getByRole("heading", { name: "Welcome" })
    ).toBeInTheDocument();
});</code></pre>
</div>





</div>
</section>


  </div>
   
  


 
     



<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/laravel-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/restapi-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection