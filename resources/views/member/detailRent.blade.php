@extends('member.mainLayout')

@section('content')

@if(count($wishlists) != 0)
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

      function reset() {
        get = document.querySelectorAll(".check3");
        for(var i=0; i<get.length; i++) {
          get[i].checked = false;
        }
        document.getElementById("button").innerHTML = '<button type="submit" class="checkout bg-[rgb(234,153,1)]-500 px-16 py-4 rounded-xl  bg-gray-500 focus:border-solid focus:bg-white focus:border-gray-300 focus:border-2" disabled >Check Out (-)</button>';
        $count = {{$count}};
      }

    </script>
  </form>
  @else <h1 class="text-2xl font-medium text-gray-700 my-20 text-center">Tidak ada wishlist</h1>
@endif

  @endsection
