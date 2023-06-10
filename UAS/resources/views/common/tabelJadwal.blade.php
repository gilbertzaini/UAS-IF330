<div>    
    <ul id="listJadwal">
        @foreach($doctors as $doctor)        
        <li class="dokterJadwal">
            <div class="col-5 mx-auto my-2" style="min-height: 6.2rem; background-color: white;">
                <div class="d-flex d align-items-center justify-content-between py-2">
                    <div class="container d-flex justify-content-start my-auto">
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                            <img class="jadwalFoto mx-auto" src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}" />
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
                <div>                
                    <a href='appointment/create/{{$doctor->id}}' class="btn btn-primary mt-2" style="width:100%;">Buat Jadwal</a>
                </div> 
                @endauth        
            </div>
        </li>
        @endforeach
    </ul>
</div>