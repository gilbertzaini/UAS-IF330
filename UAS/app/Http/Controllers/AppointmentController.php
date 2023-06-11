<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('appointment.list');
    }

    public function list(){
        $userid = Auth::user()->id;

        $appointments = Appointment::where('id_user', $userid)->get();

        // dd($appointments);

        return view('appointmentList', ['appointments' => $appointments]);
    }

    public function approve(string $id){
        $appointment = Appointment::find($id);
        $appointment->status = 'Approved';
        $appointment->save();
        
        return redirect()->route('admin.approval');
    }

    public function deny(string $id){
        $appointment = Appointment::find($id);
        $appointment->status = 'Denied';
        $appointment->save();

        return redirect()->route('admin.approval');
    }

    public function done(string $id){
        $appointment = Appointment::find($id);
        $appointment->status = 'Done';
        $appointment->save();
        
        return redirect()->route('admin.approval');
    }
}
