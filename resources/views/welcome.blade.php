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
	<footer class="bg-blue-300 sm:bg-red-300 md:bg-green-300 lg:bg-yellow-300">
		<div class="container w-3/4 mx-auto mt-8 md:mt-10 lg:mt-12 py-4 sm:py-6 md:py-8 lg:py-12 bg-white">
			<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
				<div class="md:flex md:justify-between">
					<div class="mb-6 md:mb-0">
						<a href="https://flowbite.com/" class="flex items-center ml-2">
							<span class="self-center text-4xl mb-2 font-pacifico whitespace-nowrap text-primary">Groove</span>
						</a>
						<div>
							{{-- Instagram --}}
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect width="50" height="50" fill="url(#pattern0)"/>
								<defs>
									<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_141_1811" transform="scale(0.0111111)"/>
									</pattern>
									<image id="image0_141_1811" width="90" height="90" xlink:href="data:image/png;base64,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"/>
								</defs>
							</svg>
							{{-- Facebook --}}
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect width="50" height="50" fill="url(#pattern0)"/>
								<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_141_1812" transform="scale(0.0111111)"/>
								</pattern>
								<image id="image0_141_1812" width="90" height="90" xlink:href="data:image/png;base64,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"/>
								</defs>
							</svg>
							{{-- Tiktok --}}
							<svg width="24" height="24" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect width="50" height="50" fill="url(#pattern0)"/>
								<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_141_1813" transform="scale(0.0111111)"/>
								</pattern>
								<image id="image0_141_1813" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAErUlEQVR4nO2cTYgcRRTHO8GvqEfjmu1XswgLaljQEKLowXgRVBQjOrra783Er5yM4jUic/DgQXIQgrHf60XIIYKePAkimIMaFXH14BdqiCDGg0STjaCoaanZqJNkuqenp6t7Ov3+8G671VW/+ffrV13V5XkqlUqlUqlUKpVKpVKpVCpvrvvKRSYInzLIHxriE4YkPjeD7dg+aKE8Ob/zxQtL/en9gMEgf1Y9BCkb+qd27OU5uZGQ5T/YpTi7ny4qH6xUGkC80z3ofk6ufrCm2jjoHjTJyhQMNK44VsoAXfUg42kIBU0KOq7ahepomgyCT/x40q0MyPsUNBXjMgjkscRnCsrTCprcg56jaJOCpoJAIz+aWimhLGuOphJAk3QVNBUAmqJH0uvaeI1Bfl+rDnIN2r4MC68GkqNFwfZcq66grfxAbgGU3xU05YSNvN3LqFmKbgTkI+pocgvayixGs4ZkvyE+qamD3IH+VxCEWwyx5MndnmtVnY/N8OhOMqbNO8LzfVy61pA8YFB+U9CU6OhOUUbK6m7PteoGGtq7140zPgVNOUGj7PW29s5T0DS5o/2OYLJD+XP7qtTr9daqo8ktaPs3gPL6DO67RFMHuQW9GvwVULhVczQNzb/Hgfg7QP4lCTQgB9lAn/p74rcAo212M1BDH4ZsZ2ofmYB3zXb5ug07wosHrvtcUaAHrncCkN81JJEhfsFG1nchtQUNxG+3urI55brJoEkeygc6fzgDPDDgggHLUYNyV4brKugJUsU3cyTXZPyBU1JHuJj0f413NKB8u+HB8LIx7iQFnauSwGghK+RRoO3LIHX0EDAtimgcyAo6z8MP+ZPR0+F4TYuiNpC8AcQ/napK/lBHjwVabhu5+jHuinXA92vqOL2U+zHNzVcuygwQHx77TlHQZ6WNl9PzML+ZJx3ZNKOOPg10tC0RSCe6OW89rqDPADJH0aZkN8ue3KA7fJ86egDIDL50eTIQeS8vaB/DexX0AJD5lO/zJpsq892J7aJ8mb/d5PBca5LO+SlfnRqUA3nbhY5cn9LuD40DDUG4JaldQH4+Z7srSSvdG9uvXWBI/mweaEp5b4zRgkH5e+x2Ubjs3f5TD9qQ7B/RdjQeZP7ZTnKS2gOSZxsJGkh+tbdzIpj27nWZp9/Ix1sY3pTWV0D5uJGgTYbtW33YxDIijRycDaKrMmxgPNlY0EB8eNjq81mgMFroPyBRDgDyF7bOtruODMqt2frJ77iCXAvQxkbAu1z2ETp8j0vI9QFN/JdPcoeL/tmUkrYHpGGgpb/63QqWNhbZtyseXlpvUL52DblWoM1qvj7WIr6ziH71czrJoTIg1w60WQ07c3smywNyqHq9tfbTClvulQW5rqDjfqB8b0u/tDr7TMB+J7zdHiZVJuD6g6b/JzWG5FU7XfcxvAE6e327kXx9e8+lgDJv39QBSVjEJ2yNBm1qEgqaFHRctQvr5ujGH8cGxMfcg9YDBuNSDhi0p85WfduaigNQnnAO2i6wVlW7mmkIlOXMtX4hxxo3ETbKcr+uL1PW2fbUWZuvzvEH5Ipd9bHpojQnq1QqlUqlUqlUKpVKpVJ5061/AFh/3qK5pIIRAAAAAElFTkSuQmCC"/>
								</defs>
							</svg>
								
							{{-- Youtube --}}
							<svg width="50" height="90" viewBox="0 0 50 90" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect width="50" height="90" fill="url(#pattern0)"/>
								<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_141_1815" transform="matrix(0.0111111 0 0 0.00617284 0 0.222222)"/>
								</pattern>
								<image id="image0_141_1815" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEK0lEQVR4nO2cv28cVRDHN5ShAIrgnG/mLCj4AwCFmoZ0ECJFiriZc5AQQuJXEAVFClMF/oKEnTlsKRVCQSmiUAACCgRtqPilIDrzw1A4Ufgh4UXz1mclFIg9e/fte56PNI3Pezvz3dm37/bNm6JwHMdxHMdxHMdxHMdx9oQFOnfvaFkfApoeG5G+BCRvIIsiyXvI8gmSfAks14DlR2D9DUk2kbUKRrJpf6s/k2v2v9vH2LFq31V/5/SYncPOle1lGz117p4hlY8gySlkfR1Y14DlIyT9Bkh+3xGtI6vPKV+bD+aL+WS+mY/ma9F38OR0EViOAuurwFoi6afA+lPXQuJuL4T5XPte1rHIUYstmrB2GyLLc0DyToqCYlMj+dmGJBuKRuNy0LrA953UhXC1I9z22BMD0j+QZbU1wWEiTyLrL7EDxb4YycaQ9fjeijzWZ5D07+jBcd9MtoDk+T3MZNmKH5T21GTLNNqVyIunVjHMX6MHo/02kl9hcn44fzbXc834gXAKJjqXyAMuR0D6V/wANAkDlj+HY4HGQiPpK7Gdx8QMWF6cR+j3YzuOiRmQXm4sNLB+H9txTM7ku+YZzXIjvuOamMmNOYSO7bQmaS40u9BV7Cz0jOb4wuU8dJxJ+UGcjNDFzopNWKlJ7o1hUkLPqBdu5bPY4mUvdE11YMTTE8DyQ2wRMxe6ZvBseXBE8hqyXo8tZtZCz7A3ZEByoa+LEUVT+u4oTPQIknweW9jsha6pDiDJBEjWYwucudA1C3ThzlAJ1YMyiKIpyTj67zXOMH670FWbQs8YTqaPIsvVJBIlxYy+jZWVO8L43XHJWrHvhN5maXntbmB9sy7l6qH/uQg9Y5HlAWB5t3f+Zyk06eXe+Z+L0Es+dGi7QvvDULuZ3oU9LQnckSkOHYNQxuY/WKq2hPaf4K1ndOUvlTp5Tcr6RawhLvsxeugv/tsVeuBLWW1ndOWLs20PHcjTh73coMUxGr2AppMH4hkvCetw9oGJWjLTO0zcXGh2oat9ntHp1ihjLCPZbCx06FMU23FOzr5tntEkV3rgeJX9hk4cly/HdhwTMyB9Yc7yKt90j21vug9ZzbIaO0sw9zYShl0ha/oRPwjtt5Fs7KoxShCb9Xhfq+sxl1Y/M7x5lbbfvOq2zCbZiJ9Bmm87thnWVA9Zp11VZuJ+bDB4K0vLa4dtzmhtJPdNy0yWS521zPzPTJ9MH0OW00DylrUX7tMGHvzf2SrrSPLxdgynLaaowjaq5Ky3qU1CC2GWVSD90FoLI+vNCGLeBNKvgOWD2hdZCbsCJnrk/hPlXUWuHH767UOjcfkgsjwRmmqznEVSQdaLllk7jbpJ1rcbHd66a/Z6aNQdPrMXYHI1HMN6sW5LLGftO3FcPm7nsHPFjtdxHMdxHMdxHMdxHKfIhH8Axu93DlxyGS4AAAAASUVORK5CYII="/>
								</defs>
							</svg>
							{{-- Twitter --}}
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256"
								style="fill:#000000;">
								<g fill="#1d5d9b" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12zM21.464,12.535c0.006,0.133 0.009,0.265 0.009,0.397c0,4.068 -3.095,8.756 -8.756,8.756c-1.739,0 -3.356,-0.509 -4.717,-1.383c0.241,0.029 0.486,0.042 0.735,0.042c1.443,0 2.769,-0.491 3.821,-1.318c-1.347,-0.025 -2.484,-0.915 -2.875,-2.137c0.188,0.036 0.381,0.055 0.579,0.055c0.281,0 0.554,-0.038 0.811,-0.108c-1.408,-0.282 -2.469,-1.526 -2.469,-3.017c0,-0.013 0,-0.026 0,-0.039c0.415,0.231 0.889,0.369 1.394,0.385c-0.825,-0.551 -1.369,-1.494 -1.369,-2.561c0,-0.565 0.151,-1.094 0.416,-1.547c1.518,1.862 3.786,3.088 6.343,3.216c-0.052,-0.225 -0.079,-0.46 -0.079,-0.701c0,-1.699 1.378,-3.078 3.077,-3.078c0.885,0 1.685,0.374 2.246,0.972c0.701,-0.139 1.36,-0.394 1.955,-0.747c-0.23,0.719 -0.718,1.321 -1.354,1.703c0.622,-0.074 1.215,-0.239 1.768,-0.484c-0.411,0.618 -0.932,1.159 -1.535,1.594z"></path></g></g>
							</svg>

						</div>
					</div>
					<div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
						{{-- Our Product --}}
						<div>
							<h2 class="mb-6 text-sm font-bold font-montserrat text-gray-500 uppercase">our products</h2>
							<ul class="text-gray-400 font-medium font-montserrat">
								<li class="mb-4">
									<a href="/" class="hover:underline capitalize">e-learning</a>
								</li>
								<li class="mb-4">
									<a href="/" class="hover:underline capitalize">blog</a>
								</li>
								<li>
									<a href="/" class="hover:underline capitalize">community</a>
								</li>
							</ul>
						</div>
						{{-- Others --}}
						<div>
							<h2 class="mb-6 text-sm font-bold font-montserrat text-gray-500 uppercase">others</h2>
							<ul class="text-gray-400 font-medium font-montserrat">
								<li class="mb-4">
									<a href="/" class="hover:underline capitalize">about us</a>
								</li>
								<li class="mb-4">
									<a href="/" class="hover:underline capitalize">help center</a>
								</li>
								<li>
									<a href="/" class="hover:underline capitalize">privacy policy</a>
								</li>
							</ul>
						</div>
						{{-- Contact Us --}}
						<div>
							<h2 class="mb-6 text-sm font-bold font-montserrat text-gray-500 uppercase">contact us</h2>
							<ul class="text-gray-400 font-medium font-montserrat">
								<li class="mb-4 flex flex-row">
									<svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M3.73838 11.1377C3.36486 14.6082 3.38151 18.6109 3.90127 22.0673C4.18887 23.9798 5.74976 25.446 7.67652 25.6135L9.69016 25.7885C13.8889 26.1535 18.1114 26.1535 22.3101 25.7885L24.3237 25.6135C26.2505 25.446 27.8114 23.9798 28.099 22.0673C28.6188 18.6108 28.6354 14.6084 28.2619 11.1379C28.2136 10.7355 28.1593 10.3337 28.099 9.93261C27.8114 8.02009 26.2505 6.55389 24.3237 6.3864L22.3101 6.21136C18.1114 5.84638 13.8889 5.84638 9.69016 6.21136L7.67652 6.38641C5.74976 6.55389 4.18887 8.02009 3.90127 9.93261C3.84096 10.3337 3.78666 10.7354 3.73838 11.1377ZM9.86337 8.20385C13.9468 7.84888 18.0534 7.84888 22.1369 8.20385L24.1505 8.37889C25.1563 8.46632 25.9711 9.23168 26.1212 10.23C26.1368 10.3337 26.152 10.4374 26.1667 10.5412L18.7521 14.6604C17.0406 15.6113 14.9596 15.6113 13.2481 14.6604L5.83352 10.5412C5.84827 10.4374 5.86344 10.3337 5.87903 10.23C6.02916 9.23168 6.84395 8.46632 7.84972 8.37889L9.86337 8.20385ZM26.4115 12.6931C26.6701 15.7168 26.5734 18.7633 26.1212 21.7699C25.9711 22.7682 25.1563 23.5336 24.1505 23.621L22.1369 23.7961C18.0534 24.151 13.9468 24.151 9.86337 23.7961L7.84972 23.621C6.84395 23.5336 6.02916 22.7682 5.87903 21.7699C5.42692 18.7633 5.33017 15.7168 5.58879 12.6932L12.2768 16.4088C14.5923 17.6952 17.4078 17.6952 19.7234 16.4088L26.4115 12.6931Z" fill="#707070"/>
									</svg>										
									<a href="/" class="hover:underline ml-1">cs@groove.com</a>
								</li>
								<li class="mb-4 flex flex-row">
									<svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M7.78705 13.1419C10.1701 18.3311 14.4108 22.4566 19.6825 24.6921L19.6991 24.6991L20.7175 25.1531C22.0144 25.7309 23.5387 25.3205 24.3701 24.1697L26.0693 21.8181C26.1731 21.6744 26.1463 21.4747 26.0084 21.3634L23.0421 18.9704C22.8946 18.8514 22.6778 18.8791 22.565 19.0313L21.4105 20.5892C21.1301 20.9675 20.6238 21.099 20.1948 20.9048C16.2529 19.1209 13.0853 15.9533 11.3014 12.0114C11.1072 11.5824 11.2387 11.0761 11.617 10.7957L13.1749 9.64122C13.3271 9.52841 13.3548 9.31157 13.2358 9.16411L10.8424 6.19739C10.7312 6.0595 10.5315 6.03272 10.3879 6.13641L8.02352 7.84329C6.86513 8.67954 6.45719 10.2167 7.04847 11.5173L7.78626 13.1402C7.78652 13.1407 7.78679 13.1413 7.78705 13.1419ZM18.8933 26.5298C13.1652 24.0984 8.55808 19.6143 5.96868 13.9747L5.96712 13.9713L5.22779 12.345C4.24232 10.1773 4.92223 7.61545 6.85287 6.22169L9.21726 4.51482C10.2228 3.78894 11.6204 3.97641 12.3991 4.9416L14.7924 7.90833C15.6252 8.94056 15.4312 10.4584 14.3657 11.2481L13.473 11.9096C14.9809 14.8355 17.3707 17.2253 20.2966 18.7332L20.9581 17.8405C21.7478 16.775 23.2657 16.581 24.2979 17.4138L27.2642 19.8068C28.2297 20.5857 28.4169 21.9839 27.6904 22.9894L25.9913 25.341C24.6055 27.259 22.065 27.9429 19.9036 26.98L18.8933 26.5298Z" fill="#707070"/>
									</svg>
									<a href="/" class="hover:underline ml-1">089636445795</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
				<div class="sm:flex sm:items-center sm:justify-between">
					<span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
					</span>
				  	<div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
						<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
							<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
									<path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
								</svg>
							<span class="sr-only">Facebook page</span>
						</a>
						<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
							<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
									<path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
								</svg>
							<span class="sr-only">Discord community</span>
						</a>
						<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
							<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
								<path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
							</svg>
							<span class="sr-only">Twitter page</span>
					  	</a>
					  	<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
						  	<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
						  	</svg>
						  	<span class="sr-only">GitHub account</span>
					  	</a>
					  	<a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
						  	<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
							</svg>
						  	<span class="sr-only">Dribbble account</span>
					  	</a>
				  	</div>
			  	</div>
			</div>
		</div>
	</footer>
	{{-- Footer End --}}

	<div class="mb-80"></div>

</body>
</html>