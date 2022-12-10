<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
<section class="h-full gradient-form bg-gray-200 md:h-screen flex items-center justify-center">
  <div class="container py-12 px-6 h-full ">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-10/12">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
          <div class="lg:w-6/12 flex items-center lg:rounded-l-lg rounded-b-lg lg:rounded-bl-none"
              style="background: url(https://i.ibb.co/cFZdypS/0911rt.png)">
              <div class="text-white px-4 py-6 md:p-12 md:mx-6">
               <!-- masih gabisa rounded border bawah pindah ke kiri -->
              </div>
            </div>
            <div class="lg:w-6/12 px-4 md:px-0 flex justify-left  items-center">
              <div class="md:p-12 md:mx-6 r">
                <div class="text-left">
                  
                  <h4 class="text-5xl font-bold mt-1 mb-5 pb-1">Let's Register to Get Another <br>Benefit from E-Library</h4>
                  
                </div>


                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="mb-4">
                    <label for="name" class="text-md font-medium ">Full Name</label>
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-3 my-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none"
                      id="name"
                      name="name" :value="old('name')" required autofocus autocomplete="name"/>
                  </div>
                  <div class="email">
                    <label for="email" class="text-md font-medium">Email</label>
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-3 text-base font-normal my-2 text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none"
                      id="email"
                      name="email" :value="old('email')" required/>
                  </div>
                  <div class="mb-4">
                    <label for="telephone" class="text-md font-medium">Phone Number</label>
                    <input
                      type="text"
                      class="form-control block w-full px-3 py-3 text-base font-normal my-2 text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none"
                      id="telephone"
                      name="telephone" required autocomplete="telephone"/>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="text-md font-medium">Password</label>
                    <input
                      type="password"
                      class="form-control block w-full px-3 py-3 text-base font-normal my-2 text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none"
                      id="password"
                      name="password" required autocomplete="new-password"/>
                  </div>
                  <div class="mb-4">
                    <label for="password_confirmation" class="text-md font-medium">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control block w-full px-3 py-3 text-base font-normal my-2 text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none"
                      id="password_confirmation"
                      name="password_confirmation" required autocomplete="new-password"/>
                  </div>
                  <br>
                  
                  <div class="text-center pt-1 mb-10 pb-1">
                    <button
                        class="inline-block px-6 py-2.5 bg-black text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                        type="submit"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light">
                        Sign up
                    </button>
                    </div>
            
                  <div class="footer flex items-center justify-center text-xs  ">
                    <p>@2022 E-Library Team</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>