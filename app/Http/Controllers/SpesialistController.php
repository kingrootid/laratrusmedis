<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Spesialist;
use Illuminate\Http\Request;

class SpesialistController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME'),
            'content' => 'Spesialist Page',
            'user' => (!auth()->user() ? null : auth()->user()),
            'spesialist' => Spesialist::all(),
        ];
        return view('spesialist', $data);
    }
    public function getbyname($name)
    {
        $spesialist = Spesialist::where('name', $name)->first();
        $data = [
            'title' => env('APP_NAME'),
            'content' => 'Spesialist Page',
            'user' => (!auth()->user() ? null : auth()->user()),
            'spesialist' => $spesialist,
            'doctor' => Doctor::where('specialist_id', $spesialist->id)->get(),
        ];
        return view('doctorspesialist', $data);
    }
}
