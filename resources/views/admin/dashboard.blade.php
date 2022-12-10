@extends('admin.adminlayout')

@section('content')
        
      </div>
      <div class="content-isi mx-10">
        <div class="title-content font-medium text-2xl py-3">Welcome to Dashboard</div>
        <div class="route flex">
            <a href="/dashboard" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400">Admin </a>
            <p class="font-base text-sm text-gray-400"> / </p>
        
            <a href="/dashboard" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400"> Dashboard</a>
        </div>
        <div class="point flex my-5">
            <div class="total-peminjaman bg-gray-200 rounded-md  h-24 w-3/12 px-5 py-5 flex mr-5">
                <div class="logo  w-10 flex items-center justify-center h-10">
                 gambar
                </div>
                <div class="title   ml-auto h-16 ">
                  
                  <div class="title-besar flex items-center justify-end font-base text-gray-500 text-sm">Total Rent</div>
                  <div class="sub-title flex items-center justify-end font-medium text-xl">{{$rentc}}</div>
      
      
                </div>
            </div>
            <div class="total-peminjaman bg-gray-200 rounded-md  h-24 w-3/12 px-5 py-5 flex mr-5">
                <div class="logo  w-10 flex items-center justify-center h-10">
                 gambar
                </div>
                <div class="title   ml-auto h-16 ">
                  
                  <div class="title-besar flex items-center justify-end font-base text-gray-500 text-sm">Total Books</div>
                  <div class="sub-title flex items-center justify-end font-medium text-xl">{{$book}}</div>
      
      
                </div>
            </div>
            <div class="total-peminjaman bg-gray-200 rounded-md  h-24 w-3/12 px-5 py-5 flex mr-5">
                <div class="logo  w-10 flex items-center justify-center h-10">
                 gambar
                </div>
                <div class="title   ml-auto h-16 ">
                  
                  <div class="title-besar flex items-center justify-end font-base text-gray-500 text-sm">Total Member</div>
                  <div class="sub-title flex items-center justify-end font-medium text-xl">{{$users->count()}}</div>
      
      
                </div>
            </div>
            <div class="total-peminjaman bg-gray-200 rounded-md  h-24 w-3/12 px-5 py-5 flex mr-5">
                <div class="logo  w-10 flex items-center justify-center h-10">
                 gambar
                </div>
                <div class="title   ml-auto h-16 ">
                  
                  <div class="title-besar flex items-center justify-end font-base text-gray-500 text-sm">Total Return</div>
                  <div class="sub-title flex items-center justify-end font-medium text-xl">{{$renth}}</div>
      
      
                </div>
            </div>
        </div>
        <div class="content-data flex">
            <div class="member w-6/12 bg-gray-200 mr-8 px-10 py-5">
            <div class="member-1 flex ">
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">Nama Member</div>
              <div class="name-member  w-2/12 h-12 flex items-center justify-center">id</div>
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">Total Peminjaman</div>
              <div class="name-member  w-3/12 h-12 flex items-center justify-center">Aksi</div>
              
              
            
            </div>
            @foreach ($users as $user)
            <div class="member-1 flex my-1 bg-white rounded-md  px-1">
              <div class="name-member  w-4/12 h-12 flex items-center">{{$user->name}}</div>
              <div class="name-member  w-2/12 h-12 flex items-center justify-center">{{$user->id}}</div>
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">{{$user->rent->count()}}</div>
              @if ($user->created_at == null)
                <div class="name-member  w-3/12 h-12 flex items-center justify-center">-</div>
              @else
                <div class="name-member  w-3/12 h-12 flex items-center justify-center">{{date('Y-m-d', strtotime($user->created_at)) }}</div>
              @endif
              
            </div>
            @endforeach

            </div>

            <div class="member w-7/12 bg-gray-200 mr-8 px-10 py-5">
            <div class="member-1 flex ">
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">Books Name </div>
              <div class="name-member  w-2/12 h-12 flex items-center justify-center">id</div>
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">Rent Date</div>
              <div class="name-member  w-3/12 h-12 flex items-center justify-center">Return Date</div>
            </div>
            @foreach ($rents as $rent)
            <div class="member-1 flex my-1 bg-white rounded-md  px-1">
              <div class="name-member  w-4/12 h-12 flex overflow-hidden">{{$rent->books['title']}}</div>
              <div class="name-member  w-2/12 h-12 flex items-center justify-center">{{$rent->id}}</div>
              <div class="name-member  w-4/12 h-12 flex items-center justify-center">{{date('Y-m-d', strtotime($rent->rent_date)) }}</div>
              @if ($rent->status)
                <div class="name-member  w-3/12 h-12 flex items-center justify-center">{{date('Y-m-d', strtotime($rent->due_date)) }}</div>
              @else
                <div class="name-member  w-3/12 h-12 flex items-center justify-center">-</div>
              @endif
            </div>
            @endforeach

            </div>
            
            </div>
        </div>
      </div>
      
     </div>
  </div>

  @endsection