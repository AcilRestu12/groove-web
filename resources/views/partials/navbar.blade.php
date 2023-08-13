{{-- Navbar Start --}}
<nav class="bg-primary border-gray-200 dark:bg-primary">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center ml-2">
            <span class="self-center text-4xl mb-2 font-pacifico whitespace-nowrap text-white">Groove</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-slate-400 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 duration-300" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="/product" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-white hover:text-white bg-seconday duration-300 rounded  md:bg-transparent " aria-current="page">
                        Product
                    </a>
                </li>
                <li>
                    <a href="/about" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-slate-300 hover:text-white hover:bg-slate-400 duration-300 rounded md:bg-transparent hover:md:bg-transparent " aria-current="page">
                        About
                    </a>
                </li>
                <li>
                    <a href="/privacy" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-slate-300 hover:text-white hover:bg-slate-400 duration-300 rounded md:bg-transparent hover:md:bg-transparent " aria-current="page">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="/login" class="block rounded-2xl font-montserrat font-semibold text-sm px-9 py-2 text-center mr-2 mt-2 md:mt-0 duration-300 text-slate-300 hover:text-white hover:bg-seconday border-seconday border-2 focus:ring-4 focus:outline-none">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  {{-- Navbar End --}}