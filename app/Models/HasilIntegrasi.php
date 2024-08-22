<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilIntegrasi extends Model
{
    use HasFactory;

    protected $connection ='penampungan';

    protected $table = 'hasil_integrasi';

    protected $fillable = ['id', 'lob', 'penyebab_klaim', 'periode', 'nilai_beban', 'created_at', 'updated_at'];
}
