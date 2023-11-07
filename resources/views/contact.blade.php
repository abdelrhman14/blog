@extends('layouts.app')

@section('content')
    <section class="py-24 relative w-full text-center bg-white" style="z-index: 20">
        <div class="w-9/12 mx-auto text-xl text-gray-500 text-center">
            <img class="h-20 mx-auto mb-10" src="{{ asset('images/logo.png') }}">
        </div>
        <h1 class="text-3xl mx-auto">{{ trans('contact.Contact') }}</h1>
        <hr class="w-1/12 border border-black mx-auto mt-10 mb-20">

        <div class="w-9/12 mx-auto text-xl text-gray-500 text-left">
            <form class="w-full" action="{{ route('send-contact') }}" method="post">
                @csrf
                @method('POST')

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                            {{ trans('contact.Voornaam') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="first_name" id="first_name" type="text" placeholder="{{ trans('contact.Voornaam') }}">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                            {{ trans('contact.Achternaam') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last_name" type="text" name="last_name" placeholder="{{ trans('contact.Achternaam') }}">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                            {{ trans('contact.Telefoonnummer') }}
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="phone" id="phone" type="text" placeholder="{{ trans('contact.Telefoonnummer') }}">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email" placeholder="Email">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            {{ trans('contact.type') }}
                        </label>
                        <fieldset>
                            <div class="flex items-center mb-4">
                                <input id="type" type="radio" name="type" value="Restaurant" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                <label for="type" class="block ml-2 text-sm font-medium">
                                    {{ trans('contact.Restaurant') }}
                                </label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="country-option-2" type="radio" name="type" value="Zalen" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                <label for="country-option-2" class="block ml-2 text-sm font-medium">
                                    {{ trans('contact.Zalen') }}
                                </label>
                            </div>
                        </fieldset>
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                            {{ trans('contact.Jouw vraag') }}
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="message" name="message" type="text" placeholder="{{ trans('contact.Jouw vraag') }}"></textarea>
                    </div>
                </div>

                <div class="mx-auto w-fit my-16">
                    <button type="submit" class="bg-teal-500 text-xl  mx-auto px-12 py-3 rounded-3xl hover:bg-teal-700 text-white">
                        {{ trans('contact.Versturen') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
