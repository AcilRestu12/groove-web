{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')

{{-- Mengisi halaman parent untuk section container --}}
@section('container')       
	{{-- Jumbotron Start --}}
	<section class="bg-seconday">
		<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
			<div class="flex flex-col-reverse space-y-4 align-middle md:flex-row md:justify-center md:space-y-0 md:space-x-4">
				<div class="self-center flex flex-col mx-2 md:mx-6">
					<h1 class="mb-2 lg:mb-4 text-4xl font-extrabold font-simonetta tracking-tight text-center md:text-left self-center text-white md:text-5xl lg:text-6xl">
						Welcome to Groove: Discover the Art of Learning Russian			
					</h1>
					<a href="#" class="inline-flex justify-center items-center md:w-fit py-3 px-5 my-3 mx-4 sm:mx-10 md:mx-0 text-base font-montserrat font-semibold text-center text-white rounded-lg bg-primary duration-300  hover:opacity-90 focus:ring-4 focus:ring-blue-200">
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
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-300 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
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
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-300 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
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
						<a href="#" class="block rounded-md font-montserrat font-semibold text-sm md:text-base w-fit py-1.5 px-5 md:px-6 lg:px-8 lg:py-2 text-center duration-300 text-primary hover:text-white hover:bg-primary border-primary border-2 focus:ring-4 focus:outline-none">See More</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	{{-- Offer End --}}

	{{-- Invitation Start --}}
	<section class="bg-background">
		<div class="container w-3/4 mx-auto my-6 md:my-8 lg:my-10 py-4 sm:py-6 md:py-8 lg:py-12">
			<h2 class="text-3xl md:text-4xl lg:text-5xl mb-3 md:mb-4 font-simonetta font-bold text-center">
				Join the Groove Family Today
			</h2>
			<p class="font-maitree font-medium text-center text-base lg:text-lg w-full sm:w-4/5 md:w-2/3 mx-auto mb-4 md:mb-5">
				Start your journey to mastering the Russian 
				language with Groove. No matter your budget, 
				no matter your background, Groove welcomes you 
				to a world of comfort, tradition, and lifelong learning.
			</p>
			<a href="#" class="block uppercase w-fit py-2.5 md:py-3 px-5 my-3 mx-auto text-sm md:text-base duration-300 font-montserrat font-semibold text-center text-white rounded-md bg-primary hover:opacity-90 focus:ring-4 focus:ring-blue-200">
				register now
			</a>
		</div>
	</section>
	{{-- Invitation End --}}

@endsection