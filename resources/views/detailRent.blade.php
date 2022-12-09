<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <!-- Please DO NOT remove this line, all link and script tags will be merged to here -->

    <link rel="stylesheet" type="text/css" href="/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css" />

    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.01.0.js"></script>

    @vite('resources/css/app.css')
  </head>
  <body>

    <div class="relative bg-white">
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
                <input type="text" name="keyword" class="block -ml-20 mx-10 w-72 h-10 px-4 py-2 text-bas bg-clip-padding border-rounded transition ease-in-out focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none   input-search bg-white-200 border-solid border-2 border-gray-300 rounded-2xl  text-gray-700" placeholder="Search" >
              </form>
              <button type="submit" class="bg-[#EA9901] px-5 py-2 rounded-lg">Search</button>
            </div>
            </div>
            <div class="">
            <nav class="space-x-10 md:flex">
                <a href="{{ route('home')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
                <a href="{{ route('rents')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
                <a href="{{ route('profile')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
            </nav>
            </div>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
              <form method="POST" action="{{ route('logout') }}">
                <button type='submit' class="mr-8 inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Logout</button>
              </form>
            </div>
          </div>
        </div>

  <form action="/rent/validation" method="post">
    @csrf
    <div class="content bg-200 my-10 mx-10">
      <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg py-5">
      <div class="checkboks w-1/12 py-2 flex justify-center">

          <input type="checkbox" id="" value="" onclick="checkAll(this)"> 

      </div>
        <div class="nama-product   w-3/12 py-2 flex justify-center ">Name Product</div>
        <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
        <div class="Penulis   w-2/12 py-2 flex justify-center ">Penulis</div>
        <div class="Penerbit   w-2/12 py-2 flex justify-center">Penerbit</div>
        <div class="Kategories   w-1/12 py-2 flex justify-center" >Kategories</div>
        <div class="Aksi   w-1/12 py-2 flex justify-center" >Aksi</div>
      </div>
      <br>

        <div class="content" name="books[]">

        @foreach($wishlists as $wishlist)
        <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg ">
            <div class="checkboks w-1/12 py-20 flex justify-center">
                <input type="checkbox" class="check3" name="books[]" value="{{$wishlist->books['isbn']}}">
            </div>
            <div class="nama-product  w-3/12 py-5 flex">
              <div class="image  mr-5">
                <img src="{{$wishlist->books['cover']}}" alt="">
              </div>
              <div class="name-title  flex items-center font-semibold">{{$wishlist->books['title']}}</div>
            </div>
            <div class="ISBN   w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['isbn']}}</div>
            <div class="Penulis   w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['author']}}</div>
            <div class="Penerbit  w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['publisher']}}</div>
            <div class="Kategories  w-1/12 py-5 flex justify-center items-center" >{{$wishlist->books->category['name']}}</div>
            <div class="button w-1/12 py-20 justify-center items-center">
              <a href="/wishlist/delete/{{$wishlist->books['isbn']}}"><button type="button" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Delete</button></a>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    <br>
    <div class="bg-[#D9D9D9] flex px-16 p-5">
      <div id='button' class="button ml-auto">
        
      </div>
    </div> 
  </form>
    <script>
      let $count = {{$count}};
      console.log($count);
      set();
      document.querySelectorAll(".check3").forEach(check => {
        check.addEventListener("click", function() {
          if(this.checked) $count++;
          else $count--;
          console.log($count);
          set();
        });
      });

      function checkAll(check) {
        get = document.querySelectorAll(".check3");
        for(var i=0; i<get.length; i++) {
          get[i].checked = check.checked;
        }
        console.log($count, get.length);
        if(check.checked) $count = {{$count}} + get.length;
        else $count -= get.length;
        console.log($count, get.length);
        set();
      }

      function set() {
        if($count > 3 || {{$count}}-$count == 0)
            document.getElementById("button").innerHTML = '<button type="submit" class="checkout bg-[rgb(234,153,1)]-500 px-16 py-4 rounded-xl  bg-gray-500 focus:border-solid focus:bg-white focus:border-gray-300 focus:border-2" disabled >Check Out (-)</button>';
        else
          document.getElementById("button").innerHTML = '<button type="submit" class="checkout bg-[rgb(234,153,1)]-500 px-16 py-4 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Check Out (-)</button>';
      }

    </script>
  </form>
  <body>
  </body>
</html>
