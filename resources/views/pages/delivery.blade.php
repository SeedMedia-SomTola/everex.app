@extends('layout.app')

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchant.css') }}">
    <style>
        .wrapper {
            min-height: 105vh;
            margin-top: 30px;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
        }
    </style>
@endsection

@section('content')
    <section class="w-full mx-auto md:pt-8">
		<div class="wrapper" style="background-image: url({{ asset('assets/images/delivery/bg_register_delivery_1.jpg') }});">
			<div class="inner">
				<div class="image-holder">
					<img src="{{ asset('assets/images/delivery/recruitment everex-01.jpg') }}" alt="">
				</div>

                <form method="POST" action="{{ route('deliverys.register') }}">
                    @csrf
					<h3>@lang('messages.delivery')</h3>
                    @component('components.alert')
                    @endcomponent
					<div class="form-group">
						<input type="text" placeholder="@lang('register.first_name') " class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600" name="first_name" id="first_name" value="{{ old('first_name') }}" autofocus>
						<input type="text" placeholder="@lang('register.last_name') " class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600" name="last_name" id="last_name" value="{{ old('last_name') }}" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<select name="gender" id="gender" class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600">
							<option value="" disabled selected>@lang('register.gender')</option>
							<option value="male">@lang('register.male')</option>
							<option value="female">@lang('register.female')</option>
							<option value="other">@lang('register.other')</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="phone_number" placeholder="@lang('register.phone_number')" class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<input type="delivery_experience" placeholder="@lang('register.delivery_experience')" name="delivery_experience" id="delivery_experience" class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600" value="{{ old('delivery_experience') }}" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<input type="home_address" placeholder="@lang('register.home_address')" name="home_address" id="home_address" class="form-control text-sm focus:outline-none focus:ring-0 focus:border-gray-600" value="{{ old('home_address') }}" autocomplete="off">
					</div>
					<button class="btn-register tracking-normal">@lang('messages.btn')
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
    </section>
@endsection
