<x-layout>

<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl font-bold">Manajemen Stok</h1>
        <button class="bg-green-500 text-white px-4 py-2 rounded">+ Barang Masuk</button>
    </div>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">Produk</th>
                <th class="p-2">Stok Awal</th>
                <th class="p-2">Masuk</th>
                <th class="p-2">Keluar</th>
                <th class="p-2">Sisa</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="p-2">Indomie</td>
                <td class="p-2">100</td>
                <td class="p-2">20</td>
                <td class="p-2">10</td>
                <td class="p-2">110</td>
            </tr>
        </tbody>
    </table>
</div>

</x-layout>