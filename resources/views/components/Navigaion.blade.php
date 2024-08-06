@section('blade_js')
    <script src="{{ asset('assets/js/changeLang.js') }}"></script>
@endsection


<nav  class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 start-0 z-50 w-full ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/images/logo/Logo_white.png') }}" class="h-8" alt="Flowbite Logo" />
    </a>
    <div class=" flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
        <button id="btn-1" type="button" data-dropdown-toggle="language-dropdown-menu" class=" inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
          <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
          <span class="sr-only md:not-sr-only">English</span>
        </button>
        <button id="btn-2" type="button" data-dropdown-toggle="language-dropdown-menu-2" class=" hidden items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
          <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
          <span class="sr-only md:not-sr-only">ភាសាខ្មែរ</span>
        </button>
        <!-- Dropdown -->
        <div class="z-50 px-4 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
          <ul class="py-2 font-medium" role="none">
            <li>
              <a href="{{ route('locale','en') }}" id="dropdown-1" onclick="langEn()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:gray-900" role="menuitem">
                <div class="inline-flex items-center">
                  <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
                  English

                </div>
              </a>
            </li>
            <li>
              <a href="{{ route('locale','kh') }}" onclick="langKh()" id="dropdown-2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:gray-900" role="menuitem">
                <div class="inline-flex items-center">
                  <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
                  ភាសាខ្មែរ
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="z-50 px-4 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu-2">
          <ul class="py-2 font-medium" role="none">
            <li>
              <a href="{{ route('locale','en') }}" id="dropdown-1" onclick="langEn()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <img src="{{ asset('assets/images/flag/en-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
                  English
                </div>
              </a>
            </li>
            <li>
              <a href="{{ route('locale','kh') }}" onclick="langKh()" id="dropdown-2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <img src="{{ asset('assets/images/flag/kh-flag.png') }}" alt="" style="width: 25px; margin-right: 10px" >
                  ភាសាខ្មែរ
                </div>
              </a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ url('/') }}" class="block py-2 px-3 bg-blue-500 rounded md:p-0 md:bg-transparent md:hover:text-red-700 dark:text-white md:dark:hover:text-red-500" aria-current="page">@lang('messages.home')</a>
            </li>
            <li>
                <a href="{{ url('/about') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.about')</a>
            </li>
            {{-- <li>
                <a href="{{ url('/news') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.news')</a>
            </li> --}}
            <li>
                <a href="{{ url('/pricing') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.pricing')</a>
            </li>
            <li>
                <a href="{{ url('/solution') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">@lang('messages.solution')</a>
            </li>
            <li>
                <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-red-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">@lang('messages.our_partner') <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </a>

                <div id="dropdownNavbar" class="z-10 hidden  font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-white-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{ url('/merchant') }}" class="block px-4 py-2 hover:bg-red-700 hover:text-white">@lang('messages.merchant')</a>
                    </li>
                    <li>
                        <a href="{{ url('/delivery') }}" class="block px-4 py-2 hover:bg-red-700 hover:text-white">@lang('messages.delivery')</a>
                    </li>

                </div>
            </li>
        </ul>
    </div>
    </div>
  </nav>
