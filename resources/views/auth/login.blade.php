@extends('layout.mainHtml')
@section('title' , "Login")

@section('content')
    <div class="w-full flex justify-center items-center">
        <div class="w-full">
            <h1 class="text-4xl sm:text-5xl font-bold text-white text-center mb-6 lg:mt-16">Login</h1>
            <div class="w-full px-10 lg:my-20 lg:p-16 xl:px-32 xl:py-0">
                <form class="space-y-8" action="{{ route('LoginAccount') }}" method="post">
                    @csrf
                    <div class="relative">
                        <span class="absolute left-1 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src="{{ asset('/images/mail.png') }}" alt="" /></span>
                        <input type="email" name = "email" placeholder="Email" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <div class="relative">
                        <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src="{{ asset('/images/padlock.png') }}" alt="" /></span>
                        <input type="password" name = "password" placeholder="Password" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <button type="submit" class="w-full bg-gray-300 hover:bg-gray-400 text-black py-3 rounded-lg text-xl font-bold cursor-pointer">Sign In</button>
                    <div class="h-24 flex justify-evenly items-center gap-x-16 text-white font-bold">
                        <p class="text-sm verysm:text-base 2xl:text-xl">Do you haven't an account?</p>
                        <button class="bg-gray-300 hover:bg-gray-400 w-32 h-12 text-black cursor-pointer">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
