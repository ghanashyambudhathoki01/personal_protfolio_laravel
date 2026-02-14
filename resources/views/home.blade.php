<x-guest-portfolio-layout>
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <!-- Intro Badge -->
                <div class="inline-flex items-center gap-2 mb-8">
                    <span class="w-1.5 h-1.5 bg-black rounded-full"></span>
                    <span class="text-xs font-medium uppercase tracking-[0.2em] text-neutral-400">Ghanashyam Budhathoki</span>
                </div>
                
                <h4 class="text-5xl md:text-7xl lg:text-9xl font-light tracking-[-0.03em] text-black leading-[0.85]">
                    Mobile & Web
                    <span class="text-neutral-400 block mt-2">Developer</span>
                </h4>
                
                <!-- Developer Introduction -->
                <div class="mt-8 max-w-xl">
                    <p class="text-lg text-neutral-500 leading-relaxed">
                        With over 2+ years of experience crafting digital solutions for forward-thinking brands. 
                        I blend technical precision with minimalist aesthetics to create experiences that feel 
                        as good as they look.
                    </p>
                    
                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-8 pt-8 border-t border-neutral-100">
                        <div>
                            <div class="text-2xl font-light text-black">7+</div>
                            <div class="text-xs uppercase tracking-wider text-neutral-400 mt-1">Projects</div>
                        </div>
                        <div>
                            <div class="text-2xl font-light text-black">2+ yrs</div>
                            <div class="text-xs uppercase tracking-wider text-neutral-400 mt-1">Experience</div>
                        </div>
                        <div>
                            <div class="text-2xl font-light text-black">5+</div>
                            <div class="text-xs uppercase tracking-wider text-neutral-400 mt-1">Clients</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex items-center gap-4">
                    <a href="{{ route('contact') }}" 
                       class="px-8 py-4 bg-black text-white text-sm font-medium tracking-wide hover:bg-neutral-800 transition-all duration-300">
                        Let's Talk
                    </a>
                    <a href="{{ route('services') }}" 
                       class="px-8 py-4 text-sm font-medium tracking-wide text-black border border-neutral-200 hover:border-black transition-all duration-300">
                        View Service
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-32 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-end justify-between mb-16">
                <div>
                    <span class="text-xs font-medium uppercase tracking-[0.2em] text-neutral-400">Capabilities</span>
                    <h2 class="text-3xl font-light text-black mt-3">What I Do</h2>
                </div>
                <a href="{{ route('services') }}" 
                   class="text-sm font-medium text-black border-b border-black pb-0.5 hover:border-neutral-300 hover:text-neutral-500 transition-all duration-300">
                    Explore All →
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-neutral-200">
                @php
                    $services = [
                        ['title' => 'Web Development', 'desc' => 'Modern, performant web solutions built with precision.'],
                        ['title' => 'Mobile Apps', 'desc' => 'Native-feeling applications for iOS and Android.'],
                        ['title' => 'Video Editing', 'desc' => 'Clean, rhythmic visual narratives for brands.'],
                        ['title' => 'Content', 'desc' => 'Strategic writing that communicates with clarity.'],
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="bg-neutral-50 p-8 hover:bg-white transition-all duration-500 group">
                        <h3 class="text-lg font-medium text-black mb-3">{{ $service['title'] }}</h3>
                        <p class="text-sm text-neutral-500 leading-relaxed">
                            {{ $service['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-portfolio-layout>