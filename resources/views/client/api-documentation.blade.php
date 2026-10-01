@extends('client.layouts.app')

@section('title', 'QuickDials API Documentation')

@section('description', 'QuickDials API integration guide with endpoint details, JSON request examples, headers and response formats.')

@section('content')
@include('client.components.banner-section')

@php
    $endpoint = "api/lead/add";

    $requestExample = json_encode(
        ['username' => 'your_username'],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
    );

    $responseExample = json_encode([
        'status' => true,
        'message' => 'Username received successfully.',
        'data' => [
            'username' => 'your_username',
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    $errorExample = json_encode([
        'message' => 'The username field is required.',
        'errors' => [
            'username' => [
                'The username field is required.',
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
@endphp

<div class="bg-slate-50">
    <div class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:py-12">

        {{-- Header --}}
        <header class="mb-8">
            <span class="inline-flex rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">
                Developer Documentation
            </span>

            <h1 class="mt-4 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                QuickDials API
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-600">
                Send a JSON POST request containing your username.
                This guide describes the username validation handler shown below.
            </p>
        </header>

        <div class="grid gap-6 lg:grid-cols-[220px_minmax(0,1fr)]">

            {{-- Navigation --}}
            <aside>
                <nav
                    aria-label="Documentation navigation"
                    class="rounded-2xl border border-slate-200 bg-white p-4 lg:sticky lg:top-6"
                >
                    <p class="mb-3 text-xs font-bold uppercase tracking-wide text-slate-400">
                        On this page
                    </p>

                    <div class="flex flex-wrap gap-1 lg:flex-col">
                        @foreach ([
                            'endpoint' => 'Endpoint',
                            'headers' => 'Request headers',
                            'parameters' => 'JSON parameters',
                            'examples' => 'Request examples',
                            'responses' => 'Responses',
                            'notes' => 'Integration notes',
                        ] as $anchor => $label)
                            <a
                                href="#{{ $anchor }}"
                                class="rounded-lg px-3 py-2 text-sm transition hover:bg-blue-50 hover:text-blue-700"
                            >
                                {{ $label }}
                            </a>
                        @endforeach
                    </div>
                </nav>
            </aside>

            <main class="min-w-0 space-y-6">

                {{-- Endpoint --}}
                <section
                    id="endpoint"
                    class="scroll-mt-6 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-slate-900">
                        Endpoint
                    </h2>

                    <div class="mt-4 flex items-start gap-3 rounded-xl p-4">
                        <span class="rounded-md bg-emerald-400/15 px-2 py-1 text-xs font-bold text-emerald-300">
                            GET
                        </span>

                        <code class="min-w-0 break-all text-sm">
                            {{ $endpoint }}
                        </code>
                    </div>

                    <dl class="mt-4 grid gap-4 text-sm sm:grid-cols-2">
                        <div>
                            <dt class="text-slate-500">Request format</dt>
                            <dd class="mt-1 font-semibold text-slate-800">
                                application/json
                            </dd>
                        </div>

                        <div>
                            <dt class="text-slate-500">Response format</dt>
                            <dd class="mt-1 font-semibold text-slate-800">
                                application/json
                            </dd>
                        </div>
                    </dl>
                </section>

                {{-- Headers --}}
                <section
                    id="headers"
                    class="scroll-mt-6 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-slate-900">
                        Request headers
                    </h2>

                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-slate-500">
                                <tr>
                                    <th class="px-3 py-3 font-semibold">Header</th>
                                    <th class="px-3 py-3 font-semibold">Value</th>
                                    <th class="px-3 py-3 font-semibold">Purpose</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td class="px-3 py-3 font-mono">Content-Type</td>
                                    <td class="px-3 py-3 font-mono">application/json</td>
                                    <td class="px-3 py-3 text-slate-600">
                                        Sends a JSON body.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-3 py-3 font-mono">Accept</td>
                                    <td class="px-3 py-3 font-mono">application/json</td>
                                    <td class="px-3 py-3 text-slate-600">
                                        Requests JSON responses.
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-3 py-3 font-mono">X-CSRF-TOKEN</td>
                                    <td class="px-3 py-3">Current session token</td>
                                    <td class="px-3 py-3 text-slate-600">
                                        Required when web CSRF middleware applies.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                {{-- Parameters --}}
                <section
                    id="parameters"
                    class="scroll-mt-6 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-slate-900">
                        JSON parameters
                    </h2>

                    <div class="mt-4 overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-slate-500">
                                <tr>
                                    <th class="px-3 py-3">Field</th>
                                    <th class="px-3 py-3">Type</th>
                                    <th class="px-3 py-3">Required</th>
                                    <th class="px-3 py-3">Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="px-3 py-3 font-mono text-blue-700">
                                        username
                                    </td>
                                    <td class="px-3 py-3">string</td>
                                    <td class="px-3 py-3 font-semibold text-rose-600">
                                        Yes
                                    </td>
                                    <td class="px-3 py-3 text-slate-600">
                                        Username, up to 100 characters.
                                        This example does not verify account ownership.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <pre class="mt-4 overflow-x-auto rounded-xl p-4 text-xs leading-6 text-slate-100"><code>{{ $requestExample }}</code></pre>
                </section>

                {{-- Examples --}}
                <section
                    id="examples"
                    class="scroll-mt-6 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-slate-900">
                        Request examples
                    </h2>

                    <h3 class="mt-5 text-sm font-semibold text-slate-800">
                        JavaScript — same website session
                    </h3>

                    <pre class="mt-3 overflow-x-auto rounded-xl p-4 text-xs leading-6 text-slate-100"><code>const response = await fetch(@json($endpoint), {
    method: "POST",
    credentials: "same-origin",
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-CSRF-TOKEN": document
            .querySelector('meta[name="csrf-token"]')
            .content
    },
    body: JSON.stringify({
        username: "your_username"
    })
});

const data = await response.json();

if (!response.ok) {
    console.error(response.status, data);
} else {
    console.log(data);
}</code></pre>

                    <h3 class="mt-5 text-sm font-semibold text-slate-800">
                        cURL
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        For the web route, supply a session cookie and its matching
                        CSRF token. Replace the placeholders below.
                    </p>

                    <pre class="mt-3 overflow-x-auto rounded-xl p-4 text-xs leading-6 text-slate-100"><code>curl --request POST '{{ $endpoint }}' \
  --header 'Content-Type: application/json' \
  --header 'Accept: application/json' \
  --header 'X-CSRF-TOKEN: YOUR_SESSION_CSRF_TOKEN' \
  --cookie 'YOUR_SESSION_COOKIE_NAME=YOUR_SESSION_COOKIE_VALUE' \
  --data '{"username":"your_username"}'</code></pre>

                    <h3 class="mt-5 text-sm font-semibold text-slate-800">
                        Postman
                    </h3>

                    <ol class="mt-3 list-decimal space-y-2 pl-5 text-sm leading-6 text-slate-600">
                        <li>Select POST and enter the endpoint URL.</li>
                        <li>Add the Content-Type and Accept headers.</li>
                        <li>Select Body → raw → JSON.</li>
                        <li>Enter the username JSON shown above.</li>
                        <li>
                            For the web route, include the matching session cookie
                            and X-CSRF-TOKEN header.
                        </li>
                        <li>Click Send and inspect the response.</li>
                    </ol>
                </section>

                {{-- Responses --}}
                <section
                    id="responses"
                    class="scroll-mt-6 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-slate-900">
                        Responses
                    </h2>

                    <div class="mt-4 flex items-center gap-2">
                        <span class="rounded-md bg-emerald-50 px-2 py-1 text-xs font-bold text-emerald-700">
                            200
                        </span>
                        <h3 class="text-sm font-semibold text-slate-800">
                            Username received
                        </h3>
                    </div>

                    <pre class="mt-3 overflow-x-auto rounded-xl p-4 text-xs leading-6 text-slate-100"><code>{{ $responseExample }}</code></pre>

                    <p class="mt-2 text-xs text-slate-500">
                        This acknowledgement does not mean a lead was saved.
                    </p>

                    <div class="mt-5 flex items-center gap-2">
                        <span class="rounded-md bg-rose-50 px-2 py-1 text-xs font-bold text-rose-700">
                            422
                        </span>
                        <h3 class="text-sm font-semibold text-slate-800">
                            Validation error
                        </h3>
                    </div>

                    <pre class="mt-3 overflow-x-auto rounded-xl p-4 text-xs leading-6 text-slate-100"><code>{{ $errorExample }}</code></pre>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        A missing or expired web session/CSRF token may produce
                        a 419 response. Response wording can vary by application.
                    </p>
                </section>

                {{-- Notes --}}
                <section
                    id="notes"
                    class="scroll-mt-6 rounded-2xl border border-blue-100 bg-blue-50 p-5 sm:p-6"
                >
                    <h2 class="text-lg font-bold text-blue-950">
                        Integration notes
                    </h2>

                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm leading-6 text-blue-900">
                        <li>
                            A username identifies an account; it is not an API credential.
                        </li>
                        <li>
                            This example validates username format only.
                        </li>
                        <li>
                            Lead fields and lead creation responses must match
                            your actual saving implementation.
                        </li>
                        <li>
                            External integrations need a defined authentication
                            method and API middleware configuration.
                        </li>
                    </ul>

                    <a
                        href="mailto:help@quickdials.com"
                        class="mt-4 inline-flex rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700"
                    >
                        Contact QuickDials
                    </a>
                </section>

            </main>
        </div>
    </div>
</div>
@endsection