<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan1 extends Model
{
    protected $table = "pengaduan1";

    protected $fillable = ['user_id', 'judul', 'uraian', 'nama', 'nomor', 'tempat', 'foto', 'status', 'time'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
