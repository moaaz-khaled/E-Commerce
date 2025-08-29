@extends('layout.AdminDashboard')

@section('title' , 'AddProduct')

@section('content')
    <div class ="p-8 w-11/12 h-11/12 mx-auto bg-white shadow-xl">
        <form action="{{ route('storeProduxt') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class=" text-4xl font-bold ml-6" >Add New Product</h1>
            <div class="flex flex-col ml-6">
                <label for="productName" class="text-3xl font-bold mb-2 mt-8">Product Name</label>
                <input type="text" name="productName" id="productName" class="bg-white h-[45px] rounded-lg border-black border-1">

                <label for="Description" class="text-3xl font-bold mb-2 mt-8">Description</label>
                <textarea name="Description" id="Description" class ="bg-white h-[150px] rounded-lg border-black border-1"></textarea>

                <div class="mt-3 flex flex-row justify-between w-full">
                    <div class = "flex flex-col p-3">
                        <label for="costPrice" class="text-3xl font-bold mb-2">Cost Price($)</label>
                        <input type="number" min="0" name="costPrice" id="costPrice" class="bg-white rounded-lg border-black border-1 h-[40px] w-[250px]">
                    </div>

                    <div class = "flex flex-col p-3">
                        <label for="sellingPrice" class="text-3xl font-bold mb-2">Selling Price($)</label>
                        <input type="number" min="0" name="sellingPrice" id="sellingPrice" class="bg-white rounded-lg border-black border-1 h-[40px] w-[250px]">
                    </div>

                    <div class = "flex flex-col p-3">
                        <label for="stock" class="text-3xl font-bold mb-2">Stock</label>
                        <input type="number" min="0" name="stock" id="stock" class="bg-white rounded-lg border-black border-1 h-[40px] w-[250px]">
                    </div>
                </div>

                <div class="mt-3 flex flex-row justify-between w-full ">
                    <div class = "flex flex-col p-3">
                        <label for="category1" class="text-3xl font-bold mb-2">category1</label>
                        <select name="category1" id="category1" class="bg-white rounded-lg border-black border-1 h-[40px] w-[250px]">
                            <option value="category1">Men</option>
                            <option value="category1">Women</option>
                        </select>
                    </div>
                    <div class = "flex flex-col p-3">
                        <label for="category2" class="text-3xl font-bold mb-2">category2</label>
                        <select name="category2" id="category2" class="bg-white rounded-lg border-black border-1 h-[40px] w-[250px]">
                            <option value="category1">Shoes</option>
                            <option value="category1">T-shirt</option>
                            <option value="category1">Shoes</option>
                        </select>
                    </div>

                    <div class = "flex flex-col p-3">
                        <label for="Productimage" class="text-3xl font-bold mb-2">Upload Image</label>
                        <input type="file" name="Productimage" id="Productimage" class ="bg-white border-black border-1 h-[40px] w-[250px]">
                    </div>
                </div>
                <div class="w-full ml-2 mt-5">
                    <input type="submit" value="Add Product" class = "w-[150px] h-[50px] rounded-lg bg-[#3768BD] hover:bg-[#4c80da] text-white font-bold cursor-pointer">
                </div>
            </div>
        </form>
    </div>
@endsection
