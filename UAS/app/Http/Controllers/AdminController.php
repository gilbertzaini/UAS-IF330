<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $members = [
            'Cianando Pautrisio Cendranadi',
            'Indah Desri Wahyuni',
            'Gilbert Zaini',
            'Mahdi Husein Punca'
        ];

        return view('admin.index', compact('members'));
    }
}
