@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1920&q=80" alt="" class="w-full h-full object-cover opacity-[0.2] md:opacity-[0.25] blur-sm md:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
        </div>
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] md:w-[800px] md:h-[800px] rounded-full bg-blue-500/10 blur-[120px] pointer-events-none"></div>
        <div class="max-w-6xl mx-auto w-full relative z-10">
            <p class="text-sm text-slate-400 mb-6 tracking-widest uppercase">{{ __('Developer & Probleemoplosser') }}</p>
            <h1 class="text-4xl sm:text-7xl md:text-9xl font-bold tracking-tight leading-none">
                {{ __('Ik Bouw') }}<br>
                <span class="text-slate-200">{{ __('Ik Fix') }}</span>
            </h1>
            <p class="mt-8 text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed">
                {{ __('Realisatie van WebDevelopement - met onderhoud, aanpassingen, optimalisatie en bugfixing.') }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="#contact" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Vraag gratis offerte aan') }}</a>
                <a href="#projecten" class="inline-flex items-center px-8 py-3 border border-blue-500/30 text-sm font-medium rounded-full hover:border-blue-400/60 hover:bg-blue-500/5 transition-all">{{ __('Bekijk mijn werk') }}</a>
            </div>
        </div>
    </section>

    {{-- Over --}}
    <section id="over" class="py-28 px-6 animate">
        <div class="max-w-4xl mx-auto">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Wat Ik Doe') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-8 text-center">{{ __('Over Flex Dev') }}</h2>
            <p class="text-base text-slate-300 max-w-2xl mx-auto text-center leading-relaxed">
                {{ __('Flex Dev staat voor de ontwikkeling en optimalisatie van webapplicaties en websites. Van het bouwen van maatwerk-platforms tot het doorvoeren van gerichte aanpassingen en het oplossen van complexe technische vraagstukken — elk project wordt uitgevoerd met oog voor kwaliteit, performantie en gebruiksgemak.') }}
            </p>
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">5+</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Projecten gerealiseerd') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">3+</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Jaar ervaring') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                    <span class="text-2xl font-bold text-blue-400">100%</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Tevreden klanten') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">{{ __('24u') }}</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Reactietijd') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Diensten --}}
    <section id="diensten" class="py-28 px-6 animate">
        <div class="max-w-6xl mx-auto">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Wat Ik Doe') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-16 text-center">{{ __('Diensten') }}</h2>
            <div class="max-w-5xl mx-auto">
                @php $services = [
                    ['nr' => '01', 'title' => __('Webontwikkeling'), 'desc' => __('Moderne, responsive websites en webapplicaties bouwen met Laravel, PHP en Tailwind CSS.'), 'img' => 'https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?w=600&h=400&fit=crop&auto=format'],
                    ['nr' => '02', 'title' => __('Bugfixing'), 'desc' => __('Problemen opsporen en oplossen in bestaande codebases.'), 'img' => 'https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?w=600&h=400&fit=crop&auto=format'],
                    ['nr' => '03', 'title' => __('Prestatieoptimalisatie'), 'desc' => __('Trage applicaties versnellen en gebruikerservaring verbeteren.'), 'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop&auto=format'],
                    ['nr' => '04', 'title' => __('SEO Optimalisatie'), 'desc' => __('Je website beter vindbaar maken in Google.'), 'img' => 'https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?w=600&h=400&fit=crop&auto=format'],
                    ['nr' => '05', 'title' => __('Onderhoud & Support'), 'desc' => __('Maandelijks beheer, updates, back-ups en veiligheid.'), 'img' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?w=600&h=400&fit=crop&auto=format'],
                    ['nr' => '06', 'title' => __('Responsive Fix'), 'desc' => __('Bestaande sites mobiel-vriendelijk maken.'), 'img' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop&auto=format'],
                ]; @endphp
                <div class="grid md:grid-cols-2 gap-6">
                @foreach ($services as $svc)
                <div class="rounded-xl overflow-hidden border border-white/10 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300">
                    <div class="aspect-[16/9] overflow-hidden bg-slate-800">
                        <img src="{{ $svc['img'] }}" alt="{{ $svc['title'] }}" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500" loading="lazy">
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-bold text-blue-400/60">{{ $svc['nr'] }}</span>
                        <h3 class="text-base font-semibold mt-1">{{ $svc['title'] }}</h3>
                        <p class="text-xs text-slate-400 mt-1">{{ $svc['desc'] }}</p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Waarom --}}
    <section id="waarom" class="py-28 px-6 animate">
        <div class="max-w-5xl mx-auto">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Pourquoi') }}</p>
            <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-4 text-center">{{ __('Waarom Flex Dev') }} ?</h2>
            <p class="text-base text-slate-300 max-w-2xl mx-auto mb-16 text-center">{{ __('Waarom Flex Dev tekst') }}</p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-blue-500/5 to-transparent p-6 text-center hover:border-blue-400/30 hover:shadow-[0_0_30px_rgba(59,130,246,0.1)] transition-all">
                    <span class="text-3xl block mb-3">⚡</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Réponse sous 24h') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Réponse sous 24h desc') }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-purple-500/5 to-transparent p-6 text-center hover:border-purple-400/30 hover:shadow-[0_0_30px_rgba(168,85,247,0.1)] transition-all">
                    <span class="text-3xl block mb-3">💎</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Code propre et maintenable') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Code propre desc') }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-rose-500/5 to-transparent p-6 text-center hover:border-rose-400/30 hover:shadow-[0_0_30px_rgba(244,63,94,0.1)] transition-all">
                    <span class="text-3xl block mb-3">💰</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Tarifs compétitifs') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Tarifs desc') }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-amber-500/5 to-transparent p-6 text-center hover:border-amber-400/30 hover:shadow-[0_0_30px_rgba(251,191,36,0.1)] transition-all">
                    <span class="text-3xl block mb-3">🛠</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Support après livraison') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Support desc') }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-emerald-500/5 to-transparent p-6 text-center hover:border-emerald-400/30 hover:shadow-[0_0_30px_rgba(52,211,153,0.1)] transition-all">
                    <span class="text-3xl block mb-3">📱</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Compatible mobile') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Compatible mobile desc') }}</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-cyan-500/5 to-transparent p-6 text-center hover:border-cyan-400/30 hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all">
                    <span class="text-3xl block mb-3">📋</span>
                    <h3 class="text-base font-semibold mb-1">{{ __('Devis clair et transparent') }}</h3>
                    <p class="text-xs text-slate-400">{{ __('Devis desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Proces --}}
    <section id="proces" class="py-28 px-6 relative overflow-hidden animate">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] rounded-full bg-blue-500/5 blur-[120px] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Werkwijze') }}</p>
            <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-16 text-center">{{ __('Comment se déroule votre projet') }} ?</h2>
            @php $steps = [
                ['nr' => '01', 'icon' => '📞', 'title' => __('Premier contact'), 'desc' => __('Nous discutons de vos besoins et objectifs.')],
                ['nr' => '02', 'icon' => '📋', 'title' => __('Analyse'), 'desc' => __('Je prépare une proposition détaillée avec planning et budget.')],
                ['nr' => '03', 'icon' => '💻', 'title' => __('Développement'), 'desc' => __('Je développe votre projet en phases, avec des retours réguliers.')],
                ['nr' => '04', 'icon' => '🚀', 'title' => __('Mise en ligne'), 'desc' => __('Votre site est publié et prêt à être utilisé.')],
                ['nr' => '05', 'icon' => '🛠', 'title' => __('Support'), 'desc' => __('Je reste disponible pour toute question ou amélioration.')],
            ]; @endphp
            <div class="flex flex-col items-center">
                @foreach ($steps as $i => $step)
                <div class="flex items-center gap-4 w-full max-w-lg mb-6">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/20 shrink-0">
                        <span class="text-lg">{{ $step['icon'] }}</span>
                    </div>
                    <div class="flex-1">
                        <span class="text-xs text-blue-400/60 font-medium">{{ $step['nr'] }}</span>
                        <h3 class="text-base font-semibold">{{ $step['title'] }}</h3>
                        <p class="text-xs text-slate-400">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @if (!$loop->last)
                <div class="w-px h-6 border-l border-dashed border-blue-400/30 mb-6"></div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Projecten --}}
    <section id="projecten" class="py-28 px-6 animate">
        <div class="max-w-5xl mx-auto">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Uitgelicht Werk') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-16 text-center">{{ __('Projecten') }}</h2>
            <div class="grid md:grid-cols-2 gap-6">
                @php $projects = [
                    ['img' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&h=400&fit=crop&auto=format'],
                    ['img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop&auto=format'],
                    ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop&auto=format'],
                    ['img' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=400&fit=crop&auto=format'],
                ]; @endphp
                @foreach ($projects as $i => $p)
                <div class="rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="aspect-[16/10] overflow-hidden bg-slate-800">
                        <img src="{{ $p['img'] }}" alt="Project" class="w-full h-full object-cover opacity-60 hover:opacity-90 transition-opacity duration-500" loading="lazy">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold">{{ __('Project') }} 0{{ $i + 1 }}</h3>
                        <p class="text-xs text-slate-400 mt-1">{{ __('Binnenkort meer informatie over dit project.') }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="py-28 px-6 animate">
        <div class="max-w-3xl mx-auto">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Laten we Praten') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4 text-center">{{ __('Laten we jouw project bespreken') }}</h2>
            <div class="flex items-center justify-center gap-2 text-sm text-slate-400 mb-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ __('Duurt minder dan 2 minuten') }}</span>
            </div>
            <div class="flex flex-wrap justify-center gap-3 mb-10 text-xs text-slate-400">
                <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ __('Antwoord binnen 24 uur') }}</span>
                <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ __('Vrijblijvende offerte') }}</span>
                <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ __('Geen verplichtingen') }}</span>
            </div>

            @if (session('success'))
                <div class="max-w-lg mx-auto mb-8 p-6 bg-white/5 rounded-2xl border border-white/10 text-center">
                    <p class="text-sm leading-relaxed">{{ session('success') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="max-w-lg mx-auto mb-8 p-6 bg-red-500/10 rounded-2xl border border-red-500/20">
                    @foreach ($errors->all() as $error)
                        <p class="text-xs text-red-300">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="max-w-lg mx-auto">
                @csrf
                <input type="hidden" name="service" value="Homepage contact">
                <div class="mb-4">
                    <input type="text" name="name" placeholder="{{ __('Uw naam') }}" required class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-blue-400/60 transition-colors placeholder:opacity-30">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="{{ __('Uw e-mailadres') }}" required class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-blue-400/60 transition-colors placeholder:opacity-30">
                </div>
                <div class="mb-4">
                    <input type="tel" name="phone" placeholder="{{ __('Telefoonnummer (optioneel)') }}" class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-blue-400/60 transition-colors placeholder:opacity-30">
                </div>
                <div class="mb-6">
                    <textarea name="message" rows="4" placeholder="{{ __('Extra toelichting (optioneel)') }}" class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-blue-400/60 transition-colors placeholder:opacity-30 resize-none"></textarea>
                </div>
                <button type="submit" class="w-full px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Verstuur Bericht') }}</button>
            </form>
        </div>
    </section>

    {{-- Reviews --}}
    <section id="reviews" class="py-28 px-6 animate">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-lg md:text-2xl font-semibold tracking-tight mb-2 text-center">{{ __('Reviews') }}</h2>
            <p class="text-sm text-slate-400 mb-8 text-center">{{ __("Ils m'ont fait confiance") }}</p>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="rounded-xl border border-white/5 bg-white/[0.02] p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(59,130,246,0.08)] transition-all">
                    <div class="flex items-center justify-center gap-0.5 mb-3 text-yellow-500">⭐⭐⭐⭐⭐</div>
                    <p class="text-xs text-slate-400 leading-relaxed">"Flex Dev heeft mijn website volledig vernieuwd. Professioneel, snel en betrouwbaar."</p>
                    <p class="text-xs font-medium text-slate-200 mt-3">— Sarah M.</p>
                </div>
                <div class="rounded-xl border border-white/5 bg-white/[0.02] p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(59,130,246,0.08)] transition-all">
                    <div class="flex items-center justify-center gap-0.5 mb-3 text-yellow-500">⭐⭐⭐⭐⭐</div>
                    <p class="text-xs text-slate-400 leading-relaxed">"Snelle communicatie en topresultaat. Mijn bedrijfssite werkt nu perfect op alle apparaten."</p>
                    <p class="text-xs font-medium text-slate-200 mt-3">— Tom V.</p>
                </div>
                <div class="rounded-xl border border-white/5 bg-white/[0.02] p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(59,130,246,0.08)] transition-all">
                    <div class="flex items-center justify-center gap-0.5 mb-3 text-yellow-500">⭐⭐⭐⭐⭐</div>
                    <p class="text-xs text-slate-400 leading-relaxed">"Dankzij Flex Dev is mijn website nu eindelijk mobiel-vriendelijk. Echt een aanrader!"</p>
                    <p class="text-xs font-medium text-slate-200 mt-3">— Lisa K.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Scroll animation for sections
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = navLinks.length > 0 ? document.querySelectorAll('section[id]') : [];
        if (sections.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.classList.remove('text-white', 'bg-white/10');
                            link.classList.add('text-slate-400');
                            if (link.dataset.section === entry.target.id) {
                                link.classList.remove('text-slate-400');
                                link.classList.add('text-white', 'bg-white/10');
                            }
                        });
                    }
                });
            }, { threshold: 0.3 });
            sections.forEach(s => observer.observe(s));
        }
    </script>
@endsection
