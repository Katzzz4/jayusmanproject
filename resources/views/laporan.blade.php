<x-layout>

<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">Data Produk</h1>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Produk</button>
    </div>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama Produk</th>
                <th class="p-2">Harga</th>
                <th class="p-2">Stok</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="p-2">1</td>
                <td class="p-2">Indomie</td>
                <td class="p-2">Rp 3.000</td>
                <td class="p-2">100</td>
                <td class="p-2">
                    <button class="bg-yellow-400 px-2 py-1 rounded">Edit</button>
                    <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</x-layout>