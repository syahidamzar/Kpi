<?php

namespace App\Http\Controllers;
use App\Models\TahananRadikal;
use Illuminate\Http\Request;

class TahananRadikalController extends Controller
{
    public function index()
    {
        $data = TahananRadikal::all();
        return view('KeselamatanKoreksional.TahananRadikal', ['data' => $data]);
    }
}
