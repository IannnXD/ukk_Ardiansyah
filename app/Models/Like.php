<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'foto_id',
        'user_id',
        'like',
        'tanggallike'
    ];

    public function foto()
    {
        return $this->belongsTo(Foto::class,'foto_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
