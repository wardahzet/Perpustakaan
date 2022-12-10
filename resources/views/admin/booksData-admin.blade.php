@extends('admin.adminlayout')

@section('content')
    
        
      </div>
      <div class="content-isi mx-10">
        <div class="title-content font-medium text-2xl py-3">List Books Data</div>
        <div class="route flex">
            <a href="#" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400">Admin </a>
            <p class="font-base text-sm text-gray-400"> / </p>
        
            <a href="#" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400"> Books Data</a>
        </div>
        <div class="add-book my-5">
          <a href="/book/create">
          <button class="bg-[#EA9901] py-2 px-5 rounded-md  font-medium text-black focus:text-white">+ Add Books</button>
          </a>
        </div>
      </div>
      <div class="list"><table class=" mx-10 w-11/12" >
  <tr class="border-solid border-y-2 border-gray-400">
    <th class="w-5/12  ">Title</th>
    <th class="w-5/12 ">Action</th>
    
  </tr>
  @foreach ($books as $book)
  <tr class="justify-center">
    <td class="py-5 ">{{$book['title']}}</td>
    <td class= "py-5">
      <a href="/book/view/{{$book['isbn']}}"><button class="bg-blue-400 px-5 py-1 rounded-md ">View</button></a>
      <a href="/book/edit/{{$book['isbn']}}"><button class="bg-gray-300 px-5 py-1 rounded-md ">Edit</button></a>
      <a href="/book/delete/{{$book['isbn']}}"><button class="bg-red-400 px-5 py-1 rounded-md ">Hapus</button></a>
    </td>
   
  </tr>
  @endforeach
</table></div>
      

       
  </div>
@endsection