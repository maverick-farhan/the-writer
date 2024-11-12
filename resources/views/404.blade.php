@extends('main_layout')
@section('dynamic')
<div class="404 flex justify-center items-center">
<h1 class="text-gray-900">OOPS :( 404 Error. Content not found</h1>
<h1 class="text-gray-900"><a href="{{ route('/') }}">Go Home</a></h1>
</div>
@endsection
