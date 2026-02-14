<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Blogs') }}
            </h2>
            <a href="{{ route('admin.blogs.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-indigo-700 transition-colors">
                Create New Post
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors">
                <div class="p-6">
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Title</th>
                                    <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Published</th>
                                    <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                                @forelse($blogs as $blog)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-zinc-100">{{ $blog->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-zinc-400">
                                            {{ $blog->category ? $blog->category->name : 'Uncategorized' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                {{ $blog->is_published ? 'bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400' : 'bg-gray-100 dark:bg-zinc-700 text-gray-800 dark:text-zinc-300' }}">
                                                {{ $blog->is_published ? 'Yes' : 'No' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-zinc-400">{{ $blog->created_at->format('Y-m-d') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-3">
                                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-zinc-500">No blog posts found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
