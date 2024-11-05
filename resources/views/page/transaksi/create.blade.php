<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('TRANSAKSI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full mx-auto" method="POST" action="{{ route('transaksi.store') }}">
                        @csrf
                        <div class="mb-5">
                            <label for="id_outlet"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID OUTLET</label>
                            <input name="id_outlet" type="text" id="id_outlet"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="kode_invoice"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KODE INVOICE</label>
                            <input name="kode_invoice" type="text" id="kode_invoice"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="id_member"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID MEMBER</label>
                            <input name="id_member" type="text" id="id_member"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="tanggal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TANGGAL</label>
                            <input name="tanggal" type="date" id="tanggal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="batas_waktu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BATAS WAKTU</label>
                            <input name="batas_waktu" type="date" id="batas_waktu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="diskon"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DISKON</label>
                            <input name="diskon" type="text" id="diskon"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="pajak"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PAJAK</label>
                            <input name="pajak" type="text" id="pajak"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="tgl_bayar"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TANGGAL BAYAR</label>
                            <input name="tgl_bayar" type="date" id="tgl_bayar"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="biaya_tambahan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BIAYA TAMBAHKAN</label>
                            <input name="biaya_tambahan" type="text" id="biaya_tambahan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">STATUS</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="status" data-placeholder="Pilih Status" id="status">
                                <option value="Pilih....">Pilih....</option>
                                <option value="BARU">BARU</option>
                                <option value="PROSES">PROSES</option>
                                <option value="SELESAI">SELESAI</option>
                                <option value="DIAMBIL">DIAMBIL</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="dibayar"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DIBAYAR</label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="dibayar" data-placeholder="Pilih Status" id="dibayar">
                                <option value="Pilih....">Pilih....</option>
                                <option value="DIBAYAR">DIBAYAR</option>
                                <option value="BELUM DIBAYAR">BELUM DIBAYAR</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="id_user"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID USER</label>
                            <input name="id_user" type="text" id="id_user"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>