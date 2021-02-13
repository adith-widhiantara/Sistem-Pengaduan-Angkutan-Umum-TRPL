<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = "pengaduan";

    protected $fillable = ['user_id', 'judul', 'uraian', 'nama', 'nomor', 'tempat', 'waktu', 'foto', 'rating', 'status', 'status1', 'time', 'foto1'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function notifikasi()
    {
        return $this->hasMany('App\Notifikasi');
    }
}
