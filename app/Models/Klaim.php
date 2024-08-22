<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    use HasFactory;
    protected $table = "klaim";

    protected $fillable = ['lob', 'penyebab_klaim', 'jumlah_nasabah', 'beban_klaim'];
}
