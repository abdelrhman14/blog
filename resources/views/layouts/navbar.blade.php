<section class="w-full relative" style="z-index: 100">
    <nav class="fixed w-full">
        <nav class="flex w-full xl:flex-row justify-between items-center lg:flex-row bg-black py-3 px-16">
            <div>
                <div class="text-white text-sm lg:inline-block xl:inline-block">
                    <i class="fa-solid fa-phone fa-lg"></i>
                    <a href="tel: 03 284 03 01" class="ml-1">03 284 03 01</a>
                </div>
                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <i class="fa-solid fa-calendar-days fa-lg"></i>
                    <span class="ml-1"> {{ trans('navbar.status') }}</span>
                </div>
            </div>

            <div>
                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <a href="https://www.facebook.com/theviewantwerp" target="_blank">
                        <i class="fa-brands fa-facebook fa-xl"></i>
                    </a>
                </div>

                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <a href="https://instagram.com/theview.antwerp?igshid=NzZlODBkYWE4Ng%3D%3D&utm_source=qr"
                       target="_blank">
                        <i class="fa-brands fa-instagram fa-xl"></i>
                    </a>
                </div>

                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <a href="https://instagram.com/theview.antwerp?igshid=NzZlODBkYWE4Ng%3D%3D&utm_source=qr"
                       target="_blank">
                        <i class="fa-brands fa-x-twitter fa-xl" style="color: #ffffff;"></i>
                    </a>
                </div>

                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <a href="https://instagram.com/theview.antwerp?igshid=NzZlODBkYWE4Ng%3D%3D&utm_source=qr"
                       target="_blank">
                        <i class="fa-brands fa-tiktok fa-xl" style="color: #ffffff;"></i>
                    </a>
                </div>

                <div class="text-white ml-8 hidden lg:inline-block xl:inline-block">
                    <a href="https://www.google.com/search?q=The+View+Antwerp" target="_blank">
                        <i class="fa-brands fa-google fa-xl"></i>
                    </a>
                </div>
            </div>

        </nav>

        <nav class="w-full text-white py-1 bg-green-500">
            <p class="text-center">
                {{ trans('navbar.alert') }}
            </p>
        </nav>

        <nav class="bg-white w-full border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
                <a href="/" class="flex items-center">
                    <img class="h-14" src="{{ asset('images/logo.png') }}">
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col py-5 px-3 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                        <li>
                            <a href="{{ route('home') }}"
                               class="block py-2 pl-3 pr-4 {{ request()->route()->getName() === 'home' ? 'text-green-700' : ' text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0">Home</a>
                        </li>
                        {{--  <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 ">Restaurant</a>
                        </li>  --}}
                        <li>
                            <a href="{{ route('groepen') }}"
                               class="block py-2 pl-3 pr-4 {{ request()->route()->getName() === 'groepen' ? 'text-green-700' : ' text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0">
                                {{ trans('navbar.group') }}
                            </a>
                        </li>
                        {{--  <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0">Reserveer</a>
                        </li>  --}}
                        <li>
                            <form action="{{ route('setLocale') }}" method="POST">
                                @csrf
                                <select name="locale" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="dutch" {{ app()->getLocale() === 'dutch' ? 'selected' : '' }}>Dutch</option>
                                    <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                                    <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>French</option>
                                    <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>Spanish</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </nav>
</section>
