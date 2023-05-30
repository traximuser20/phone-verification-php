<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Exception;
use Twilio\Rest\Client;

class otpCodes extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'otp',
        'expire_at',
    ];

    public function sendOTP($receiver)
    {
        $message = 'Login OTP is'.$this->otp;

        try {
            $sid = getenv("TWILIO_SID");
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
            $twilio_client = new Client($sid, $token);

            $twilio_client->messages->create($receiver, [
                'from' => $twilio_number,
                'body' => $message
            ]);

            info('OTP send successfully!');

        } catch (\Exception $e) {
            info("Error: ".$e->getMessage());
        }
    }
}
