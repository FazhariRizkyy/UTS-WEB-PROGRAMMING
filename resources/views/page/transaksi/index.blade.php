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
                    <div class="bg-sky-800 p-4 rounded-xl mb-2 flex items-center justify-between ">
                        <div>DATA TRANSAKSI</div>
                        <div>
                            <a href="{{ route('transaksi.create') }}" onclick="return functionAdd()"class="text-white bg-sky-500 p-2 rounded-xl">TAMBAH</a>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">
                                        NO
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        ID OUTLET
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        KODE INVOICE
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        ID MEMBER
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        TANGGAL
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        BATAS WAKTU
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        TANGGAL BAYAR
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        BIAYA TAMBAHAN
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        DISKON %
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        PAJAK %
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        STATUS
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        DIBAYAR
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        ID USER
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        ACTION
                                    </th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($transaksi as $key => $t)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $transaksi->perPage() * ($transaksi->currentPage() - 1) + $key + 1 }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $t->id_outlet }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->kode_invoice }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->id_member }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->tanggal }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->batas_waktu }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->tgl_bayar }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->biaya_tambahan }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->diskon }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->pajak }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->dibayar }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $t->id_user }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $transaksi->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>