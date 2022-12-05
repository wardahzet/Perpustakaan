<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    @vite('resources/css/app.css')
</head>
<body>
<<<<<<< Updated upstream
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
=======
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
              
          <div class="container flex items-center">
            <input type="text" class="block -ml-32 mx-10 w-96 h-10 px-4 py-2 text-base bg-gray-100 bg-clip-padding border rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
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
                  <a href="/">
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
              <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
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
>>>>>>> Stashed changes

<div class="bg-white">
    <div class="pt-6">
  
      <!-- Cover Image -->
      <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mt-5 mb-5">
        <img class="rounded-2xl bg-gray-100" style="width: 1300px; height: 383px" style="background:url(https://i.ibb.co/r2Zxg25/image001-118.jpg)" alt="Cover" class="h-72 object-cover object-center rounded-lg">
      </div>
  
      <div class="pl-16 px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          @foreach ($book as $books)
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$books['title']}}</h1>
          @endforeach
        </div>
  
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <p class="text-3xl tracking-tight text-gray-900">You May Also Like</p>
          <form class="mt-10">
            <div>
              <h3 class="text-lg font-medium text-gray-900">Under The Kitchen Table</h3>
              <h2 class="text-sm font-medium text-gray-900">by ekaaryani</h2>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between">
                <h3 class="text-sm text-justify text-gray-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies ornare orci sed suscipit. Maecenas eget luctus ante. Maecenas pellentesque eu diam ut dapibus. Nulla porttitor ac purus vitae condimentum. Mauris consequat metus sit amet sapien congue, a tristique felis ultrices.</h3>
              </div>
              <fieldset class="mt-4">
                  <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                  </div>
              </fieldset>
            </div>
            <br>
            <a href="#" class="text-base font-semibold text-black bg-[#EA9901] py-3 px-8 rounded-full hover:shadow-lg hover:bg-[#BF7D01]">See More</a>
          </form>
        </div>
  
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
          <div>
            <div class="space-y-6">
              @foreach ($book as $books)
              <h2 class="text-sm font-medium text-gray-900">by {{$books['author']}}</h2>
              <p class="text-base text-justify text-gray-900">{{$books['synopsis']}}</p>
              @endforeach
              <br><br>
              <a href="#" class="text-base font-semibold text-black bg-[#EA9901] py-3 px-8 rounded-full hover:shadow-lg hover:bg-[#BF7D01]">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>