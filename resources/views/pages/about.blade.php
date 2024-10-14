@extends('layout.app', ['title' => 'About'])

@section('blade_css')
    <style>
        .taps {
            max-width: 1000px;
        }

        .taps li button {
            border: 2px solid #be1c25;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold
        }
        .taps .d-flex {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .taps li {
            padding: 0 15px;

        }
        .title{
            margin-top: -20px;
        }
        .values{
            margin-bottom: 20px
        }
        .values a {
            width: 250px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 18px 40px;
            background-color: red;
            transition: 0.5s;
        }
        .values .a-right {
            background: rgb(210,0,19);
            background: linear-gradient(90deg, rgb(239 68 68) 42%, rgb(29 78 216) 84%);
            clip-path: polygon(80% 0%, 100% 50%, 80% 100%, 0% 100%, 10% 55%, 0% 0%);
        }
        .values .a-left {
            background: rgb(210,0,19);
            background: linear-gradient(90deg, rgb(29 78 216) 22%, rgb(239 68 68) 84%);
            clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 20% 99%, 0% 55%, 20% 0%);
        }
        @media screen and (min-width: 700px) {
            .hero{
                margin-top: 70px
            }
        }
        @media screen and (min-width: 1024px) {
            .section_padding{
                padding: 0 50px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="hero section__text">
        <img src="{{url('assets/images/about_us_hero_banner.jpg')}}" alt="" class="w-full">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="title">
            <h2 data-aos="fade-right" class="leading-normal md:text-5xl text-2xl">About <br>
                Everex Express</h2>
        </div>
    </section>

    <section data-aos="fade-right" class="section__text section_padding lg:px-4 max-w-screen-xl sm:mx-auto md:py-8 pt-4 md:pt-0 md:my-0 w-full">
        <div class="content-width md:py-16 md:flex md:items-center">
                <aside class="mt-10 p-4 md:p-0">
                    <p>@lang('about.title_one')</p>
                    <p>@lang('about.title_two')</p>
                    <p>@lang('about.title_three')</p>
                </aside>
        </div>
    </section>

{{--    <section data-aos="fade-up" class="section__text about-carousel max-w-screen-xl sm:mx-auto md:py-8 my-10 lg:px-4">--}}
{{--        <div id="default-carousel" class="relative w-full" data-carousel="slide">--}}
{{--            <!-- Carousel wrapper -->--}}
{{--            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">--}}
{{--                <!-- Item 1 -->--}}
{{--                <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                    <a href="#"--}}
{{--                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200">--}}
{{--                        <div class=" mx-4">--}}
{{--                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 ">Noteworthy--}}
{{--                                technology acquisitions 2021</h2>--}}
{{--                            <p class="my-6 mx-4 font-normal text-gray-700 hidden md:grid">What makes quick commerce quick?--}}
{{--                                We--}}
{{--                                stand for swift personalised delivery solutions for our customers, partners and employees.--}}
{{--                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>--}}
{{--                        </div>--}}
{{--                        <img  class="object-cover w-full rounded-t-lg h-96 md:h-auto  "--}}
{{--                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"--}}
{{--                            alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                    <a href="#"--}}
{{--                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  ">--}}
{{--                        <div class="mx-4">--}}
{{--                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 ">Noteworthy--}}
{{--                                technology acquisitions 2021</h2>--}}
{{--                            <p class="my-6 font-normal text-gray-700 hidden md:grid">What makes quick commerce quick?--}}
{{--                                We--}}
{{--                                stand for swift personalised delivery solutions for our customers, partners and employees.--}}
{{--                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>--}}
{{--                        </div>--}}
{{--                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "--}}
{{--                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"--}}
{{--                            alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                    <a href="#"--}}
{{--                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  ">--}}
{{--                        <div class="mx-4">--}}
{{--                            <h2 class="mb-2  text-5xl font-bold tracking-tight text-gray-900">Noteworthy--}}
{{--                                technology acquisitions 2021</h2>--}}
{{--                            <p class="my-6 mx-4 font-normal text-gray-700 hidden md:grid">What makes quick commerce quick?--}}
{{--                                We--}}
{{--                                stand for swift personalised delivery solutions for our customers, partners and employees.--}}
{{--                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>--}}
{{--                        </div>--}}
{{--                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "--}}
{{--                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"--}}
{{--                            alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                    <a href="#"--}}
{{--                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200 ">--}}
{{--                        <div class="mx-4">--}}
{{--                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900">Noteworthy--}}
{{--                                technology acquisitions 2021</h2>--}}
{{--                            <p class="my-6 mx-4 font-normal text-gray-700 hidden md:grid">What makes quick commerce quick?--}}
{{--                                We stand for swift personalised delivery solutions for our customers, partners and--}}
{{--                                employees. Learn how we empower authentic lifestyles and drive innovation across the globe.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "--}}
{{--                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"--}}
{{--                            alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                    <a href="#"--}}
{{--                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200 ">--}}
{{--                        <div class="mx-4">--}}
{{--                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900">Noteworthy--}}
{{--                                technology acquisitions 2021</h2>--}}
{{--                            <p class="my-6 font-normal text-gray-700 hidden md:grid">What makes quick commerce quick?--}}
{{--                                We stand for swift personalised delivery solutions for our customers, partners and--}}
{{--                                employees. Learn how we empower authentic lifestyles and drive innovation across the globe.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "--}}
{{--                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"--}}
{{--                            alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Slider indicators -->--}}
{{--            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">--}}
{{--                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"--}}
{{--                    data-carousel-slide-to="0"></button>--}}
{{--                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"--}}
{{--                    data-carousel-slide-to="1"></button>--}}
{{--                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"--}}
{{--                    data-carousel-slide-to="2"></button>--}}
{{--                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"--}}
{{--                    data-carousel-slide-to="3"></button>--}}
{{--                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"--}}
{{--                    data-carousel-slide-to="4"></button>--}}
{{--            </div>--}}
{{--            <!-- Slider controls -->--}}
{{--            <button type="button"--}}
{{--                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"--}}
{{--                data-carousel-prev>--}}
{{--                <span--}}
{{--                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">--}}
{{--                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"--}}
{{--                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                            d="M5 1 1 5l4 4" />--}}
{{--                    </svg>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--            <button type="button"--}}
{{--                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"--}}
{{--                data-carousel-next>--}}
{{--                <span--}}
{{--                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">--}}
{{--                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"--}}
{{--                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                            d="m1 9 4-4-4-4" />--}}
{{--                    </svg>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section  class="section__text taps md:mt-16 max-w-screen-xl sm:mx-auto md:py-6">
        <div class="w-full">
            <span class="text-center w-full">
                <h2 class="text-5xl my-10 mb-12" data-aos="fade-down"> Our values </h2>
            </span>
        </div>

        <div class="flex items-center values justify-center">

            <ul class="">
                <li class="mt-5 flex flex-row  text-center justify-center items-center">
                    <a href="#" class="a-right mr-3 ml-2 text-white" data-aos="fade-right">@lang('about.speed')</a>
                    <p class="text-md lg:text-xl" data-aos="fade-left">@lang('about.sub_speed')</p>
                </li>
                <li class="mt-5 flex text-center justify-center items-center">
                    <p class="text-md lg:text-xl mr-3" data-aos="fade-right">@lang('about.sub_efficiency')</p> <a href="#"
                        class="a-left mr-2 text-white" data-aos="fade-left">@lang('about.efficiency')</a>
                </li>
                <li class="mt-5 flex text-center justify-center items-center">
                    <a href="#" class="a-right mr-3 ml-2 text-white" data-aos="fade-right">@lang('about.excellence')</a>
                    <p class="text-md lg:text-xl" data-aos="fade-left">@lang('about.sub_excellence')</p>
                </li>
                <li class="mt-5 flex text-center justify-center items-center">
                    <p class="text-md lg:text-xl mr-3 " data-aos="fade-right">@lang('about.sub_dedication')</p> <a href="#"
                        class="a-left mr-2 text-white" data-aos="fade-left">@lang('about.dedication')</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
