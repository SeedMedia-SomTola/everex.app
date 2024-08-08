@extends('layout.app')

@section('blade_css')
    <link rel="stylesheet" href="{{ asset('assets/css/merchant.css') }}">
@endsection

@section('content')
    <section class="w-full mx-auto md:py-8">
        {{-- <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md  bg-[url('assets/images/merchant/bg-registration-form-1.jpg')]">
            <h2 class="text-2xl font-bold mb-4">Merchant Information Form</h2>
            <form>
                <div class="mb-4">
                    <label for="firstName" class="block text-gray-700 font-medium mb-2">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="lastName" class="block text-gray-700 font-medium mb-2">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Gender</label>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Male" class="form-radio text-blue-500" required>
                            <span class="ml-2">Male</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Female" class="form-radio text-blue-500">
                            <span class="ml-2">Female</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="Non-Binary" class="form-radio text-blue-500">
                            <span class="ml-2">Non-Binary</span>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                </div>
            </form>
        </div> --}}

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
						<input type="text" placeholder="@lang('register.first_name')" class="form-control" name="first_name" id="first_name" required oninvalid="this.setCustomValidity('@lang('messages.fill')')" autofocus >
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
