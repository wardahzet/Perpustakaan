@extends('member.mainLayout')

@section('content')
<!-- component -->

@vite('resources/css/app.css')
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-gray-200 p-3 border-t-4 border-[#EA9901]">
                    <div class="image overflow-hidden">
                        <img class="h-40 w-40 mx-auto"
                            src="https://i.ibb.co/vxVdkPg/60111.jpg" 
                            alt="">
                    </div>
                    <h1 class="mt-8 text-gray-900 font-bold text-xl leading-8 my-1">Lionel Messi</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Student at Brawijaya University</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                        Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>  
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-gray-200 p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Name</div>
                                <div class="px-4 py-2">Lionel</div>
                            </div>
                            
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">+62 998001001</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Address</div>
                                <div class="px-4 py-2">Malang, Jawa Timur</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:messi@gmail.com">Messi@gmail.com</a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <button
                        class="block w-full text-base font-semibold text-white bg-[#EA9901] mt-5 py-3 px-8 rounded-full hover:bg-[#BF7D01] focus:outline-none focus:shadow-outline font-medium">
                        Edit Profile
                </button>
                <!-- End of about section -->

                <div class="my-4"></div>

               
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>

@endsection