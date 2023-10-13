<?php

namespace LaravelLiberu\Helpers\Enums;

use LaravelLiberu\Enums\Services\Enum;

class PaymentMethods extends Enum
{
    final public const Card = 1;
    final public const OnDelivery = 2;
    final public const Wire = 3;
    final public const PromissoryNote = 4;
    final public const Cash = 5;
    final public const Cheque = 6;

    protected static array $data = [
        self::Card => 'Card',
        self::OnDelivery => 'On Delivery',
        self::Wire => 'Transfer',
        self::PromissoryNote => 'Promissory Note',
        self::Cash => 'Cash',
        self::Cheque => 'Cheque',
    ];
}
