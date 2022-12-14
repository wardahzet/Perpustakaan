@extends('admin.adminlayout')

@section('content')    
        
      </div>
      <div class="content-isi mx-10">
        <div class="title-content font-medium text-2xl py-3">Edit Book Data</div>
        <div class="route flex">
            <a href="\dashboard" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400">Admin </a>
            <p class="font-base text-sm text-gray-400"> / </p>
        
            <a href="\book\create" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400"> Input Books Data</a>
        </div>

        <form method="post" action="/book/update">
          @csrf
        <div class="title-books py-5 font-semibold text-xl">Title Books *</div>
        <div class="form-control ">
          <input type="text" name="title" class="py-2 px-5 w-full border-2 border-solid border-gray-200" value="{{$book->title}}">
        </div>
        <div class="title-books py-5 font-semibold text-xl">ISBN</div>
        <div class="form-control ">
          <input type="text" name="isbn" placeholder="Ex: konspirasi alam semesta" class="py-2 px-5 w-full border-2 border-solid border-gray-200 " value="{{$book->isbn}}">
        </div>
        <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default select</label>
        <div class="title-books py-5 font-semibold text-xl">Kategori</div>
        <select id="default" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option>-- Kategori --</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>

        <script>
            document.getElementByValue('{{$category->id}}').selected = true;
        </script>

        @vite('resources/js/app.js')
        <div class="title-books py-5 font-semibold text-xl">Pengarang</div>
        <div class="form-control ">
          <input type="text" name="author" value="{{$book->author}}" class="py-2 px-5 w-full border-2 border-solid border-gray-200 ">
        </div>
        <div class="title-books py-5 font-semibold text-xl">Penerbit</div>
        <div class="form-control ">
          <input type="text" name="publisher" value="{{$book->publisher}}" class="py-2 px-5 w-full border-2 border-solid border-gray-200 ">
        </div>
        <div class="title-books py-5 font-semibold text-xl">Tahun Terbit</div>
        <div class="form-control ">
          <input type="number" name="year" value="{{$book->year}}" class="py-2 px-5 w-full border-2 border-solid border-gray-200" value="2000">
        </div>


        <div class="title-input py-5 font-semibold text-xl">Sinopsis</div>
         <div class="form-control ">
          <textarea type="text" name="synopsis" class="py-2 px-5 w-full h-32 border-2 border-solid border-gray-200 ">{{$book->synopsis}}</textarea>
        </div>
        <div class="title-input py-5 font-semibold text-xl">Cover</div>
        <div class="form-control">
          <input name="cover" type="file" value="{{$book->cover}}">
        </div>
        <div class="title-input py-5 font-semibold text-xl">File Data</div>
        <div class="form-control">
          <input name="data" type="file" value="{{$book->data}}">
        </div>
        <div class="button py-5 flex">
          <div class="button-1 mx-2">
            <button type="submit" class="bg-[#EA9901] px-5 py-2 rounded-md font-base text-white focus:bg-[#EA9901] border-none">
              Update Book
            </button>
          </div>
        </div>
      </form>

      </div>
      

       
  </div>
@endsection