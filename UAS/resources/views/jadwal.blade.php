@extends('layouts.master')

@section('content')
<h1 class="pageHeading py-5">Jadwal Praktik Dokter</h1>
    
<form action="{{route('doctor.search')}}" method="POST">        
    @csrf
    <div class="px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mx-auto" style="width: 50%;">                 
        <x-input-label for="param" :value="__('Spesialis: ')" style="height: 2rem; font-size: 1rem;"/>
        <div class="d-flex justify-between align-center">
            <div style="width: 83%;">
                <select name="param" id="param" class="px-2 block w-full text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" style="height: 2.5rem;">
                    <option value="all">Spesialis</option>
                    <option value="Dokter Mata">Mata</option>
                    <option value="Dokter Gigi">Gigi</option>
                    <option value="Dokter Bedah">Bedah</option>
                    <option value="Dokter Anak">Anak</option>
                    <option value="Dokter Penyakit Dalam">Penyakit Dalam</option>
                    <option value="Dokter THT">THT</option>
                    <option value="Dokter Kandungan">Kandungan</option>
                    <option value="Psikolog">Psikologis</option>
                </select>
            </div>            
            <x-primary-button style="height: 2.5rem; background-color:grey;">
                {{ __('Search') }}
            </x-primary-button>
        </div>
    </div>
</form>
@include('common.tabelJadwal')
@stop