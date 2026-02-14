<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enquiry Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-zinc-100">{{ $enquiry->name }}</h3>
                            <p class="text-gray-500 dark:text-zinc-400">{{ $enquiry->email }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-zinc-500">Received On</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-zinc-300">
                                {{ $enquiry->created_at->timezone('Asia/Kathmandu')->format('F d, Y H:i') }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 pb-8 border-b border-gray-100 dark:border-zinc-700">
                        <div>
                            <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-zinc-500 mb-1">Service Requested</h4>
                            <p class="text-gray-900 dark:text-zinc-200 font-medium">{{ $enquiry->service }}</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-zinc-500 mb-1">Current Status</h4>
                            <form action="{{ route('admin.enquiries.updateStatus', $enquiry) }}" method="POST" class="mt-2 flex items-center space-x-2">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()" class="text-sm rounded-lg border-gray-300 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-100 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm transition-colors">
                                    <option value="new" {{ $enquiry->status === 'new' ? 'selected' : '' }}>New</option>
                                    <option value="read" {{ $enquiry->status === 'read' ? 'selected' : '' }}>Read</option>
                                    <option value="replied" {{ $enquiry->status === 'replied' ? 'selected' : '' }}>Replied</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-zinc-500 mb-4">Message</h4>
                        <div class="bg-gray-50 dark:bg-zinc-900/50 p-6 rounded-2xl text-gray-700 dark:text-zinc-300 leading-relaxed whitespace-pre-wrap">
                            {{ $enquiry->message }}
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <a href="{{ route('admin.enquiries.index') }}" class="text-sm font-semibold text-gray-500 dark:text-zinc-400 hover:text-gray-700 dark:hover:text-zinc-200">&larr; Back to list</a>
                        <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm font-semibold text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300" onclick="return confirm('Delete this enquiry?')">Delete Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
