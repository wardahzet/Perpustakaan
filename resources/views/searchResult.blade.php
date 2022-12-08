<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

</head>
<body>

<!-- =================================================== NAVBAR ====================================================================  -->

@if (Route::has('login'))
<div class="relative bg-white">
    @auth
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
            
        <div class="container flex items-center ">
          <input type="text" class="block -ml-16 mx-10 w-96 h-10 px-4 py-2 text-bas bg-clip-padding border rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
          <button type="submit" class="bg-[#EA9901] px-5 py-2 rounded-lg">Search</button>
          
        </div>
        </div>
        <nav class="hidden space-x-10 md:flex">
            <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="{{ route('rents')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
            <a href="{{ route('wishlist')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
            <a href="{{ route('profile')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <form method="POST" action="{{ route('loogout') }}">
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
          <input type="text" class="block -ml-16 mx-10 w-96 h-10 px-4 py-2 text-base bg-gray-100 bg-clip-padding border rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
        </div>
        </div>
        <nav class="hidden space-x-10 md:flex">
            <a href="{{ route('home')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="{{ route('rents')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
            <a href="{{ route('wishlist')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
            <a href="{{ route('profile')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <form method="POST" action="{{ route('loogout') }}">
          @csrf
            <button type='submit' class="mr-8 inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Logout</button>
          </form>
        </div>
      </div>
    </div>


    @endauth
</div>
@endif
<!--============================== SEARCH RESULT ===========================================================-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
<div class="title text-2xl font-semibold ml-20 mt-2 mb-14">Search Results</div>
<div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 xl:gap-x-4">

    @foreach ($books as $book)
      <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
          <img class="rounded-lg" src="{{$book['cover']}}" alt="">
      </div>
    @endforeach

</div>

</body>
</html>