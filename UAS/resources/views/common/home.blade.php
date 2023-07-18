@php
    if(auth()->check() && auth()->user()->is_admin == 1){
      $route = "admin.doctor.searchFromHome";
    } else {
      $route = "doctor.searchFromHome";
    }
@endphp

<div id="homeImage" class="bg-grey d-flex flex-column justify-center align-center">
  <img src="{{asset('storage/assets/homePicture.png')}}"/>
  <h1 class="pageHeading">Klinik Kita Sehat</h1>
</div>

<div id="specialties" class="text-center" style="background-color: #00bdb5;">
  <h1 class="pt-4" style="font-weight: bold; font-size: 2rem;">Our Specialties</h1>
  <div id="specialtiesGrid" class="container-fluid mx-auto py-4 col-10">
      <div class="row">
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Anak'])}}">
              <x-healthicons-f-baby-0203m class="mx-auto"/>
              <p>Anak</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Mata'])}}">
              <x-healthicons-f-eye class="mx-auto"/>
              <p>Mata</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Bedah'])}}">
              <x-healthicons-o-surgical-sterilization class="mx-auto"/>
              <p>Bedah</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Gigi'])}}">
              <x-healthicons-o-tooth class="mx-auto"/>
              <p>Gigi</p>
          </a>
      </div>
      <div class="row">
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Penyakit Dalam'])}}">
              <x-healthicons-o-lungs class="mx-auto"/>
              <p>Penyakit Dalam</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter THT'])}}">
              <x-healthicons-f-ear class="mx-auto"/>
              <p>THT</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Dokter Kandungan'])}}">
              <x-healthicons-o-obstetricsmonia  class="mx-auto"/>
              <p>Kandungan</p>
          </a>
          <a class="col" href="{{route($route, ['spesialis'=>'Psikolog'])}}">
              <x-ri-psychotherapy-line class="mx-auto"/>
              <p>Psikologis</p>
          </a>
      </div>
  </div>
</div>

<div id="bpjs" style="background-color: white;">
    <img src="{{asset('storage/assets/logoBPJS.png')}}" class="mx-auto py-5" style="width: 30em;"/>
    <h1 class="text-center pt-2">Melayani peserta BPJS Kesehatan tanpa IUR BIAYA</h1>
    <div class="container col-4 mt-3 d-flex justify-content-center align-items-center" id="syaratBPJS" style="width:50%;">
        <p style="color: white;">*Persyaratan: Fotocopy KTP, KK, Kartu BPJS + Surat Rujukan asli</p>
    </div>
</div>
