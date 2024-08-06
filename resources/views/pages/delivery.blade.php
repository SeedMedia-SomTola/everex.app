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
				<form action="">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="@lang('register.first_name')" class="form-control">
						<input type="text" placeholder="@lang('register.last_name')" class="form-control">
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>@lang('register.gender')</option>
							<option value="male">@lang('register.male')</option>
							<option value="femal">@lang('register.female')</option>
							<option value="other">@lang('register.other')</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.type_of_product')" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.average')" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="@lang('register.business_address')" class="form-control">
					</div>
					<button class="btn-register">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
    </section>
@endsection