<div>
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Quotation</h1>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Quotation</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total Value</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($quotations as $quotation)
                <tr>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $quotation->quotation_number }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $quotation->company->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $quotation->status->value }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Rp {{ number_format($quotation->total_value, 0, ',', '.') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-sm text-gray-400 text-center">Belum ada quotation.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>