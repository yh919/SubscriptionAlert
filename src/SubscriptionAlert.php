<?php

namespace Yh919\SubscriptionAlert;

use Laravel\Nova\Card;

class SubscriptionAlert extends Card
{
    public $width = '1/4';

    protected $title = 'Subscription Alert';
    protected $end_due_date;
    protected $subscriptionStatus;

    public function component()
    {
        return 'subscription-alert'; // Must match the Vue component name
    }

    public function title($title)
    {
        $this->title = $title;
        return $this;
    }

    public function endDueDate($endDueDate)
    {
        $this->end_due_date = $endDueDate;
        return $this;
    }

    public function subscriptionStatus($status)
    {
        $this->subscriptionStatus = $status;
        return $this;
    }

    protected function getMessage()
    {
        switch ($this->subscriptionStatus) {
            case 'expired':
                return 'Your subscription has expired. Please renew it as soon as possible.';
            case 'canceled':
                return 'Your subscription has been canceled. Please contact support for further assistance.';
            case 'active':
                return 'Your subscription is active and will end on ' . $this->end_due_date . '.';
            default:
                return 'Unknown subscription status.';
        }
    }

    public function resolve($request)
    {
        return [
            'title' => $this->title,
            'message' => $this->getMessage(),
            'endDueDate' => $this->end_due_date,
            'payUrl' => $this->subscriptionStatus === 'expired' ? url('/pay-subscription') : null,
        ]; 
    }
}
