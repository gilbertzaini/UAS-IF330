<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Jadwal;
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

    function searchFromHome(string $spesialis){
        $doctors = Doctor::where('spesialis', $spesialis)->get();

        return view('jadwal', ['doctors'=>$doctors]);
    }

    function adminSearchFromHome(string $spesialis){
        $doctors = Doctor::where('spesialis', $spesialis)->get();

        return view('admin.jadwal', ['doctors'=>$doctors]);
    }

    function create (string $id){
        $doctor = Doctor::find($id);
        return view('admin.createJadwal', ['doctor'=>$doctor]);
    }

    function store (request $request){
        // dd($request);
        $request->validate([
            'id'=>['required', 'string'],
            'nama'=>['required', 'string'],
            'jadwalPraktik'=>['required', 'string']
        ]);

        $jadwal = new Jadwal();
        $jadwal->doctor_id = $request->id;
        $jadwal->jadwalPraktik = $request->jadwalPraktik;
        $jadwal->save();

        $doctor = Doctor::find($request->id);
        return redirect()->route('doctor.edit', ['id'=>$doctor->id]);
    }

    function destroy (string $jadwal_id, string $doctor_id){
        $jadwal = Jadwal::find($jadwal_id);
        $jadwal->delete();

        return redirect()->route('doctor.edit', ['id'=>$doctor_id]);
    }
}
