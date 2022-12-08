<!DOCTYPE html>
<html lang "en">
    <head>
        <meta charset="utf-8">
        <title>Happy Reading!</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container w-full h-full top-0 left-0 flex items-center justify-center">
            <embed src="https://pdfobject.com/pdf/sample-3pp.pdf" type="application/pdf" width="100%" height="650px" />
        </div>
        <div class="text-center mt-5 mb-5">
            <button href="#" class="ml-8 mr-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-[#EA9901] -600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[#BF7D01]">Return Book</button>
        </div>
    </body>
</html>