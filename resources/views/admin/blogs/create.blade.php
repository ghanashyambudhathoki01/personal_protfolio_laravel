<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Blog Post') }}
        </h2>
    </x-slot>

    <!-- Custom Rich Text Editor Assets -->
    @vite(['resources/css/rich-text-editor.css'])
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="title" :value="__('Title')" class="dark:text-zinc-300" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full dark:bg-zinc-900 dark:border-zinc-700 dark:text-zinc-100" :value="old('title')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="category_id" :value="__('Category')" class="dark:text-zinc-300" />
                                <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-100 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="excerpt" :value="__('Excerpt (Short description)')" class="dark:text-zinc-300" />
                            <textarea id="excerpt" name="excerpt" class="mt-1 block w-full border-gray-300 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-100 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3">{{ old('excerpt') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('excerpt')" />
                        </div>

                        <div>
                            <x-input-label for="content" :value="__('Content')" class="dark:text-zinc-300" />
                            <div class="mt-1 rte-container">
                                <div class="rte-toolbar">
                                    <button type="button" onclick="rteAction(this, 'bold')" class="rte-btn" title="Bold" data-command="bold">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path><path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path></svg>
                                    </button>
                                    <button type="button" onclick="rteAction(this, 'italic')" class="rte-btn" title="Italic" data-command="italic">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="4" x2="10" y2="4"></line><line x1="14" y1="20" x2="5" y2="20"></line><line x1="15" y1="4" x2="9" y2="20"></line></svg>
                                    </button>
                                    <button type="button" onclick="rteAction(this, 'underline')" class="rte-btn" title="Underline" data-command="underline">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path><line x1="4" y1="21" x2="20" y2="21"></line></svg>
                                    </button>
                                    
                                    <div class="rte-divider"></div>
                                    
                                    <button type="button" onclick="rteAction(this, 'formatBlock', 'h1')" class="rte-btn" title="Heading 1"><b>H1</b></button>
                                    <button type="button" onclick="rteAction(this, 'formatBlock', 'h2')" class="rte-btn" title="Heading 2"><b>H2</b></button>
                                    
                                    <div class="rte-divider"></div>
                                    
                                    <button type="button" onclick="rteAction(this, 'insertUnorderedList')" class="rte-btn" title="Bullet List" data-command="insertUnorderedList">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                    </button>
                                    <button type="button" onclick="rteAction(this, 'insertOrderedList')" class="rte-btn" title="Numbered List" data-command="insertOrderedList">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="10" y1="6" x2="21" y2="6"></line><line x1="10" y1="12" x2="21" y2="12"></line><line x1="10" y1="18" x2="21" y2="18"></line><path d="M4 6h1v4"></path><path d="M4 10h2"></path><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"></path></svg>
                                    </button>
                                    
                                    <div class="rte-divider"></div>
                                    
                                    <button type="button" onclick="rteAction(this, 'createLink')" class="rte-btn" title="Insert Link">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                    </button>
                                    <button type="button" onclick="rteAction(this, 'removeFormat')" class="rte-btn" title="Clear Formatting">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    </button>
                                </div>
                                <div id="editor-content" class="rte-content" contenteditable="true">
                                    {!! old('content') !!}
                                </div>
                                <input type="hidden" id="content-textarea" name="content" value="{{ old('content') }}">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>

                        <div>
                            <x-input-label for="featured_image" :value="__('Featured Image')" class="dark:text-zinc-300" />
                            <input type="file" id="featured_image" name="featured_image" class="mt-1 block w-full text-sm text-gray-900 dark:text-zinc-300 border border-gray-300 dark:border-zinc-700 rounded-lg cursor-pointer bg-gray-50 dark:bg-zinc-900 focus:outline-none" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-zinc-500">Max size 2MB (JPG, PNG, WEBP)</p>
                            <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                        </div>

                        <div class="flex items-center">
                            <input id="is_published" name="is_published" type="checkbox" value="1" class="rounded border-gray-300 dark:border-zinc-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:bg-zinc-900" {{ old('is_published') ? 'checked' : '' }}>
                            <x-input-label for="is_published" :value="__('Publish immediately')" class="ml-2 dark:text-zinc-400" />
                        </div>

                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100 dark:border-zinc-700">
                            <x-primary-button>{{ __('Create Post') }}</x-primary-button>
                            <a href="{{ route('admin.blogs.index') }}" class="text-sm text-gray-600 dark:text-zinc-400 hover:text-gray-900 dark:hover:text-zinc-100">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/rich-text-editor.js'])
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            initModernRTE('editor-content', 'content-textarea');
        });
    </script>
</x-app-layout>
