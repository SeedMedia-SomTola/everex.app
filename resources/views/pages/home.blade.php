@extends('layout.app')
@section('blade_css')
@endsection

@section('content')
  <section class="hero">
    <video class="w-full" autoplay muted loop>
      <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4" >
    </video>
    <div class="title">
      <div class="" data-aos="fade-right">
        <h2 class="md:text-5xl md:leading-relaxed text-xl leading-normal">@lang('home.title') <br>
            @lang('home.sub_title') </h2>
        </div>
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

  <section class="section__text m-section card max-w-screen-xl sm:mx-auto md:px-0">
    <div class="sm:mx-4 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
      <img data-aos="fade-right" class="object-cover w-full rounded-t-lg h-96 md:h-auto" src="https://www.foodpanda.com/wp-content/uploads/2023/02/fp-home.jpg" alt="">
      <div data-aos="fade-left" class="">
          <h2 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white md:text-5xl text-3xl">@lang('home.title_one')</h2>
          <p class="my-6 font-normal text-gray-700 dark:text-gray-400">@lang('home.sub_title_one')</p>
          <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
      </div>
    </div>
  </section>

  <section class="section__text m-section card max-w-screen-xl sm:mx-auto md:py-8 my-10 md:px-0">
    <div class="sm:mx-4 grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
      <div class="md:order-none lg:order-none order-2" data-aos="fade-right">
          <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white text-3xl">@lang('home.title_two')</h2>
          <p class="my-6 font-normal text-gray-700 dark:text-gray-400">@lang('home.sub_title_two')</p>
          <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
      </div>
      <img data-aos="fade-left" class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg h-96 md:h-auto" src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
    </div>
  </section>

  <section class="section__text m-section card max-w-screen-xl sm:mx-auto md:py-8 md:px-4 md:px-0">
    <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
      <img data-aos="fade-right" class=" object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/04/jason-goodman-Oalh2MojUuk-unsplash-1024x683.jpg" alt="">
      <div class=" " data-aos="fade-left">
          <h2 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white md:text-5xl text-3xl">@lang('home.title_three')</h2>
          <p class="my-6 font-normal text-gray-700 dark:text-gray-400">@lang('home.sub_title_three')</p>
          <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
      </div>
    </div>
  </section>

  <section class="section__text carousel mt-6">


    <div id="default-carousel" class="relative " data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden md:h-96 grid grid-cols-1 gap-6 sm:grid-cols-3">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="https://www.foodpanda.com/wp-content/uploads/2024/06/Meal-For-One-1280-x-1080.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="https://www.foodpanda.com/wp-content/uploads/2024/05/%E6%83%A0%E5%BA%B7%E5%8F%8AMarket-Place%E5%BC%B7%E5%8B%A2%E5%8A%A0%E7%9B%9Ffoodpanda-%E9%A6%99%E6%B8%AF%E5%A4%96%E9%80%81%E5%B9%B3%E5%8F%B0%EF%BC%8C%EF%BC%88%E5%B7%A6%EF%BC%89DFI%E9%9B%B6%E5%94%AE%E9%9B%86%E5%9C%98%E9%9B%B6%E5%94%AE%E9%A3%9F%E5%93%81%EF%BC%88%E9%A6%99%E6%B8%AF%E5%8F%8A%E6%BE%B3%E9%96%80%EF%BC%89%E5%B8%B8%E5%8B%99%E8%91%A3%E4%BA%8B%E9%99%B3%E5%BB%BA%E9%BA%9F%E3%80%81%EF%BC%88%E5%8F%B3%EF%BC%89foodpanda-%E9%A6%99%E6%B8%AF%E8%A1%8C%E6%94%BF%E7%B8%BD%E8%A3%81%E8%B3%B4%E5%81%89%E6%98%95-1-900x674.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="https://www.foodpanda.com/wp-content/uploads/2024/05/EDW_0192-scaled.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="https://www.foodpanda.com/wp-content/uploads/2024/05/item-replacement-900x506.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="https://www.foodpanda.com/wp-content/uploads/2024/05/website_banner_1440x480px.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>

  </section>


  <section class="section__text m-section card max-w-screen-xl sm:mx-auto md:py-12 my-10 md:px-4 md:px-0">
    <a class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
      <div class="" data-aos="fade-right">
          <h2 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white md:text-5xl text-3xl">@lang('home.title_four')</h2>
          <p class="my-6 font-normal text-gray-700 dark:text-gray-400">@lang('home.sub_title_four')</p>
          <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
      </div>
      <img data-aos="fade-left" class="object-cover w-full rounded-t-lg h-96 md:h-auto " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-3.jpg" alt="">
    </a>
  </section>


@endsection
