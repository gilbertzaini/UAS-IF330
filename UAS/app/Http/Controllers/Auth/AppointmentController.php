<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Handle the appointment submission here
        // You can access the selected doctor and schedule from the request
        $doctor = $request->input('doctor');
        $schedule = $request->input('schedule');

        // Perform any necessary actions, such as saving the appointment to the database

        // Redirect the user to a success page or display a success message
        return redirect()->route('appointment.success');
    }

    public function success()
    {
        // Display a success page or success message after the appointment is submitted
        return view('appointment.success');
    }
}
