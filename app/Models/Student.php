<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'dataN',
        'tel',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function cicle()
    {
        return $this->belongsTo(Cicle::class, 'ciclo_id');
    }
}


