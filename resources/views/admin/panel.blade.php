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


    <div class="logout-btn w-screen flex justify-end items-center mt-4 text-center relative right-10">
      <p class=""><a href="{{ route('logout') }}" class="bg-white hover:bg-slate-200 hover:text-black text-zinc-900 rounded-lg px-2 py-1 ">Logout <i class="ri-logout-circle-line"></i></a></p>
    </div>

<div class="container text-white">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h1 class="mt-3 text-center text-4xl leading-8 tracking-tight text-gray-100 font-extrabold">Admin Panel</h1>
    </div>
    <div class="overflow w-3/4 text-wrap mx-auto flex justify-center items-center mt-5 md:text-md">
        <table classs="overflow">
          <tr>
            <th class="px-2 w-auto">Post Id</th>
            <th class="px-2 w-auto">Title </th>
            <th class="px-2 w-auto">Category</th>
            <th class="px-2 w-auto">Author</th>
            <th class="px-2 w-auto">Keywords</th>
            <th class="px-2 w-auto">Edit</th>
            <th class="px-2 w-auto">Delete</th>
          </tr>

          @foreach ($posts as $post)
          <tr>      
            <td class="px-2">{{ $post->id }}</td>
            <td class="px-2">{{ $post->title }}</td>
            <td class="px-2">{{ $post->category }}</td>
            <td class="px-2">{{ $post->author }}</td>
            <td class="px-2">{{ $post->keywords }}</td>
            <td class="px-2">
                <a href="{{ route('edit.post',$post->id) }}">
                    <i class="ri-pencil-fill text-green-800 text-xl"></i>
                </a>
            </td>
            <td class="px-5">
                <form action="{{ route('delete',$post->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="ri-delete-bin-2-line text-center text-red-800 text-xl"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>
      </div>

</div>

    <footer class="w-full h-16 bg-white text-sm md:text-base relative mt-60 bottom-0 text-gray-900  flex justify-center flex-col items-center">
        <h1 class="font-normal">Created By <span class="font-bold">Md Farhan Mushtaque with <span class="text-lg text-red-700">&#9829;</span>.</span></h1>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>