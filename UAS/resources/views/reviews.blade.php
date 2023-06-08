@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Reviews</h1>

        <div class="review">
            <div class="doctor-info">
                <img src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}">
                <h2>Dr. John Doe</h2>
                <p>Specialty: Cardiology</p>
            </div>
            <div class="patient-review">
                <h3>Reviews from Previous Patients</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus velit eu maximus pellentesque.</p>
            </div>
        </div>

        <div class="review">
            <div class="doctor-info">
                <img src="{{asset('storage/assets/fotoDokter/bocil.jpg')}}">
                <h2>Dr. Jane Smith</h2>
                <p>Specialty: Pediatrics</p>
            </div>
            <div class="patient-review">
                <h3>Reviews from Previous Patients</h3>
                <p>Nulla nec ipsum id leo varius tincidunt. Sed rutrum tellus nec diam malesuada varius.</p>
            </div>
        </div>

        <!-- Add more reviews as needed -->

    </div>
@endsection
