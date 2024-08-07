<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index(){
        return view('pages.delivery');
    }

    public function deliveryRegister(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone_number' => ['required', 'min:8'],
            'delivery_experience' => 'required',
            'home_address' => 'required',
        ]);

        Delivery::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'delivery_experience' => $request->delivery_experience,
            'home_address' => $request->home_address,
        ]);

        return redirect()->route('deliverys.register')->with('success', 'Delivery Partner Registered Successfully. Please Waiting for Our Team Will Contact You Soon. Thank You For Register!');
    }
}
