@extends('layouts.main')
@section('content')
<div class=" -ml-2 mb-6">
    <h1 class="max-w-min text-3xl inline">Form Inventory Barang</h1>
</div>
<form action="{{ route('inventory.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mb-6 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Kode
            Barang</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-300 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            readonly value="{{ $kode_barang, old('kode_barang') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="nama-barang" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nama
            Barang</label>
        <input type="text" id="nama-barang" name="nama_barang"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('nama_barang') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="penempatan" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Penempatan</label>
        <input type="text" id="penempatan" name="penempatan"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('penempatan') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="QR-code" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Code QR</label>
        <input type="text" id="qr-code" name="qr_code"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('qr_code') }}">
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full mr-3 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
    </button>
    <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md w-full  sm:w-auto px-5 py-2.5 text-center"
        href="{{ url('Inventory') }}" type="button"> Batal
    </a>
</form>
@endsection