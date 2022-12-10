@extends('member.mainLayout')

@section('content')

<div class="flex items-center justify-center border-gray-200 mx-auto py-5 sm:px-6">
    <div class="mt-4">
        <nav class="isolate inline-flex -space-x-px shadow-sm" aria-label="Pagination">
            <a href="{{ url('/rent-current') }}" aria-current="page" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">Current</a>
            <a href="#" class="relative z-10 inline-flex items-center border border-[#EA9901] bg-indigo-50 px-4 py-2 text-sm font-medium text-[#EA9901] focus:z-20">History</a>
        </nav>
    </div>
</div>
@if(count($rent) != 0)
    <div class="content bg-200 my-10 mx-10">
      <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg py-5">
        <div class="nama-product   w-4/12 py-2 flex justify-center ">Name Product</div>
        <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
        <div class="rent-date   w-3/12 py-2 flex justify-center ">Rent Date</div>
        <div class="return-date   w-3/12 py-2 flex justify-center" >Return Date</div>
      </div>
      <br>

        <div class="content" name="books[]">

    @foreach ($rent as $r)
    <div class="container bg-[rgb(255,250,239)] flex px-10 rounded-lg ">
      <div class="nama-product  w-4/12 py-5 flex">
        <div class="image  mr-5">
          <img src="{{$r->books['cover']}}" alt="">
        </div>
        <div class="name-title  flex items-center font-semibold">{{$r->books['title']}}</div>
      </div>
      <div class="ISBN   w-2/12 py-5 flex items-center justify-center">{{$r['book_isbn']}}</div>
      <div class="rent-date   w-3/12 py-5 flex items-center justify-center">{{$r['rent_date']}}</div>
      <div class="return-date  w-3/12 py-5 flex items-center justify-center">{{$r['due_date']}}</div>

    </div>
    @endforeach

    </div>
      </div>
    <br>
</div>
@else <h1 class="text-2xl font-medium text-gray-700 my-20 text-center">Tidak ada peminjaman</h1>
@endif

@endsection