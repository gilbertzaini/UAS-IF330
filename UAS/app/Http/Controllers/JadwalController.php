<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    function search(request $request){
        if($request->param != "all") $doctors = Doctor::where('spesialis', $request->param)->get();
        else $doctors = Doctor::all();

        return view('jadwal', ['doctors'=>$doctors]);
    }

    function adminSearch(request $request){
        if($request->param != "all") $doctors = Doctor::where('spesialis', $request->param)->get();
        else $doctors = Doctor::all();

        return view('admin.jadwal', ['doctors'=>$doctors]);
    }
}