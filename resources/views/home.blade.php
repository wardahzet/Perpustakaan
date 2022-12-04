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
<div class="relative bg-white">
  <div class=" mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex items-center justify-between border-b-2 border-gray-300 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="#">
          <span class="sr-only">E-Library</span>
          <img class="h-8 w-auto sm:h-10" src="https://i.ibb.co/XYThtt1/Logo-ELibrary.png" alt="">
        </a>
      </div>
      <div class="flex justify-end">
      <div class="mb-0 xl:w-96 mr-16 -mx-60">
        <input
          type="search"
          class=" form-control block w-full px-4 py-2 text-base text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none hover:border-[#EA9901]"
          id="exampleSearch" 
          placeholder="Search"
        />
      </div>
    </div>
    <nav class="hidden space-x-10 md:flex">
      <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
      <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
    </nav>
    <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
      <a href="#" class="inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Register</a>
      <a href="#" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-[#EA9901] -600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[#BF7D01]">Login</a>
    </div>
  </div>

  </div>
<!-- ============================ ======= HERO IMAGE carousel ====================================================================== -->

  <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg my-10">
  <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

<article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
    <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
        <span x-text="currentIndex"></span>/
        <span x-text="images.length"></span>
    </div>

    <template x-for="(image, index) in images">
        <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover  rounded-2xl bg-gray-100" />
        </figure>
    </template>

    <button @click="back()"
        class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
        </svg>
    </button>

    <button @click="next()"
    class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'https://i.ibb.co/BqRzdwq/Rectangle-71.png',
                'https://i.ibb.co/gjb61rW/Rectangle-109.png',
                'https://i.ibb.co/1JZ1GFv/Rectangle-71-2.png',
                'https://i.ibb.co/vwD0nNT/Rectangle-71-4.png',
                'https://i.ibb.co/J7WhcJS/Rectangle-71-5.png'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>

</div>

  <!-- ========================================== CATEGORY ================================================================== -->

  <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mb-10">
  <h2 class="text-2xl font-semibold ">Categories</h2>
  <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 xl:grid-cols-10 gap-8 w-full">
  
  <div
	   class="computer relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/SRTLmrB/Rectangle-84-1.png" alt="Rectangle-84-1" ></a>
  </div>
	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Computer
	</h2>
  </div>

  <div
	   class="Dictionary relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <img src="https://i.ibb.co/RNBnkDT/Rectangle-83-1.png" alt="Rectangle-83-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Dictionary
	</h2>
  </div>

  <div
	   class="Music relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/DpgbXTS/Rectangle-90-1.png" alt="Rectangle-90-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Music
	</h2>
  </div>

  <div
	   class="Medical relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/VmfkRSW/Rectangle-85-1.png" alt="Rectangle-85-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Medical
	</h2>
  </div>

  <div
	   class="Encyclopedia relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/hKvBs1f/Rectangle-77-1.png" alt="Rectangle-77-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Encyclopedia
	</h2>
  </div>

  <div
	   class="Fiction relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/cyHNwFj/Rectangle-91-1.png" alt="Rectangle-91-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Fiction
	</h2>
  </div>

  <div
	   class="Anthropology relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/Csvd9xb/Rectangle-92-1.png" alt="Rectangle-92-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Anthropology
	</h2>
  </div>

  <div
	   class="Science relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/RDKTWYx/Rectangle-93-1.png" alt="Rectangle-93-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Science
	</h2>
  </div>

  <div
	   class="Economy relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/vJ7Hs3T/Rectangle-98-1.png" alt="Rectangle-98-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Economy
	</h2>
  </div>

  <div
	   class="Sociology relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
	   style="min-height: 160px"
	   >
	<div class="w-16 h-16 bg-gray-100 rounded-lg">
  <a href="#"><img src="https://i.ibb.co/TPFqBcV/Rectangle-99-1.png" alt="Rectangle-99-1" ></a>
  </div>

	<h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
  Sociology
	</h2>
  </div>


</div>
  </div>

</div>


  <!--==============================================  NEW BOOKS ==================================================================== -->

  <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mb-10">
    <div class="title-bar flex">
    <h2 class="text-2xl font-semibold ">New Books</h2>
    <div class="button-title ml-auto">
      <button class="bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01]">See All</button>
    </div>
  </div>
        <div class="content flex  pb-0 mb-0">
          <div class="swiper-newBooks !overflow-hidden ">
          <div class="swiper-wrapper flex  py-10 mb-2">
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/YPdmQMh/Rectangle-49.png" alt="Rectangle-49" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/7j2Qj0X/Rectangle-32-1.png" alt="" /></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/XYk1Rpd/Rectangle-52.png" alt="Rectangle-52" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/Pg9qGB4/Rectangle-51.png" alt="Rectangle-51" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/yd2gRy7/Rectangle-53.png" alt="Rectangle-53" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/2kdnf7K/Rectangle-65.png" alt="Rectangle-65"></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/YPdmQMh/Rectangle-49.png" alt="Rectangle-49" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/7j2Qj0X/Rectangle-32-1.png" alt="" /></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/XYk1Rpd/Rectangle-52.png" alt="Rectangle-52" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/Pg9qGB4/Rectangle-51.png" alt="Rectangle-51" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/yd2gRy7/Rectangle-53.png" alt="Rectangle-53" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/2kdnf7K/Rectangle-65.png" alt="Rectangle-65"></a>
              </div>
          </div>
              
          </div>
        </div>
        </div>
        <div class="max-w-7xl justify-end  sm:flex sm:pr-6 lg:pr-8">
        <button
          class="prev-button1 rounded-full border border-current p-3 text-[#EA9901] transition-colors focus:bg-[#EA9901] focus:text-white focus:outline-none "
        >
          <span class="sr-only">Previous Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 -rotate-180 transform"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>

        <button
          class="next-button1 ml-3 rounded-full border border-current p-3 text-[#EA9901] focus:bg-[#EA9901] focus:text-white focus:outline-none"
        >
          <span class="sr-only ">Next Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>
        </div>

      <div class="borderr py-5 mb-10 border-solid border-b-2 border-black"></div >
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-newBooks', {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 8,
      autoplay: {
        delay: 7000,
      },
      navigation: {
        nextEl: '.next-button1',
        prevEl: '.prev-button1',
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          centeredSlides: true,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 6,
        },
      },
    })
  })
</script>

  <!-- ================================= RECOMENDATIONS ===================================================== -->
  
  <div class="container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mb-10">
      <div class="title-bar flex">
        <div class="title text-2xl font-semibold">Recommendations</div>
          <div class="button-title ml-auto">
            <button class="bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01] ">See All</button>
          </div>
      </div>
      <div class="content flex pb-0 mb-0 ">
          <div class="swiper-rekomendasi !overflow-hidden ">
          <div class="swiper-wrapper flex  py-10 mb-2">
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/8mpYxkB/Rectangle-64.png" alt="Rectangle-64" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/QHwBZML/Rectangle-54.png" alt="Rectangle-54" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/nsdf0TV/Rectangle-55.png" alt="Rectangle-55" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/GQyK0hx/Rectangle-56.png" alt="Rectangle-56" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/FB98McP/Rectangle-57.png" alt="Rectangle-57" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/wy9T3rG/Rectangle-66.png" alt="Rectangle-66"></a>
              </div>
          </div>
            <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/8mpYxkB/Rectangle-64.png" alt="Rectangle-64" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/QHwBZML/Rectangle-54.png" alt="Rectangle-54" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/nsdf0TV/Rectangle-55.png" alt="Rectangle-55" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/GQyK0hx/Rectangle-56.png" alt="Rectangle-56" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/FB98McP/Rectangle-57.png" alt="Rectangle-57" ></a>
              </div>
          </div>
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
              <a href="#"><img src="https://i.ibb.co/wy9T3rG/Rectangle-66.png" alt="Rectangle-66"></a>
              </div>
          </div>
          </div>
      </div>
      <div class="max-w-7xl justify-end  sm:flex sm:pr-6 lg:pr-8">
        <button
          class="prev-button2 rounded-full border border-current p-3 text-[#EA9901] transition-colors focus:bg-[#EA9901] focus:text-white focus:outline-none "
        >
          <span class="sr-only">Previous Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 -rotate-180 transform"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>

        <button
          class="next-button2 ml-3 rounded-full border border-current p-3 text-[#EA9901] focus:bg-[#EA9901] focus:text-white focus:outline-none"
        >
          <span class="sr-only ">Next Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>
        </div>
        <div class="borderr py-5 mb-10 border-solid border-b-2 border-black"></div >
  </div>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-rekomendasi', {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 8,
      autoplay: {
        delay: 6000,
      },
      navigation: {
        nextEl: '.next-button2',
        prevEl: '.prev-button2',
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          centeredSlides: true,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 6,
        },
      },
    })
  })
</script>

  
  <!--================================================= FAVORITES ================================================-->
  
  <div class="container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mb-10">
    <div class="title-bar flex">
    <div class="title text-2xl font-semibold  ">Favorites</div>
    <div class="button-title ml-auto">
      <button class="bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01]">See All</button>
    </div>
    </div>
    <div class="content flex  mb-0 pb-0  ">
      <div class="swiper-container !overflow-hidden ">
        <div class="swiper-wrapper flex  py-10 mb-2">
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/RhB7J8f/Rectangle-76.png" alt="Rectangle-76" ></a>
                  </div> 
          </div>
          <div class="swiper-slide "> 
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/LvKSP9K/Rectangle-58.png" alt="Rectangle-58" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/Pgcq2rQ/Rectangle-59.png" alt="Rectangle-59" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/5cPRDFD/Rectangle-60.png" alt="Rectangle-60" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/tcrC8f0/Rectangle-61.png" alt="Rectangle-61" ></a>
                  </div>
          </div>
          
          <div class="swiper-slide ">
                <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="#"><img src="https://i.ibb.co/vdqgGf5/Rectangle-76.png" alt="Rectangle-76" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
                <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="#"><img src="https://i.ibb.co/vdqgGf5/Rectangle-60.png" alt="Rectangle-60" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/vdqgGf5/Rectangle-68.png" alt="Rectangle-68" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="#"><img src="https://i.ibb.co/vdqgGf5/Rectangle-58.png" alt="Rectangle-58" ></a>
              </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/Pgcq2rQ/Rectangle-59.png" alt="Rectangle-59" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/tcrC8f0/Rectangle-61.png" alt="Rectangle-61" ></a>
                  </div>
          </div>
          <div class="swiper-slide ">
                  <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                  <a href="#"><img src="https://i.ibb.co/5cPRDFD/Rectangle-60.png" alt="Rectangle-60" ></a>
                  </div>
          </div>
        </div>
      </div>
    </div>
    <div class="max-w-7xl justify-end  sm:flex sm:pr-6 lg:pr-8">
        <button
          class="prev-button rounded-full border border-current p-3 text-[#EA9901] transition-colors focus:bg-[#EA9901] focus:text-white focus:outline-none "
        >
          <span class="sr-only">Previous Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 -rotate-180 transform"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>

        <button
          class="next-button ml-3 rounded-full border border-current p-3 text-[#EA9901] focus:bg-[#EA9901] focus:text-white focus:outline-none"
        >
          <span class="sr-only ">Next Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>
      
        </div>
  </div>


  
  <!--=============================================== footer====================================================== -->
  <div class="bg-black py-5">
    <p class="text-[#EA9901] text-center">@2022 E-Library Team</p>
  </div>

<!-- =========================================COBA =======================================-->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 8,
      autoplay: {
        delay: 8000,
      },
      navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          centeredSlides: true,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 6,
        },
      },
    })
  })
</script>

</body>
</html>