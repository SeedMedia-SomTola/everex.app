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
            /* background: rgb(210,0,19); */
            background: linear-gradient(90deg, rgb(239 68 68) 42%, rgb(29 78 216) 84%);
            clip-path: polygon(80% 0%, 100% 50%, 80% 100%, 0% 100%, 10% 55%, 0% 0%);
        }

        .values .a-left {
            /* background: rgb(210,0,19); */
            background: linear-gradient(90deg, rgb(29 78 216) 22%, rgb(239 68 68) 84%);
            clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 20% 99%, 0% 55%, 20% 0%);
        }
    </style>
@endsection

@section('content')
    <section class="hero section__text">
        <img src="{{ asset('assets/images/delivery/solutions.jpg') }}" alt="">
        <div class="title">
            <div class="section__text" data-aos="fade-right">
                <h2 class="leading-normal text-3xl md:text-5xl">Solutions <br>
                    Everex Express</h2>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:py-8 md:pt-8 md:my-0 w-full ">
        <div class="content-width md:py-16 md:flex md:items-center justify-center text-center">
            <div
                class="md:w-2/3 md:pr-8 lg:pr-16 mt-8 md:mt-0 order-1 flex flex-col items-start justify-center  md:order-0 ">
                <aside class=" p-4 md:p-0">
                    <h2 class="md:text-5xl text-3xl font-bold md:my-12 my-8">@lang('solution.headline')</h2>
                    <h3 class="md:text-2xl text-xl font-bold md:my-5 my-3">@lang('solution.subheadline')</h3>
                    <p>@lang('solution.main_text')</p>
                    <p class="mt-2">@lang('solution.call_to_action') <span class="font-bold">@lang('solution.sub_call_to_action')</span></p>
                </aside>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:py-8 my-10 px-4">

        <div class="">
            <h2 class="md:text-2xl text-3xl font-semibold text-center">@lang('solution.title')</h2>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 mt-10">
            <div class="max-w-md mx-auto bg-white border border-gray-300 rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-truck-fast mb-5 text-3xl md:text-4xl text-red-500"></i>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-normal uppercase text-gray-900 dark:text-white text-center">@lang('solution.speed')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center py-3">@lang('solution.sub_speed')</p>
                    <a href="#" class="inline-flex items-center justify-center w-full text-center px-5 py-3 text-md font-medium text-white bg-blue-700 rounded-3xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm mx-auto bg-white border border-gray-300 rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-handshake mb-5 text-red-500 text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-normal uppercase text-gray-900 dark:text-white text-center">@lang('solution.reliability')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center py-3">@lang('solution.sub_reliability')</p>
                    <a href="#" class="inline-flex items-center justify-center w-full text-center px-5 py-3 text-md font-medium text-white bg-blue-700 rounded-3xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('solution.get_start')

                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm mx-auto bg-white border border-gray-300 rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-money-bill-wave mb-5 text-red-500 text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-normal uppercase text-gray-900 dark:text-white text-center">@lang('solution.affordability')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center py-3">@lang('solution.sub_affordability')</p>
                    <a href="#" class="inline-flex items-center justify-center w-full text-center px-5 py-3 text-md font-medium text-white bg-blue-700 rounded-3xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm mx-auto bg-white border border-gray-300 rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <div class="text-center">
                        <i class="fa-solid fa-handshake-angle mb-5 text-red-500 text-3xl md:text-4xl"></i>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-normal uppercase text-gray-900 dark:text-white text-center">@lang('solution.customer_support')</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center py-3">@lang('solution.sub_customer_support')</p>
                    <a href="#" class="inline-flex items-center justify-center w-full text-center px-5 py-3 text-md font-medium text-white bg-blue-700 rounded-3xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @lang('solution.get_start')
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:py-8 my-10">
        <div class="content-width md:py-1 md:flex md:items-center justify-center text-center">
            <div
                class="md:w-2/3 md:pr-8 lg:pr-16 mt-8 md:mt-0 order-1 flex flex-col items-start justify-center  md:order-0 ">
                <aside class=" p-4 md:p-0">
                    <h2 class="text-5xl font-bold my-12">Our Service.</h2>
                    <p>A subsidiary of Delivery Hero, foodpanda launched in Singapore in 2014 as a food delivery platform.
                        Dedicated to helping customers get their tasty favourites fast, it quickly won the hearts and minds
                        of customers in APAC.</p>
                </aside>
            </div>
        </div>
    </section>


    {{-- <section data-aos="fade-up" class="section__text max-w-screen-xl sm:mx-auto md:py-8 lg:px-4 ">
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 px-4 md:px-0">

          <div
              class="max-w-sm bg-white  dark:bg-red-700 dark:border-gray-700 ">
              <div class="relative mb-6 sm:mb-0">
                <div class="mt-3 ">

                    <ol class="space-y-4 w-full">
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">User info</span>
                                    <h3 class="font-medium">1. User info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Account info</span>
                                    <h3 class="font-medium">2. Account info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Social accounts</span>
                                    <h3 class="font-medium">3. Social accounts</h3>
                                    <svg class="rtl:rotate-180 w-4 h-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Review</span>
                                    <h3 class="font-medium">4. Review</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Confirmation</span>
                                    <h3 class="font-medium">5. Confirmation</h3>
                                </div>
                            </div>
                        </li>
                    </ol>

                </div>
            </div>
          </div>

          <div
              class="max-w-sm bg-white  dark:bg-red-700 dark:border-gray-700 ">
              <div class="relative mb-6 sm:mb-0">
                <div class="mt-3 ">

                    <ol class="space-y-4 w-full">
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">User info</span>
                                    <h3 class="font-medium">1. User info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Account info</span>
                                    <h3 class="font-medium">2. Account info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Social accounts</span>
                                    <h3 class="font-medium">3. Social accounts</h3>
                                    <svg class="rtl:rotate-180 w-4 h-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Review</span>
                                    <h3 class="font-medium">4. Review</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Confirmation</span>
                                    <h3 class="font-medium">5. Confirmation</h3>
                                </div>
                            </div>
                        </li>
                    </ol>

                </div>
            </div>
          </div>

          <div
              class="max-w-sm bg-white  dark:bg-red-700 dark:border-gray-700 ">
              <div class="relative mb-6 sm:mb-0">
                <div class="mt-3 ">

                    <ol class="space-y-4 w-full">
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">User info</span>
                                    <h3 class="font-medium">1. User info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Account info</span>
                                    <h3 class="font-medium">2. Account info</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-blue-700 bg-blue-100 border border-blue-300 rounded-lg dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Social accounts</span>
                                    <h3 class="font-medium">3. Social accounts</h3>
                                    <svg class="rtl:rotate-180 w-4 h-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Review</span>
                                    <h3 class="font-medium">4. Review</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-full p-4 text-gray-900 bg-gray-100 border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <span class="sr-only">Confirmation</span>
                                    <h3 class="font-medium">5. Confirmation</h3>
                                </div>
                            </div>
                        </li>
                    </ol>

                </div>
            </div>
          </div>




      </div>

  </section> --}}

    <section data-aos="fade-up" class="section__text about-carousel max-w-screen-xl sm:mx-auto md:py-8 my-10 lg:px-4">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div >
                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h2>
                            <p class="my-6 font-normal text-gray-700 dark:text-gray-400 hidden md:grid">What makes quick commerce quick?
                                We
                                stand for swift personalised delivery solutions for our customers, partners and employees.
                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                        </div>
                        <img  class="object-cover w-full rounded-t-lg h-96 md:h-auto  "
                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"
                            alt="">
                    </a>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div>
                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h2>
                            <p class="my-6 font-normal text-gray-700 dark:text-gray-400 hidden md:grid">What makes quick commerce quick?
                                We
                                stand for swift personalised delivery solutions for our customers, partners and employees.
                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                        </div>
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "
                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"
                            alt="">
                    </a>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div>
                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h2>
                            <p class="my-6 font-normal text-gray-700 dark:text-gray-400 hidden md:grid">What makes quick commerce quick?
                                We
                                stand for swift personalised delivery solutions for our customers, partners and employees.
                                Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                        </div>
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "
                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"
                            alt="">
                    </a>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div>
                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h2>
                            <p class="my-6 font-normal text-gray-700 dark:text-gray-400 hidden md:grid">What makes quick commerce quick?
                                We stand for swift personalised delivery solutions for our customers, partners and
                                employees. Learn how we empower authentic lifestyles and drive innovation across the globe.
                            </p>
                        </div>
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "
                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"
                            alt="">
                    </a>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div>
                            <h2 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h2>
                            <p class="my-6 font-normal text-gray-700 dark:text-gray-400 hidden md:grid">What makes quick commerce quick?
                                We stand for swift personalised delivery solutions for our customers, partners and
                                employees. Learn how we empower authentic lifestyles and drive innovation across the globe.
                            </p>
                        </div>
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  "
                            src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg"
                            alt="">
                    </a>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <section class="section__text taps md:mt-16 max-w-screen-xl sm:mx-auto md:py-6 ">
        <div class="w-full">
          <span class="text-center w-full">
            <h2 class="text-5xl my-10 mb-12" data-aos="fade-down"> Our values </h2>
          </span>
        </div>

        <div class="w-full inline-flex items-center justify-center values">
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
          {{-- <ul class="d-flex mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
              <li class="me-2 mb-4" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 " id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">start with customer, end with customer</button>
              </li>
              <li class="me-2 mb-4" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">prioritise, decide, deliver</button>
              </li>
              <li class="me-2 mb-4" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">own it end-to-end</button>
              </li>
              <li class="me-2 mb-4" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">challenge the status quo</button>
              </li>
              <li class="me-2 mb-5" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">we before me</button>
              </li>
              <li class="me-2 mb-5" role="presentation">
                  <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">plan for tomorrow, focus on today</button>
              </li>
          </ul> --}}
        </div>

        <div id="default-styled-tab-content">
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">we before me</h2>
                  <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white text-3xl">we before me</h2>
                  <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">

            <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/04_challenge-the-status-quo__500x500.webp" alt="">
              <div class="flex items-center">
                <div>
                  <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">we before me</h2>
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



    <section class="section__text card max-w-screen-xl sm:mx-auto md:py-12 px-4 md:px-0 my-10 lg:px-4">
        <a class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <div class=" "data-aos="fade-right">
              <h2 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white md:text-5xl text-3xl">Noteworthy technology acquisitions 2021</h2>
              <p class="my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
              <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
          </div>
          <img data-aos="fade-left" class=" object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-3.jpg" alt="">
        </a>
      </section>
@endsection
