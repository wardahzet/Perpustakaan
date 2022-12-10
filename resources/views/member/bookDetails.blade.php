@extends('member.mainLayout')

@section('content')

<div class="bg-white">
    <div class="pt-6">
  
      <!-- Cover Image -->
      <div class= "container mx-auto max-w-7xl px-4 sm:px-6 bg-white-200 rounded-lg mt-5 mb-5">
        <img class="rounded-2xl bg-gray-100" style="width: 1300px; height: 383px" style="background:url({{$book['cover']}})" alt="Cover" class="h-72 object-cover object-center rounded-lg">
      </div>
  
      <div class="pl-16 px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$book['title']}}</h1>
        </div>
        
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <p class="text-3xl tracking-tight text-gray-900">You May Also Like</p>
          <form class="mt-10">
            <div>
              <h3 class="text-lg font-medium text-gray-900">{{$like->title}}</h3>
              <h2 class="text-sm font-medium text-gray-900">by {{$like->author}}</h2>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between">
                <h3 class="text-sm text-justify text-gray-900">{{$like->synopsis}}</h3>
              </div>
              <fieldset class="mt-4">
                  <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                  </div>
              </fieldset>
            </div>
            <br>
            <a href="/description/{{$like->isbn}}" class="text-base font-semibold text-black bg-[#EA9901] py-3 px-8 rounded-full hover:shadow-lg hover:bg-[#BF7D01]">See More</a>
          </form>
        </div>
  
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
          <div>
            <div class="space-y-6">
              <h2 class="text-sm font-medium text-gray-900">by {{$book['author']}}</h2>
              <p class="text-base text-justify text-gray-900">{{$book['synopsis']}}</p>
              <br><br>
              <a href="/wishlist/store/{{$book['isbn']}}" class="text-base font-semibold text-black bg-[#EA9901] py-3 px-8 rounded-full hover:shadow-lg hover:bg-[#BF7D01]">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection