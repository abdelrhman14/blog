@extends('layouts.app')

@section('content')
    <section class="py-24 relative w-full text-center bg-white" style="z-index: 20">
        <div class="w-9/12 mx-auto text-xl text-gray-500 text-center">
            <img class="h-20 mx-auto mb-10" src="{{ asset('images/logo.png') }}">
        </div>
        <h1 class="text-3xl">{{ trans('groups.groepen') }}</h1>
        <hr class="w-1/12 border border-black mx-auto mt-10 mb-20">


        <div class="w-9/12 mx-auto text-xl text-gray-500 text-center">
            {{ trans('groups.paragraph') }}
        </div>

        <div class="mx-auto my-16">
            <a href="{{ route('contact') }}"
                class="bg-teal-500 text-xl px-12 py-5 rounded-3xl hover:bg-teal-700 text-white">
                {{ trans('groups.AANVRAAG OFFERTE') }}
            </a>
        </div>
    </section>
@endsection
