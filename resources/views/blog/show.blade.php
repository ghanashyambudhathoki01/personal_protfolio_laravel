<x-guest-portfolio-layout>
    <article class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-16">
                <div class="flex items-center space-x-4 mb-8">
                    <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">{{ $post->created_at->format('M d, Y') }}</span>
                    <span class="w-1 h-1 bg-zinc-200 rounded-full"></span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-zinc-400">
                        {{ $post->category ? $post->category->name : 'Story' }}
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter text-zinc-900 leading-[1.1]">
                    {{ $post->title }}
                </h1>
                <p class="mt-8 text-xl text-zinc-500 leading-relaxed italic border-l-4 border-zinc-100 pl-8">
                    {{ $post->excerpt }}
                </p>
            </div>

            @if($post->featured_image)
                <div class="aspect-video overflow-hidden rounded-[3rem] bg-zinc-100 mb-16">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            <div class="prose prose-zinc prose-lg max-w-none text-zinc-600 leading-relaxed">
                {!! $post->content !!}
            </div>

            <div class="mt-20 pt-10 border-t border-zinc-100">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
                    <div>
                        <h4 class="text-sm font-semibold uppercase tracking-widest text-zinc-900">Share this story</h4>
                        <div class="mt-4 flex gap-4">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-zinc-50 text-zinc-900 hover:bg-zinc-900 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                            <!-- X (Twitter) -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-zinc-50 text-zinc-900 hover:bg-zinc-900 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <!-- Instagram Style Link -->
                            <a href="#" onclick="navigator.clipboard.writeText('{{ url()->current() }}'); alert('Link copied!'); return false;" class="w-12 h-12 flex items-center justify-center rounded-full bg-zinc-50 text-zinc-900 hover:bg-zinc-900 hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('blog.index') }}" class="text-sm font-bold uppercase tracking-widest text-zinc-400 hover:text-zinc-900 transition-colors inline-flex items-center">
                        <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                        Back to Blog
                    </a>
                </div>
            </div>
        </div>
    </article>
</x-guest-portfolio-layout>
