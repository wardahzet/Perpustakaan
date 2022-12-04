<!DOCTYPE html>
<html>
    @vite('resources/css/app.css')
  </head>
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

    <!-- <div class="halaman-detail flex flex-col bg-white relative overflow-hidden min-h-[1137px]"> -->
    
    <div class="content bg-200 my-10 mx-10">
      <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg py-5">
      <div class="checkboks w-1/12 py-2 flex justify-center">
        <form action="" method="">
          <label for=""></label>
          <input type="checkbox" id="" value="">
        </form>
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
          <form action="" method="">
            <label for=""></label>
            <input type="checkbox" id="" value="">
          </form>
        </div>
          <div class="nama-product  w-3/12 py-5 flex">
          <div class="image  mr-5">
            <img src="https://i.ibb.co/M7r1MVM/Rectangle-115.png" alt="">
          </div>
          <div class="name-title  flex items-center font-semibold">Under The Kitchen Table - Dessy Miladeana</div>
          </div>
          <div class="ISBN   w-2/12 py-5 flex items-center justify-center">9786020664156</div>
          <div class="Penulis   w-2/12 py-5 flex items-center justify-center">Dessy Miladeana</div>
          <div class="Penerbit  w-2/12 py-5 flex items-center justify-center">Erlangga</div>
          <div class="Kategories  w-1/12 py-5 flex justify-center items-center" >Fiction</div>
          <div class="button w-1/12 py-20 justify-center items-center">
            <button type="submit" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Delete</button>
            </div>
        </div>
      <div class="content ">
        <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg">
        <div class="checkboks w-1/12 py-20 flex justify-center">
        <form action="" method="">
          <label for=""></label>
          <input type="checkbox" id="" value="">
        </form>
      </div>
          <div class="nama-product  w-3/12 py-5  flex">
          <div class="image mr-5">
            <img src="https://i.ibb.co/h2zb9sd/123321.png" alt="">
          </div>
          <div class="name-title   flex items-center font-semibold">Ensiklopedia Sains (Dilengkapi 1000 tautan internet)</div>
          </div>
          <div class="ISBN   w-2/12 py-5 flex items-center justify-center">9786022497301</div>
          <div class="Penulis   w-2/12 py-5 flex items-center justify-center">Usborne</div>
          <div class="Penerbit   w-2/12 py-5 flex items-center justify-center">Bhuana Ilmu <br>Populer
          </div>
          <div class="Kategories  w-1/12 py-5 flex justify-center items-center" >Encyclopedia</div>
          <div class="button w-1/12 py-20 justify-center items-center">
            <button type="submit" class="delete bg-[rgb(234,153,1)]-500 px-6 py-2 rounded-xl  bg-[#EA9901] focus:border-solid focus:bg-white focus:border-[#EA9901] focus:border-2" >Delete</button>
        </div>
        </div>
        
      </div>
    </div>
      </div>

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
  
    <script type="text/javascript">
      AOS.init();
    </script> -->
  </body>
</html>
