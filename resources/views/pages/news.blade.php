@extends('layout.app', ['title' => 'News'])

@section('blade_css')
    <style>
        .tex-pb-10{
            padding-bottom: 10px
        }
        .taps{
      max-width: 1000px;
    }
    .taps-news li button{
      border: 2px solid #be1c25;
      border-radius: 30px;
      font-size: 1.1rem;
      font-weight: bold
    }
    .taps-news .d-flex{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;

    }
    @media screen and (max-width: 450px) {
    .about_top{
        margin-top: 100px
        /* font-size: 71px; */
    
    }
  }
    </style>
@endsection
@section('blade_js')
    <script>
        AOS.init();
    </script>
@endsection
@section('content')
    <section class="section__text about_top news-release max-w-screen-xl mx-auto md:py-8 my-10 px-4">
        <h1  class=" mb-8 mt-12 text-5xl font-bold">
            Newsroom
        </h1>

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="mr-8" role="presentation ">
                    <button class="tex-pb-10 font-bold text-lg inline-block p-0 border-b-2 rounded-t-lg focus:text-red-700 focus:border-red-900 " >Press Release</button>
                </li>
                <li class="mr-8" role="presentation ">
                    <button class="tex-pb-10 font-bold text-lg inline-block p-0 border-b-2 rounded-t-lg focus:text-red-700 focus:border-red-900 " >Editorial</button>
                </li>
                <li class="mr-8" role="presentation ">
                    <button class="tex-pb-10 font-bold text-lg inline-block p-0 border-b-2 rounded-t-lg focus:text-red-700 focus:border-red-900 " >Ifographics</button>
                </li>

               
            </ul>
        </div>


    </section>

    <section class=" about-carousel max-w-screen-xl sm:mx-auto md:py-8 md:my-10 lg:px-4 px-4">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative overflow-hidden rounded-lg md:h-auto min-h-96">
               <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#" class="absolute block w-full grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                  <div class=" md:px-0 md:order-none lg:order-none order-2">
                      <h2 class="mb-2  md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">Noteworthy technology acquisitions 2021</h2>
                      <p class="md:my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                  </div>
                  <img class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg md:h-96 h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
                </a>
                  {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
              </div>
              
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#" class="absolute block w-full grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                  <div class=" md:px-0 md:order-none lg:order-none order-2">
                      <h2 class="mb-2  md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">Noteworthy technology acquisitions 2021</h2>
                      <p class="md:my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                  </div>
                  <img class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg md:h-96 h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
                </a>
                  {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
              </div>
              
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="#" class="absolute block w-full grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                  <div class=" md:px-0 md:order-none lg:order-none order-2">
                      <h2 class="mb-2  md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">Noteworthy technology acquisitions 2021</h2>
                      <p class="md:my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
                  </div>
                  <img class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg md:h-96 h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
                </a>
                  {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
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
          <button type="button" class="absolute top-30 md:top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-30 md:top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>
      </section>
    </section>

    <section class="section__text px-4 taps-news max-w-screen-xl mx-auto md:py-8 my-10 md:flex justify-between content-width pt-8 md:pt-0 mt-8 md:mt-16 ">
        
        <h3 class="md:mb-0 mb-6 text-3xl font-bold">Discover latest news</h3>

        <div class="mb-4 dark:border-gray-700 ">
            <ul class="mb-px text-sm font-medium">
                <li class="me-2 mb-4 inline-block" role="presentation">
                    <button class=" text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 uppercase" >all</button>
                </li>
                <li class="me-2 mb-4  inline-block" role="presentation">
                    <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 uppercase" >business</button>
                </li>
                <li class="me-2 mb-4 inline-block" role="presentation">
                    <button class=" text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 uppercase" >campaigns</button>
                </li>
                <li class="me-2 mb-4  inline-block" role="presentation">
                    <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 uppercase" >+more</button>
                </li>
            </ul>
        </div>

    </section>

    <section class="section__text card-news max-w-screen-xl mx-auto md:py-8 my-10 px-4">
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
            <div class="max-w-full dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="rounded-t-lg" src="https://www.foodpanda.com/wp-content/uploads/2024/05/042A4061-scaled.jpg" alt="" />
                </div>
                <div class="py-5 pl-0 ">
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Business</a>
                    <a href="" class="text-red-700 uppercase text-sm font-bold mr-4 text-primary-500">Editorials</a>
                    <a href="#">
                        <h5 class="py-4 w-5/6 mb-2 md:text-xl font-bold tracking-tight text-gray-900 dark:text-white">How foodpanda CFO Jamie O’Mahony is Navigating 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">17 Jan 2024</p>
                    
                </div>
            </div>
        </div>

       

    </section>

    <section class="section__text px-4 max-w-screen-xl mx-auto md:py-8 my-10 cards-grid-section newsroom-content bg-grey-200 ">
        <div class="section__cards-grid__content w-full relative">
            <div class="section__cards-grid__content__items grid auto-rows-max md:my-8 my-4 grid-cols-1 gap-4 md:gap-8 md:gap-y-12 sm:grid-cols-2 xl:grid-cols-3">
                <ul class="card-item card-item--icon text-left h-full flex flex-col ">
                    <figure class="h-24 pt-4">
                        <img src="https://www.foodpanda.com/wp-content/uploads/2024/04/foodpanda-newsroom-downloads.svg" alt="">
                    </figure>
                    <div class="grow mt-4 md:mt-8 flex flex-col justify-between">
                        <h3 class="text-red-700 text-2xl font-bold">Media Kit</h3>
                        <p class="my-8">Download images, factsheets, and more</p>
                    </div>
                    <div>
                        <a href="" class="text-red-700 font-bold">Download</a>
                    </div>
                </ul>
                <ul class="card-item card-item--icon text-left h-full flex flex-col ">
                    <figure class="h-24 pt-4">
                        <img src="https://www.foodpanda.com/wp-content/uploads/2024/04/foodpanda-newsroom-downloads.svg" alt="">
                    </figure>
                    <div class="grow mt-4 md:mt-8 flex flex-col justify-between">
                        <h3 class="text-red-700 text-2xl font-bold">Contact us</h3>
                        <p class="my-8">Get in touch with our PR team</p>
                    </div>
                    <div>
                        <a href="" class="text-red-700 font-bold">Contact us</a>
                    </div>
                </ul>
            </div>
        </div>
    </section>

@endsection
