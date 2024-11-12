@extends('main_layout')
@section('dynamic')

    {{-- Filter DIV and Search OPEN--}}
    <div class="filter-search items-center flex-col md:flex-row flex justify-between md:px-24 sm:w-full z-50  h-16 mt-5">
        <div class="filter flex items-center bg-slate-100 px-2 rounded-md relative md:right-0 right-3">
            <h1 class="filter-text mr-2 text-sm text-gray-900 md:text-md font-bold"><i class="ri-filter-3-line pr-1"></i>Filter</h1>
            <form class="max-w-full flex border rounded px-2 py-1" action="{{ route('filter') }}" method="GET">
                @csrf
                <button class="mx-3 text-green-700 hover:underline text-sm md:text-base" type="submit" name="newest" value="1">Most Recent</button>
                <button class="mx-3 text-red-700 hover:underline text-sm md:text-base" type="submit" name="oldest" value="0">Oldest</button>
            </form>
        </div>
        <div class="md:mt-0 mt-2 search">
            <form action="{{ route('search') }}" action="get">
                @csrf
                <input placeholder="Search blog..."class="focus:bg-slate-200 transition-all outline-1 py-0 md:py-1 font-condensed font-bold text-lg rounded px-2 w-48 md:w-96 border-b border-red-500 bg-transparent" type="search" name="search" />
                <button type="submit" class="text-white hover:bg-slate-100 hover:text-black transition-all rounded-md" ><i class="text-2xl md:text-xl px-1 ri-search-line"></i></button>
            </form>
        </div>
    </div>
    {{-- Filter DIV and Search END--}}

    {{-- News View Open--}}
<div class="parent-center flex justify-center flex-col items-center">

    @foreach ($search as $post)
    @if($post)
    <div class="container h-auto w-full">
        <div class="news-container border border-slate-100 w-11/12 h-auto md:w-11/12 rounded-md mx-auto mt-5 px-2 flex justify-between md:items-center items-start md:h-44">
            <div class="left-wrapper md:w-3/4 w-4/6 px-3 flex flex-col justify-between h-full py-5">
                <div class="heading">
                    <a href="{{ route('read-post',$post->id) }}" class="post hover:underline">
                    <h1 class="title font-extrabold font-condensed text-xl md:text-2xl uppercase text-wrap text-slate-100">{{ $post->title }}</h1>
                    </a>

                <h5 class="font-condensed md:text-base capitalize font-bold text-gray-100 text-md">
                <button data-tooltip-target="tooltip-default" data-tooltip-placement="bottom" type="button" class="lowercase underline mb-3">{{ $post->created_at }} </button>
                <i class="ri-time-line text-slate-100 text-sm"></i></h5>
                <p class="text-slate-300 text-md">
                    @php
                     echo substr($post->article,0,139).'.....'; 
                    @endphp
                    <a href="{{ route('read-post',$post->id) }}" class="text-sm text-zinc-400 hover:text-zinc-100 hover:underline">Read more</a>
                </p>
                </div>
            </div>

            <div class="right-wrapper py-2">
                <div class="mini-image px-2">
                    <a href="{{ route('read-post',$post->id) }}">
                        <img src="{{ asset('images/'.$post->image) }}" alt="mini-image" class="md:w-40 w-36 md:h-32 h-36 object-cover object-center shadow-lg transition-all hover:shadow-slate-500 shadow-slate-800 rounded-lg my-5" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
<div class="flex justify-center mt-3 items-center">{{ $search->links() }}</div>
@endsection
