<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebTransaction extends Model
{
    use HasFactory;

    protected $table = "web_transactions";

    protected $fillable = [
        'id',
        'payment_transaction_id',
        'order_code',
        'user_id',
        'date',
        'tree_type_id',
        'planting_id',
        'total',
        'voucher_id',
        'voucher_code',
        'voucher_value',
        'grand_total',
        'payment_method',
        'payment_detail',
        'status',
    ];
}
