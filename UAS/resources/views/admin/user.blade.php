@extends('layouts.master')

@section('content')
<div class="container">
    <h1 style="text-align: center; margin-bottom: 20px;">User List</h1>

    <table class="table" style="border-collapse: collapse; width: 100%;">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Date of Birth</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Place of Birth</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Cianando</td>
                <td style="padding: 10px; border: 1px solid #ddd;">cianandopautrisio123@gmail.com</td>
                <td style="padding: 10px; border: 1px solid #ddd;">21/10/2003</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Bitung</td>
                <td style="padding: 10px; border: 1px solid #ddd;">0812367789</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
