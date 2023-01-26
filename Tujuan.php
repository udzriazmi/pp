<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tujuan";

    protected $fillable = [
        'Lokasi',
        'Latitude',
        'Longitude'
    ];
}
