@extends('layouts.main')
@section('content')
<div class=" -ml-2 mb-6">
    <h1 class="max-w-min text-3xl inline">Form Add User</h1>
</div>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    @method('POST')

    <div class="mb-6 mr-3">
        <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Username</label>
        <input type="text" id="name" name="name" placeholder="Masukan username"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('name') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" id="email" name="email" placeholder="Example:fulan@gmail.com"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('email') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="password" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukan password"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('password') }}">
    </div>
    <div class="mb-6 mr-3">
        <label for="role" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Role</label>

        <select name="role" id="role"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="{{old('role')}}">{{old('role')}}</option>
            <option value="Admin">Admin</option>
            <option value="Superadmin">Superadmin</option>
        </select>
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full mr-3 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
    </button>
    <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md w-full  sm:w-auto px-5 py-2.5 text-center"
        href="{{ route('user.index') }}" type="button"> Batal
    </a>
</form>
@endsection