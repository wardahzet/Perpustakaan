<!DOCTYPE html>
<html>
<<<<<<< Updated upstream
=======
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
>>>>>>> Stashed changes
    @vite('resources/css/app.css')
  </head>
  <body>
    @foreach($wishlists as $wishlist)
      {{$wishlist->books->category['name']}}
    @endforeach
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
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
              <a href="#" class="mr-8 inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Logout</a>
            </div>
          </div>
      </div>
    
    <div class="content bg-200 my-10 mx-10">
      <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg py-5">
      <div class="checkboks w-1/12 py-2 flex justify-center">
        <form action="" method="">
          <label for=""></label>
          <input type="checkbox" id="" value=""> 
        </form> 
        <!-- masih nyari cara check all -->
      </div>
        <div class="nama-product   w-3/12 py-2 flex justify-center ">Name Product</div>
        <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
        <div class="Penulis   w-2/12 py-2 flex justify-center ">Penulis</div>
        <div class="Penerbit   w-2/12 py-2 flex justify-center">Penerbit</div>
        <div class="Kategories   w-1/12 py-2 flex justify-center" >Kategories</div>
        <div class="Aksi   w-1/12 py-2 flex justify-center" >Aksi</div>
      </div>
      <br>
      <div class="content">
        <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg ">
        <div class="checkboks w-1/12 py-20 flex justify-center">
          <form action="" method="post">
            <label for=""></label>
            <input type="checkbox" id="" value="">
          </form>
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
          <div class="Kategories  w-1/12 py-5 flex justify-center items-center" >Fiction</div>
          <div class="button w-1/12 py-20 justify-center items-center">
            <button type="submit" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Delete</button>
            </div>
        </div>
      <div class="content ">
        <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg">
        <div class="checkboks w-1/12 py-20 flex justify-center">
        <form action="" method="post">
          <label for=""></label>
          <input type="checkbox" id="" value="">
        </form>
      </div>
          <div class="nama-product  w-3/12 py-5  flex">
          <div class="image mr-5">
            <img src="{{$wishlist->books['cover']}}" alt="">
          </div>
          <div class="name-title   flex items-center font-semibold">{{$wishlist->books['title']}}</div>
          </div>
          <div class="ISBN   w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['isbn']}}</div>
          <div class="Penulis   w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['author']}}</div>
          <div class="Penerbit   w-2/12 py-5 flex items-center justify-center">{{$wishlist->books['publisher']}}</div>
          <div class="Kategories  w-1/12 py-5 flex justify-center items-center" >{{$wishlist->books['publisher']}}</div>
          <div class="button w-1/12 py-20 justify-center items-center">
            <button type="submit" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Delete</button>
        </div>
        </div>
        
      </div>
    </div>
      </div>

<<<<<<< Updated upstream
    <br>
    <div class="bg-[#D9D9D9] flex px-16 p-5">
      <div class="button ml-auto">
        <button type="submit" class="checkout bg-[rgb(234,153,1)]-500 px-16 py-4 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Check Out (-)</button>
      </div>
    </div>
      
    <!-- <script> 
    const displayEl = document.querySelector(".checkout");
    displayEl.addEventListener("click", ()=> { 
      commentsEl.classList.toggle("visible"); 
      displayEl.style.display = "none";
    });
    </script> -->
  
=======
  <body>
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
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Wishlist</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Profile</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
              <a href="#" class="mr-8 inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Logout</a>
            </div>
          </div>
        </div>

    <div class="halaman-detail flex flex-col bg-white relative overflow-hidden min-h-[1137px]">
      <div
        class="bg-[rgb(255,250,239)] rounded-[15px] w-[1300px] h-[82px] absolute top-[98px] left-[70px] min-w-[1300px]">
      </div>
      <div
        class="bg-[rgb(255,250,239)] rounded-[15px] w-[1300px] h-[371px] absolute top-[196px] left-[70px] min-w-[1300px]">
      </div>
      <div
        class="bg-[rgb(255,250,239)] rounded-[15px] w-[1300px] h-[371px] absolute top-[583px] left-[70px] min-w-[1300px]">
      </div>
      <img
        class="rounded-[15px] w-[180px] h-auto align-top object-contain object-[center_top] absolute top-[619px] left-[180px] min-w-[180px]"
        src="https://assets/3f14b777f518c5f0273e9b136385d2b6.png"
        alt="alt text"/>
      <h5
        class="font-normal text-base font-Poppins text-black tracking-[0px] w-fit h-min absolute top-[351px] left-[991px] min-w-0">
        Erlangga
      </h5>
      <h5
        class="font-normal text-base font-Poppins text-black tracking-[0px] w-fit h-min absolute top-[351px] left-[1182px] min-w-0">
        Fiction
      </h5>
      <h5
        class="font-normal text-base font-Poppins text-black tracking-[0px] w-fit h-min absolute top-[752px] left-[1156px] min-w-0">
        Encyclopedia
      </h5>
      <div
        class="bg-[rgb(255,250,239)] outline outline-black outline-1 outline-offset-[-1px] w-[30px] h-[30px] absolute top-[126px] left-[102px] min-w-[30px]">
      </div>
      <div
        class="bg-[rgb(255,250,239)] outline outline-black outline-1 outline-offset-[-1px] w-[30px] h-[30px] absolute top-[366px] left-[102px] min-w-[30px]">
      </div>
      <div
        class="bg-[rgb(255,250,239)] outline outline-black outline-1 outline-offset-[-1px] w-[30px] h-[30px] absolute top-[751px] left-[102px] min-w-[30px]">
      </div>
      <px-grid x="180fr minmax(0px, max-content) 1190fr" y="128px minmax(0px, max-content) 982fr" absolute="true"
        ><h4
          class="flex justify-center font-normal text-[18px] leading-normal font-Poppins text-black text-center tracking-[0px] w-full h-full">
          Product
        </h4></px-grid
      ><px-grid x="820fr minmax(0px, max-content) 557fr" y="126px minmax(0px, max-content) 984fr" absolute="true"
        ><h4
          class="flex justify-center font-normal text-[18px] leading-normal font-Poppins text-black text-center tracking-[0px] w-full h-full">
          Penulis
        </h4></px-grid><px-grid x="991fr minmax(0px, max-content) 374fr" y="128px minmax(0px, max-content) 982fr" absolute="true"><h4
          class="flex justify-center font-normal text-[18px] leading-normal font-Poppins text-black text-center tracking-[0px] w-full h-full">
          Penerbit
        </h4></px-grid><px-grid x="1161fr minmax(0px, max-content) 182fr" y="128px minmax(0px, max-content) 982fr" absolute="true"><h4
          class="flex justify-center font-normal text-[18px] leading-normal font-Poppins text-black text-center tracking-[0px] w-full h-full">
          Kategories
        </h4></px-grid><px-grid x="648fr minmax(0px, max-content) 753fr" y="128px minmax(0px, max-content) 982fr" absolute="true"><h4
          class="flex justify-center font-normal text-[18px] leading-normal font-Poppins text-black text-center tracking-[0px] w-full h-full">
          ISBN
        </h4></px-grid><img
        class="rounded-[15px] w-[180px] h-auto align-top object-contain object-[center_top] absolute top-[231px] left-[180px] min-w-[180px]"
        src="https://assets/7cb73d44671c5ea52c11189581a32440.png"
        alt="alt text"/>
        <px-grid x="400px 176fr 864fr" y="339px minmax(0px, max-content) 726fr" absolute="true"><h5 class="font-semibold text-base font-Poppins text-black tracking-[0px] w-full h-full">
          Under The Kitchen Table - Dessy Miladeana
        </h5></px-grid><px-grid x="400px 176fr 864fr" y="733px minmax(0px, max-content) 332fr" absolute="true"
        ><h5 class="font-semibold text-base font-Poppins text-black tracking-[0px] w-full h-full">
          Ensiklopedia Sains (Dilengkapi 1000 tautan internet)
        </h5></px-grid>
      <h5
        class="font-normal text-base font-Poppins text-black tracking-[0px] w-fit h-min absolute top-[749px] min-h-[48px] left-[609px] min-w-0">
        9786022497301<br />
      </h5>
      <px-grid x="815px 67fr 558fr" y="749px minmax(0px, 24fr) 364fr" absolute="true"><h5 class="font-normal text-base font-Poppins text-black tracking-[0px] w-full h-full">
          Usborne<br /></h5></px-grid><px-grid x="978px 105fr 357fr" y="749px minmax(0px, 48fr) 340fr" absolute="true"><h5 class="font-normal text-base font-Poppins text-black tracking-[0px] w-full h-full">
          Bhuana Ilmu Populer<br /></h5></px-grid>
      <div class="bg-[rgb(217,217,217)] w-[1440px] h-[107px] absolute top-[1030px] left-0 min-w-[1440px]"></div>
      <h5
        class="font-normal text-base font-Poppins text-black tracking-[0px] w-fit h-min absolute top-32 left-[1309px] min-w-0">
        Aksi
      </h5>
      <img
        class="w-5 h-auto align-top object-contain object-[center_top] absolute top-[753px] left-[1315px] min-w-[20px]"
        src="https://assets/4ed04611bedfc49cdb2d33826de55be8.png"
        alt="alt text"/>
      <div
        class="bg-[rgb(234,153,1)] rounded-[20px] w-[310px] h-[70px] absolute top-[1049px] left-[1060px] min-w-[310px]"></div>
      <img
        class="w-5 h-auto align-top object-contain object-[center_top] absolute top-[352px] left-[1315px] min-w-[20px]"
        src="https://assets/4ed04611bedfc49cdb2d33826de55be8.png"
        alt="alt text"/>
      <h3
        class="font-semibold text-[20px] leading-normal font-Poppins text-white tracking-[0px] w-fit h-min absolute top-[1069px] left-[1144px] min-w-0">
        Check Out (-)
      </h3>
>>>>>>> Stashed changes
    <script type="text/javascript">
      AOS.init();
    </script> -->
  </body>
</html>
