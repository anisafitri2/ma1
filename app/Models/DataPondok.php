<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPondok extends Model
{
    use HasFactory;
    protected $fillable = [
        'no',
        'alamat pondok',
    ];
}
