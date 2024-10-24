@extends('layout.app')
@section('blade_css')
    <style>
        .section__text a{
            margin-top: -10px;
        }

        .swiper_banner {
            width: 100%;
            height: 100%;
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
            object-fit: contain !important;
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
        <div class="swiper_banner mySwiper_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide max-sm:!rounded-2xl !bg-[#ec1b23]/30">
{{--                        <h1 class="p-[2rem]">Coming Soon</h1>--}}
                    <img src="{{url('assets/images/slide_1_1.jpg')}}" alt="" class="max-sm:!rounded-2xl !block max-sm:!hidden">
                    <img src="{{url('assets/images/slide_mobile_1_1.png')}}" alt="" class="max-sm:!rounded-2xl !hidden max-sm:!block">
                </div>
                <div class="swiper-slide max-sm:!rounded-2xl !bg-[#ec1b23]/30">
{{--                    <h1 class="p-[2rem]">Coming Soon</h1>--}}
                    <img src="{{url('assets/images/slide_1_2.png')}}" alt="" class="max-sm:!rounded-2xl !block max-sm:!hidden">
                    <img src="{{url('assets/images/slide_mobile_1_2.png')}}" alt="" class="max-sm:!rounded-2xl !hidden max-sm:!block">
                </div>
                <div class="swiper-slide max-sm:!rounded-2xl !bg-[#ec1b23]/30">
{{--                    <h1 class="p-[2rem]">Coming Soon</h1>--}}
                    <img src="{{url('assets/images/slide_1_3.png')}}" alt="" class="max-sm:!rounded-2xl !block max-sm:!hidden">
                    <img src="{{url('assets/images/slide_mobile_1_3.png')}}" alt="" class="max-sm:!rounded-2xl !hidden max-sm:!block">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section data-aos="fade-right" class="section__text text-center max-w-screen-xl sm:mx-auto md:py-8 ">
        <div class="w-full"></div>
        <div class="lg:px-4 m-4 md:m-0 grid-cols-1">
            <h2 class="text-[12px] md:text-[20px]">
                @lang('home.des')
            </h2>
        </div>
    </section>

    <div class="w-full max-w-screen-xl mx-auto px-5 overflow-x-hidden">
        <div data-aos="fade-left" class="grid grid-cols-12 justify-center gap-[1vw]">
            <div class="col-span-12 md:col-span-6 bg-[#ec1b23]/60 flex flex-col justify-center items-center rounded-2xl">
{{--                <h1 class="text-center text-white font-semibold text-[20px]">Coming Soon</h1>--}}
                <img class="object-contain object-center w-full rounded-2xl" src="{{url('assets/images/sdd.jpg')}}" alt="">
            </div>

            <div class="col-span-12 md:col-span-6 max-sm:flex max-sm:flex-col max-sm:gap-[1vw]">
                <div class="my-3">
                    <h2 class="font-bold tracking-tight text-gray-900 text-[16] md:text-[24px]">@lang('home.title_one')</h2>
                    <p class="font-normal text-gray-700 text-[12px] md:text-[16px]">@lang('home.sub_title_one')</p>
                </div>
                <a href="{{ url('/merchant') }}" type="button" class="text-center px-3 py-2 bg-[#f03a40] hover:bg-[#ed1d25] text-[#ffffff] rounded-lg md:rounded-2xl transition-all duration-[150ms]">
                    @lang('home.sub')
                </a>
            </div>
        </div>
        <div data-aos="fade-right" class="grid grid-cols-12 justify-center gap-[1vw] mt-6">
            <div class="md:order-last col-span-12 md:col-span-6 flex flex-col justify-center items-center w-full rounded-2xl">
                <img data-aos="fade-right" class="object-contain object-center w-full rounded-2xl" src="{{url('assets/images/aps.jpg')}}" alt="">
            </div>

            <div class="col-span-12 md:col-span-6 max-sm:flex max-sm:flex-col max-sm:gap-[1vw]">
               <div class="my-3">
                   <h2 class="font-bold tracking-tight text-gray-900 text-[16] md:text-[24px]">@lang('home.title_two')</h2>
                   <p class="font-normal text-gray-700 text-[12px] md:text-[16px]">@lang('home.sub_title_two')</p>
               </div>
                <a href="{{ url('/merchant') }}" type="button" class="text-center px-3 py-2 bg-[#f03a40] hover:bg-[#ed1d25] text-[#ffffff] rounded-lg md:rounded-2xl transition-all duration-[150ms]">
                    @lang('home.sub')
                </a>
            </div>
        </div>
        <div data-aos="fade-left" class="grid grid-cols-12 justify-center gap-[1vw] mt-6">
            <div class="col-span-12 md:col-span-6 flex flex-col justify-center items-center w-full rounded-2xl">
                <img data-aos="fade-right" class="object-contain object-center w-full rounded-2xl" src="{{url('assets/images/real_time_trackings.jpg')}}" alt="">
            </div>

            <div class="col-span-12 md:col-span-6 max-sm:flex max-sm:flex-col max-sm:gap-[1vw]">
                <div class="my-3">
                    <h2 class="font-bold tracking-tight text-gray-900 text-[16] md:text-[24px]">@lang('home.title_three')</h2>
                    <p class="font-normal text-gray-700 text-[12px] md:text-[16px]">@lang('home.sub_title_three')</p>
                </div>
                <a href="{{ url('/merchant') }}" type="button" class="text-center px-3 py-2 bg-[#f03a40] hover:bg-[#ed1d25] text-[#ffffff] rounded-lg md:rounded-2xl transition-all duration-[150ms]">
                    @lang('home.sub')
                </a>
            </div>
        </div>
        <div data-aos="fade-right" class="grid grid-cols-12 justify-center gap-[1vw] my-6">
            <div class="md:order-last col-span-12 md:col-span-6 flex flex-col justify-center items-center w-full rounded-2xl">
                <img data-aos="fade-right" class="object-contain object-center w-full rounded-2xl" src="{{url('assets/images/rcsupport.jpg')}}" alt="">
            </div>

            <div class="col-span-12 md:col-span-6 max-sm:flex max-sm:flex-col max-sm:gap-[1vw]">
                <div class="my-3">
                    <h2 class="font-bold tracking-tight text-gray-900 text-[16] md:text-[24px]">@lang('home.title_four')</h2>
                    <p class="font-normal text-gray-700 text-[12px] md:text-[16px]">@lang('home.sub_title_four')</p>
                </div>
                <a href="{{ url('/merchant') }}" type="button" class="text-center px-3 py-2 bg-[#f03a40] hover:bg-[#ed1d25] text-[#ffffff] rounded-lg md:rounded-2xl mt-3 transition-all duration-[150ms]">
                    @lang('home.sub')
                </a>
            </div>
        </div>
    </div>
@endsection
