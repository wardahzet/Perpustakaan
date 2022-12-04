<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="all flex">
     <!-- sidebar -->
     <div class="sidebar bg-white w-2/12">
        <div class="logo border-solid border-2 border-gray-200  h-20 px-5 py-2">
          <img src="https://i.ibb.co/10Bkm92/Rectangle-119.png" alt="" >
        </div>
        <div class="side-button border-solid border-r-2 border-gray-200 h-screen px-8">
        <div class="button-1 py-5">
            <a href="#" class="text-black font-medium uppercase text-sm hover:text-blue-500 ">Dashboard</a>
          </div>
          <div class="button-2 py-5">
            <a href="#" class="text-black font-medium uppercase text-sm  hover:text-blue-500">input data</a>
          </div>
          <div class="button-3 py-5">
            <a href="#" class="text-black font-medium uppercase text-sm hover:text-blue-500">data books</a>
          </div>
          
        </div>
     </div>
     <!-- content -->
     <div class="content bg-white w-10/12">
      <div class="navbar-side border-solid border-r-2 border-t-2 border-b-2 border-gray-200 h-20 flex justify-end items-center px-20" >
        <div class="message mx-5">
          <a href="#" class="hover:text-blue-500">Message</a>
        </div>
        <div class="notification mx-5">
          <a href="#" class="hover:text-blue-500">Notification</a>
        </div>
        <div class="image-profile mx-5 flex ">
          <img src="https://i.ibb.co/GRv64Dh/23445.png" alt="" class=" ">
    


          
<button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-black bg-white    font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Admin <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

<!-- Dropdown menu -->
<div id="dropdownInformation" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
      <div>Alifia Putri Budiyanti</div>
      <div class="font-medium truncate">aisyah@brawijaya.com</div>
    </div>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
    
    </ul>
    <div class="py-1">
      <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>
@vite('resources/js/app.js')
        </div>
    
        
      </div>
      <div class="content-isi mx-10">
        <div class="title-content font-medium text-2xl py-3">Input Book Data</div>
        <div class="route flex">
            <a href="#" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400">Admin </a>
            <p class="font-base text-sm text-gray-400"> / </p>
        
            <a href="#" class="font-base text-sm hover:text-blue-500 px-1 text-gray-400"> Input Books Data</a>
        </div>
        <div class="title-books py-5 font-semibold text-xl">Title Books *</div>
        <div class="form-control ">
          <input type="text" placeholder="Ex: konspirasi alam semesta" class="py-2 px-5 w-full border-2 border-solid border-gray-200 ">
        </div>
        <div class="title-input py-5 font-semibold text-xl">Sinopsis</div>
         <div class="form-control ">
          <input type="text" placeholder="Ex: konspirasi alam semesta" class="py-2 px-5 w-full h-32 border-2 border-solid border-gray-200 ">
        </div>
        <div class="title-input py-5 font-semibold text-xl">File Data</div>
        <div class="form-control">
          <input type="file" >
        </div>
        <div class="button py-5 flex">
          <div class="button-1 mr-2">
            <button class="bg-gray-200 px-5 py-2 rounded-md font-base  focus:bg-gray-300 border-none">
              Save to Draft
            </button>
          </div>
          <div class="button-1 mx-2">
            <button class="bg-[#EA9901] px-5 py-2 rounded-md font-base text-white focus:bg-[#EA9901] border-none">
              Publish Books
            </button>
          </div>
        </div>


      </div>
      

       
  </div>
 

</body>
</html>