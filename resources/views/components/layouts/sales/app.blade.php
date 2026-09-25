@props(['title' => 'Vendorflow Admin', 'header' => 'Sales workspace'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    {{-- Use your compiled Tailwind files in production if available --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
    </style>
</head>

<body class="bg-[#f7f9fb] text-[#12263a]">
    <div
        x-data="{ mobileMenuOpen: false }"
        @keydown.escape.window="mobileMenuOpen = false"
        class="min-h-screen"
    >
        {{-- Top header --}}
        <header class="fixed inset-x-0 top-0 z-30 h-[68px] border-b border-[#dfe7ec] bg-white/95 backdrop-blur lg:pl-[248px]">
            <div class="flex h-full items-center justify-between gap-3 px-4 sm:px-6 lg:px-8">
                <div class="flex min-w-0 items-center gap-3">
                    <button
                        type="button"
                        @click="mobileMenuOpen = true"
                        :aria-expanded="mobileMenuOpen.toString()"
                        aria-controls="sales-sidebar"
                        aria-label="Open navigation"
                        class="grid h-10 w-10 shrink-0 place-items-center rounded-xl text-[#435b6d] hover:bg-[#f1f5f7] lg:hidden"
                    >
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>

                    <span class="truncate text-sm font-semibold text-[#435b6d]">
                        {{ $header }}
                    </span>
                </div>

                <div class="flex shrink-0 items-center gap-2 sm:gap-3">
                    <button
                        type="button"
                        aria-label="Notifications"
                        class="relative grid h-9 w-9 place-items-center rounded-xl text-[#718394] hover:bg-[#f1f5f7]"
                    >
                        <i data-lucide="bell" class="h-5 w-5"></i>
                        <span class="absolute right-2 top-1.5 h-1.5 w-1.5 rounded-full bg-[#a14f47]"></span>
                    </button>

                    <div class="hidden max-w-44 text-right sm:block">
                        <p class="truncate text-xs font-semibold text-[#435b6d]">
                            {{ auth()->user()->name ?? 'Sales Admin' }}
                        </p>
                        <p class="truncate text-[11px] text-[#9aa9b5]">
                            {{ auth()->user()->email ?? '' }}
                        </p>
                    </div>

                    <div class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-[#e9f2f7] text-xs font-bold text-[#315b80]">
                        {{ collect(explode(' ', auth()->user()->name ?? 'Sales Admin'))->filter()->map(fn ($word) => strtoupper($word[0]))->take(2)->implode('') }}
                    </div>
                </div>
            </div>
        </header>

        {{-- Mobile backdrop --}}
        <div
            x-cloak
            x-show="mobileMenuOpen"
            x-transition.opacity
            @click="mobileMenuOpen = false"
            class="fixed inset-0 z-40 bg-[#12263a]/60 lg:hidden"
            aria-hidden="true"
        ></div>

        {{-- Sidebar --}}
        <aside
            id="sales-sidebar"
            :class="mobileMenuOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 flex w-[min(280px,85vw)] flex-col bg-[#12263a] px-5 py-6 shadow-2xl transition-transform duration-200 ease-out lg:z-40 lg:w-[248px] lg:translate-x-0 lg:shadow-none"
        >
            <div class="flex items-center justify-between">
                <a href="{{ route('sales.dashboard') }}" class="flex min-w-0 items-center gap-3 px-2">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-[#f0b45a] text-xl font-bold text-[#12263a]">
                        V
                    </span>
                    <span class="font-display truncate text-lg font-semibold tracking-tight text-white">
                        vendor<span class="text-[#f0b45a]">flow</span>
                    </span>
                </a>

                <button
                    type="button"
                    @click="mobileMenuOpen = false"
                    aria-label="Close navigation"
                    class="grid h-9 w-9 place-items-center rounded-lg text-white hover:bg-[#1b3a52] lg:hidden"
                >
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
            </div>

            {{-- Scrollable links keep logout reachable on short phones --}}
            <div class="mt-8 min-h-0 flex-1 overflow-y-auto">
                <p class="px-2 text-[10px] font-semibold uppercase tracking-[0.18em] text-[#6f879a]">
                    Workspace
                </p>

                <nav class="mt-3 space-y-1">
                    <a
                        href="{{ route('sales.dashboard') }}"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium hover:bg-[#1b3a52] hover:text-white
                            {{ request()->routeIs('sales.dashboard') ? 'bg-[#1b3a52] text-white' : 'text-[#aabccc]' }}"
                    >
                        <i data-lucide="layout-dashboard" class="h-4 w-4 shrink-0"></i>
                        Dashboard
                    </a>

                    <a
                        href="{{ route('sales.vendors.index') }}"
                        class="flex items-center justify-between gap-3 rounded-xl px-3 py-2.5 text-sm font-medium hover:bg-[#1b3a52] hover:text-white
                            {{ request()->routeIs('sales.vendors.*') ? 'bg-[#1b3a52] text-white' : 'text-[#aabccc]' }}"
                    >
                        <span class="flex items-center gap-3">
                            <i data-lucide="store" class="h-4 w-4 shrink-0"></i>
                            Vendors
                        </span>
                        <span class="rounded-full bg-[#f0b45a] px-2 py-0.5 text-[10px] font-bold text-[#12263a]">
                             @auth('sales')
    {{ \App\Models\Client::where('created_by', auth('sales')->id())->count() }}
@endauth
                        </span>
                    </a>
 
 
                </nav>

             

              
            </div>

            <div class="shrink-0 border-t border-[#29465c] pt-4">
                

                <a
                    href="{{ route('salesLogout') }}"
                    class="mt-3 flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-[#aabccc] hover:bg-[#1b3a52] hover:text-white"
                >
                    <i data-lucide="log-out" class="h-4 w-4"></i>
                    Log out
                </a>
            </div>
        </aside>

        {{-- Page content --}}
        <main class="min-h-screen min-w-0 pt-[68px] lg:pl-[248px]">
            <div class="mx-auto w-full max-w-[1500px] min-w-0 p-4 sm:p-6 lg:p-8">
                @if(session('success'))
                    <div
                        x-data="{ visible: true }"
                        x-show="visible"
                        class="mb-5 flex items-start justify-between gap-3 rounded-xl border border-[#b9dbc8] bg-[#f1fbf5] px-4 py-3 text-sm font-medium text-[#26734b]"
                    >
                        <span>{{ session('success') }}</span>
                        <button type="button" @click="visible = false" aria-label="Dismiss message">×</button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-5 rounded-xl border border-[#efc4bf] bg-[#fff5f3] px-4 py-3 text-sm text-[#a14f47]">
                        <p class="font-semibold">Please check the highlighted details.</p>
                        <ul class="mt-1 list-inside list-disc text-xs">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>
</html>