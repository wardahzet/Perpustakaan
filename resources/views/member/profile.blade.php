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
.popup-form, 
.popup-data{
    position:absolute;
    top:50%;
    left:50%;
    opacity:0;
    transform:translate(-50%, -50%) scale(0.15);
    width:500px;
    padding:20px 30px;
    background:#fff;
    border:1px solid;
    border-radius:10px;
    transition:top 0ms ease-in-out 100ms,
        opacity 100ms ease-in-out 0ms,
        transform 100ms ease-in-out 0ms;
}

.popup-form.active, 
.popup-data.active{
    top:50%;
    opacity:1;
    transform:translate(-50%, -50%) scale(1);
    transition:top 0ms ease-in-out 0ms,
        opacity 100ms ease-in-out 0ms,
        transform 100ms ease-in-out 0ms;
}

.close-btn{
    position:absolute;
    top:10px;
    right:10px;
    width:15px;
    height:15px;
    background:#888;
    color:#eee;
    text-align:center;
    line-height:15px;
    border-radius:15px;
    cursor:pointer;
}

.popup-form .form h2 {
    text-align:center;
    color:#222;
    margin:10px 0px 20px;
    font-size:25px;
}

.popup-form .form .form-element {
    margin:15px 0px;
}

.popup-form .form .form-element label {
    font-size:14px;
    color:#222;
}

.popup-form .form .form-element input[type="text"],
.popup-form .form .form-element input[type="number"],
.popup-form .form .form-element input[type="password"]{
    margin-top: 5px;
    display:block;
    width:100%;
    padding:10px;
    outline:none;
    border:1px solid #aaa;
    border-radius:5px;
}
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<div class="popup-form">
    <button  onclick="setform(false)" class="absolute right-2.5 bg-[#EA9901] text-white hover:bg-[#BF7D01] py-2 px-3.5 rounded-full hover:bg-[#BF7D01] focus:outline-none focus:shadow-outline font-medium" type="button"
    >&times;
</button>
    
    <div class="form">
        <h2 id="header-form"></h2>
        <form method="post" action="{{'/user/update'}}">
            @csrf
            <div class="form-element">
                <label for="name">Nama</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{Auth::user()->email}}">
            </div>
            <div class="form-element">
                <label for="sks">Nomor Telephone</label>
                <input type="number" name="telephone" value="{{Auth::user()->telephone}}">
            </div>
            <div class="form-element">
                <label for="sks">Alamat</label>
                <input type="text" name="address" value="{{Auth::user()->address}}">
            </div>
            <button type="submit"
                        class="block w-full text-base font-semibold text-white bg-[#EA9901] mt-5 py-3 px-8 rounded-full hover:bg-[#BF7D01] focus:outline-none focus:shadow-outline font-medium">
                        Edit Profile
            </button>
        </form>
    </div>
</div>

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
                    <h1 class="mt-8 text-gray-900 font-bold text-xl leading-8 my-1">{{Auth::user()->name}}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Student at Brawijaya University</h3>

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
                                <div class="px-4 py-2">{{Auth::user()->name}}</div>
                            </div>
                            
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">{{Auth::user()->telephone}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Address</div>
                                @if (Auth::user()->address != null)
                                <div class="px-4 py-2">{{Auth::user()->address}}</div>
                                @else
                                <div class="px-4 py-2">-</div>
                                @endif
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="{{Auth::user()->email}}">{{Auth::user()->email}}</a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <button onclick="setform(true)"
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
<script>
    function setform(status) {
        if (status) {
            document.querySelector(".popup-form").classList.add("active");
        }
        else {
            document.querySelector(".popup-form").classList.remove("active");
            document.getElementById("fname").value = null;
            document.getElementById("bname").value = null;
            document.getElementById("sks").value = null;
        }
}
</script>
@endsection