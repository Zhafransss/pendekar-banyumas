<nav class="bg-transparent border-gray-200 dark:bg-gray-900 absolute z-9999 w-full">
    <div class=" flex flex-wrap items-center justify-between mx-auto md:mx-12 p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo/logo-color.png') }}" class="h-12" alt="Logo Pendekar" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-secondary dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-secondary rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#homepage"
                        class="block py-2 px-3 text-white bg-secondary rounded md:bg-transparent md:text-secondary md:font-bold md:p-0 dark:text-white md:dark:text-blue-500"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="#about"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-primary md:hover:bg-transparent md:border-0 md:hover:text-soft md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang</a>
                </li>
                <li>
                    <a href="#tutorial"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-primary md:hover:bg-transparent md:border-0 md:hover:text-soft md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tutorial</a>
                </li>
                <li>
                    <a href="#test"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-primary md:hover:bg-transparent md:border-0 md:hover:text-soft md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
