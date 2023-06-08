@extends('layouts.master')

@section('content')
<div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="https://kitasehat.co.id/wp-content/uploads/2023/03/building.jpg" class="d-block m-auto" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://www.forma-surabaya.com/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-21.42.08-1536x726.jpeg" class="d-block" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://www.esensia.co.id/wp-content/uploads/2021/04/klinik-esensia-depan-1536x1152.jpg" class="d-block" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="specialties" class="text-center" style="background-color: #00bdb5;">
    <h1 class="pt-4" style="font-weight: bold;">Our Specialties</h1>
    <div id="specialtiesGrid" class="container-fluid mx-auto py-4 col-10">
        <div class="row">
            <div class="col">
                <x-healthicons-f-baby-0203m class="mx-auto"/>
                <p>Anak</p>
            </div>
            <div class="col">
                <x-healthicons-f-eye class="mx-auto"/>
                <p>Mata</p>
            </div>
            <div class="col">
                <x-healthicons-o-surgical-sterilization class="mx-auto"/>
                <p>Bedah</p>
            </div>
            <div class="col">
                <x-healthicons-o-tooth class="mx-auto"/>
                <p>Gigi</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <x-healthicons-o-cardiology class="mx-auto"/>
                <p>Penyakit Dalam</p>
            </div>
            <div class="col">
                <x-healthicons-f-ear class="mx-auto"/>
                <p>THT</p>
            </div>
            <div class="col">
                <x-healthicons-o-obstetricsmonia  class="mx-auto"/>
                <p>Kandungan</p>
            </div>
            <div class="col">
                <x-ri-psychotherapy-line class="mx-auto"/>
                <p>Psikologis</p>
            </div>
        </div>
    </div>
  </div>

<div id="bpjs" class="" style="background-color: ;">
    <img src="{{asset('storage/assets/logoBPJS.png')}}" class="mx-auto py-5" style="width: 30em;"/>
    <h1 class="text-center pt-2">Melayani peserta BPJS Kesehatan tanpa IUR BIAYA</h1>
    <div class="container col-4 mt-3 d-flex justify-content-center align-items-center" id="syaratBPJS" style="width:50%;">
        <p style="color: white;">*Persyaratan: Fotocopy KTP, KK, Kartu BPJS + Surat Rujukan asli</p>
    </div>
</div>

@stop