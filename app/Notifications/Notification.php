<?php

namespace App\Notifications;

use Log;
use Illuminate\Bus\Queueable;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class Notification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toTelegram(object $notifiable)
    {
        // $request = request()->all();
        // try{
        //     return TelegramMessage::create()->to('768856332')->content($request['first_name'].'-'.$request['last_name'].'-'.$request['gender'].'-'.$request['type_of_product'].'-'.$request['avg_percel_day'].'-'.$request['business_address']);
        // }   catch (\Exception $ex) {
        //         \Log::error($ex);
        //     }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
