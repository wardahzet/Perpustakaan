@extends('member.mainLayout')

@section('content')
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

@endsection