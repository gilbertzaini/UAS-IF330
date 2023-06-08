<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment; // Import the Appointment model

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $members = [
            'Cianando Pautrisio Cendranadi',
            'Indah Desri Wahyuni',
            'Gilbert Zaini',
            'Mahdi Husein Punca'
        ];

        return view('admin.index', compact('members'));
    }

    public function user()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function approval()
    {
        // Fetch the appointments that require approval from the database
        $appointments = Appointment::where('status', 'pending')->get();

        return view('admin.approval', compact('appointments'));
    }
}
