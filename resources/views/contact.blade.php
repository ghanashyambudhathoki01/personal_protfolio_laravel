<x-guest-portfolio-layout>
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-zinc-400">Get in Touch</span>
                    <h2 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter text-zinc-900 leading-tight">
                        Let's build something <br class="hidden md:block">
                        <span class="text-zinc-400">extraordinary together.</span>
                    </h2>
                    <p class="mt-8 text-xl text-zinc-500 leading-relaxed max-w-md">
                        Have a project in mind or just want to say hello? Drop me a message and I'll get back to you within 24 hours.
                    </p>

                    <div class="mt-12 space-y-8">
                        <div>
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-zinc-900">Email</h4>
                            <p class="mt-2 text-zinc-500">ghanashyambudhathoki03@gmail.com</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-zinc-900">Location</h4>
                            <p class="mt-2 text-zinc-500">Dolakha Nepal, Charikot</p>
                        </div>
                    </div>
                </div>

                <div class="bg-zinc-50 p-8 md:p-12 rounded-[3rem] border border-zinc-100">
                    @if(session('success'))
                        <div class="mb-8 p-6 bg-green-50 text-green-700 rounded-3xl border border-green-100 flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('enquiry.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-zinc-400 mb-2">Your Name</label>
                                <input type="text" name="name" id="name" required class="w-full bg-white border border-zinc-200 rounded-2xl px-6 py-4 text-zinc-900 focus:outline-none focus:border-zinc-900 transition-colors" placeholder="John Doe">
                                @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-zinc-400 mb-2">Email Address</label>
                                <input type="email" name="email" id="email" required class="w-full bg-white border border-zinc-200 rounded-2xl px-6 py-4 text-zinc-900 focus:outline-none focus:border-zinc-900 transition-colors" placeholder="john@example.com">
                                @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="service" class="block text-xs font-semibold uppercase tracking-wider text-zinc-400 mb-2">Service Selection</label>
                            <select name="service" id="service" required class="w-full bg-white border border-zinc-200 rounded-2xl px-6 py-4 text-zinc-900 focus:outline-none focus:border-zinc-900 transition-colors appearance-none">
                                <option value="" disabled selected>Select a service</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile App">Mobile App Development</option>
                                <option value="Video Editing">Video Editing</option>
                                <option value="Content Writing">Content Writing</option>
                            </select>
                            @error('service') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-zinc-400 mb-2">Your Message</label>
                            <textarea name="message" id="message" rows="5" required class="w-full bg-white border border-zinc-200 rounded-2xl px-6 py-4 text-zinc-900 focus:outline-none focus:border-zinc-900 transition-colors" placeholder="Tell me about your project..."></textarea>
                            @error('message') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full bg-zinc-900 text-white font-bold py-5 rounded-2xl hover:bg-zinc-800 transition-all flex items-center justify-center group">
                            Send Message
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-portfolio-layout>
