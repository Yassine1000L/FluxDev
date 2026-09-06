<!DOCTYPE html>
<html lang="nl" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <title>@yield('title', __('Flex Dev | Developer'))</title>

    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $css = $manifest['resources/css/app.css']['file'] ?? null;
        $js = $manifest['resources/js/app.js']['file'] ?? null;
        $host = request()->getHttpHost();
        $base = (!str_contains($host, '127.0.0.1') && !str_contains($host, 'localhost') && !str_contains($host, '.test')) ? 'https://' . $host : '';
        $locale = request()->cookie('locale', 'nl');
        if (in_array($locale, ['en', 'nl', 'fr'])) {
            app()->setLocale($locale);
        }
    @endphp
    @if ($css)
        <link rel="stylesheet" href="{{ $base }}/build/{{ $css }}">
    @endif
    @if ($js)
        <script type="module" src="{{ $base }}/build/{{ $js }}"></script>
    @endif
</head>
<body class="bg-slate-950 text-white antialiased">
    <nav class="fixed top-0 left-0 right-0 z-50 px-4 md:px-10 py-5 flex items-center justify-between bg-gradient-to-b from-slate-900/80 to-slate-900/40 backdrop-blur-2xl border-b border-white/5 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 120" class="w-9 h-9 shrink-0">
                <text x="8" y="102" font-family="Inter, system-ui, sans-serif" font-weight="800" font-size="120" fill="#3B82F6" letter-spacing="-8">F</text>
                <text x="75" y="102" font-family="Inter, system-ui, sans-serif" font-weight="600" font-size="120" fill="#94A3B8" letter-spacing="-8">D</text>
            </svg>
                <div class="absolute -inset-1 bg-blue-400/20 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            <span class="w-px h-5 bg-white/10 hidden sm:block"></span>
            <span class="hidden sm:block text-sm font-semibold tracking-tight text-slate-100">Flex Dev</span>
        </a>


        <div class="hidden md:flex items-center gap-1">
            @php $links = [['anchor' => 'diensten', 'label' => __('Diensten')], ['anchor' => 'waarom', 'label' => __('Waarom')], ['anchor' => 'proces', 'label' => __('Werkwijze')], ['anchor' => 'projecten', 'label' => __('Projecten')], ['anchor' => 'contact', 'label' => __('Contact')]]; @endphp
            @foreach ($links as $link)
                <a href="#{{ $link['anchor'] }}" class="relative px-3 md:px-4 py-2 text-xs md:text-sm font-medium rounded-lg transition-all duration-200 text-center text-slate-400 hover:text-white hover:bg-white/5 nav-link" data-section="{{ $link['anchor'] }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            @php $locale = request()->cookie('locale', 'nl'); $langs = ['nl' => 'NL', 'fr' => 'FR', 'en' => 'EN']; @endphp
            <div class="relative ml-4">
                <button id="desktopLangBtn" class="flex items-center gap-1.5 text-xs font-medium text-slate-400 hover:text-white px-3 py-2 rounded-lg transition-colors">
                    <span>{{ strtoupper($locale) }}</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="desktopLangMenu" class="hidden absolute right-0 top-full mt-1 bg-slate-800/95 backdrop-blur-xl border border-white/10 rounded-xl p-1 shadow-2xl min-w-[80px] z-50">
                    @foreach ($langs as $code => $label)
                    <a href="{{ route('taal', $code) }}" class="block px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ $locale === $code ? 'text-blue-400 bg-blue-500/10' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">{{ $label }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex items-center gap-2 md:hidden">
            @php $locale = request()->cookie('locale', 'nl'); $langs = ['nl' => 'NL', 'fr' => 'FR', 'en' => 'EN']; @endphp
            <div class="relative">
                <button id="mobileLangBtn" class="flex items-center gap-1 text-xs font-medium text-slate-300 px-2 py-1.5 rounded-lg border border-white/10 hover:border-white/30 transition-colors">
                    <span>{{ strtoupper($locale) }}</span>
                    <svg class="w-3 h-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="mobileLangMenu" class="hidden absolute right-0 top-full mt-1 bg-slate-800/95 backdrop-blur-xl border border-white/10 rounded-xl p-1 shadow-2xl min-w-[80px] z-50">
                    @foreach ($langs as $code => $label)
                    <a href="{{ route('taal', $code) }}" class="block px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ $locale === $code ? 'text-blue-400 bg-blue-500/10' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">{{ $label }}</a>
                    @endforeach
                </div>
            </div>
            <button id="hamburger" class="flex items-center justify-center w-9 h-9 rounded-lg border border-white/10 hover:border-white/30 transition-colors">
                <svg class="w-5 h-5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div id="mobileMenu" class="fixed top-0 left-0 right-0 z-40 pt-24 pb-6 px-6 bg-slate-900/95 backdrop-blur-2xl border-b border-white/5 shadow-2xl hidden md:hidden">
        <div class="flex flex-col gap-1">
            @php $mobileLinks = [
                ['anchor' => 'diensten', 'label' => __('Diensten'), 'icon' => 'M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 15a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM15 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2h-2zM15 15a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2h-2z'],
                ['anchor' => 'waarom', 'label' => __('Waarom'), 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['anchor' => 'proces', 'label' => __('Werkwijze'), 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                ['anchor' => 'projecten', 'label' => __('Projecten'), 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                ['anchor' => 'contact', 'label' => __('Contact'), 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
            ]; @endphp
            @foreach ($mobileLinks as $link)
            <a href="#{{ $link['anchor'] }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-colors mobile-nav-link">
                <svg class="w-5 h-5 text-slate-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $link['icon'] }}"/></svg>
                {{ $link['label'] }}
            </a>
            @endforeach
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="py-12 text-center">
        <div class="flex items-center justify-center gap-3 mb-6 hidden">
            @php $locale = request()->cookie('locale', 'nl'); @endphp
            <a href="{{ route('taal', 'en') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'en' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">EN</a>
            <span class="text-[10px] text-slate-700">|</span>
            <a href="{{ route('taal', 'nl') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'nl' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">NL</a>
            <span class="text-[10px] text-slate-700">|</span>
            <a href="{{ route('taal', 'fr') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'fr' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">FR</a>
        </div>
        <p class="text-sm text-slate-500">&copy; {{ date('Y') }} Flex Dev. {{ __('Alle rechten voorbehouden.') }}</p>
    </footer>

    <button id="backToTop" class="fixed bottom-8 right-8 z-50 w-10 h-10 rounded-full border border-blue-500/30 bg-slate-950/60 backdrop-blur-md flex items-center justify-center opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:border-blue-400/60 hover:bg-blue-950/80">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        const backBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backBtn.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                backBtn.classList.add('opacity-100', 'translate-y-0');
            } else {
                backBtn.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                backBtn.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Hamburger menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        hamburger.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });
        mobileMenu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });
        // Also close mobile menu on anchor click
        document.querySelectorAll('.mobile-nav-link').forEach(a => {
            a.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });
        document.addEventListener('click', (e) => {
            if (!mobileMenu.classList.contains('hidden') && !hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
        // Mobile language dropdown
        const langBtn = document.getElementById('mobileLangBtn');
        if (langBtn) {
            langBtn.addEventListener('click', () => {
                document.getElementById('mobileLangMenu').classList.toggle('hidden');
            });
            document.addEventListener('click', (e) => {
                if (!langBtn.contains(e.target)) {
                    document.getElementById('mobileLangMenu').classList.add('hidden');
                }
            });
        }
        // Desktop language dropdown
        const desktopLangBtn = document.getElementById('desktopLangBtn');
        if (desktopLangBtn) {
            desktopLangBtn.addEventListener('click', () => {
                document.getElementById('desktopLangMenu').classList.toggle('hidden');
            });
            document.addEventListener('click', (e) => {
                if (!desktopLangBtn.contains(e.target)) {
                    document.getElementById('desktopLangMenu').classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
