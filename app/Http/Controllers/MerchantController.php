<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index (){
        return view('pages.merchant');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'type_of_product' => 'required',
            'avg_percel_day' => 'required',
            'business_address' => 'required',
        ]);

        Merchant::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'type_of_product' => $request->type_of_product,
            'avg_percel_day' => $request->avg_percel_day,
            'business_address' => $request->business_address,
        ]);

        return redirect()->route('mercharts.register')->with('success', 'Business Partner Registered Successfully. Please Waiting for Our Team Will Contact You Soon. Thank You For Register!');
    }
}
