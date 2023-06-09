<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create(string $id_doctor)
    {
        $doctor = Doctor::find($id_doctor);
        return view('appointment', ['doctor' => $doctor]);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'id_dokter' => ['required', 'string'],
            'id_jadwal' => ['required', 'string'],
            'keluhan' => ['required', 'string'],
        ]);

        $appointment = Appointment::create([
            'id_dokter' => $request->id_dokter,
            'id_user' => $user->id,
            'id_jadwal' => $request->id_jadwal,
            'keluhan' => $request->keluhan
        ]);

        $appointment->save();

        return redirect('/jadwal');
    }

    public function approve(string $id){
        $appointment = Appointment::find($id);
        $appointment->status = 'approved';
    }

    public function deny(string $id){
        $appointment = Appointment::find($id);
        $appointment->status = 'denied';
    }
}
