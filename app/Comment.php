<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'message'
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function pengaduan1()
    {
        return $this->belongsTo(Pengaduan1::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
