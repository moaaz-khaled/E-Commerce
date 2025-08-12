@extends('layout.mainHtml')
@section('title' , "Register")

@section('content')
    <div class="w-full flex justify-center items-center">
        <div class="w-full">
            <h1 class="text-4xl sm:text-5xl font-bold text-white text-center mb-6 lg:mt-16">Register</h1>
            <div class="w-full px-10 lg:my-20 lg:p-16 xl:px-32 xl:py-0">
                <form class="space-y-8" action="{{ url('register') }}" method="post">
                    @csrf
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src ="{{ asset('/images/user.png') }}" alt="" /></span>
                        <input type="text" name = "userName" placeholder="UserName" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src="{{ asset('/images/mail.png') }}" alt="" /></span>
                        <input type="email" name = "email" placeholder="Email" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src="{{ asset('/images/padlock.png') }}" alt="" /></span>
                        <input type="password" name = "password" placeholder="Password" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-xl"><img src = "{{ asset('/images/padlock.png') }}" alt="" /></span>
                        <input type="password" name = "confirmPassword" placeholder="Confirm Password" class="w-full pl-12 py-3 bg-transparent border-b border-white/50 text-white text-lg focus:outline-none focus:border-white focus:ring-0" />
                    </div>
                    <button type="submit" class="w-full bg-gray-300 hover:bg-gray-400 text-black py-3 rounded-lg text-xl font-bold">Sign Up</button>
                    <div class="h-24 flex justify-evenly items-center gap-x-16 text-white font-bold">
                        <p class="text-sm verysm:text-base 2xl:text-xl">Do you have an account?</p>
                        <button class="bg-gray-300 hover:bg-gray-400 w-32 h-12 text-black">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
