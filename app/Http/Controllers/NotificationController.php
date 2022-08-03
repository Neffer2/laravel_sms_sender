<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('3bde3e84', 'h2EKYIsk74vKzCPp');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '573102969532',
            'from' => 'John Doe',
            'text' => 'A simple hello message sent from Vonage SMS API'
        ]);
 
        dd('SMS message has been delivered.');
    }
}  