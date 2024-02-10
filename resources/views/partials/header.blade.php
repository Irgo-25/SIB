<div class=" px-4 py-3 flex flex-row justify-between">
    <a href="#">
        <img src= "{{ url('assets/logo.png') }}" class="h-10 w-10 left-2 -bottom-4" alt="Logo">
    </a>
    <div class="basis-12">
        <i data-feather="circle" id="my-circle" class="foo bar" stroke-width="1"></i>
    </div>
    <form action="{{route('logout')}}" method="post">
        @method('POST')
        @csrf
        <div>
            <button class="text-lg font-semibold space-x-1 mt-2 text-slate-50">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </div>
    </form>

</div>
