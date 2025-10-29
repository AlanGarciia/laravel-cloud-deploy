<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    protected $table = 'ciclos';

    protected $fillable = [
        'code',
        'name',
        'image',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}



