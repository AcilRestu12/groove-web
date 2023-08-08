<!doctype html>
<html>
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-background">
	{{-- bg-blue-300 sm:bg-red-300 md:bg-green-300 lg:bg-yellow-300  --}}
	
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
					<a href="#" class="inline-flex justify-center items-center md:w-fit py-3 px-5 my-3 mx-4 sm:mx-10 md:mx-0 text-base font-montserrat font-semibold text-center text-white rounded-lg bg-primary duration-200  hover:opacity-90 focus:ring-4 focus:ring-blue-200">
						Get started
						<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
						</svg>
					</a>
				</div>
				<img class="h-auto lg:max-w-md max-w-sm self-center justify-items-center" src="assets/book.png" alt="book illustration">
			</div>
		</div>
	</section>
	{{-- Jumbotron End --}}

	{{-- Why start --}}
	<section class="w-full">
		<h2 class="text-3xl md:text-4xl lg:text-5xl font-simonetta font-bold text-center mt-8 mb-6 md:mt-10 lg:mt-12 lg:mb-8">
			Why Groove?
		</h2>
		<div class="flex flex-col md:px-10 lg:px-24 space-y-4 align-middle md:flex-row md:justify-center md:space-y-0 lg:space-x-10">
			<div class="mx-auto lg:mx-0 p-5 lg:p-3 mb-2 md:mb-0 w-1/2 sm:w-[40%] md:w-1/4 text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="mx-auto w-2/3 lg:w-2/5" src="assets/teacher.png" alt="teacher"/>
				<h5 class="text-xl pt-2 font-maitree font-bold tracking-tight text-gray-900 flex flex-col">
					<span>World-Class</span>
					<span>Experts</span>
				</h5>
			</div>
			<div class="mx-auto lg:mx-0 p-5 lg:p-3 mb-2 md:mb-0 w-1/2 sm:w-[40%] md:w-1/4 text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="mx-auto w-2/3 lg:w-2/5" src="assets/budget.png" alt="budget"/>
				<h5 class="text-xl pt-2 font-maitree font-bold tracking-tight text-gray-900 flex flex-col">
					<span>Budget-Friendly</span>
					<span>Learning</span>
				</h5>
			</div>
			<div class="mx-auto lg:mx-0 p-5 lg:p-3 mb-2 md:mb-0 w-1/2 sm:w-[40%] md:w-1/4 text-center bg-white border border-gray-200 rounded-lg shadow">
				<img class="mx-auto w-2/3 lg:w-2/5" src="assets/sofa.png" alt="sofa"/>
				<h5 class="text-xl pt-2 font-maitree font-bold tracking-tight text-gray-900 flex flex-col">
					<span>Embrace Comfort, </span>
					<span>Embrace Tradition </span>
				</h5>
			</div>
		</div>
	</section>
	{{-- Why End --}}

	{{-- Offer Start --}}
	<section class="bg-white">
		<div class="container w-3/4 mx-auto mt-8 md:mt-10 lg:mt-12 py-4 sm:py-6 md:py-8 lg:py-12">
			<h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 sm:mb-7 font-simonetta font-bold text-center">
				What We Offer
			</h2>
			<div class="w-full flex flex-col align-middle md:justify-center space-y-7 sm:space-y-8 md:space-y-9">
				{{-- E-Learning --}}
				<div class="w-full flex flex-col align-middle justify-evenly md:flex-row space-y-6 pb-5 sm:pb-6 md:pb-7">
					<img class="h-auto w-2/3 md:w-2/5 lg:w-1/3 self-center" src="assets/video.png" alt="illustration video">
					<div class="w-full md:w-1/2 px-5 sm:px-6 self-center">
						<p class="text-sm lg:text-base font-montserrat font-bold text-slate-500 uppercase mb-2 lg:mb-3">E-Learning</p>
						<h3 class="text-xl md:text-2xl lg:text-3xl font-maitree font-bold mb-1 md:mb-2 lg:mb-3">Educational Videos</h3>
						<p class="text-base lg:text-lg font-maitree font-medium text-slate-800 mb-3 md:mb-4 lg:mb-5">
							Engage with our carefully crafted videos that cover a range of topics, from basic phrases to advanced linguistic nuances.
						</p>
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-200 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
					</div>
				</div>
				{{-- BLog --}}
				<div class="w-full flex flex-col align-middle justify-evenly md:flex-row-reverse space-y-6 pb-5 sm:pb-6 md:pb-7">
					<img class="h-auto w-2/3 md:w-2/5 lg:w-1/3 self-center" src="assets/blog.png" alt="illustration blog">
					<div class="w-full md:w-1/2 px-5 sm:px-6 self-center">
						<p class="text-sm lg:text-base font-montserrat font-bold text-slate-500 uppercase mb-2 lg:mb-3">blog</p>
						<h3 class="text-xl md:text-2xl lg:text-3xl font-maitree font-bold mb-1 md:mb-2 lg:mb-3">Comprehensive Resources</h3>
						<p class="text-base lg:text-lg font-maitree font-medium text-slate-800 mb-3 md:mb-4 lg:mb-5">
							Access a wealth of supplementary materials, exercises, and quizzes that complement your learning journey.						
						</p>
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-200 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
					</div>
				</div>
				{{-- Community --}}
				<div class="w-full flex flex-col align-middle justify-evenly md:flex-row space-y-6 pb-5 sm:pb-6 md:pb-7">
					<img class="h-auto w-2/3 md:w-2/5 lg:w-1/3 self-center" src="assets/community.png" alt="illustration community">
					<div class="w-full md:w-1/2 px-5 sm:px-6 self-center">
						<p class="text-sm lg:text-base font-montserrat font-bold text-slate-500 uppercase mb-2 lg:mb-3">community</p>
						<h3 class="text-xl md:text-2xl lg:text-3xl font-maitree font-bold mb-1 md:mb-2 lg:mb-3">Community Support</h3>
						<p class="text-base lg:text-lg font-maitree font-medium text-slate-800 mb-3 md:mb-4 lg:mb-5">
							Join a vibrant community of language enthusiasts, share your progress, and learn from fellow Groove learners.
						</p>
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-200 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	{{-- Offer End --}}

	{{-- Invitation Start --}}
	<section class="bg-background">
		<div class="container w-3/4 mx-auto mt-8 md:mt-10 lg:mt-12 py-4 sm:py-6 md:py-8 lg:py-12">
			<h2 class="text-3xl md:text-4xl lg:text-5xl mb-3 md:mb-4 font-simonetta font-bold text-center">
				Join the Groove Family Today
			</h2>
			<p class="font-maitree font-medium text-center text-base lg:text-lg w-full sm:w-4/5 md:w-2/3 mx-auto mb-4 md:mb-5">
				Start your journey to mastering the Russian 
				language with Groove. No matter your budget, 
				no matter your background, Groove welcomes you 
				to a world of comfort, tradition, and lifelong learning.
			</p>
			<a href="#" class="block uppercase w-fit py-2.5 md:py-3 px-5 my-3 mx-auto text-sm md:text-base duration-200 font-montserrat font-semibold text-center text-white rounded-md bg-primary hover:opacity-90 focus:ring-4 focus:ring-blue-200">
				register now
			</a>
		</div>
	</section>
	{{-- Invitation End --}}

	{{-- Footer Start --}}
	<footer class="bg-white">
		<div class="container w-3/4 mx-auto mt-8 md:mt-10 lg:mt-12 py-4 sm:pt-6 md:pt-8 lg:pt-12 sm:pb-2">
			<div class="max-w-screen-xl px-4 pt-8 pb-2">	
				<hr class="border border-gray-300 sm:mx-auto" />
			</div>
			<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
				<div class="flex flex-col md:flex-row md:justify-between">
					<div class="w-fit mb-6 sm:mb-10 md:mb-0 self-center md:self-auto md:ml-4 lg:ml-6">
						<a href="https://flowbite.com/" class="flex items-center mb-3 md:mb-5 p-3">
							<span class="self-center text-5xl lg:text-6xl font-pacifico whitespace-nowrap text-primary">Groove</span>
						</a>
						<div class="flex flex-row justify-between md:justify-start md:space-x-3 md:pl-4 mx-2 md:mx-0">
							{{-- Instagram --}}
							<a href="" class="w-[24px] md:w-[26px] lg:w-[30px] fill-gray-500 hover:fill-primary duration-200">
								<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">
									<path d="M 15 2 C 7.832 2 2 7.832 2 15 C 2 22.168 7.832 28 15 28 C 22.168 28 28 22.168 28 15 C 28 7.832 22.168 2 15 2 z M 11.666016 6 L 18.332031 6 C 21.457031 6 24 8.5420156 24 11.666016 L 24 18.332031 C 24 21.457031 21.457984 24 18.333984 24 L 11.667969 24 C 8.5429688 24 6 21.457984 6 18.333984 L 6 11.667969 C 6 8.5429688 8.5420156 6 11.666016 6 z M 11.666016 8 C 9.6450156 8 8 9.6459688 8 11.667969 L 8 18.333984 C 8 20.354984 9.6459688 22 11.667969 22 L 18.333984 22 C 20.354984 22 22 20.354031 22 18.332031 L 22 11.666016 C 22 9.6450156 20.354031 8 18.332031 8 L 11.666016 8 z M 19.667969 9.6660156 C 20.035969 9.6660156 20.333984 9.9640312 20.333984 10.332031 C 20.333984 10.700031 20.035969 11 19.667969 11 C 19.299969 11 19 10.700031 19 10.332031 C 19 9.9640312 19.299969 9.6660156 19.667969 9.6660156 z M 15 10 C 17.757 10 20 12.243 20 15 C 20 17.757 17.757 20 15 20 C 12.243 20 10 17.757 10 15 C 10 12.243 12.243 10 15 10 z M 15 12 A 3 3 0 0 0 15 18 A 3 3 0 0 0 15 12 z"/>
								</svg>
							</a>
							{{-- Facebook --}}
							<a href="" class="w-[24px] md:w-[26px] lg:w-[30px] fill-gray-500 hover:fill-primary duration-200">
								<?xml version="1.0"?>
								<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">
									<path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/>
								</svg>
							</a>
							{{-- Tiktok --}}
							<a href="" class="w-[24px] md:w-[26px] lg:w-[30px] fill-gray-500 hover:fill-primary duration-200">
								<?xml version="1.0"?>
								<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">    
									<path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.104,4,24,4z M22.689,13.474 c-0.13,0.012-0.261,0.02-0.393,0.02c-1.495,0-2.809-0.768-3.574-1.931c0,3.049,0,6.519,0,6.577c0,2.685-2.177,4.861-4.861,4.861 C11.177,23,9,20.823,9,18.139c0-2.685,2.177-4.861,4.861-4.861c0.102,0,0.201,0.009,0.3,0.015v2.396c-0.1-0.012-0.197-0.03-0.3-0.03 c-1.37,0-2.481,1.111-2.481,2.481s1.11,2.481,2.481,2.481c1.371,0,2.581-1.08,2.581-2.45c0-0.055,0.024-11.17,0.024-11.17h2.289 c0.215,2.047,1.868,3.663,3.934,3.811V13.474z"/>
								</svg>
							</a>
							{{-- Youtube --}}
							<a href="" class="w-[24px] md:w-[26px] lg:w-[30px] fill-gray-500 hover:fill-primary duration-200">
								<?xml version="1.0"?>
								<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">    
									<path d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"/>
								</svg>
							</a>
							{{-- Twitter --}}
							<a href="" class="w-[24px] md:w-[26px] lg:w-[30px] fill-gray-500 hover:fill-primary duration-200">
								<?xml version="1.0"?>
								<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30">    
									<path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.464,12.535 c0.006,0.133,0.009,0.265,0.009,0.397c0,4.068-3.095,8.756-8.756,8.756c-1.739,0-3.356-0.509-4.717-1.383 c0.241,0.029,0.486,0.042,0.735,0.042c1.443,0,2.769-0.491,3.821-1.318c-1.347-0.025-2.484-0.915-2.875-2.137 c0.188,0.036,0.381,0.055,0.579,0.055c0.281,0,0.554-0.038,0.811-0.108c-1.408-0.282-2.469-1.526-2.469-3.017 c0-0.013,0-0.026,0-0.039c0.415,0.231,0.889,0.369,1.394,0.385c-0.825-0.551-1.369-1.494-1.369-2.561 c0-0.565,0.151-1.094,0.416-1.547c1.518,1.862,3.786,3.088,6.343,3.216c-0.052-0.225-0.079-0.46-0.079-0.701 c0-1.699,1.378-3.078,3.077-3.078c0.885,0,1.685,0.374,2.246,0.972c0.701-0.139,1.36-0.394,1.955-0.747 c-0.23,0.719-0.718,1.321-1.354,1.703c0.622-0.074,1.215-0.239,1.768-0.484C22.588,11.559,22.067,12.1,21.464,12.535z"/>
								</svg>
							</a>
						</div>
					</div>
					<div class="grid grid-cols-1 gap-8 sm:gap-4 md:gap-2 lg:gap-10 sm:grid-cols-2 md:grid-cols-3 mt-3 sm:mt-0 mx-3 sm:mx-5 md:mr-4 lg:mr-6">
						{{-- Our Product --}}
						<div>
							<h2 class="mb-4 md:mb-6 text-sm lg:text-base font-bold font-montserrat text-gray-500 uppercase">our products</h2>
							<ul class="text-gray-400 font-medium font-montserrat text-sm lg:text-base">
								<li class="mb-2 md:mb-4">
									<a href="/" class="hover:underline capitalize">e-learning</a>
								</li>
								<li class="mb-2 md:mb-4">
									<a href="/" class="hover:underline capitalize">blog</a>
								</li>
								<li>
									<a href="/" class="hover:underline capitalize">community</a>
								</li>
							</ul>
						</div>
						{{-- Others --}}
						<div>
							<h2 class="mb-4 md:mb-6 text-sm lg:text-base font-bold font-montserrat text-gray-500 uppercase">others</h2>
							<ul class="text-gray-400 font-medium font-montserrat text-sm lg:text-base">
								<li class="mb-2 md:mb-4">
									<a href="/" class="hover:underline capitalize">about us</a>
								</li>
								<li class="mb-2 md:mb-4">
									<a href="/" class="hover:underline capitalize">help center</a>
								</li>
								<li>
									<a href="/" class="hover:underline capitalize">privacy policy</a>
								</li>
							</ul>
						</div>
						{{-- Contact Us --}}
						<div>
							<h2 class="mb-4 md:mb-6 text-sm lg:text-base font-bold font-montserrat text-gray-500 uppercase">contact us</h2>
							<ul class="text-gray-400 font-medium font-montserrat text-sm lg:text-base">
								<li class="mb-2 md:mb-4 flex flex-row">
									<svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M3.73838 11.1377C3.36486 14.6082 3.38151 18.6109 3.90127 22.0673C4.18887 23.9798 5.74976 25.446 7.67652 25.6135L9.69016 25.7885C13.8889 26.1535 18.1114 26.1535 22.3101 25.7885L24.3237 25.6135C26.2505 25.446 27.8114 23.9798 28.099 22.0673C28.6188 18.6108 28.6354 14.6084 28.2619 11.1379C28.2136 10.7355 28.1593 10.3337 28.099 9.93261C27.8114 8.02009 26.2505 6.55389 24.3237 6.3864L22.3101 6.21136C18.1114 5.84638 13.8889 5.84638 9.69016 6.21136L7.67652 6.38641C5.74976 6.55389 4.18887 8.02009 3.90127 9.93261C3.84096 10.3337 3.78666 10.7354 3.73838 11.1377ZM9.86337 8.20385C13.9468 7.84888 18.0534 7.84888 22.1369 8.20385L24.1505 8.37889C25.1563 8.46632 25.9711 9.23168 26.1212 10.23C26.1368 10.3337 26.152 10.4374 26.1667 10.5412L18.7521 14.6604C17.0406 15.6113 14.9596 15.6113 13.2481 14.6604L5.83352 10.5412C5.84827 10.4374 5.86344 10.3337 5.87903 10.23C6.02916 9.23168 6.84395 8.46632 7.84972 8.37889L9.86337 8.20385ZM26.4115 12.6931C26.6701 15.7168 26.5734 18.7633 26.1212 21.7699C25.9711 22.7682 25.1563 23.5336 24.1505 23.621L22.1369 23.7961C18.0534 24.151 13.9468 24.151 9.86337 23.7961L7.84972 23.621C6.84395 23.5336 6.02916 22.7682 5.87903 21.7699C5.42692 18.7633 5.33017 15.7168 5.58879 12.6932L12.2768 16.4088C14.5923 17.6952 17.4078 17.6952 19.7234 16.4088L26.4115 12.6931Z" fill="#707070"/>
									</svg>										
									<a href="/" class="hover:underline ml-1">cs@groove.com</a>
								</li>
								<li class="mb-2 md:mb-4 flex flex-row">
									<svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M7.78705 13.1419C10.1701 18.3311 14.4108 22.4566 19.6825 24.6921L19.6991 24.6991L20.7175 25.1531C22.0144 25.7309 23.5387 25.3205 24.3701 24.1697L26.0693 21.8181C26.1731 21.6744 26.1463 21.4747 26.0084 21.3634L23.0421 18.9704C22.8946 18.8514 22.6778 18.8791 22.565 19.0313L21.4105 20.5892C21.1301 20.9675 20.6238 21.099 20.1948 20.9048C16.2529 19.1209 13.0853 15.9533 11.3014 12.0114C11.1072 11.5824 11.2387 11.0761 11.617 10.7957L13.1749 9.64122C13.3271 9.52841 13.3548 9.31157 13.2358 9.16411L10.8424 6.19739C10.7312 6.0595 10.5315 6.03272 10.3879 6.13641L8.02352 7.84329C6.86513 8.67954 6.45719 10.2167 7.04847 11.5173L7.78626 13.1402C7.78652 13.1407 7.78679 13.1413 7.78705 13.1419ZM18.8933 26.5298C13.1652 24.0984 8.55808 19.6143 5.96868 13.9747L5.96712 13.9713L5.22779 12.345C4.24232 10.1773 4.92223 7.61545 6.85287 6.22169L9.21726 4.51482C10.2228 3.78894 11.6204 3.97641 12.3991 4.9416L14.7924 7.90833C15.6252 8.94056 15.4312 10.4584 14.3657 11.2481L13.473 11.9096C14.9809 14.8355 17.3707 17.2253 20.2966 18.7332L20.9581 17.8405C21.7478 16.775 23.2657 16.581 24.2979 17.4138L27.2642 19.8068C28.2297 20.5857 28.4169 21.9839 27.6904 22.9894L25.9913 25.341C24.6055 27.259 22.065 27.9429 19.9036 26.98L18.8933 26.5298Z" fill="#707070"/>
									</svg>
									<a href="/" class="hover:underline ml-1">089636445795</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				{{-- <hr class="my-6 border border-gray-300 sm:mx-auto lg:my-8" /> --}}
				<div class="text-center my-6 sm:mt-8 md:mt-10 lg:mt-14 sm:mb-0">
					<span class="text-xs lg:text-sm text-gray-400 sm:text-center">
						© 2022-2023 
						<a href="/" class="hover:underline">
							Groove
						</a>. All Rights Reserved.
					</span>
			  	</div>
			</div>
		</div>
	</footer>
	{{-- Footer End --}}


</body>
</html>