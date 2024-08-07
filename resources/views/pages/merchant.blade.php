@extends('layout.app')

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchant.css') }}">
@endsection

@section('content')
    <section class="w-full mx-auto md:py-8">

		<div class="wrapper" style="background-image: url({{ asset('assets/images/merchant/bg-registration-form-1.jpg') }});">
			<div class="inner">
				<div class="image-holder">
					<img src="{{ asset('assets/images/merchant/registration-form-1.jpg') }}" alt="">
				</div>
				<form method="POST" action="{{ route('mercharts.register') }}">
                    @csrf
					<h3>@lang('messages.merchant')</h3>
                    @component('components.alert')
                    @endcomponent
					<div class="form-group">
						<input type="text" placeholder="@lang('register.first_name')" class="form-control " name="first_name" id="first_name" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autofocus autocomplete="off">
						<input type="text" placeholder="@lang('register.last_name')" class="form-control" name="last_name" id="last_name"  required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<select name="gender" id="gender" class="form-control" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" >
							<option value="" disabled selected>@lang('register.gender')</option>
							<option value="male">@lang('register.male')</option>
							<option value="femal">@lang('register.female')</option>
							<option value="other">@lang('register.other')</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.type_of_product')" class="form-control" name="type_of_product" id="type_of_product" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
                    </div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.average')" class="form-control" name="avg_percel_day" id="avg_percel_day" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.business_address')" name="business_address" id="business_address" class="form-control" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autocomplete="off">
					</div>
					<button class="btn-register tracking-normal">@lang('messages.btn')
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
    </section>
@endsection
