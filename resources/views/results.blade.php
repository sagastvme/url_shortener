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
    <script>
        function copy() {
            let link = document.getElementById('link').text
            navigator.clipboard.writeText(link);
            let notification = document.getElementById('toast-top-right')
            notification.style.display = 'flex'; // Show the notification

        }
    </script>
</head>
<body>


<!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
     style="background-image: url('bg.webp')">
    <div class="rounded-xl md:w-1/2 bg-gray-400 bg-opacity-70 px-16 py-10 shadow-lg backdrop-blur-md">
        <div class="text-white">
            <div class="mb-8 flex gap-10 flex-col items-center">
                <img src="logo.webp" width="150" alt="" srcset=""/>
                <h1 class="mt-2 text-2xl select-none">Your link is ready</h1>
                <a class="text-xl hover:underline" id="link" href="{{$link->real_url}}"
                   target="_blank">{{url('/'.$link->id)}}</a>
                <button onclick="copy()" class=" bg-white text-gray-400 p-5 rounded-lg">Copy to clipboard</button>
            </div>
        </div>
    </div>
    <div id="toast-top-right" class="hidden fixed flex items-center w-full max-w-xs p-4 space-x-4 text-white font-bold bg-green-500  divide-x divide-gray-200 rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        <div class="text-sm font-normal">Link copied to clipboard</div>
    </div>
</div>


</body>
</html>
