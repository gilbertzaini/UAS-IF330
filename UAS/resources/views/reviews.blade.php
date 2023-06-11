@extends('layouts.master')

@php
    if(auth()->check() && auth()->user()->is_admin === 0 && auth()->user()->appointment()->where('status', 'done')->where('id_dokter', $doctor->id)->exists()){
        $canReview = true;
    } else $canReview = false;
@endphp

@section('content')
    <div class="">
        <div class="review">
            <div id="reviewedDoctor" class="py-3 d-flex flex-column justify-content-center align-center" style="background-color: white;">
                <img class="mx-auto" src="data:image/jpeg;base64,{{ base64_encode($doctor->foto) }}"/>
                <div class="d-flex flex-column justify-center align-center text-center pt-3">
                    <h1 style="font-weight: bold; font-size: 2rem;">{{$doctor->nama}}</h1>
                    <p style="font-size: 1.5rem;">Spesialis: {{$doctor->spesialis}}</p>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <div class="mt-6 px-6 pt-4 bg-white shadow-md overflow-hidden sm:rounded-lg mx-auto" style="width: 50%;">                 
                    <h1 style="font-weight: bold; font-size: 1.2rem;">Ulasan:</h1>
                    <hr class="mt-3"/>
                    <div class="py-3 mt-2" style="overflow: auto; height: 52%;">
                        @foreach($reviews as $review)
                        <div class="mt-2 px-6 py-4 bg-gray shadow-md overflow-hidden sm:rounded-lg mx-auto" style="width: 90%; height: auto; word-wrap: break-word; border: 1px solid #ccc;">                 
                            <h3 style="font-weight: bold; font-size: 1.1rem;">{{$review->user->name}}</h3>
                            <hr class="my-2"/>
                            <p class="word-break: break-all;">{{$review->ulasan}}</a>
                        </div>
                        @endforeach
                    </div>{{-- @if($canReview) --}}
                    <div class="mt-6 px-6 pt-3 pb-2 bg-grey mx-auto" style="width: 100%; border-top: 1px solid #ccc;">
                        <form action="{{ route('review.store') }}" method="POST">
                            @csrf
                                                
                            <input style="display: none;" name="doctor_id" type="text" value="{{ $doctor->id }}" class="mt-1 block w-full" required readonly/>
                            <input style="display: none;" name="user_id" type="text" value="{{ auth()->user()->id }}" required/>
                                                
                            <div class="d-flex justify-between align-center py-auto">
                                <div class="py-auto" style="width: 85%; word-wrap: break-word; overflow-wrap: break-word;">
                                    <x-text-input class="block mt-1 w-full" type="text" name="ulasan" :placeholder="__('Ulasan')" required/>
                                </div>                            
                                <x-primary-button class="" style="background-color: grey">
                                    {{ __('Kirim') }}
                                </x-primary-button>
                            </div>
                            <x-input-error :messages="$errors->get('ulasan')" class="mt-2" />
                        </form>                        
                    </div>                    
                    {{-- @endif --}}
                </div>                
            </div>
        </div>
    </div>
@endsection
