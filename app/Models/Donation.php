<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = "donations";

    protected $fillable = [
        'title',
        'image',
        'description',
        'target',
        'collected',
        'planting_date',
        'due_date',
        'is_published',
        'status',
        'id_ukm',
        'nama_ukm',
        'id_location',
        'nama_lokasi'
    ];
}
