<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent - Current</title>
    @vite('resources/css/app.css')
</head>
<body>
    
@if (Route::has('login'))
<div class="relative bg-white">
  @auth
    <div class="relative bg-white">
      <div class="mx-auto">
        <div class="flex items-center mr-0 ml-0 justify-between border-b-2 border-gray-300 py-6 md:justify-start md:space-x-10">
            <div class="mb-1 ml-8 flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                <span class="sr-only">E-Library</span>
                <img class="h-8 w-auto sm:h-10" src="https://i.ibb.co/XYThtt1/Logo-ELibrary.png" alt="">
                </a>
            </div>
        <div class="flex justify-end">
            
        <div class="container flex items-center ">
          <form method="get" action="/src">
          @csrf
            <input type="text" name="keyword" class="block -ml-20 mx-10 w-72 h-10 px-4 py-2 text-bas bg-clip-padding border-rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
          </form>
          <button type="submit" class="bg-[#EA9901] px-5 py-2 rounded-lg">Search</button>
        </div>
        </div>
        <div class="">
        <nav class="space-x-10 md:flex">
            <a href="{{ route('home')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
            <a href="{{ route('wishlist')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
            <a href="{{ route('profile')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
        </nav>
        </div>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type='submit' class="mr-8 inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Logout</button>
          </form>
        </div>
      </div>
    </div>
@else
<div class="relative bg-white">
    <div class="mx-auto">
        <div class="flex items-center mr-0 ml-0 justify-between border-b-2 border-gray-300 py-6 md:justify-start md:space-x-10">
            <div class="mb-1 ml-8 flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                <span class="sr-only">E-Library</span>
                <img class="h-8 w-auto sm:h-10" src="https://i.ibb.co/XYThtt1/Logo-ELibrary.png" alt="">
                </a>
            </div>
        <div class="flex justify-end">
            
        <div class="container flex items-center">
          <input type="text" class="block -ml-80 mx-10 w-96 h-10 px-4 py-2 text-base bg-gray-100 bg-clip-padding border rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
        </div>
        </div>
        <nav class="hidden space-x-10 md:flex">
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0" id="profile">
          <a href="{{ route('register') }}" class="inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Register</a>
          <a href="{{ route('login') }}" class="ml-8 mr-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-[#EA9901] -600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[#BF7D01]">Login</a>
        </div>
      </div>
    </div>

    @endauth
</div>
@endif

<div class="flex items-center justify-center border-gray-200 mx-auto py-5 sm:px-6">
    <div class="mt-4">
        <nav class="isolate inline-flex -space-x-px shadow-sm" aria-label="Pagination">
            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-[#EA9901] bg-indigo-50 px-4 py-2 text-sm font-medium text-[#EA9901] focus:z-20">Current</a>
            <a href="{{ url('/rent-history') }}" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">History</a>
        </nav>
    </div>
</div>
<form action="/rent/validation" method="post">
    @csrf
    <div class="content bg-200 my-10 mx-10">
      <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg py-5">
        <div class="nama-product   w-4/12 py-2 flex justify-center ">Name Product</div>
        <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
        <div class="rent-date   w-2/12 py-2 flex justify-center ">Rent Date</div>
        <div class="due-date   w-2/12 py-2 flex justify-center">Due Date</div>
        <div class="Aksi   w-2/12 py-2 flex justify-center" >Aksi</div>
      </div>
      <br>

        <div class="content" name="books[]">

    @foreach ($rent as $r)
    <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg ">
            <div class="nama-product  w-4/12 py-5 flex">
              <div class="image  mr-5">
                <img src="{{$r->books['cover']}}" alt="">
              </div>
              <div class="name-title  flex items-center font-semibold">{{$r->books['title']}}</div>
            </div>
            <div class="ISBN   w-2/12 py-5 flex items-center justify-center">{{$r->books['book_isbn']}}</div>
            <div class="rent-date   w-2/12 py-5 flex items-center justify-center">{{$r->books['rent_date']}}</div>
            <div class="due-date  w-2/12 py-5 flex items-center justify-center">{{$r->books['due_date']}}</div>
            <div class="button w-2/12 py-20 justify-center items-center">
              <button type="button" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Return</button>
            </div>
          </div>
    @endforeach

    </div>
      </div>
    <br>
<script> console.log('$rent');
    </script>
</body>

</html>
