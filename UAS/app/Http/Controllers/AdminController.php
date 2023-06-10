<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment; // Import the Appointment model

use Illuminate\Http\Request;

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
}
