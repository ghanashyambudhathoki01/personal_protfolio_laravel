<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200 dark:border-zinc-700 transition-colors">
                    <div class="text-gray-500 dark:text-zinc-400 text-sm uppercase font-bold tracking-wider">Total Blogs</div>
                    <div class="text-4xl font-bold mt-2 dark:text-white">{{ $blogCount }}</div>
                </div>
                <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200 dark:border-zinc-700 transition-colors">
                    <div class="text-gray-500 dark:text-zinc-400 text-sm uppercase font-bold tracking-wider">Total Enquiries</div>
                    <div class="text-4xl font-bold mt-2 dark:text-white">{{ $enquiryCount }}</div>
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg transition-colors">
                <div class="p-6 text-gray-900 dark:text-zinc-100 leading-tight border-b border-gray-200 dark:border-zinc-700 font-bold">
                    {{ __("Recent Enquiries") }}
                </div>
                <div class="p-6">
                    @if($recentEnquiries->isEmpty())
                        <p class="text-gray-500 dark:text-zinc-400">No recent enquiries.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-zinc-700">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Service</th>
                                        <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50 text-left text-xs font-medium text-gray-500 dark:text-zinc-400 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 bg-gray-50 dark:bg-zinc-900/50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-zinc-800 divide-y divide-gray-200 dark:divide-zinc-700">
                                    @foreach($recentEnquiries as $enquiry)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-zinc-100">{{ $enquiry->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-zinc-400">{{ $enquiry->service }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-zinc-400">{{ $enquiry->created_at->diffForHumans() }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    {{ $enquiry->status === 'new' ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-400' : ($enquiry->status === 'read' ? 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-400' : 'bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400') }}">
                                                    {{ ucfirst($enquiry->status) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('admin.enquiries.show', ['enquiry' => $enquiry->id]) }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.enquiries.index') }}" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all enquiries &rarr;</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
