@extends('layout.AdminDashboard')

@section('title' , 'Dashboard')


@section('content')
    <div class ="w-full flex justify-center">
        <div class = "w-11/12 h-full flex justify-between">
            <div class="w-[350px] h-[180px] flex flex-col p-6 bg-[#eee]">
                <div class = "w-full h-3/4 flex justify-between">
                    <h3 class = "text-xl font-bold">Total Revenue</h3>
                    <img src="{{ asset('images/dashboard/revenue.png') }}" alt="" srcset="" class ="w-[60px] h-[60px]">
                </div>
                <h1 class = "text-3xl font-bold"> $82,400 </h1>
            </div>

            <div class="w-[350px] h-[180px] flex flex-col p-6 bg-[#eee]">
                <div class = "w-full h-3/4 flex justify-between">
                    <h3 class = "text-xl font-bold">Total Order</h3>
                    <img src="{{ asset('images/dashboard/tracking.png') }}" alt="" srcset="" class ="w-[60px] h-[60px]">
                </div>
                <h1 class = "text-3xl font-bold"> $82,400 </h1>
            </div>

            <div class="w-[350px] h-[180px] flex flex-col p-6 bg-[#eee]">
                <div class = "w-full h-3/4 flex justify-between">
                    <h3 class = "text-xl font-bold">Total Custmer</h3>
                    <img src="{{ asset('images/dashboard/customer-service.png') }}" alt="" srcset="" class ="w-[60px] h-[60px]">
                </div>
                <h1 class = "text-3xl font-bold"> {{ \App\Models\User::where('role' ,'user')->count() }} </h1>
            </div>

            <div class="w-[350px] h-[180px] flex flex-col p-6 bg-[#eee]">
                <div class = "w-full h-3/4 flex justify-between">
                    <h3 class = "text-xl font-bold">Total Pending Order</h3>
                    <img src="{{ asset('images/dashboard/file.png') }}" alt="" srcset="" class ="w-[60px] h-[60px]">
                </div>
                <h1 class = "text-3xl font-bold"> $82,400 </h1>
            </div>
        </div>
    </div>
@endsection
