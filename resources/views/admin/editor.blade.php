<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ !empty($header_title)?$header_title:'Unblurred: Information Crystal Clear' }}</title>
    <meta name="description" content="{{ !empty($meta_desc)?$meta_desc:'Unblurred: Information Crystal Clear' }}" >
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="keywords" content="unblurred,news,information,local,national,india" />
    <meta name=”robots” content="index, nofollow">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=" font-open bg-zinc-100">

    <nav class="only-logo-center mt-2 flex md:flex-row justify-center p-2 items-center">
    <a href="{{ route('home') }}" class="border-black border p-2 rounded text-black uppercase font-extrabold font-condensed md:text-6xl text-4xl">The Writer</a>
    </nav>

    <h1 class="editor text-2xl font-extrabold font-condensed text-center">Create: POST EDITOR</h1>
    <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-10 w-full flex flex-col items-center">
            <div class="m-3 first-row flex-col md:flex-row flex justify-evenly items-center w-full">
                <label for="title" class="font-extrabold">TITLE</label>
                <input type="text" name="title" id="title" />
                <label for="category" class="font-extrabold uppercase">Category</label>
                <input type="text" name="category" id="category" />
                <label for="author" class="font-extrabold">AUTHOR</label>
                <input type="text" name="author" id="author" />
            </div>
            <br />
            <div class="m-3 w-full second-row flex-col md:flex-row flex justify-evenly items-center">
                <label for="keywords" class="font-extrabold">KEYWORDS</label>
                <input type="text" name="keywords" id="keywords" />
                <label for="image" class="font-extrabold uppercase">Image</label>
                <input type="file" name="image" id="image" />
                <label for="credit" class="font-extrabold uppercase">Credit Image</label>
                <input type="text" name="credit" id="credit" />
            </div>
        </div>
            <div class="post flex flex-col m-3">

                <label for="article" class="font-extrabold uppercase text-center">Article</label>
                <textarea name="article" id="article" cols="30" rows="20" class="rounded-md p-5 font-bold"></textarea>

                <label for="references" class="font-extrabold uppercase text-center ">References</label>
                <textarea name="references" id="references" cols="30" rows="3" class="rounded-md p-5 font-bold"></textarea>

            </div>

            <div class="submit text-center">
                <input type="submit" value="Submit" class="border border-black p-2 rounded-md font-bold w-1/2 cursor-pointer bg-red-600 text-white hover:bg-black hover:text-white transition-all" />
            </div>
        </form>

    <footer class="w-full h-16 bg-white text-sm md:text-base relative mt-60 bottom-0 text-gray-900  flex justify-center flex-col items-center">
        <h1 class="font-normal">Created By <span class="font-bold">Md Farhan Mushtaque with <span class="text-lg text-red-700">&#9829;</span>.</span></h1>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>

