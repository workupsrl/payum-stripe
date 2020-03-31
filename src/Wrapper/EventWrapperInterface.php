<?php

declare(strict_types=1);

namespace Prometee\PayumStripeCheckoutSession\Wrapper;

use Stripe\Event;

interface EventWrapperInterface
{
    /**
     * @return Event
     */
    public function getEvent(): Event;

    /**
     * @return string
     */
    public function getUsedWebhookSecretKey(): string;
}