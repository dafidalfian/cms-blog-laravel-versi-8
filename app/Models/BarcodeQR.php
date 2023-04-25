<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarcodeQR extends Model
{
    use HasFactory;
    protected $table = 'barcodeqr';
    protected $guarded = [];
}
