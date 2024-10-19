@extends('layout.app', ['title' => 'Aboute'])

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
        .btn{
            border-radius: 30px;
        }
        .text-5xl {
            font-size: 2rem
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
            background: rgb(0, 0, 0);
        }

        .values .a-right {
            background: linear-gradient(90deg, rgb(239 68 68) 42%, rgb(29 78 216) 84%);
            clip-path: polygon(80% 0%, 100% 50%, 80% 100%, 0% 100%, 10% 55%, 0% 0%);
        }

        .values .a-left {
            background: linear-gradient(90deg, rgb(29 78 216) 22%, rgb(239 68 68) 84%);
            clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 20% 99%, 0% 55%, 20% 0%);
        }
        @keyframes underline {
            from {
                transform: scaleX(0);
            }
            to {
                transform: scaleX(1);
            }
        }

        .section__text .card p{
            height: 130px;
        }
        .section__text .card .section_h{
            height: 50px;
        }
        aside p{
            padding: 0 20px;
        }
    </style>
@endsection

@section('content')
    <section class="hero mt-[4rem] md:mt-[5rem]">
        <img src="{{ asset('assets/images/delivery/solutions.jpg') }}" alt="" class="w-full object-center object-contain">
    </section>

    <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:my-0 w-full ">
        <div class="content-width md:flex md:items-center justify-center text-center">
            <div class="md:w-2/3  order-1 flex flex-col items-start justify-center  md:order-0 ">
                <aside class=" md:p-0">
                    <h2 class="md:text-5xl text-3xl font-bold my-5">@lang('solution.headline')</h2>
                    <h3 class="md:text-2xl text-xl font-bold my-5">@lang('solution.subheadline')</h3>
                    <p>@lang('solution.main_text')</p>
                    <p class="mt-2">@lang('solution.call_to_action') <span class="font-bold">@lang('solution.sub_call_to_action')</span></p>
                </aside>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:py-8 mt-10 px-4">

        <div class="my-5">
            <h2 class="md:text-2xl text-3xl font-semibold text-center">@lang('solution.title')</h2>
        </div>

        <div class="grid grid-cols-12 justify-center items-center gap-[2vw] mt-10">
            <div class="col-span-12 md:col-span-6 xl:col-span-3 card bg-white border border-gray-300 rounded-lg shadow-xl">
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-truck-fast mb-5 text-3xl md:text-4xl text-[#f03a40]"></i>
                    </div>
                    <a href="#">
                        <h5 class="section_h mb-2 lg:text-lg text-2xl font-bold tracking-normal uppercase text-gray-900 text-center">@lang('solution.speed')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-center py-3">@lang('solution.sub_speed')</p>
                    <a href="{{ url('/merchant') }}" class="btn inline-flex items-center w-full justify-center text-center px-5 py-3 text-md font-medium text-white bg-[#f03a40] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 xl:col-span-3 card bg-white border border-gray-300 rounded-lg shadow-xl">
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-handshake mb-5 text-[#f03a40] text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="section_h mb-2 lg:text-lg text-2xl font-bold tracking-normal uppercase text-gray-900 text-center">@lang('solution.reliability')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 text-center py-3">@lang('solution.sub_reliability')</p>
                    <a href="{{ url('/merchant') }}" class="btn inline-flex items-center w-full justify-center text-center px-5 py-3 text-md font-medium text-white bg-[#f03a40] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 xl:col-span-3 card bg-white border border-gray-300 rounded-lg shadow-xl">
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-money-bill-wave mb-5 text-[#f03a40] text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="section_h mb-2 lg:text-lg text-2xl font-bold tracking-normal uppercase text-gray-900 text-center">@lang('solution.affordability')</h5>
                    </a>
                    <p class="mb-3 h-[130px] font-normal text-gray-700 text-center py-3">@lang('solution.sub_affordability')</p>
                    <a href="{{ url('/merchant') }}" class="btn inline-flex items-center w-full justify-center text-center px-5 py-3 text-md font-medium text-white bg-[#f03a40] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 xl:col-span-3 card bg-white border border-gray-300 rounded-lg shadow-xl">
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-handshake-angle mb-5 text-[#f03a40] text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="section_h mb-2 lg:text-lg text-2xl font-bold tracking-normal uppercase text-gray-900 text-center">@lang('solution.customer_support')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700text-center py-3">@lang('solution.sub_customer_support')</p>
                    <a href="{{ url('/merchant') }}" class="btn inline-flex items-center w-full justify-center text-center px-5 py-3 text-md font-medium text-white bg-[#f03a40] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="max-w-screen-xl sm:mx-auto py-10 md:py-5 px-4 text-center">
        <a href="{{ url('/merchant') }}" class="bg-[#f03a40] py-3 px-8 text-xl rounded-full hover:bg-red-700 text-white tracking-wide hover:tracking-widest duration-500">@lang('home.sub')</a>
    </section>


    <section class="section__text taps md:mt-10 max-w-screen-xl sm:mx-auto ">
        <div class="w-full">
          <span class="text-center w-full">
            <h2 class="text-5xl mb-5" data-aos="fade-down"> Our values </h2>
          </span>
        </div>

        <div class="w-full inline-flex items-center justify-center values my-10 ">
            <ul class="">
                <li class="mt-5 flex flex-row  text-center justify-center items-center">
                    <a href="#" class="a-right mr-3 text-white" data-aos="fade-right">@lang('about.speed')</a>
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
                    <p class="text-md lg:text-xl mr-3 " data-aos="fade-right">@lang('about.sub_dedication')</p>
                    <a href="#" class="a-left text-white" data-aos="fade-left">@lang('about.dedication')</a>
                </li>
            </ul>
        </div>

        <div id="default-styled-tab-content">
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 text-3xl">we before me</h2>
                  <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900text-3xl">we before me</h2>
                  <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">

            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/04_challenge-the-status-quo__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 text-3xl">we before me</h2>
                  <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
              <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
        </div>

    </section>

@endsection
