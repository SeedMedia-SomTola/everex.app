@extends('layout.app')
@section('blade_css')
    <style>
        .section__text a{
            margin-top: -10px;
        }
    </style>
@endsection

@section('content')
    <section class="hero">
        <div id="default-carousel" class="relative 2xl:mt-[5rem]" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-screen overflow-hidden md:h-[93vh] grid grid-cols-1 gap-6 sm:grid-cols-3">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out flex flex-col justify-center items-center md:p-[10rem] overflow-hidden" data-carousel-item>
                    <div class="absolute inset-0 flex justify-center items-center">
                        <img src="{{url('assets/images/slide_1_1.jpg')}}" class="w-full h-full object-center object-cover" alt="...">
                        <img src="{{url('assets/images/slide_1_2.jpg')}}" class="w-full h-full object-center object-cover hidden lg:block" alt="...">
                    </div>
                    <div class="bg-black/30 absolute inset-0"></div>
                    <div class="relative">
                        <h2 class="md:text-4xl lg:text-5xl md:leading-relaxed text-xl leading-normal text-center text-white bg-black/20 backdrop-blur opacity-100 p-3 md:p-5 rounded-xl">@lang('home.title') <br>
                            @lang('home.sub_title')
                        </h2>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out flex flex-col justify-center items-center md:p-[10rem] overflow-hidden" data-carousel-item>
                    <div class="absolute inset-0 flex justify-center items-center">
                        <img src="{{url('assets/images/slide_2_1.jpg')}}" class="w-full h-full object-center object-cover" alt="...">
                        <img src="{{url('assets/images/slide_2_2.jpg')}}" class="w-full h-full object-center object-cover hidden lg:block" alt="...">
                    </div>
                    <div class="bg-black/30 absolute inset-0"></div>
                    <div class="relative">
                        <h2 class="md:text-4xl lg:text-5xl md:leading-relaxed text-xl leading-normal text-center text-white bg-black/20 backdrop-blur opacity-100 p-3 md:p-5 rounded-xl">@lang('home.title') <br>
                            @lang('home.sub_title')
                        </h2>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out flex flex-col justify-center items-center md:p-[10rem] overflow-hidden" data-carousel-item>
                    <div class="absolute inset-0 flex justify-center items-center">
                        <img src="{{url('assets/images/slide_3_1.jpg')}}" class="w-full h-full object-center object-cover" alt="...">
                        <img src="{{url('assets/images/slide_3_2.jpg')}}" class="w-full h-full object-center object-cover hidden lg:block" alt="...">
                    </div>
                    <div class="bg-black/30 absolute inset-0"></div>
                    <div class="relative">
                        <h2 class="md:text-4xl lg:text-5xl md:leading-relaxed text-xl leading-normal text-center text-white bg-black/20 backdrop-blur opacity-100 p-3 md:p-5 rounded-xl">@lang('home.title') <br>
                            @lang('home.sub_title')
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
              <svg class="w-4 h-4 text-whitertl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
              <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
            </button>
        </div>


    </section>
    <section data-aos="fade-right" class="section__text text-left max-w-screen-xl sm:mx-auto md:py-8 ">
        <div class="p-4 md:p-0 w-full"></div>
        <div class="lg:px-4 m-4 md:m-0 grid-cols-1">
            <h2 class="md:py-12 md:text-4xl text-xl lg:text-3xl">
                @lang('home.des')
            </h2>
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto md:py-12 my-10 md:px-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-6 sm:grid-cols-2 p-3">
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-lg h-[20rem]" src="{{url('assets/images/sdd.jpg')}}" alt="">

            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_one')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_one')</p>
                <a href="{{ url('/merchant') }}" type="button" class="focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">@lang('home.sub')</a>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto md:py-12 my-10 md:px-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-6 sm:grid-cols-2 p-3">
            <div class="md:order-none lg:order-none order-2" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_two')</h2>
                <p class="my-6 font-normal text-gray-700 ">@lang('home.sub_title_two')</p>
                <a href="{{ url('/merchant') }}" type="button" class="section_link focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">@lang('home.sub')</a>
            </div>
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-lg h-[20rem]" src="{{url('assets/images/aps.jpg')}}" alt="">
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto md:py-12 my-10 md:px-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-6 sm:grid-cols-2 p-3">
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-lg h-[20rem]" src="{{url('assets/images/real_time_trackings.jpg')}}" alt="">
            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_three')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_three')</p>
                <a href="{{ url('/merchant') }}" type="button" class=" focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">@lang('home.sub')</a>
            </div>
        </div>
    </section>


    <section class="max-w-screen-xl sm:mx-auto md:py-12 my-10 md:px-4">
        <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 p-3">
            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_four')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_four')</p>
                <a href="{{ url('/merchant') }}" type="button" class="my-10 focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">@lang('home.sub')</a>
            </div>
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-lg h-[20rem]" src="{{url('assets/images/rcsupport.jpg')}}" alt="">
        </div>
    </section>
@endsection
