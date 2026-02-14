<x-guest-portfolio-layout>
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-24">
                <span class="text-sm font-semibold uppercase tracking-widest text-zinc-400">Services</span>
                <h2 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter text-zinc-900 leading-tight">
                    Specialized solutions for <br class="hidden md:block">
                    <span class="text-zinc-400">digital growth.</span>
                </h2>
                <p class="mt-8 text-xl text-zinc-500 leading-relaxed">
                    I provide a range of services designed to help businesses and individuals establish a strong, professional digital presence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @php
                    $services = [
                        [
                            'title' => 'Mobile Application Development',
                            'desc' => 'Native and cross-platform mobile apps that offer seamless performance and exceptional user interfaces. From concept to App Store deployment.',
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>'
                        ],
                        [
                            'title' => 'Website Development',
                            'desc' => 'High-end, responsive websites built with Laravel, Tailwind CSS, and React. Focused on speed, SEO, and minimalist design principles.',
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>'
                        ],
                        [
                            'title' => 'Video Editing',
                            'desc' => 'Professional post-production for commercials, social media content, and documentaries. Cinematic storytelling that captures attention.',
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>'
                        ],
                        [
                            'title' => 'Content Writing',
                            'desc' => 'Strategic content creation including blog posts, whitepapers, and technical documentation. Clear communication that drives results.',
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>'
                        ]
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="group p-12 bg-white border border-zinc-100 rounded-[3rem] hover:bg-zinc-900 transition-all duration-500">
                        <div class="w-16 h-16 bg-zinc-50 rounded-2xl flex items-center justify-center text-zinc-900 group-hover:bg-zinc-800 group-hover:text-zinc-400 transition-all">
                            {!! $service['icon'] !!}
                        </div>
                        <h3 class="mt-8 text-2xl font-bold text-zinc-900 group-hover:text-white transition-colors">{{ $service['title'] }}</h3>
                        <p class="mt-4 text-zinc-500 group-hover:text-zinc-400 leading-relaxed">
                            {{ $service['desc'] }}
                        </p>
                        <div class="mt-8 pt-8 border-t border-zinc-100 group-hover:border-zinc-800">
                            <a href="{{ route('contact') }}" class="text-sm font-semibold uppercase tracking-widest text-zinc-900 group-hover:text-white inline-flex items-center">
                                Inquire Now
                                <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-portfolio-layout>
