<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;

class keuanganController extends Controller
{


    public function keuangan()
    {
        $keuangankendaraan = \App\Models\kendaraan::all();
        $total = \App\Models\kendaraan::sum('bayar');
        $i = 1;
        return view('keuangan',['keuangankendaraan' => $keuangankendaraan, 'total' => $total, 'i' =>$i]);
    }

}