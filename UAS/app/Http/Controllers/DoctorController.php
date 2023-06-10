<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor', ['doctors'=>$doctors]);
    }

    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('admin.doctor');
    }

    public function create(){
        return view('admin.createDoctor');
    }

    public function store(request $request){
        $request->validate([
            'nama'=>['required', 'string'],
            'spesialis'=>['required', 'string'],
            'foto'=>['image']
        ]);

        $doctor = new Doctor;
        $doctor->nama = $request->nama;
        $doctor->spesialis = $request->spesialis;
        
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $blobData = file_get_contents($photo);
            $doctor->foto = $blobData;
        }

        $doctor->save();
        
        return redirect()->route('admin.doctor');
    }

    public function edit(string $id){
        $doctor = Doctor::find($id);

        return view('admin.updateDoctor', ['doctor'=>$doctor]);
    }

    public function update(request $request, string $id){
        $request->validate([
            'nama'=>['required', 'string'],
            'spesialis'=>['required', 'string'],
            'foto'=>['image']
        ]);

        $doctor = Doctor::find($id);
        $doctor->nama = $request->nama;
        $doctor->spesialis = $request->spesialis;
        
        if($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $blobData = file_get_contents($photo);
            $doctor->foto = $blobData;
        }

        $doctor->save();

        return redirect()->route('admin.doctor');
    }
}
