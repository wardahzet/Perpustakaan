<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="flex items-center justify-between border-b-2 border-gray-300 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                    <span class="sr-only">E-Library</span>
                    <img class="h-8 w-auto sm:h-10" src="https://i.ibb.co/XYThtt1/Logo-ELibrary.png" alt="">
                    </a>
                </div>
            <div class="flex justify-end">
                <div class="mb-0 xl:w-96 mr-16 -mx-60">
                    <input
                    type="search"
                    class=" form-control block w-full px-4 py-2 text-base text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-gray-100 focus:border-[#EA9901] focus:outline-none hover:border-[#EA9901] 
                    id="exampleSearch" 
                    placeholder="Search"
                    />
                </div>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Rent</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                <a href="#" class="inline-flex items-center rounded-md border border-[#EA9901] bg-white px-4 py-2 text-base font-medium text-[#EA9901] shadow-sm hover:bg-gray-300">Register</a>
                <a href="#" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-[#EA9901] -600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[#BF7D01]">Login</a>
            </div>
        </div>
    </div>
</body>
</html>