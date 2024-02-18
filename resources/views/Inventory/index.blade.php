@extends('layouts.main')

@section('content')
<div class="flex justify-between">
    <div>
        <h1 class="text-3xl m-2 font-[500]">Inventory Barang</h1>
    </div>
    <div class="mx-2 my-4">
        <a href="{{ route('inventory.create') }}"
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
            @forelse ($query as $row)
            <tr class=" text-slate-900 hover:bg-slate-200">
                <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->kode_barang }} </td>
                <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->nama_barang }} </td>
                <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {{ $row->penempatan }} </td>
                <td scope="row" class="px-4 py-3 border-r-2 border-[#ffb703]"> {!!
                    QrCode::size(50)->generate($row->qr_code) !!} </td>
                <td class="flex justify-center items-center ">
                    <a href="{{ route('inventory.edit', $row->kode_barang) }}"
                        class="mr-2 mt-2 p-2 bg-[#fb8500] rounded-lg items-center" data-popover-target="edit-popover">
                        <i class="fa-solid fa-pen-to-square" style="color: whitesmoke"></i>
                    </a>
                    <div data-popover id="edit-popover" role="tooltip"
                        class="absolute z-40 invisible inline-block w-[5rem] bg-[#0c0c0caf] transition-opacity text-white duration-600 text-[10px] rounded-md">
                        <div class="px-1 py-1 text-center">
                            <p>Edit Data</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <a type="button" href="{{ route('inventory.destroy', $row->kode_barang) }}" class="mt-2 p-2 bg-[#ae2012] rounded-lg" data-confirm-delete="true" data-popover-target="delete-popover">
                        <i class="fa-regular fa-trash-can" style="color: whitesmoke"></i>
                    </a>

                    <div data-popover id="delete-popover" role="tooltip"
                        class="absolute z-40 invisible inline-block w-[5rem] bg-[#0c0c0caf] transition-opacity text-white duration-600 text-[10px] rounded-md">
                        <div class="px-1 py-1 text-center">
                            <p>Delete Data</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    <p class="font-semibold text-center">Data Kosong</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-2 mr-3">
    {{$query->onEachSide(2)->links()}}
</div>
@endsection