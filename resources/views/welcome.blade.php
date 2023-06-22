<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL Shortener</title>
    <link rel="icon" href="logo.webp" type="image/icon type">
    @vite('resources/css/app.css')
</head>
<body>


<!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image: url('bg.webp')" >
    <div class="rounded-xl md:w-1/2 bg-gray-400 bg-opacity-70 px-16 py-10 shadow-lg backdrop-blur-md ">
        <div class="text-white ">
            <div class="mb-8 flex flex-col items-center">
                <img src="logo.webp" width="150" alt="" srcset="" />
                <h1 class="mb-2 text-2xl">URL Shortener</h1>
                <span >Enter the url you want to shorten</span>
            </div>
            <form action="{{route('link.store')}}" method="post" novalidate>
                @csrf
                <div class="mb-4 text-xl">
                   @error('link')
                    <p class="text-center text-red-500 mb-2 font-bold">{{$message}}</p>
                    @enderror
                    <input class="w-full placeholder-gray-200 rounded-3xl border-none bg-blue-400 bg-opacity-50 px-6 py-2 text-center text-white shadow-lg outline-none"
                          required type="url"
                           name="link"
                           placeholder="http:elrastro.club/"
                    />
                </div>



                <div class="mt-8 flex justify-center text-lg ">
                    <button type="submit" class="rounded-3xl bg-blue-500 px-10 py-2 text-white shadow-xl  transition-colors duration-300 hover:bg-blue-600">Shorten it</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
