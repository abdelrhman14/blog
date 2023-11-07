@extends('layouts.app')

@section('content')
    <video class="w-full" autoplay loop>
        <source class="w-full" src="{{ asset('images/restrunt.mov') }}" type="video/mp4">
    </video>
    @include('homePage.body')
    @include('homePage.menu')
@endsection
