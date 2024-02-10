<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title_web }}</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-Sen">
    <div class="bg-bg-ncf fixed bg-center w-screen h-screen blur-sm">
    </div>
    <div class="absolute flex items-center justify-center right-1/2 top-[15rem] space-x-3 ">
        <div class="text-3xl font-[600] ml-2 ">
            <strong
                class="block text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#FF9800] to-[#B31312]">Selamat
                Datang
            </strong>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#06258b] to-[#043fff]">Di Sistem Inventory</span>
        </div>
        <div class="p-6 max-w-sm mx-auto bg-white rounded-md space-y-3">
            <div class="text-2xl font-[500] text-center">Silahkan Login</div>
            <form class=" space-y-3" method="post" action="{{route('login.auth')}}">
                @csrf
                @method('POST')
                <div class="font-medium">
                    <label class="block" for="username">Username</label>
                    <input class="rounded-md border-2 focus:border-red-600 focus:ring-red-600" type="text" name="name" id="username" placeholder="Masukan Username" required >
                </div>
                <div class="font-medium">   
                    <label class="block" for="password">Password</label>
                    <input class="rounded-md border-2 focus:border-red-600 focus:ring-red-600 " type="password" name="password" id="password" placeholder="Masukan Password" required >
                </div>
                <button type="submit" class="bg-[#0872fd] p-2 rounded-md">Login</button>
            </form>
        </div>
    </div>



</body>

</html>