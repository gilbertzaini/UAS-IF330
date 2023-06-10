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
}
