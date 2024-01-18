<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-Sen">
    {{-- Navbar --}}
    <nav class="bg-[#023047] border-b-4 border-y-[#219ebc] rounded-b-md fixed z-40 top-0 w-full shadow-lg">
        @include('partials.header')
    </nav>
    {{-- End Navbar --}}
    {{-- Sidebar --}}
    <aside class="h-screen w-52 fixed top-0 left-0 z-30 ">
        @include('partials.sidebar')
        {{-- end Sidebar --}}
    </aside>
    <div class="ml-56 mt-24">
        @yield('content')
        @include('sweetalert::alert')

    </div>
    @include('partials.footer')
</body>

</html>
