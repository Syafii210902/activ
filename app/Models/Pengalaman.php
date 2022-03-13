<?php

namespace App\Models;
use App\Models\Mahasiswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'pengalaman_id');
    }
}