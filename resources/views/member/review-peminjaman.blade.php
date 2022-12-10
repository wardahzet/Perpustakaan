@extends('member.mainLayout')

@section('content')

   <div class="profile px-10 my-5 ">
     <div class="container bg bg-yellow-200 px-10 py-5 rounded-lg  ">
       <div class="name flex py-5">
         <p>Name</p>
         <p class="ml-auto">{{Auth::user()->name}}</p>
       </div>
       <div class="email flex py-5 ">
         <p>Email</p>
         <p class="ml-auto">{{Auth::user()->email}}</p>
       </div>
       <div class="no-anggota flex py-5">
         <p>No Anggota</p>
         <p class="ml-auto">315150700111012</p>
       </div>
       <div class="no-handphone flex py-5">
         <p>No Handphone</p>
         <p class="ml-auto">{{Auth::user()->telephone}}</p>
       </div>
     </div>
   </div>

<form method="POST" action="/rent">
@csrf
  <div class="content bg-yellow-200 my-10 mx-10 rounded-lg py-5 ">
    <div class="container  flex px-10 ">
      <div class="nama-product   w-4/12 py-2 flex justify-center ">Name Product</div>
      <div class="ISBN   w-2/12 py-2 flex justify-center">ISBN</div>
      <div class="Penulis   w-2/12 py-2 flex justify-center ">Penulis</div>
      <div class="Penerbit   w-2/12 py-2 flex justify-center">Penerbit</div>
      <div class="Kategories   w-2/12 py-2 flex justify-center" >Kategories</div>
    </div>
    @forEach ($rents as $rent)
    <input type="hidden" name="book[]" value="{{$rent->books['isbn']}}">

    <div class="content ">
      <div class="container  flex px-10  ">
        <div class="nama-product  w-4/12 py-5  flex">
          <div class="image  mr-5">
            <img src="{{$rent->books['cover']}}" alt="">
          </div>
          <div class="name-title  flex items-center font-semibold">{{$rent->books['title']}}</div>
        </div>
        <div class="ISBN   w-2/12 py-5 flex items-center justify-center">{{$rent->books['isbn']}}</div>
        <div class="Penulis   w-2/12 py-5 flex items-center justify-center">{{$rent->books['author']}}</div>
        <div class="Penerbit  w-2/12 py-5 flex items-center justify-center">{{$rent->books['publisher']}}</div>
        <div class="Kategories  w-2/12 py-5 flex justify-center items-center" >{{$rent->books->category['name']}}</div>
      </div>
    </div>
    @endforeach
  </div>
   
  </div>

  <div class="bg-[#D9D9D9] flex px-16 p-5">
    <button type='submit' class=" inline-flex items-center rounded-md border border-[#EA9901] bg-[#EA9901] px-5 py-2 text-base font-medium text-white shadow-sm focus:bg-white focus:text-[#EA9901] ml-auto">Check Out</button>
  </div>
</form>

@endsection