<section class="py-24 relative w-full text-center bg-white" style="z-index: 20">
    <h1 class="text-3xl">{{ trans('home.restaurant') }}</h1>
    <hr class="w-1/12 border border-black mx-auto mt-10 mb-20">

    <div class="w-9/12 mx-auto text-xl text-gray-500 text-center">
        {{ trans('home.paragraph1') }}
        <br>
        <br>
        {{ trans('home.paragraph2') }}
    </div>

    <div class="mx-auto my-16">
        <a href="https://reservations.tablebooker.com?restaurantId=36700721"
            class="bg-teal-500 text-xl px-12 py-5 rounded-3xl hover:bg-teal-700 text-white">
            {{ trans('home.reserveer een tafel') }}
        </a>
    </div>
</section>
