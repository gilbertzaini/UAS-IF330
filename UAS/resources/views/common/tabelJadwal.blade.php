@php
    if(auth()->check() && auth()->user()->is_admin == 1){
      $route = "admin.doctor.search";
    } else {
      $route = "doctor.search";
    }
@endphp

<div>
    <h1 class="pageHeading py-5">Jadwal Praktik Dokter</h1>
    
    <form action="{{route($route)}}" method="POST">        
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

    <ul id="listJadwal">
        @foreach($doctors as $doctor)        
        <li class="dokterJadwal">
            <div class="col-5 mx-auto my-2" style="min-height: 6.2rem; background-color: white;">
                <div class="d-flex d align-items-center justify-content-between py-2">
                    <div class="container d-flex justify-content-start my-auto">
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                            <img class="jadwalFoto" src="data:image/jpeg;base64,{{ base64_encode($doctor->foto) }}"/>
                        </div>
                        <div class="container d-flex flex-column text-start" style="word-wrap: break-word;">
                            <div class="my-auto py-auto">
                                <a href={{ route('review.show', ['id' => $doctor->id]) }} class="namaDokter text-start" style="word-wrap: break-word; font-weight:bold;">{{$doctor->nama}}</a>
                            </div>
                            <div style="height: 20%;">
                                <p class="teksSpesialis text-start">{{$doctor->spesialis}}</p>
                            </div>
                        </div>
                    </div>                                 
                    
                    <div class="d-flex justify-content-start px-2 jadwalDokter my-auto py-2 col-4" style="min-height: 6.2rem; height: auto;">
                        <ul class="my-auto">
                            @foreach($doctor->jadwal as $jadwal)
                            <li>{{$jadwal->jadwalPraktik}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>   
                @auth
                @if(auth()->user()->is_admin == 0)
                <div>                
                    <a href='appointment/create/{{$doctor->id}}' class="btn btn-primary mt-2" style="width:100%; background-color: #808080;">Buat Jadwal</a>
                </div> 
                @endif
                @endauth        
            </div>
        </li>
        @endforeach
    </ul>
</div>