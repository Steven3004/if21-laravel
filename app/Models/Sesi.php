<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasUuids;
    protected $table = 'Sesi';

    protected $fillable = [
        'Nama'
    ];

}
