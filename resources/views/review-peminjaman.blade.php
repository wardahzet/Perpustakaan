<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
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

   <div class="profile px-10 my-5 ">
     <div class="container bg bg-yellow-200 px-10 py-5 rounded-lg  ">
       <div class="name flex py-5">
         <p>Name</p>
         <p class="ml-auto">Alifia Putri Budiyanti</p>
       </div>
       <div class="email flex py-5 ">
         <p>Email</p>
         <p class="ml-auto">aisyahputri140702@gmail.com</p>
       </div>
       <div class="no-anggota flex py-5">
         <p>No Anggota</p>
         <p class="ml-auto">315150700111012</p>
       </div>
       <div class="no-handphone flex py-5">
         <p>No Handphone</p>
         <p class="ml-auto">+62 896- 1686-871</p>
       </div>
     </div>
   </div>
    
     <div class="content bg-yellow-200 my-10 mx-10 rounded-lg py-5 ">
    <div class="container  flex px-10 ">
      <div class="nama-product   w-4/12 py-2 flex justify-center ">Name Product</div>
      <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
      <div class="Penulis   w-2/12 py-2 flex justify-center ">Penulis</div>
      <div class="Penerbit   w-2/12 py-2 flex justify-center">Penerbit</div>
      <div class="Kategories   w-2/12 py-2 flex justify-center" >Kategories</div>
    </div>

    <div class="content ">
    <div class="container  flex px-10  ">
      <div class="nama-product  w-4/12 py-5  flex">
      <div class="image  mr-5">
        <img src="https://i.ibb.co/M7r1MVM/Rectangle-115.png" alt="">
      </div>
      <div class="name-title  flex items-center font-semibold">Under The Kitchen Table - Dessy Miladeana</div>
      </div>
      <div class="ISBN   w-2/12 py-5 flex items-center justify-center">9786020664156</div>
      <div class="Penulis   w-2/12 py-5 flex items-center justify-center">Dessy Miladeana</div>
      <div class="Penerbit  w-2/12 py-5 flex items-center justify-center">Erlangga</div>
      <div class="Kategories  w-2/12 py-5 flex justify-center items-center" >Fiction</div>
    </div>
    <div class="content ">
    <div class="container  flex px-10  ">
      <div class="nama-product  w-4/12 py-5  flex">
      <div class="image  mr-10">
        <img src="https://i.ibb.co/h2zb9sd/123321.png" alt="">
      </div>
      <div class="name-title   flex items-center font-semibold">Ensiklopedia Sains (Dilengkapi 1000 tautan internet)</div>
      </div>
      <div class="ISBN   w-2/12 py-5 flex items-center justify-center">9786022497301</div>
      <div class="Penulis   w-2/12 py-5 flex items-center justify-center">Usborne</div>
      <div class="Penerbit   w-2/12 py-5 flex items-center justify-center">Bhuana Ilmu Populer
</div>
      <div class="Kategories  w-2/12 py-5 flex justify-center items-center" >Encyclopedia</div>
    </div>
  </div>
  </div>
  </div>
  
    <div class="bg-[#D9D9D9] flex px-16 p-5">
    <form method="POST" action="{{ route('loogout') }}" class="flex justify-end  ml-auto">
            @csrf
            <button type='submit' class=" inline-flex items-center rounded-md border border-[#EA9901] bg-[#EA9901] px-5 py-2 text-base font-medium text-white shadow-sm focus:bg-white focus:text-[#EA9901] ml-auto">Check Out</button>
          </form>
    </div>
</body>
</html>