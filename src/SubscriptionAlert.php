<?php

namespace Yh919\SubscriptionAlert;

use Laravel\Nova\Card;
use Illuminate\Support\Facades\Auth;


class SubscriptionAlert extends Card
{
    public $width = '1/4';

    public function component()
    {
        return 'subscription-alert'; // Must match the Vue component name
    }

   public function resolve($request)
{
    return [
        'title' => 'Subscription Alert',
        'message' => 'This is a test message for the Subscription Alert card.',
        'payUrl' => url('/pay-subscription'),
    ];
}

}

