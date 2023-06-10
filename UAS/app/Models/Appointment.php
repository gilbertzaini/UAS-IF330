<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_dokter',
        'id_user',
        'id_jadwal',
        'keluhan'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_dokter');
    }
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
