<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment; // Import the Appointment model

use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.user', ['users'=>$users]);
    }

    public function jadwal()
    {
        $doctors = Doctor::all();
        return view('admin.jadwal', ['doctors'=>$doctors]);
    }

    public function approval()
    {
        $appointments = Appointment::all();

        return view('admin.approval', ['appointments'=>$appointments]);
    }

    public function doctor()
    {
        $doctors = Doctor::all();
        return view('admin.doctor', ['doctors'=>$doctors]);
    }

    public function destroyDoctor(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('admin.doctor');
    }

    public function editDoctor(string $id){
        $doctor = Doctor::find($id);

        return view('admin.updateDoctor', ['doctor'=>$doctor]);
    }

    public function updateDoctor(request $request, string $id){
        $request->validate([
            'nama'=>['required', 'string'],
            'spesialis'=>['required', 'string'],
            'foto'=>['required', 'string'],
        ]);

        $doctor = Doctor::find($id);
        $doctor->nama = $request->nama;
        $doctor->spesialis = $request->spesialis;
        $doctor->foto = $request->foto;
        $doctor->save();

        return redirect()->route('admin.doctor');
    }
}
