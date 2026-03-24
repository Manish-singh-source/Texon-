<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService
{
    public function verify(?string $token, ?string $ip = null): bool
    {
        $secretKey = config('services.recaptcha.secret_key');

        if (blank($secretKey) || blank($token)) {
            return false;
        }

        $response = Http::asForm()
            ->timeout(10)
            ->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $secretKey,
                'response' => $token,
                'remoteip' => $ip,
            ]);

        if (! $response->successful()) {
            return false;
        }

        return (bool) data_get($response->json(), 'success', false);
    }
}
