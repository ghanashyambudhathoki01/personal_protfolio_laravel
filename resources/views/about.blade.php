<x-guest-portfolio-layout>

    <section class="py-20 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-center">

                <!-- LEFT -->
                <div>
                    <span class="text-xs md:text-sm font-semibold uppercase tracking-widest text-zinc-400">
                        About Me
                    </span>

                    <h3 class="mt-4 text-3xl md:text-5xl font-bold tracking-tighter text-zinc-900 leading-tight">
                        Ghanashyam Budhathoki <br class="md:hidden">
                        <span class="text-zinc-400">Professional Full Stack & Mobile Application Developer</span>
                    </h3>

                    <p class="mt-4 text-lg text-zinc-600 leading-relaxed">
                        I specialize in transforming innovative ideas into high-quality, scalable web and mobile
                        applications. Leveraging modern technologies, I deliver solutions that drive results and create
                        value.
                    </p>
                </div>


                <!-- RIGHT -->
                <div class="relative">

                    <h3 class="text-sm font-semibold uppercase tracking-widest text-zinc-900 mb-10">
                        Core Skills
                    </h3>

                    <div class="overflow-hidden relative">

                        <!-- Track -->
                        <div class="marquee-track flex gap-20 items-center">

                            @php
                                $skills = [
                                    ['name' => 'HTML', 'logo' => 'https://cdn.simpleicons.org/html5/E34F26'],
                                    ['name' => 'CSS', 'logo' => 'https://cdn.simpleicons.org/css3/1572B6'],
                                    ['name' => 'Bootstrap', 'logo' => 'https://cdn.simpleicons.org/bootstrap/7952B3'],
                                    ['name' => 'JavaScript', 'logo' => 'https://cdn.simpleicons.org/javascript/F7DF1E'],
                                    ['name' => 'PHP', 'logo' => 'https://cdn.simpleicons.org/php/777BB4'],
                                    ['name' => 'Laravel', 'logo' => 'https://cdn.simpleicons.org/laravel/FF2D20'],
                                    ['name' => 'Dart', 'logo' => 'https://cdn.simpleicons.org/dart/0175C2'],
                                    ['name' => 'Flutter', 'logo' => 'https://cdn.simpleicons.org/flutter/02569B'],
                                ];
                            @endphp

                            @foreach (array_merge($skills, $skills) as $skill)
                                <div class="flex flex-col items-center min-w-[180px] group">

                                    <div
                                        class="w-28 h-28 flex items-center justify-center 
                                            bg-white border border-zinc-200 rounded-3xl 
                                            shadow-md transition-all duration-300 
                                            group-hover:scale-110 group-hover:shadow-xl">

                                        <img src="{{ $skill['logo'] }}" alt="{{ $skill['name'] }}"
                                            class="w-16 h-16 object-contain">
                                    </div>

                                    <span class="mt-4 text-base font-semibold text-zinc-800">
                                        {{ $skill['name'] }}
                                    </span>

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <style>
        .marquee-track {
            width: max-content;
            animation: marquee 4s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>

</x-guest-portfolio-layout>
