<x-layout>

<div class="bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Transaksi Penjualan</h1>

    <div class="grid grid-cols-3 gap-4 mb-4">
        <input type="text" placeholder="Nama Produk" class="border p-2 rounded">
        <input type="number" placeholder="Qty" class="border p-2 rounded">
        <button class="bg-blue-500 text-white rounded">Tambah</button>
    </div>

    <table class="w-full border mt-4">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">Produk</th>
                <th class="p-2">Qty</th>
                <th class="p-2">Harga</th>
                <th class="p-2">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="p-2">Indomie</td>
                <td class="p-2">2</td>
                <td class="p-2">3000</td>
                <td class="p-2">6000</td>
            </tr>
        </tbody>
    </table>

    <div class="text-right mt-4 font-bold">
        Total: Rp 6.000
    </div>
</div>

</x-layout>