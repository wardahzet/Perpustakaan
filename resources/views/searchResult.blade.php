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
            
        <div class="container flex items-center">
          <input type="text" class="block -ml-32 mx-10 w-96 h-10 px-4 py-2 text-base bg-gray-100 bg-clip-padding border rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
        </div>
        </div>
        <nav class="hidden space-x-10 md:flex">
            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="{{ route('rents')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
            <a href="{{ route('wishlist')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
            <a href="{{ route('profile')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <form method="POST" action="{{ route('register') }}">
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

<div class="title text-2xl font-semibold ml-20 mt-12 mb-4">Search Results</div>
<div class="content flex py-5 mb-5 mx-20 border-solid border-black">
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
    <div class="image-1 mr-8">
        <img src="https://i.ibb.co/NtDQHZ5/Rectangle-49.png" alt="">
    </div>
</div>

</body>
</html>