@extends('admin.adminlayout')

@section('content')


      </div>
      <div class="content-isi mx-10">
        <div class="title-content font-medium text-2xl py-3">Books Detail</div>

        <div class="detail-book flex my-10">

          <div class="  w-6/12 ">
            <img src="{{$book['cover']}}" alt="b7a9f651ba4bdf1d4b66b6e400737e84" border="0">

          </div>
          <div class=" w-6/12 px-10 ">
            <div class="title-book font-bold text-2xl mb-5 ">{{$book->title}}</div>
            <div class="views mb-5">{{$book->views}}</div>
            <div class="title-segment font-semibold text-lg mb-5">ISBN</div>
            <div class="isi-segment mb-5">{{$book->isbn}}</div>
            <div class="title-segment font-semibold text-lg mb-5">Penulis</div>
            <div class="isi-segment mb-5">{{$book->author}}</div>
            <div class="title-segment font-semibold text-lg mb-5">Penerbit</div>
            <div class="isi-segment mb-5">{{$book->publisher}}</div>
             <div class="title-segment font-semibold text-lg mb-5">Tahun Terbit</div>
            <div class="isi-segment mb-5">{{$book->year}}</div>
             <div class="title-segment font-semibold text-lg mb-5">Kategories</div>
            <div class="isi-segment mb-5">{{$book->category->name}}</div>
          </div>
        </div>

          <div class="title-book font-bold text-2xl mb-5 ">{{$book->title}}-{{$book->author}}-{{$book->year}}</div>
          <div class="isi-segment mb-5">{{$book->category->name}} Books</div>
           <div class="title-segment font-semibold text-lg mb-5">Sinopsis</div>
          <div class="isi-segment mb-5">{{$book->synopsis}}</div>

        </div>
      </div>

     </div>
  </div>

@endsection