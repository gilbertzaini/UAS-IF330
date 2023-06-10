@extends('layouts.master')

@section('content')
    <div class="">
        <div class="review">
            <div id="reviewedDoctor" class="py-3 d-flex flex-column justify-content-center align-center" style="background-color: white;">
                <img class="mx-auto" src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}">
                <div class="d-flex flex-column justify-center align-center text-center pt-3">
                    <h1 style="font-weight: bold; font-size: 2rem;">{{$doctor->nama}}</h1>
                    <p style="font-size: 1.5rem;">Spesialis: {{$doctor->spesialis}}</p>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <div class="mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mx-auto" style="width: 50%;">                 
                    <h1 style="font-weight: bold; font-size: 1.2rem;">Ulasan:</h1>
                    <hr class="mt-3"/>
                    <div class="py-3 mt-2" style="overflow: auto; height: 52%;">
                        @foreach($reviews as $review)
                        <div class="mt-2 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mx-auto" style="width: 90%; height: auto; word-wrap: break-word;">                 
                            <h1>{{$review->user->name}}</h1>
                            <hr class="my-2"/>
                            <p class="word-break: break-all;">{{$review->ulasan}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
