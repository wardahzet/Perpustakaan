@extends('member.mainLayout')

@section('content')
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
  
  @foreach ($categories as $category)
    <div
        class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out flex flex-col justify-center items-center"
        style="min-height: 160px"
        >
      <div class="w-16 h-16 bg-gray-100 rounded-lg">
      <a href="search/Category/{{$category->id}}"><img src="{{$category['icon']}}" alt="Rectangle-99-1" ></a>
      </div>
      <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        {{$category['name']}}
      </h2>
    </div>
  @endforeach
  </div>

</div>


  <!--==============================================  NEW BOOKS ==================================================================== -->

  <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mb-10">
    <div class="title-bar flex">
    <h2 class="text-2xl font-semibold ">New Books</h2>
      <div class="button-title ml-auto">
        <form action="/search/newbooks">
          <button type="submit" bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01]">See All</button>
        </form>
      </div>
    </div>
    <div class="content flex  pb-0 mb-0">
      <div class="swiper-newBooks !overflow-hidden ">
        <div class="swiper-wrapper flex  py-10 mb-2">
          @foreach ($newbooks as $newbook)
            <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="/description/{{$newbook['isbn']}}"><img src="{{$newbook['cover']}}" alt="Rectangle-49" ></a>
              </div>
            </div>
          @endforeach
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
            <form action="/search/recommendations">
              <button type='sumbit' class="bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01] ">See All</button>
            </form>
          </div>
      </div>
      <div class="content flex pb-0 mb-0 ">
          <div class="swiper-rekomendasi !overflow-hidden ">
          <div class="swiper-wrapper flex  py-10 mb-2">
            @foreach ($recommendations as $recommendation)
            <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="/description/{{$newbook['isbn']}}"><img src="{{$recommendation['cover']}}" alt="Rectangle-49" ></a>
              </div>
            </div>
            @endforeach
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
      <form action="/search/populars">
        <button type='sumbit' class="bg-[#EA9901] rounded-2xl px-5 py-1 text-base font-semibold text-white hover:bg-[#BF7D01]">See All</button>
      </form>
    </div>
    </div>
    <div class="content flex  mb-0 pb-0  ">
      <div class="swiper-container !overflow-hidden ">
        <div class="swiper-wrapper flex  py-10 mb-2">
          @foreach ($populars as $popular)
            <div class="swiper-slide ">
              <div class="image-1 mr-8 hover:scale-110 transition duration-300 ease-in-out">
                <a href="/description/{{$newbook['isbn']}}"><img src="{{$popular['cover']}}" alt="Rectangle-49" ></a>
              </div>
            </div>
            @endforeach
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

@endsection