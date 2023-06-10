<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
 
    public function review(){
        return $this->hasMany(Review::class);
    }
}


