<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebTransaction extends Model
{
    use HasFactory;

    protected $table = "transaction_webs";
    // sementara masih pakai tabel transaction_webs (untuk testing midtrans tadi), untuk kedepannya rencana bakal pakai web transactions

    protected $fillable = [
        'id',
        'nama',
        'email',
        'total_price'
    ];
}
