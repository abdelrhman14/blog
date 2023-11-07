<section class="bg-black py-24 w-full text-center text-white">
    <h1 class="text-3xl">{{ trans('menu.Menukaart') }}</h1>
    <hr class="w-1/12 mx-auto mt-10 mb-20">

    <div class="xl:flex lg:flex mx-auto flex-row justify-center align-items-center gap-10 text-center">
        <div class="xl:w-1/5 lg:w-1/5 mt-20 justify-center items-center text-center">
            <a href="">
                <img width="100" height="100"
                    class="mx-auto w-35 h-35 hover:scale-110 transition-transform duration-500"
                    src="{{ asset('images/menu2.svg') }}">
            </a>
            <div class="text-white mt-10">
                <a href=""
                    class="hover:bg-teal-500 hover:rounded-2xl font-semibold py-2 px-8 transition duration-700 ease-in-out">
                    {{ trans('menu.Menukaart') }}
                </a>
            </div>
        </div>

        <div class="xl:w-1/5 lg:w-1/5 mt-20 justify-center items-center text-center">
            <a href="">
                <img width="100" height="100"
                    class="mx-auto w-35 h-35 hover:scale-110 transition-transform duration-500"
                    src="{{ asset('images/WijnKaart.svg') }}">
            </a>
            <div class="text-white mt-10">
                <a href=""
                    class="hover:bg-teal-500 hover:rounded-2xl font-semibold py-2 px-8 transition duration-700 ease-in-out">
                    {{ trans('menu.Wijnkaart') }}
                </a>
            </div>
        </div>

        <div class="xl:w-1/5 lg:w-1/5 mt-20 justify-center items-center text-center">
            <a href="">
                <img width="100" height="100"
                    class="mx-auto w-35 h-35 hover:scale-110 transition-transform duration-500"
                    src="{{ asset('images/menu2.svg') }}">
            </a>
            <div class="text-white mt-10">
                <a href=""
                    class="hover:bg-teal-500 hover:rounded-2xl font-semibold py-2 px-8 transition duration-700 ease-in-out">
                    {{ trans('menu.Keuzemenu') }}
                </a>
            </div>
        </div>

        <div class="xl:w-1/5 lg:w-1/5 mt-20 justify-center items-center text-center">
            <a href="">
                <img width="100" height="100"
                    class="mx-auto w-35 h-35 hover:scale-110 transition-transform duration-500"
                    src="{{ asset('images/menu2.svg') }}">
            </a>
            <div class="text-white mt-10">
                <a href=""
                    class="hover:bg-teal-500 hover:rounded-2xl font-semibold py-2 px-8 transition duration-700 ease-in-out">
                    {{ trans('menu.Suggestie') }}
                </a>
            </div>
        </div>
    </div>
</section>
