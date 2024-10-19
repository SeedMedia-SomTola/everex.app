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
        <div class="w-full mt-[5.7rem]">
            <img src="{{url('assets/images/about_us_hero_banner_laptop.jpg')}}" alt="" class="w-full object-contain object-center">
        </div>

    <section data-aos="fade-right" class="section__text section_padding lg:px-4 max-w-screen-xl sm:mx-auto md:py-8 pt-4 md:pt-0 md:my-0 w-full">
        <div class="content-width md:py-7 md:flex md:items-center">
                <aside class="mt-10 p-4 md:p-0">
                    <p>@lang('about.title_one')</p>
                    <p>@lang('about.title_two')</p>
                    <p>@lang('about.title_three')</p>
                </aside>
        </div>
    </section>

    <section  class="section__text taps max-w-screen-xl sm:mx-auto md:pb-6">
        <div class="w-full">
            <span class="text-center w-full">
                <h2 class="text-[24px] mb-10" data-aos="fade-down"> Our values </h2>
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
