<x-guest-portfolio-layout>
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-24">
                <span class="text-sm font-semibold uppercase tracking-widest text-zinc-400">Blog</span>
                <h2 class="mt-4 text-6xl font-bold tracking-tighter text-zinc-900 leading-tight">
                    Technology stories  <br>
                    <span class="text-zinc-400">and daily thoughts.</span>
                </h2>
            </div>

            @if($posts->isEmpty())
                <div class="py-20 text-center bg-zinc-50 rounded-[3rem] border border-zinc-100">
                    <p class="text-zinc-400 text-lg">No stories published yet. Stay tuned.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    @foreach($posts as $post)
                        <article class="group relative">
                            <div class="aspect-[16/10] overflow-hidden rounded-[2rem] bg-zinc-100 mb-6">
                                @if($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-zinc-300">
                                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="flex items-center space-x-4 mb-4">
                                    <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">{{ $post->created_at->format('M d, Y') }}</span>
                                    <span class="w-1 h-1 bg-zinc-200 rounded-full"></span>
                                    <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">
                                        {{ $post->category ? $post->category->name : 'Article' }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold text-zinc-900 leading-tight group-hover:text-zinc-600 transition-colors">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mt-4 text-zinc-500 line-clamp-2 text-sm leading-relaxed">
                                    {{ $post->excerpt }}
                                </p>
                                <div class="mt-6">
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-bold uppercase tracking-widest text-zinc-900 inline-flex items-center group-hover:underline">
                                        Read Story
                                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-20">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>
</x-guest-portfolio-layout>
