<?php

namespace App\Http\Controllers;
use App\Models\KeselamatanInteligen;
use Illuminate\Http\Request;

class KeselamatanInteligenController extends Controller
{
    public function index()
    {
        $data = KeselamatanInteligen::all();
        return view('KeselamatanKoreksional.KeselamatanInteligen', ['data' => $data]);
    }
}
