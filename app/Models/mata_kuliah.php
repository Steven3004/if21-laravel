<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    use HasUuids;
    protected $table = 'mata_kuliah';
    protected $fillable = [
        'kode_mk',
        'nama',
        'prodi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(prodi::class, 'prodi_id');
    }
}
