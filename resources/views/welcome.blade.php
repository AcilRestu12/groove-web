<!doctype html>
<html>
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-background">
  	{{-- Navbar Start --}}
	<nav class="bg-primary border-gray-200 dark:bg-primary">
		<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
			<a href="https://flowbite.com/" class="flex items-center ml-2">
				<span class="self-center text-4xl mb-2 font-pacifico whitespace-nowrap text-white">Groove</span>
			</a>
			<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-slate-400 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
				</svg>
			</button>
			<div class="hidden w-full md:block md:w-auto" id="navbar-default">
				<ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
					<li>
						<a href="#" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-white hover:text-white bg-seconday duration-200 rounded  md:bg-transparent " aria-current="page">
							Product
						</a>
					</li>
					<li>
						<a href="#" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-slate-300 hover:text-white hover:bg-slate-400 duration-200 rounded md:bg-transparent hover:md:bg-transparent " aria-current="page">
							About
						</a>
					</li>
					<li>
						<a href="#" class="block py-2 pl-3 pr-4 font-maitree font-semibold text-slate-300 hover:text-white hover:bg-slate-400 duration-200 rounded md:bg-transparent hover:md:bg-transparent " aria-current="page">
							Privacy Policy
						</a>
					</li>
					<li>
						<a href="#" class="block rounded-2xl font-montserrat font-semibold text-sm px-9 py-2 text-center mr-2 mt-2 md:mt-0 duration-200 text-slate-300 hover:text-white hover:bg-seconday border-seconday border-2 focus:ring-4 focus:outline-none">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
  	{{-- Navbar End --}}

	{{-- Jumbotron Start --}}
	<section class="bg-seconday">
		<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
			<div class="flex flex-col-reverse space-y-4 align-middle md:flex-row md:justify-center md:space-y-0 md:space-x-4">
				<div class="self-center flex flex-col mx-2 md:mx-6">
					<h1 class="mb-2 lg:mb-4 text-4xl font-extrabold font-simonetta tracking-tight text-center md:text-left self-center text-white md:text-5xl lg:text-6xl">
						Welcome to Groove: Discover the Art of Learning Russian			
					</h1>
					<a href="#" class="inline-flex justify-center items-center md:w-fit py-3 px-5 my-3 mx-4 sm:mx-10 md:mx-0 text-base font-montserrat font-semibold text-center text-white rounded-lg bg-primary hover:opacity-90 focus:ring-4 focus:ring-blue-200">
						Get started
						<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
						</svg>
					</a>
				</div>
				<img class="h-auto md:max-w-md max-w-sm self-center justify-items-center" src="assets/book.png" alt="book illustration">
			</div>
		</div>
	</section>
	{{-- Jumbotron End --}}

	{{-- Why start --}}
	{{-- <section class="w-full">
		<h2 class="text-3xl md:text-4xl lg:text-5xl font-simonetta font-bold text-center mt-8 mb-6 md:mt-10 lg:mt-12 lg:mb-8">
			Why Groove?
		</h2>
		<div class="flex flex-col md:px-6 bg-blue-300 sm:bg-red-300 md:bg-green-300 lg:bg-yellow-300 space-y-4 align-middle md:flex-row md:justify-center md:space-y-0">
			<div class="mx-auto w-[60%] sm:w-[40%] md:w-1/4 md:h-[22.5rem] lg:h-[28rem] text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="rounded-t-lg mx-auto max-w-xs md:w-[90%] lg:max-w-xs" src="assets/teacher.png" alt="teacher"/>
				<h5 class="p-5 mb-2 md:mb-1 text-2xl lg:text-3xl font-bold tracking-tight text-gray-900">World-Class Experts</h5>
			</div>
			<div class="mx-auto w-[60%] sm:w-[40%] md:w-1/4 md:h-[22.5rem] lg:h-[28rem] text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="rounded-t-lg mx-auto max-w-xs md:w-[90%] lg:max-w-xs" src="assets/budget.png" alt="budget"/>
				<h5 class="p-5 mb-2 md:mb-1 text-2xl lg:text-3xl font-bold tracking-tight text-gray-900">Budget-Friendly Learning</h5>
			</div>
			<div class="mx-auto w-[60%] sm:w-[40%] md:w-1/4 md:h-[22.5rem] lg:h-[28rem] text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="rounded-t-lg mx-auto max-w-xs md:w-[90%] lg:max-w-xs" src="assets/sofa.png" alt="sofa"/>
				<h5 class="p-5 mb-2 md:mb-1 text-2xl lg:text-3xl font-bold tracking-tight text-gray-900">Embrace Comfort, Embrace Tradition</h5>
			</div>
		</div>
	</section> --}}
	{{-- Why End --}}

	<div class="mb-80"></div>

</body>
</html>