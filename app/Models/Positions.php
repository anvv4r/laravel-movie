<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }


}
