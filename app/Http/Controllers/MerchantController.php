<?php

namespace App\Http\Controllers;

use app;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Telegram\Bot\BotsManager;
use App\Http\Requests\StoreMessage;
use App\Http\Controllers\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

class MerchantController extends Controller
{
    public function index (): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.merchant');
    }

    public function register(Request $request): \Illuminate\Http\RedirectResponse
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

        $text = "New Information From Business Partner Register\n"."\n".
                    "Name". ' ' . ':' . ' '.$request->first_name.' '.$request->last_name."\n".
                    'Gender'. ' ' . ':' . ' '.$request->gender ."\n".
                    'Type of Product'. ' ' . ':' . ' '. $request->type_of_product ."\n".
                    'Average'. ' ' . ':' . ' '. $request->avg_percel_day."\n".
                    'Bussiness Address'. ' ' . ':' . ' '. $request->business_address;
        Telegram::sendMessage([
            "telegram_bot_token"=>env('TELEGRAM_BOT_TOKEN', '7488110118:AAF1yYnZwMivBG4iaNE-KkLm_o1BlDKbDcQ'),
            "chat_id"=>env('TELEGRAM_CHAT_ID', -4262411283),
            "parse_mode" => "HTML",
            "text"=>$text,
        ]);

        // Your AppSheet app details
        $appId = 'e9bf37d8-62e4-48de-83f1-6f36049041f0'; // Replace with your AppSheet app ID
        $tableName = 'Customers'; // Replace with your table name
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
                    'Type of Product' => $request['type_of_product'],
                    'Average' => $request['avg_percel_day'],
                    'Bussines Address' => $request['business_address'],
                    // Add other columns as needed
                ]
            ]
        ];

        // Send the POST request to the AppSheet API
        Http::withHeaders([
            'ApplicationAccessKey' => $apiKey
        ])->post("https://api.appsheet.com/api/v2/apps/{$appId}/tables/{$tableName}/Action", $data);

        return redirect()->route('mercharts.register')->with('success', 'Business Partner Registered Successfully. Please Waiting for Our Team Will Contact You Soon. Thank You For Register!');
    }

    public function teleUpdates(){
        $updates = Telegram::getUpdates();

        dd($updates);
    }
}
