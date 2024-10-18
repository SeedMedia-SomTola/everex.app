<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('blade_js')
    <script src="{{ asset('assets/js/changeLang.js') }}"></script>
@endsection

<style>
    ul li .new:hover {
        color: rgb(229, 107, 107);
    }

    .section_dropdown:hover {
        background: rgb(229, 107, 107);
        color: white;
    }

    @media screen and (max-width: 760px) {
        .active {
            background-color: rgb(229, 107, 107);
        }
    }

    .drawer {
        transform: translateX(100%);
        transition: transform 0.5s ease;
    }

    .drawer.open {
        transform: translateX(0);
        transition: transform 0.7s ease;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 40;
    }

    .overlay.active {
        display: block;
    }
    .nav-items{
        display: inline-block;
        position: relative;
        transition: 0.4s all ease;
    }
    .nav-items::after{
        content: ' ';
        position: absolute;
        width: 100%;
        height: 2px;
        left: 0;
        bottom:0;
        background: #ed1d25;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.5s ease-out;
    }

    .nav-items:hover::after{
        transform:scaleX(1);
        transform-origin: bottom left;
    }
    .active::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background: #ed1d25;
        transform:scaleX(1);
        transform-origin: bottom left;
    }

    .nav-link{
        transform: translateX(60%);
        visibility: hidden;
        transition: all .5s ease-in-out;
    }
    .nav-link-1{
        transform: translateX(80%);
        visibility: hidden;
        transition: all .5s ease-in-out;
    }
    .nav-link.active-nav-link, .nav-link-1.active-nav-link{
        transform: translateX(0);
        visibility: visible;
    }
</style>


<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 start-0 z-50 w-full ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 md:p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo/Logo_white.png') }}" class="h-16" alt="Flowbite Logo" />
        </a>
        <div class=" flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
            <button id="btn-1" type="button" data-dropdown-toggle="language-dropdown-menu"
                class=" inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt=""
                    style="width: 25px; margin-right: 10px">
                <span class="sr-only md:not-sr-only">English</span>
            </button>
            <button id="btn-2" type="button" data-dropdown-toggle="language-dropdown-menu-2"
                class=" hidden items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt=""
                    style="width: 25px; margin-right: 10px">
                <span class="sr-only md:not-sr-only">ភាសាខ្មែរ</span>
            </button>
            <!-- Dropdown -->
            <div class="z-50 px-4 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="{{ route('locale', 'en') }}" id="dropdown-1" onclick="langEn()"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:gray-900"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt=""
                                    style="width: 25px; margin-right: 10px">
                                English

                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('locale', 'kh') }}" onclick="langKh()" id="dropdown-2"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:gray-900"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt=""
                                    style="width: 25px; margin-right: 10px">
                                ភាសាខ្មែរ
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="z-50 px-4 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu-2">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="{{ route('locale', 'en') }}" id="dropdown-1" onclick="langEn()"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt=""
                                    style="width: 25px; margin-right: 10px">
                                English
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('locale', 'kh') }}" onclick="langKh()" id="dropdown-2"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt=""
                                    style="width: 25px; margin-right: 10px">
                                ភាសាខ្មែរ
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- mobile --}}
            <div class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <button id="drawer-toggle" class="text-black rounded-md fixed z-50">
                    <!-- Menu icon -->
                    <svg id="menu-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- X icon hidden -->
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div id="overlay" class="overlay"></div>

                <div id="drawer" class="drawer fixed top-0 right-0 h-full w-72 bg-white shadow-lg p-4 z-40">
                    <ul class="flex flex-col font-medium ">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block new p-2 w-full rounded-t-lg md:bg-transparent nav-items {{ request()->routeIs('home') ? 'text-white active':''}}"
                                aria-current="page">@lang('messages.home')</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="block new p-2 w-full rounded-t-lg text-gray-900 hover:bg-gray-100 md:hover:bg-transparent nav-items {{ request()->routeIs('about') ? 'text-white active':''}}">@lang('messages.about')</a>
                        </li>
                        <li>
                            <a href="{{ route('pricing') }}"
                                class="block new p-2 w-full rounded-t-lg text-gray-900  hover:bg-gray-100 md:hover:bg-transparent nav-items {{ request()->routeIs('pricing') ? 'text-white active':''}}">@lang('messages.pricing')</a>
                        </li>
                        <li>
                            <a href="{{ route('solution') }}"
                                class="block new p-2 w-full rounded-t-lg text-gray-900 hover:bg-gray-100 md:hover:bg-transparent nav-items {{ request()->routeIs('solution') ? 'text-white active':''}}">@lang('messages.solution')</a>
                        </li>
                        <li>
                            <a onclick="onClick()"
                                class="flex items-center p-2 rounded-t-lg justify-between w-full text-black hover:text-white nav-items {{ request()->routeIs('merchant') ? 'active text-[#ed1d25]':''}}">
                                <div class="flex items-center">
                                    <p>
                                        @lang('messages.our_partner')
                                    </p>
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </div>
                            </a>

                            <div
                                class="z-10 font-normal bg-white rounded-lg w-full">
                                <ul class="py-2 text-sm text-white-700">
                                    <li>
                                        <a href="{{ route('merchant') }}"
                                            class="block p-3 text-gray-950 nav-link font-semibold nav-items {{ request()->routeIs('merchant') ? 'active text-[#ed1d25]':''}}">@lang('messages.merchant')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('delivery') }}"
                                            class="block p-3 text-gray-950 nav-link-1 font-semibold nav-items {{ request()->routeIs('delivery') ? 'active text-[#ed1d25]':''}}">@lang('messages.delivery')</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{--laptop--}}
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}"
                        class="block new py-2 px-3 md:p-0 md:bg-transparent nav-items {{ request()->routeIs('home') ? 'active text-[#ed1d25]':''}}"
                        aria-current="page">@lang('messages.home')</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="block new py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('about') ? 'active text-[#ed1d25]':''}} nav-items">@lang('messages.about')</a>
                </li>
                <li>
                    <a href="{{ route('pricing') }}"
                        class="block new py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('pricing') ? 'active text-[#ed1d25]':''}} nav-items">@lang('messages.pricing')</a>
                </li>
                <li>
                    <a href="{{ route('solution') }}"
                        class="block new py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('solution') ? 'active text-[#ed1d25]':''}} nav-items">@lang('messages.solution')</a>
                </li>
                <li>
                    <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 md:w-auto nav-items {{ request()->routeIs('merchant') ? 'active text-[#ed1d25]':''}}">
                       <div class="flex items-center">
                           <p>
                               @lang('messages.our_partner')
                           </p>
                           <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" d="m1 1 4 4 4-4" />
                           </svg>
                       </div>
                    </a>

                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-white-700 dark:text-gray-400"
                            aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('merchant') }}"
                                    class="block section_dropdown px-4 py-2 nav-items {{ request()->routeIs('merchant') ? 'active text-[#ed1d25]':''}}">@lang('messages.merchant')</a>
                            </li>
                            <li>
                                <a href="{{ route('delivery') }}"
                                    class="block section_dropdown px-4 py-2 nav-items {{ request()->routeIs('delivery') ? 'active text-[#ed1d25]':''}}">@lang('messages.delivery')</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const drawerToggle = document.getElementById('drawer-toggle');
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    drawerToggle.addEventListener('click', () => {
        drawer.classList.toggle('open');
        overlay.classList.toggle('active');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    overlay.addEventListener('click', () => {
        drawer.classList.remove('open');
        overlay.classList.remove('active');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    });

    $(document).ready(function() {
        $("ul li a").click(function() {
            $("li a").removeClass("active");
            $(this).addClass("active");
        });
    });

    function onClick(){
        document.querySelector('.nav-link').classList.add('active-nav-link');
        document.querySelector('.nav-link-1').classList.add('active-nav-link');
    }
</script>
