<?php

namespace App\Http\Controllers;
use App\Models\PengurusanBanduan;

class PengurusanBanduanController extends Controller
{
    public function index()
    {
        $data = PengurusanBanduan::all();
        return view('KeselamatanKoreksional.PengurusanBanduan', ['data' => $data]);
    }
}
