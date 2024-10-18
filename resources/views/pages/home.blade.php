@extends('layout.app')
@section('blade_css')
    <style>
        .section__text a{
            margin-top: -10px;
        }

        .swiper_banner {
            width: 100%;
            height: 56vh;
            overflow-x:hidden;
        }

        .swiper_banner .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper_banner .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .swiper-pagination-bullet{
            width: 20px !important;
            height: 5px !important;
            border-radius: 4px !important;
            background:#ffffff !important;
            margin-bottom: 5px !important;
            transition: all .5s ease-in-out !important;
        }
        .swiper-pagination-bullet-active{
            width: 50px !important;
            height: 5px !important;
            border-radius: 4px !important;
            background:#ffffff !important;
            margin-bottom: 5px !important;
            transition: all .5s ease-in-out !important;
        }
    </style>
@endsection

@section('content')
    <section class="hero max-sm:p-3 mt-[3.5rem] md:mt-[6rem]">
        <!-- Swiper -->
        <div class="swiper_banner mySwiper_banner max-sm:!h-[26vh]">
            <div class="swiper-wrapper">
                <div class="swiper-slide max-sm:!rounded-2xl">
                    <img src="{{url('assets/images/slide_1_1.jpg')}}" alt="" class="max-sm:!rounded-2xl">
                </div>
                <div class="swiper-slide max-sm:!rounded-2xl">
                    <img src="{{url('assets/images/slide_1_1.jpg')}}" alt="" class="max-sm:!rounded-2xl">
                </div>
                <div class="swiper-slide max-sm:!rounded-2xl">
                    <img src="{{url('assets/images/slide_1_1.jpg')}}" alt="" class="max-sm:!rounded-2xl">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section data-aos="fade-right" class="section__text text-center max-w-screen-xl sm:mx-auto md:py-8 ">
        <div class="w-full"></div>
        <div class="lg:px-4 m-4 md:m-0 grid-cols-1">
            <h2 class="md:text-4xl  lg:text-3xl">
                @lang('home.des')
            </h2>
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto py-0 md:p-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-[1rem] sm:grid-cols-2 p-3">
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-2xl h-[24rem]" src="{{url('assets/images/sdd.jpg')}}" alt="">

            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_one')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_one')</p>
                <a href="{{ url('/merchant') }}" type="button" class="focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2">@lang('home.sub')</a>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto py-0 md:p-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-[1rem] sm:grid-cols-2 p-3">
            <div class="md:order-none lg:order-none order-2" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_two')</h2>
                <p class="my-6 font-normal text-gray-700 ">@lang('home.sub_title_two')</p>
                <a href="{{ url('/merchant') }}" type="button" class="section_link focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2">@lang('home.sub')</a>
            </div>
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-2xl h-[26rem]" src="{{url('assets/images/aps.jpg')}}" alt="">
        </div>
    </section>

    <section class="max-w-screen-xl sm:mx-auto py-0 md:p-4">
        <div class="sm:mx-4 grid grid-cols-1 gap-[1rem] sm:grid-cols-2 p-3">
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-2xl h-[24rem]" src="{{url('assets/images/real_time_trackings.jpg')}}" alt="">
            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_three')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_three')</p>
                <a href="{{ url('/merchant') }}" type="button" class=" focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2">@lang('home.sub')</a>
            </div>
        </div>
    </section>


    <section class="max-w-screen-xl sm:mx-auto py-0 md:p-4">
        <div class=" grid grid-cols-1 gap-[1rem] sm:grid-cols-2 p-3">
            <div class="" data-aos="fade-right">
                <h2 class="mb-2 font-bold tracking-tight text-gray-900 md:text-5xl text-3xl">@lang('home.title_four')</h2>
                <p class="my-6 font-normal text-gray-700">@lang('home.sub_title_four')</p>
                <a href="{{ url('/merchant') }}" type="button" class="px-3 py-2 focus:outline-none text-white bg-[#f03a40] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm ">@lang('home.sub')</a>
            </div>
            <img data-aos="fade-right" class="object-cover object-center w-full rounded-2xl h-[24rem] max-sm:order-first" src="{{url('assets/images/rcsupport.jpg')}}" alt="">
        </div>
    </section>
@endsection
