@extends('layouts.main')

@section('content')
    <div class="flex justify-between">
        <div>
            <h1 class="text-3xl m-2 font-[500]">Inventory Barang</h1>
        </div>
        <div class="mx-2 my-4">
            <a href="{{ route('Inventory.create') }}"
                class="max-w-min p-2 bg-[#ffb703] hover:bg-[#ff8903] rounded-md flex items-center mr-4 border-2 divide-x-2"
                type="button" data-popover-target="tambah-popover">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="rounded" stroke-linejoin="rounded"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />

                </svg>
            </a>
            <div data-popover id="tambah-popover" role="tooltip"
                class="absolute z-40 invisible inline-block w-[5rem] bg-[#0c0c0caf] transition-opacity text-white duration-600 text-[10px]  rounded-md">
                <div class="px-1 py-1 text-center">
                    <p>Tambah Data</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-lg mr-4 rounded-md">
        <table class="w-full table-auto">
            <thead class="text-xs text-center text-black uppercase bg-[#fb8500]">
                <tr>
                    <th scope="col" class="px-4 py-4">
                        Kode Barang
                    </th>
                    <th scope="col" class="px-4 py-4">
                        Nama Barang
                    </th>
                    <th scope="col" class="px-4 py-4">
                        Penempatan
                    </th>
                    <th scope="col" class="px-4 py-4">
                        QR Code
                    </th>
                    <th scope="col" class="px-4 py-4">
                    </th>
                </tr>
            </thead>
            <tbody class="bg-[rgba(255,183,3,0.2)]">
                @foreach ($query as $row)
                    <tr class=" text-slate-900 hover:bg-slate-200">
                        <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->kode_barang }} </td>
                        <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->nama_barang }} </td>
                        <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->penempatan }} </td>
                        <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {!! QrCode::size(50)->generate($row->qr_code) !!} </td>
                        <td class="flex justify-center items-center ">
                            <a href="{{ route('Inventory.edit', $row->kode_barang) }}"
                                class="mr-2 mt-2 p-1 bg-[#fb8500] rounded-lg items-center"
                                data-popover-target="edit-popover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff" class="w-7 h-7">
                                    <path
                                        d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>
                            </a>
                            <div data-popover id="edit-popover" role="tooltip"
                                class="absolute z-40 invisible inline-block w-[5rem] bg-[#0c0c0caf] transition-opacity text-white duration-600 text-[10px] rounded-md">
                                <div class="px-1 py-1 text-center">
                                    <p>Edit Data</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                            <form action="{{ route('Inventory.destroy', $row->kode_barang) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button data-confirm-button="true" class="mr-2 mt-2 p-1 bg-[#ae2012] rounded-lg"
                                    data-popover-target="delete-popover">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff"
                                        class="w-7 h-7">
                                        <path d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2z" />
                                        <path fill-rule="evenodd"
                                            d="M2 7.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zm5.22 1.72a.75.75 0 011.06 0L10 10.94l1.72-1.72a.75.75 0 111.06 1.06L11.06 12l1.72 1.72a.75.75 0 11-1.06 1.06L10 13.06l-1.72 1.72a.75.75 0 01-1.06-1.06L8.94 12l-1.72-1.72a.75.75 0 010-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                            <div data-popover id="delete-popover" role="tooltip"
                                class="absolute z-40 invisible inline-block w-[5rem] bg-[#0c0c0caf] transition-opacity text-white duration-600 text-[10px] rounded-md">
                                <div class="px-1 py-1 text-center">
                                    <p>Delete Data</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
