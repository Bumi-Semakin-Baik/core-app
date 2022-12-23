<?php

namespace App\Constants;

class PaymentStatus
{
    // Done Status
    public const SUCCESS = 'success';

    // Pending Status
    public const PENDING = 'pending';

    // Fail Status
    public const DENY = 'deny';
    public const CANCEL = 'cancel';
    public const EXPIRE = 'expire';
}
