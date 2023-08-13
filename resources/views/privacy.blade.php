{{-- Mengextends halaman main.blade.php --}}
@extends('layouts.main')
{{-- bg-blue-300 sm:bg-red-300 md:bg-green-300 lg:bg-yellow-300  --}}

{{-- Mengisi halaman parent untuk section container --}}
@section('container') 
    {{-- Jumbotron Start --}}
    <section class="w-full pb-5 bg-white">
        <div class="py-10 sm:py-11 md:py-16 lg:py-20 px-4 mx-auto w-3/4">
            <div class="mb-7 sm:mb-8 md:mb-10 text-center">
                <h1 class="mb-1.5 md:mb-2 lg:mb-3 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-maitree font-bold tracking-tight leading-none text-black">
                    Privacy Policy
                </h1>
                <blockquote class="text-xs sm:text-sm md:text-base text-slate-700 font-maitree font-normal">
                    Last updated on August 7th, 2021
                </blockquote>
            </div>
            <p class="mb-2 sm:mb-4 mx-auto w-full sm:w-[90%] md:w-[85%] lg:w-[80%] text-center sm:text-left text-sm sm:text-base md:text-lg lg:text-lg font-maitree font-normal text-slate-800">
                Groove ("us", "we", or "our") operates www.groove.com (the "Site"). This page informs you of our policies regarding the collection, use, and disclosure of Personal Information we receive from users of the Site.            
            </p>
        </div>
    </section>
    {{-- Jumbotron End --}}

    
    {{-- Content Start --}}
    <section class="w-full pt-12 pb-4 bg-background">
        <div class="container mx-auto w-3/4 mt-4 bg-background">
            {{-- Information collection --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Information Collection and Use
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally, identifiable information may include but is not limited to your name ("Personal Information").
                </p>
            </div>
            {{-- Log Data --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Log Data
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    Like many site operators, we collect information that your browser sends whenever you visit our Site ("Log Data"). This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.                </p>
            </div>
            {{-- Cookies --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Cookies
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800">
                    Cookies are files with small amounts of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer's hard drive.
                </p>
            </div>
            {{-- Security --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Security
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800 ">
                    The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.                
                </p>
            </div>
            {{-- Changes to This Privacy Policy --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Changes to This Privacy Policy
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800 ">
                    This Privacy Policy is effective as of August 7th, 2021 and will remain in effect except with respect to any changes in its provisions in the future, which will be in effect immediately after being posted on this page.              
                </p>
            </div>
            {{-- Contact Us --}}
            <div class="w-full md:w-[90%] lg:w-4/6 sm:pl-2 md:pl-4 lg:pl-6 pb-10 sm:pb-12 md:pb-14 lg:pb-16">
                <h3 class="text-2xl md:text-3xl mb-2 font-bold font-maitree text-black">
                    Contact Us
                </h3>
                <p class="mb-2 sm:mb-0 text-sm sm:text-base lg:text-lg font-medium font-maitree text-slate-800 ">
                    If you have any questions about this Privacy Policy, please contact us.             
                </p>
            </div>
        </div>
    </section>
    {{-- Content End --}}
    
@endsection