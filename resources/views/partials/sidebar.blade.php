<div class="px-4 py-3 overflow-y-auto bg-[#8ecae6] h-full pt-24 shadow-md">
    <ul class="space-y-2 font-medium">
        <li>
            <a href="{{ url('Dashboard') }}" class="flex items-center hover:bg-[#fb8500] p-2 rounded">
                <i class="fa-solid fa-home"></i>
                <span class="mt-1 ml-2">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('inventory.index') }}" class="flex items-center hover:bg-[#fb8500] p-2 rounded">
                <i class="fa-solid fa-list-check"></i>
                <span class="mt-1 ml-2">Inventory</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}" class="flex items-center hover:bg-[#fb8500] p-2 rounded">
                <i class="fa-solid fa-user"></i>
                <span class="mt-1 ml-2">User Management</span>
            </a>
        </li>
    </ul>
</div>
