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

<body class=" font-open bg-zinc-950">

    <nav class="only-logo-center mt-2 flex md:flex-row justify-center p-2 items-center">
    {{-- Logo Anchor Open--}}
    <a href="{{ route('home') }}" class="border border-1 p-2 rounded text-white uppercase font-extrabold font-condensed md:text-6xl text-4xl">The Writer</a>
    </nav>
    {{-- Logo Anchor closed--}}


    {{-- Main Menu Bar --}}
    <nav class="navbar-menu px-8 md:px-24 mt-6 md:mt-5">
        <ul class="navbar-parent w-full flex justify-between items-center">
            <div class="left xs:w-3/4">
                <li><i id="menu_bar_icon" class="menu_bar_icon text-2xl md:text-3xl text-gray-100 cursor-pointer ri-menu-4-fill"></i></li>
            </div>
            <div class="right flex justify-between items-center md:w-32 w-36 xs:w-3/4">
                <li class="relative"><a href="{{ url('https://x.com/FarhanMushtaqu2') }}" target="_blank"><i class="ri-twitter-x-line  text-xl md:text-xl text-white hover:text-slate-200"></i></a></li>
                <li class="relative"><a href="{{ url('https://x.com/FarhanMushtaqu2') }}" target="_blank"><i class="ri-instagram-line  text-2xl md:text-2xl hover:text-rose-500 text-white"></i></a></li>
                <li class="relative"><a href="{{ url('https://x.com/FarhanMushtaqu2') }}" target="_blank"><i class="ri-facebook-line text-2xl md:text-2xl text-slate-100 hover:text-blue-500"></i></a></li>
            </div>
        </ul>
    </nav>
    {{-- Main Menu Bar --}}

    @yield('dynamic')

    {{-- Side Menu Container Open --}}
    <div id="menu_left_side" class="rounded menu_left_side flex items-start justify-center transition-all duration-600 absolute top-16 right-full w-screen bg-white md:w-96 border border-gray-900 min-h-screen pt-5">
        <span id="close" class="text-sm w-5 h-5 p-2 absolute md:right-12 sm:left-12 left-10 top-10 flex justify-center items-center cursor-pointer hover:scale-105 transition ease-in"><i class="ri-close-line text-3xl md:text-3xl text-gray-950"></i></span>
        <ul class="side_bar-menu mt-12 flex flex-col justify-center items-center font-bold text-lg md:text-base">
            <li class="p-2 hover:underline" ><a href="{{ route('home') }}">Home</a></li>
            <li class="p-2 hover:underline" ><a href="{{ route('aboutus') }}">About Me</a></li>
            <li class="p-2 hover:bg-white hover:border-2 border-black bg-zinc-900 hover:text-black text-white font-bold rounded m-2 min-w-full text-center" ><a href="{{ route('member')  }}">Newsletter <i class="ri-glasses-line"></i></a></li>
            <li class="p-2 hover:underline" ><a href="">Privacy Policy</a></li>
            <li class="p-2 hover:underline" ><a href="">Terms &amp; Conditions</a></li>
        </ul>
    </div>
    {{-- Side Menu Container Closed --}}


    <footer class="w-full h-16 bg-white text-sm md:text-base relative mt-60 bottom-0 text-gray-900  flex justify-center flex-col items-center">
        <h1 class="font-normal">Created By <span class="font-bold">Md Farhan Mushtaque with <span class="text-lg text-red-700">&#9829;</span>.</span></h1>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>

