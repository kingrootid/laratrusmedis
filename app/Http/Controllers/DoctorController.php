<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME'),
            'content' => 'Doctor Page',
            'user' => (!auth()->user() ? null : auth()->user()),
            'doctor' => Doctor::all(),
        ];
        return view('doctor.index', $data);
    }
}
