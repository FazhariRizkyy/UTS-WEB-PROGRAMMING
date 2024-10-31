<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('TRANSAKSI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <div class="text-white font-bold text-2xl mx-auto">DATA TRANSAKSI</div>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-5">
                    {{-- FORM ADD TRANSAKSI --}}
                    <div class="w-full bg-gray-900 rounded-xl flex flex-col p-4 space-y-6">
                        <div class="mb-5">
                            INPUT DATA TRANSAKSI
                        </div>
                        <form action="{{ route('transaksi.store') }}" method="post">
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
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
                        </form>
                    </div>
                    {{-- TABLE TRANSAKSI --}}
                    <div class="w-full">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="min-w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                            <td class="px-6 py-4">
                                                <button type="button" data-id="{{ $t->id }}"
                                                    data-modal-target="sourceModal"
                                                    data-id_outlet="{{ $t->id_outlet }}" data-kode_invoice="{{ $t->kode_invoice }}"
                                                    data-id_member="{{ $t->id_member }}" data-tanggal="{{ $t->tanggal }}" 
                                                    data-batas_waktu="{{ $t->batas_waktu }}" data-tgl_bayar="{{ $t->tgl_bayar }}" 
                                                    data-biaya_tambahan="{{ $t->biaya_tambahan }}" data-diskon="{{ $t->diskon }}" 
                                                    data-pajak="{{ $t->pajak }}" data-status="{{ $t->status }}" data-dibayar="{{ $t->dibayar }}" 
                                                    data-id_user="{{ $t->id_user }}" onclick="editSourceModal(this)"
                                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                    Edit
                                                </button>
                                                <button
                                                    onclick="return transaksiDelete('{{ $t->id }}','{{ $t->id_outlet }}', '{{ $t->kode_invoice }}', '{{ $t->id_member }}', '{{ $t->tanggal }}', '{{ $t->batas_waktu }}', '{{ $t->tgl_bayar }}', '{{ $t->biaya_tambahan }}', '{{ $t->diskon }}', '{{ $t->pajak }}', '{{ $t->status }}', '{{ $t->dibayar }}', '{{ $t->id_user }}')"
                                                    class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $transaksi->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="sourceModal">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                        Update Sumber Database
                    </h3>
                    <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" id="formSourceModal">
                    @csrf
                    <div class="flex flex-col  p-4 space-y-6">
                        <div class="mb-5">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">NAMA</label>
                            <input type="text" id="nama_edit" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">ALAMAT</label>
                            <input type="text" id="alamat_edit" name="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="jenis_kelamin"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black w-fit">JENIS KELAMIN</label>
                            <select id="jenis_kelamin_edit"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full" name="jenis_kelamin"
                                data-placeholder="Pilih Jenis Kelamin">
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="formSourceButton"
                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="sourceModalClose(this)"
                            class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const editSourceModal = (button) => {
        const formModal = document.getElementById('formSourceModal');
        const modalTarget = button.dataset.modalTarget;
        const id = button.dataset.id;
        const transaksi = button.dataset.transaksi;
        let url = "{{ route('transaksi.update', ':id') }}".replace(':id', id);

        let status = document.getElementById(modalTarget);
        document.getElementById('title_source').innerText = `UPDATE TRANSAKSI ${transaksi}`;

        ////
        ////
        ////

        document.getElementById('formSourceButton').innerText = 'Simpan';
        document.getElementById('formSourceModal').setAttribute('action', url);
        let csrfToken = document.createElement('input');
        csrfToken.setAttribute('type', 'hidden');
        csrfToken.setAttribute('value', '{{ csrf_token() }}');
        formModal.appendChild(csrfToken);

        let methodInput = document.createElement('input');
        methodInput.setAttribute('type', 'hidden');
        methodInput.setAttribute('name', '_method');
        methodInput.setAttribute('value', 'PATCH');
        formModal.appendChild(methodInput);

        status.classList.toggle('hidden');
    }

    const sourceModalClose = (button) => {
        const modalTarget = button.dataset.modalTarget;
        let member = document.getElementById(modalTarget);
        member.classList.toggle('hidden');
    }

    const transaksiDelete = async (id, transaksi) => {
        let tanya = confirm(`Apakah anda yakin untuk menghapus Transaksi ${transaksi} ?`);
        if (tanya) {
            await axios.post(`/transaksi/${id}`, {
                    '_method': 'DELETE',
                    '_token': $('meta[name="csrf-token"]').attr('content')
                })
                .then(function(response) {
                    // Handle success
                    location.reload();
                })
                .catch(function(error) {
                    // Handle error
                    alert('Error deleting record');
                    console.log(error);
                });
        }
    }
</script>