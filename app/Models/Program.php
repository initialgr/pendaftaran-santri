<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'cabang_id',
        'nama_jurusan',
        'kuota',
    ];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }
}

