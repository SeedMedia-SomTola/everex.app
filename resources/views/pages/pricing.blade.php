@extends('layout.app', ['title' => 'News'])

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/pricing.css') }}">
@endsection
@section('blade_js')
    <script src="{{ asset('assets/js/princing.js') }}"></script>
@endsection

@section('content')
    <section data-aos="fade-up" class="section__text pricing px-4 md:px-0 pt-400" id="pricing" x-data="{ annual: false, month: '/@lang('pricing.month')', year: '/@lang('pricing.year')', open: false, open_1: false, open_2: false, open_3: false }">
        <div class="container">
            <h2 class="title text-red-700">@lang('pricing.title')</h2>
            <p class="description">
                @lang('pricing.des')
            </p>
            <div class="switch">
                <span class="chech-text-month">
                    @lang('pricing.monthly')
                </span>
                <input type="checkbox" id="switch" x-model="annual" />
                <label for="switch" class="border border-gray-300">Toggle</label>
                <span class="chech-text-month">
                    @lang('pricing.annualy')
                </span>
            </div>
        </div>


        <section data-aos="fade-up" class="my-4">
            <div class="grid grid-cols-12 max-w-screen-xl mx-auto md:px-4 justify-center items-center gap-4">
                <div class="col-span-12 md:col-span-6 xl:col-span-3 w-full h-[45rem] p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                    <h5 class="mb-4 text-xl font-medium text-red-500 ">Free</h5>
                    <div class="flex items-baseline text-gray-900">
                        <span class="text-2xl font-semibold text-red-700">$</span>
                        <span class="text-3xl font-extrabold tracking-tight text-red-700"
                            x-text="annual ? '0.00' : '0.00'">0.00</span>
                        <span class="ms-1 text-xl font-normal text-gray-500"
                            x-text="annual ? year : month">/@lang('pricing.month')</span>
                    </div>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-200  font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center my-2">Choose
                        plan
                    </button>

                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.price_free')</span>
                            <span class="mx-2 cursor-pointer" data-tooltip-target="tooltip-default-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24"
                                    fill="currentColor">
                                    <path
                                        d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                    </path>
                                </svg>

                                <div id="tooltip-default-1" role="tooltip"
                                    class="absolute z-10 p-1 invisible inline-block text-sm font-medium text-white transition-opacity duration-300 bg-red-500 rounded-lg shadow-sm opacity-0 tooltip">

                                    <div class="relative overflow-x-auto">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 *:text-red-500">
                                            <thead
                                                class="text-xs border-b uppercase bg-gray-50">
                                                <tr class=''>
                                                    <th scope="col" class="px-6 py-3 text-md md:text-lg">
                                                        Size
                                                    </th>
                                                    <th scope="col"
                                                        class="px-2 md:px-6 py-3 text-md md:text-lg text-center">
                                                        1 - 10
                                                    </th>
                                                    <th scope="col"
                                                        class="px-2  md:px-6 py-3 text-md md:text-lg text-center">
                                                        10 - 30
                                                    </th>
                                                    <th scope="col"
                                                        class="px-2 md:px-6 py-3 text-md md:text-lg text-center">
                                                        30 +
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-4 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Startdard Size
                                                        <p>(up to 5kg)</p>
                                                        <p>(25x25x25cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        5000៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4500៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4000៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-4 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Large Size
                                                        <p>(up to 10kg)</p>
                                                        <p>(45x45x45cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        7000៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6500៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6000៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Extra Large Size
                                                        <p>(up to 20kg)</p>
                                                        <p>(60x60x60cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        9000៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8500៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8000៛
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>

                            </span>

                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_2')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_3')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_4')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_5')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_6')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_7')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_8')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_9')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_10')</span>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-6 xl:col-span-3 w-full h-[45rem] p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-red-500 ">Basic</h5>
                    <div class="flex items-baseline text-gray-900 ">
                        <span class="text-2xl font-semibold text-red-700">$</span>
                        <span class="text-3xl font-extrabold tracking-tight text-red-700"
                            x-text="annual ? '399' :
                      '39.00'">
                            39.00</span>
                        <span class="ms-1 text-xl font-normal text-gray-500 "
                            x-text="annual ? year : month">/month</span>
                    </div>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center my-2">Choose
                        plan
                    </button>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.price_basic')</span>
                            <span class="mx-2 cursor-pointer" data-tooltip-target="tooltip-default-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24"
                                    fill="currentColor">
                                    <path
                                        d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                    </path>
                                </svg>
                                <div id="tooltip-default-2" role="tooltip"
                                    class="absolute z-10 invisible inline-block p-1 text-sm font-medium text-white transition-opacity duration-300 bg-red-500 rounded-lg shadow-sm opacity-0 tooltip">

                                    <div class="relative overflow-x-auto">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 *:text-red-500">
                                            <thead
                                                class="text-xs border-b uppercase bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-md font-bold md:text-lg">
                                                        Size
                                                    </th>
                                                    <th scope="col"
                                                        class="px-4 md:px-6 py-3 text-center text-md font-bold md:text-lg">
                                                        1 - 30
                                                    </th>
                                                    <th scope="col"
                                                        class="px-4 md:px-6 py-3 text-center text-md font-bold md:text-lg">
                                                        30 +
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b ">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-red-500 whitespace-nowrap">
                                                        Startdard Size
                                                        <p>(up to 5kg)</p>
                                                        <p>(25x25x25cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        3000 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4000 ៛
                                                    </td>

                                                </tr>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap ">
                                                        Large Size
                                                        <p>(up to 10kg)</p>
                                                        <p>(45x45x45cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8000 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6000 ៛
                                                    </td>

                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Extra Large Size
                                                        <p>(up to 20kg)</p>
                                                        <p>(60x60x60cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        7000 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8000 ៛
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_2')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_3')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_4')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_5')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_6')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_7')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_8')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_9')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_10')</span>
                        </li>
                    </ul>

                </div>
                <div class="col-span-12 md:col-span-6 xl:col-span-3 w-full h-[45rem] p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-red-500 ">Standard</h5>
                    <div class="flex items-baseline text-gray-900 ">
                        <span class="text-2xl font-semibold text-red-700">$</span>
                        <span class="text-3xl font-extrabold tracking-tight text-red-700"
                            x-text="annual ? '699' :
                      '69.00'">
                            69.00</span>
                        <span class="ms-1 text-xl font-normal text-gray-500 "
                            x-text="annual ? year : month">/month</span>
                    </div>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center my-2">Choose
                        plan
                    </button>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.price_standard')</span>
                            <span class="mx-2 cursor-pointer" data-tooltip-target="tooltip-default-3"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24"
                                    fill="currentColor">
                                    <path
                                        d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                    </path>
                                </svg>
                                <div id="tooltip-default-3" role="tooltip"
                                    class="absolute z-10 invisible inline-block p-1 text-sm font-medium text-white transition-opacity duration-300 bg-red-500 rounded-lg shadow-sm opacity-0 tooltip ">

                                    <div class="relative overflow-x-auto">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 *:text-red-500 border border-red-500">
                                            <thead
                                                class="text-xs border-b uppercase bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-md font-bold md:text-lg">
                                                        Size
                                                    </th>
                                                    <th scope="col"
                                                        class="px-4 md:px-6 py-3 text-md font-bold md:text-lg">
                                                        1 - 30
                                                    </th>
                                                    <th scope="col"
                                                        class="px-4 md:px-6 py-3 text-md font-bold md:text-lg">
                                                        30 +
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Startdard Size
                                                        <p>(up to 5kg)</p>
                                                        <p>(25x25x25cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        2500 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4000 ៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Large Size
                                                        <p>(up to 10kg)</p>
                                                        <p>(45x45x45cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4500 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6000 ៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Extra Large Size
                                                        <p>(up to 20kg)</p>
                                                        <p>(60x60x60cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6500 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8000 ៛
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500  ms-3">@lang('pricing.b_2')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_3')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500  ms-3">@lang('pricing.b_4')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_5')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_6')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_7')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_8')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_9')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_10')</span>
                        </li>
                    </ul>

                </div>
                <div class="col-span-12 md:col-span-6 xl:col-span-3 w-full h-[45rem] p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                    <h5 class="mb-4 text-xl font-medium text-red-500 ">Premium</h5>
                    <div class="flex items-baseline text-gray-900">
                        <span class="text-2xl font-semibold text-red-700">$</span>
                        <span class="text-3xl font-extrabold tracking-tight text-red-700"
                            x-text="annual ? '999' :
                      '99.00'">
                            99.00</span>
                        <span class="ms-1 text-xl font-normal text-gray-500"
                            x-text="annual ? year : month">/month</span>
                    </div>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-200  font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center my-2">Choose
                        plan
                    </button>
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.price_premium')</span>
                            <span class="mx-2 cursor-pointer" data-tooltip-target="tooltip-default-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24"
                                    fill="currentColor">
                                    <path
                                        d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                    </path>
                                </svg>
                                <div id="tooltip-default-4" role="tooltip"
                                    class="absolute z-10 p-1 invisible inline-block text-sm font-medium text-white transition-opacity duration-300 bg-red-500 rounded-lg shadow-sm opacity-0 tooltip">

                                    <div class="relative overflow-x-auto">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 *:text-red-500 ">
                                            <thead
                                                class="text-xs border-b uppercase bg-gray-50 ">
                                                <tr class=''>
                                                    <th scope="col" class="px-6 py-3 text-md md:text-lg">
                                                        Size
                                                    </th>
                                                    <th scope="col" class="px-2  md:px-6 text-center py-3 text-md md:text-lg">
                                                        1 - 30
                                                    </th>
                                                    <th scope="col" class="px-2 md:px-6 text-center py-3 text-md md:text-lg">
                                                        30 +
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b ">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap ">
                                                        Startdard Size
                                                        <p>(up to 5kg)</p>
                                                        <p>(25x25x25cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        1900 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        4000 ៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Large Size
                                                        <p>(up to 10kg)</p>
                                                        <p>(45x45x45cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        2900 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        6000 ៛
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-center text-red-500 whitespace-nowrap">
                                                        Extra Size
                                                        <p>(up to 20kg)</p>
                                                        <p>(60x60x60cm)</p>
                                                    </th>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        3900 ៛
                                                    </td>
                                                    <td class="px-4 md:px-6 py-4 text-center">
                                                        8000 ៛
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_2')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_3')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_4')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_5')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_6')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_7')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_8')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_9')</span>
                        </li>
                        <li class="flex">
                            <svg class="flex-shrink-0 w-4 h-4 text-red-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">@lang('pricing.b_10')</span>
                        </li>
                    </ul>


                </div>
            </div>
        </section>
    </section>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{url('assets/images/delivery/content_1.jpg')}}" alt="" class="w-full h-full object-center object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/delivery/content_2.jpg')}}" alt="" class="w-full h-full object-center object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/delivery/content_3.jpg')}}" alt="" class="w-full h-full object-center object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('assets/images/delivery/content_4.jpg')}}" alt="" class="w-full h-full object-center object-cover">
                </div>
            </div>
        </div>
    </section>
@endsection
