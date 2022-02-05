<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME'),
            'content' => 'Doctor Page'
        ];
        return view('doctor.index', $data);
    }
}
