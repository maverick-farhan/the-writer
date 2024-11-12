@extends('main_layout')
@section('dynamic')

<br />
    <span class="flex text-slate-100 justify-between px-5 md:px-24 mx-5 md:mx-10 mb-4">
        <div class="back">
        <i class="text-xl ri-arrow-left-line"></i><a href="{{ url('/') }}" class=" hover:underline text-lg"> Back</a>
        </div>
        <div class="share">
        <a href="#share" id="copyBtn"><i class="inline-block text-gray-100 hover:text-gray-200 transition-all hover:rotate-3 hover:scale-110 ease-in duration-600 ri-share-forward-2-fill text-2xl md:text-3xl mx-2"></i></a>
        </div>
    </span>


    @foreach ($post as $each)
    @if($each)
    <div  id="top" class="container h-auto w-11/12 text-center mx-16 flex flex-col relative md:left-0 -left-12 justify-center items-center">
        <div class="title">
            <h1 class="md:px-10 px-1 text-3xl md:text-5xl font-extrabold text-slate-100" >{{ $each->title }}</h1>
            <h5 class="font-condensed md:text-xl capitalize font-bold mt-3 text-gray-200 text-md"><button data-tooltip-target="tooltip-default" data-tooltip-placement="bottom" type="button">{{ $each->author }} </button><i class="ri-verified-badge-line ml-1 text-gray-200"></i></h5>
        </div>
        <div class="misc">
            <ul class="text-gray-200 flex md:w-96 text-sm mt-2 justify-around w-72 flex-row items-center font-bold">
                <li class="date text-md md:text-base"><i class="ri-time-line mr-1"></i>{{ $each->created_at }}</li>
            </ul>
        </div>
        <div class="cover-image flex flex-col justify-center items-center">
            <img src="{{ asset('images/'.$each->image) }}" alt="article-image" class="md:w-5/6 object-cover object-center shadow-lg shadow-zinc-700 rounded-lg my-5" />
            <p class="text-gray-200 position -top-10 text-sm  md:text-base ">Credit: {{ $each->credit }}</p>
        </div>

        <div class="post my-2 text-left">
            <p class=" text-base md:text-xl first-letter:text-5xl text-slate-100">
                {!! $each->article !!}
            </p>
        </div>

        <br />
    </div>
    <div class="top font-bold bg-slate-600 text-white w-8 h-8 md:w-12 md:h-12 text-base md:text-xl flex justify-center items-center right-5 bottom-12 z-50 p-1 fixed rounded-full text-center">
        <a href="#top"><i class="ri-arrow-up-double-fill"></i></a>
    </div>

            <div class="right-wrapper flex flex-col justify-between text-wrap items-center h-auto md:h-full py-2 md:py-4">
                <div class="reference py-5 md:w-10/12 px-3 md:px-5 bg-zinc-200 rounded-lg flex text-wrap justify-center items-center flex-col">
                    <h1 class="uppercase font-extrabold text-lg sm:text-xl md:text-2xl mb-2" href="#"><p>References<i class="ri-link"></i></p></h1>
                    <ul class="fact_links break-words font-condensed text-wrap">
                    @php
                        $explode = explode(',',$each->references);
                    @endphp
                       @foreach ($explode as $reference)
                       <li  class="text-red-800 focus:text-violet-900 leading-4 text-wrap md:leading-6 mb-2 font-medium active:text-violet-900 text-sm sm:text-base text-left md:text-xl">&#64; <a class="hover:underline text-wrap" target="_blank" href="{{ url($reference) }}">{{ $reference }}</a></li>
                       @endforeach
                    </ul>
                </div>
            </div>
	<div class="next flex justify-center my-2">
		<h1 class="container flex md:flex-row flex-col font-condensed justify-around text-lg md:text-xl items-center">
			<p class="title text-zinc-400 font-bold">Read Next <i class="ri-arrow-right-line"></i></p>
			<p class="link">
			<a href="{{ route('read-post',$random_post[0]->keywords) }}" class="font-bold text-zinc-100 hover:underline">{{ $random_post[0]->title }}</a>
			</p>
		</h1>	
	</div>
@endif
@endforeach
    <script>
            copyBtn.addEventListener('click',(event)=>{
                const copyBtn = document.getElementById('copyBtn');
                const url = window.location.href;
                let copied = navigator.clipboard.writeText(url);
            })
    </script>
        
@endsection
