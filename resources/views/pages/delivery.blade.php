@extends('layout.app')

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchant.css') }}">
@endsection

@section('content')
    <section class="w-full mx-auto md:py-8">
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
						<input type="text" placeholder="@lang('register.first_name') " class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" name="first_name" id="first_name" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autofocus>
						<input type="text" placeholder="@lang('register.last_name') " class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" name="last_name" id="last_name" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<select name="gender" id="gender" class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" required>
							<option value="" disabled selected>@lang('register.gender')</option>
							<option value="male">@lang('register.male')</option>
							<option value="female">@lang('register.female')</option>
							<option value="other">@lang('register.other')</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="phone_number" placeholder="@lang('register.phone_number')" class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" name="phone_number" id="phone_number" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<input type="delivery_experience" placeholder="@lang('register.delivery_experience')" name="delivery_experience" id="delivery_experience" class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<input type="home_address" placeholder="@lang('register.home_address')" name="home_address" id="home_address" class="form-control focus:outline-none focus:ring-0 focus:border-gray-600" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<button class="btn-register tracking-normal">@lang('messages.btn')
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
    </section>
@endsection
