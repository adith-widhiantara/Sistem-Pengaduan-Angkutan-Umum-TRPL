<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan2 extends Model
{
    protected $table = "pengaduan2";

    protected $fillable = ['user_id', 'judul', 'uraian', 'nama', 'nomor', 'tempat', 'foto', 'status', 'time'];
}
