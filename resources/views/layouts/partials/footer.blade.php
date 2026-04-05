<footer class="bg-blue-700 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Kolom 1: Nama Aplikasi --}}
            <div>
                <h3 class="text-lg font-bold mb-2">🏪 Jayusman Mini Market</h3>
                <p class="text-blue-200 text-sm">
                    Sistem Manajemen Toko terpadu untuk memudahkan pengelolaan
                    transaksi dan stok barang di semua cabang.
                </p>
            </div>

            {{-- Kolom 2: Cabang Toko --}}
            <div>
                <h3 class="text-lg font-bold mb-2">📍 Cabang Kami</h3>
                <ul class="text-blue-200 text-sm space-y-1">
                    <li>• Cabang Bandung</li>
                    <li>• Cabang Jakarta</li>
                    <li>• Cabang Surabaya</li>
                    <li>• Cabang Yogyakarta</li>
                    <li>• Cabang Semarang</li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak --}}
            <div>
                <h3 class="text-lg font-bold mb-2">📞 Kontak</h3>
                <ul class="text-blue-200 text-sm space-y-1">
                    <li>📱 +62 812-3456-7890</li>
                    <li>📧 info@jayusmanmarket.com</li>
                    <li>🕐 Senin - Sabtu, 08.00 - 17.00</li>
                </ul>
            </div>

        </div>

        {{-- Garis pemisah --}}
        <div class="border-t border-blue-500 mt-6 pt-4 flex flex-col md:flex-row justify-between items-center text-sm text-blue-200">
            <p>&copy; {{ date('Y') }} Jayusman Mini Market. All rights reserved.</p>
            <p class="mt-2 md:mt-0">Version 1.0.0</p>
        </div>
    </div>
</footer>