<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Telegram\Bot\Laravel\Facades\Telegram;

class DeliveryController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.delivery');
    }

    public function deliveryRegister(Request $request): \Illuminate\Http\RedirectResponse
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

        $text = "New Information From Delivery Partner Register\n"."\n".
                    "Name". ' ' . ':' . ' '.$request->first_name.' '.$request->last_name."\n".
                    'Gender'. ' ' . ':' . ' '.$request->gender ."\n".
                    'Type of Product'. ' ' . ':' . ' '. $request->phone_number ."\n".
                    'Average'. ' ' . ':' . ' '. $request->delivery_experience."\n".
                    'Bussiness Address'. ' ' . ':' . ' '. $request->home_address;
        Telegram::sendMessage([
            "chat_id"=>env('TELEGRAM_CHAT_ID', -4262411283),
            "parse_mode" => "HTML",
            "text"=>$text,
        ]);

        // Your AppSheet app details
        $appId = 'e9bf37d8-62e4-48de-83f1-6f36049041f0'; // Replace with your AppSheet app ID
        $tableName = 'Delivery'; // Replace with your table name
        $apiKey = 'V2-9W5Kn-52S2t-zywAS-3XYBD-L3FZX-xMLWc-r7qbr-GHI9B'; // Replace with your AppSheet API key

        // Prepare the data for the API request
        $data = [
            'Action' => 'Add',
            'Properties' => [
                'Locale' => 'en-US',
                'Timezone' => 'UTC'
            ],
            'Rows' => [
                [
                    'First Name' => $request['first_name'],
                    'Last Name' => $request['last_name'],
                    'Gender' => $request['gender'],
                    'Phone Number' => $request['phone_number'],
                    'Delivery' => $request['delivery_experience'],
                    'Home Address' => $request['home_address'],
                    // Add other columns as needed
                ]
            ]
        ];

        // Send the POST request to the AppSheet API
        Http::withHeaders([
            'ApplicationAccessKey' => $apiKey
        ])->post("https://api.appsheet.com/api/v2/apps/{$appId}/tables/{$tableName}/Action", $data);


        return redirect()->route('deliverys.register')->with('success', 'Delivery Partner Registered Successfully. Please Waiting for Our Team Will Contact You Soon. Thank You For Register!');
    }
}
