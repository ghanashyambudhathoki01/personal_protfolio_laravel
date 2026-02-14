<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom selection color */
        ::selection {
            background: rgba(0, 0, 0, 0.05);
            color: currentColor;
        }

        .dark ::selection {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.2);
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Smooth transitions */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -4px;
            left: 0;
            background: currentColor;
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Social icon hover effect */
        .social-icon {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .social-icon:hover {
            transform: translateY(-2px);
            color: #000;
        }

        .dark .social-icon:hover {
            color: #fff;
        }

        /* Fade in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        /* Font Awesome icon adjustments */
        .fa-regular,
        .fa-solid,
        .fa-brands {
            line-height: 1;
        }
    </style>

    <script>
        // Theme initialization
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body x-data="{ mobileMenuOpen: false }" class="antialiased bg-white dark:bg-[#0A0A0A] text-[#1A1A1A] dark:text-[#EDEDED] transition-colors duration-500">
    <!-- Navigation -->
    <nav
        class="fixed w-full z-50 bg-white/70 dark:bg-[#0A0A0A]/70 backdrop-blur-2xl border-b border-[#E5E5E5] dark:border-[#1F1F1F]">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex justify-between items-center h-24">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="group relative">
                    <span class="text-2xl font-light tracking-[-0.02em] text-[#1A1A1A] dark:text-[#EDEDED]">
                        Ghanashyam<span class="font-medium">Budhathoki</span>
                    </span>
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-[2px] bg-[#1A1A1A] dark:bg-[#EDEDED] transition-all duration-300 group-hover:w-full"></span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-12">
                    <a href="{{ route('home') }}"
                        class="nav-link text-sm font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-link text-sm font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">About</a>
                    <a href="{{ route('services') }}"
                        class="nav-link text-sm font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Services</a>
                    <a href="{{ route('blog.index') }}"
                        class="nav-link text-sm font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Blog</a>
                    <a href="{{ route('contact') }}"
                        class="nav-link text-sm font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Contact</a>

                    <!-- Theme Toggle with Font Awesome -->
                    <button onclick="toggleDarkMode()"
                        class="p-2.5 rounded-full bg-[#F5F5F5] dark:bg-[#1F1F1F] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-all duration-300 hover:scale-110">
                        <i class="fa-regular fa-sun h-4 w-4 hidden dark:block"></i>
                        <i class="fa-regular fa-moon h-4 w-4 block dark:hidden"></i>
                    </button>
                </div>

                <!-- Mobile Menu Button with Font Awesome -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">
                        <i class="fa-solid fa-bars h-6 w-6" x-show="!mobileMenuOpen"></i>
                        <i class="fa-solid fa-xmark h-6 w-6" x-show="mobileMenuOpen" x-cloak></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden bg-white dark:bg-[#0A0A0A] border-b border-[#E5E5E5] dark:border-[#1F1F1F] overflow-hidden"
             @click.away="mobileMenuOpen = false"
             x-cloak>
            <div class="px-6 py-8 space-y-6">
                <a href="{{ route('home') }}" @click="mobileMenuOpen = false"
                    class="block text-lg font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">Home</a>
                <a href="{{ route('about') }}" @click="mobileMenuOpen = false"
                    class="block text-lg font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">About</a>
                <a href="{{ route('services') }}" @click="mobileMenuOpen = false"
                    class="block text-lg font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">Services</a>
                <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false"
                    class="block text-lg font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">Blog</a>
                <a href="{{ route('contact') }}" @click="mobileMenuOpen = false"
                    class="block text-lg font-medium text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors">Contact</a>
                
                <div class="pt-6 border-t border-[#E5E5E5] dark:border-[#1F1F1F] flex items-center justify-between">
                    <span class="text-sm font-medium text-[#6B6B6B] dark:text-[#8A8A8A]">Theme</span>
                    <button onclick="toggleDarkMode()"
                        class="p-2.5 rounded-full bg-[#F5F5F5] dark:bg-[#1F1F1F] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-all">
                        <i class="fa-regular fa-sun h-4 w-4 hidden dark:block"></i>
                        <i class="fa-regular fa-moon h-4 w-4 block dark:hidden"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer
        class="bg-[#F8F8F8] dark:bg-[#0F0F0F] border-t border-[#E5E5E5] dark:border-[#1F1F1F] py-24 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Brand Section -->
                <div class="lg:col-span-5 space-y-6">
                    <a href="{{ route('home') }}"
                        class="inline-block text-2xl font-light tracking-[-0.02em] text-[#1A1A1A] dark:text-[#EDEDED]">
                        Ghanashyam<span class="font-medium">Budhathoki</span>
                    </a>
                    <p class="text-[#6B6B6B] dark:text-[#8A8A8A] text-sm leading-relaxed max-w-md">
                        Crafting digital experiences with precision and purpose. Minimalist design, maximum impact.
                    </p>

                    <!-- Social Links with Font Awesome Brands -->
                    <div class="flex items-center space-x-4 pt-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/ghanashyam_072/" target="_blank" rel="noopener noreferrer"
                            class="social-icon p-3 rounded-full bg-white dark:bg-[#1A1A1A] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] shadow-sm hover:shadow-md transition-all duration-300">
                            <i class="fa-brands fa-instagram h-4 w-4"></i>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/technerdshyam" target="_blank" rel="noopener noreferrer"
                            class="social-icon p-3 rounded-full bg-white dark:bg-[#1A1A1A] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1877F2] dark:hover:text-[#EDEDED] shadow-sm hover:shadow-md transition-all duration-300">
                            <i class="fa-brands fa-facebook-f text-lg"></i>
                        </a>


                        <!-- LinkedIn -->
                        <a href="https://np.linkedin.com/in/ghanashyam-budhathoki-3a7014381" target="_blank" rel="noopener noreferrer"
                        class="social-icon p-3 rounded-full bg-white dark:bg-[#1A1A1A] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] shadow-sm hover:shadow-md transition-all duration-300">
                        <i class="fa-brands fa-linkedin-in h-4 w-4"></i>
                        </a>

                        <!-- GitHub -->
                        <a href="https://github.com/ghanashyambudhathoki01" target="_blank" rel="noopener noreferrer"
                            class="social-icon p-3 rounded-full bg-white dark:bg-[#1A1A1A] text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] shadow-sm hover:shadow-md transition-all duration-300">
                            <i class="fa-brands fa-github h-4 w-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="lg:col-span-3">
                    <h4 class="text-xs font-medium uppercase tracking-[0.2em] text-[#6B6B6B] dark:text-[#8A8A8A] mb-6">
                        Quick Links</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">About</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Services</a>
                        </li>
                        <li><a href="{{ route('blog.index') }}"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Blog</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Connect with Font Awesome Icons -->
                <div class="lg:col-span-4">
                    <h4 class="text-xs font-medium uppercase tracking-[0.2em] text-[#6B6B6B] dark:text-[#8A8A8A] mb-6">
                        Connect</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <i class="fa-regular fa-envelope text-[#6B6B6B] dark:text-[#8A8A8A] w-4"></i>
                            <a href="mailto:ghanashyambudhathoki03@gmail.com"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">ghanashyambudhathoki03@gmail.com</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-phone text-[#6B6B6B] dark:text-[#8A8A8A] w-4"></i>
                            <a href="tel:+9779865438982"
                                class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3] hover:text-[#1A1A1A] dark:hover:text-[#EDEDED] transition-colors duration-300">
                                +9779865438982
                            </a>
                        </li>

                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-map-location text-[#6B6B6B] dark:text-[#8A8A8A] w-4"></i>
                            <span class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3]">Dolakha, Nepal, Charikot</span>
                        </li>
                        </li>
                        <li class="flex items-center space-x-3 pt-2">
                            <i class="fa-regular fa-clock text-[#6B6B6B] dark:text-[#8A8A8A] w-4"></i>
                            <span class="text-sm text-[#4A4A4A] dark:text-[#A3A3A3]">Always open</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright with Font Awesome Icons -->
            <div class="mt-24 pt-8 border-t border-[#E5E5E5] dark:border-[#1F1F1F]">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                    <p class="text-xs text-[#6B6B6B] dark:text-[#8A8A8A] tracking-wide flex items-center space-x-2">
                        <i class="fa-regular fa-copyright"></i>
                        <span>{{ date('Y') }} Ghanashyam Budhathoki. All rights reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
    </script>
</body>

</html>
