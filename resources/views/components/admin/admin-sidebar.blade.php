<div class="w-full h-full bg-[#ECF0EF] border-1">
    <div class = "w-full h-auto bg-[#ECF0EF] flex flex-col justify-center items-center">
        <img src="{{ asset('images/brand.png') }}" alt="" class= "h-[180px] w-full">
    </div>
    <div class = "w-full flex flex-col items-center py-8 gap-10">
        <a href="http://" target="_blank" rel="noopener noreferrer" class ="block p-6 w-4/5 h-[60px] flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out">
            <i class="fa-solid fa-house text-3xl text-gray-700"></i>
            <h1 class ="text-2xl font-bold">Dashboard</h1>
        </a>

        <a href="http://" target="_blank" rel="noopener noreferrer" class ="block p-6 w-4/5 h-[60px] flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out">
            <i class="fa-solid fa-shirt text-3xl text-gray-700"></i>
            <h1 class ="text-2xl font-bold">Products</h1>
        </a>

        <a href="http://" target="_blank" rel="noopener noreferrer" class ="block p-6 w-4/5 h-[60px] flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out">
            <i class="fa-solid fa-warehouse text-3xl text-gray-700"></i>
            <h1 class ="text-2xl font-bold">Inventory</h1>
        </a>

        <a href="http://" target="_blank" rel="noopener noreferrer" class ="block p-6 w-4/5 h-[60px] flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out">
            <i class="fa-solid fa-bag-shopping text-3xl text-gray-700"></i>
            <h1 class ="text-2xl font-bold">Orders</h1>
        </a>

        <a href="http://" target="_blank" rel="noopener noreferrer" class ="block p-6 w-4/5 h-[60px] flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out">
            <i class="fa-solid fa-gears text-3xl text-gray-700"></i>
            <h1 class ="text-2xl font-bold">Settings</h1>
        </a>

        <form action="{{ url('/Logout') }}" method="POST" class = "w-4/5 h-auto">
            @csrf
            <button type="submit" class=" w-full p-6 flex items-center gap-8 hover:bg-green-300 transition-colors duration-500 ease-in-out cursor-pointer">
                <i class="fa-solid fa-arrow-right-from-bracket text-3xl text-gray-700"></i>
                <h1 class="text-2xl font-bold">Logout</h1>
            </button>
        </form>
    </div>
</div>
