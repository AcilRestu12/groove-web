{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')
{{-- bg-blue-300 sm:bg-red-300 md:bg-green-300 lg:bg-yellow-300  --}}

{{-- Mengisi halaman parent untuk section container --}}
@section('container') 
    {{-- Jumbotron Start --}}
    <section class="w-full pb-5 bg-white">
        <div class="py-10 sm:py-11 md:py-16 lg:py-20 px-4 mx-auto w-3/4 text-center ">
            <h1 class="mb-4 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-maitree font-bold tracking-tight leading-none text-black">
                Our Story & Vision
            </h1>
            <p class="mb-4 mx-auto w-full sm:w-[90%] md:w-[85%] lg:w-[80%] text-sm sm:text-base md:text-lg lg:text-lg font-maitree font-normal text-slate-800">
                Welcome to Groove, where the rhythm of language meets the beauty of culture. We are more than just an educational platform; we are a gateway to exploring the enchanting world of the Russian language.
            </p>
        </div>
    </section>
    {{-- Jumbotron End --}}

    {{-- Content Start --}}
    <section class="w-full pt-12 pb-4 bg-background">
        <div class="container mx-auto w-3/4 mt-4 bg-background">
            {{-- Journey --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Our Journey
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    Founded with a passion for language and a mission to make learning accessible, Groove started as a vision to provide high-quality educational content for individuals on a 
                    budget. With each step of our journey, we've been 
                    guided by the belief that everyone deserves the 
                    opportunity to embrace the wonders of language.
                </p>
            </div>
            {{-- Expertise --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Our Expertise
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    At Groove, our foundation lies in our world-class experts who bring their expertise and love for language to every video we create. Our team is dedicated to crafting engaging content that not only imparts knowledge but also captures the essence of the Russian language and culture.
                </p>
            </div>
            {{-- Approach --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Our Approach
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    We understand that learning is a personal journey, and 
                    that's why we infuse a sense of comfort and warmth into our educational experience. Through our videos and resources, 
                    we aim to transport you to a realm where you can learn at your own pace while enjoying the feeling of an 
                    old-fashioned connection to the language.
                </p>
            </div>
            {{-- Promise --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Our Promise
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800 ">
                    Our promise is to continue delivering excellence in education while maintaining a focus on accessibility. Groove is your partner in learning, your bridge to a new world, and your source of inspiration on your language journey.
                </p>
            </div>
        </div>
    </section>
    {{-- Content End --}}

    {{-- Quote Start --}}
    <section class="w-full pt-16 pb-4 bg-white">
        <div class="container w-4/5 sm:w-[70%] md:w-4/6 text-center mx-auto px-4 md:px-2">
            <blockquote class="text-lg md:text-xl lg:text-2xl font-marck sm:flex flex-col text-black">
                <span> “Thank you for being a part of the Groove family. </span>
                <span> Together, let's groove to the rhythm of Russian language and culture!” </span>
            </blockquote>
        </div>
    </section>
    {{-- Quote End --}}

@endsection

{{--  px-2 sm:px-10 md:px-12 lg:px-40  --}}