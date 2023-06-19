
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @forelse($table['headers'] as $tableHeader)
                <th scope="col" class="px-6 py-3">
                    {{ $tableHeader }}
                </th>
            @empty
                <th colspan="100%" scope="col" class="px-6 py-3 text-center">
                    No header found
                </th>
            @endforelse
        </tr>
        </thead>
        <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    @forelse($table['rows'] as $row)
                        <td class="px-6 py-4">
                            {{ $row }}
                        </td>
                    @empty
                        <th colspan="100%" scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                            No data found
                        </th>
                    @endforelse
                </tr>

        </tbody>
    </table>
</div>
