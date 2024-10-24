@extends('layout.app')

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchant.css') }}">
    <style>
        .wrapper {
            min-height: 98vh;
            margin-top: 60px;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
        }
        /* .section_wrapper{
            padding: 10px 0;
        } */
    </style>
@endsection
@section('content')
    <section class="w-full mx-auto section_wrapper bg-[#db4848] py-[10rem] px-[2rem]">
{{--		<div class="wrapper p-3" style="background-image: url({{ asset('assets/images/merchant/bg-registration-form-1.jpg') }});">--}}
			<div class="inner p-[2rem] max-sm:flex-wrap justify-center items-center">
				<div class="w-full max-w-[24rem] mx-auto overflow-x-hidden md:mr-[2rem]">
					<img src="{{ asset('assets/images/merchant/registration-form-1.jpg') }}" alt="" class="w-full mx-auto object-contain object-center rounded-2xl">
                    <div class="flex gap-4">
                        <a href="https://t.me/everexexpress" class="w-full text-center max-w-sm mx-auto px-3 py-2 bg-[#dd0000] mt-5 rounded-2xl text-white">Telegram</a>
                        <a href="tel:+855 11 900 618" class="w-full text-center max-w-sm mx-auto px-3 py-2 bg-[#dd0000] mt-5 rounded-2xl text-white">Call</a>
                    </div>
				</div>
				<form method="POST" action="{{ route('mercharts.register') }}">
                    @csrf
					<h3 class="text-white text-[16px] lg:text-[24px] text-center text-wrap my-5 md:mb-5 ">@lang('messages.merchant')</h3>
                    @component('components.alert')
                    @endcomponent

                    <div class="grid grid-cols-12 justify-center items-center gap-[1vw]">
                        <div class="col-span-6 text-white">
                            <input type="text" placeholder="@lang('register.first_name')" name="first_name" id="first_name" value="{{ old('first_name') }}" autofocus
                            class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0"
                            >
                        </div>
                        <div class="col-span-6">
                            <input type="text" placeholder="@lang('register.last_name')" name="last_name" id="last_name"  value="{{ old('last_name') }}" autocomplete="off"
                            class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0"
                            >
                        </div>
                        <div class="col-span-12">
                            <select name="gender" id="gender" class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0" >
                                <option value="" disabled selected>@lang('register.gender')</option>
                                <option value="male">@lang('register.male')</option>
                                <option value="female">@lang('register.female')</option>
                                <option value="other">@lang('register.other')</option>
                            </select>
                        </div>
                        <div class="col-span-12">
                            <input type="text" placeholder="@lang('register.type_of_product')" class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0" name="type_of_product" id="type_of_product" value="{{ old('type_of_product') }}" autocomplete="off">
                        </div>
                        <div class="col-span-12">
                            <input type="text" placeholder="@lang('register.average')" class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0" name="avg_percel_day" id="avg_percel_day" value="{{ old('average') }}" autocomplete="off">
                        </div>
                        <div class="col-span-12">
                            <input type="text" placeholder="@lang('register.business_address')" name="business_address" id="business_address" class="bg-white/50 backdrop-blur-[10px] bg-opacity-65 text-[#ffffff] w-full text-[14px] !outline-none !border-none hover:outline-none focus:!outline-none rounded-xl focus:ring-0" value="{{ old('business_address') }}" autocomplete="off">
                        </div>
                    </div>
					<button class="w-full max-w-sm mx-auto px-3 py-2 bg-[#dd0000] mt-5 rounded-2xl text-white">@lang('messages.btn')
					</button>
				</form>
			</div>
		</div>
    </section>
@endsection
