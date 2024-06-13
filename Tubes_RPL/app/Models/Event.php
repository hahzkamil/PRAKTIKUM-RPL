<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    protected $fillable = [
        'nama_kegiatan', 
        'deskripsi_kegiatan',
        'lokasi', 
        'tanggal_kegiatan',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}