<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $sewa = Sewa::latest()->get();
        return view('frontend.homepage', compact('sewa'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function pesan(Sewa $rent){
        return view('frontend.pesan', compact('rent'));
    }

    public function detail(Sewa $rent){
        return view('frontend.detail', compact('rent'));
    }

    public function store(Request $request)
    {
        DB::table('pesan')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomer_hp' => $request->nomer_hp,
            'nama_dvd' => $request->nama_dvd,
            'durasi_sewa' => $request->durasi_sewa
        ]);

        return view('frontend.pesan')->with([
            'message' => 'Data Sukses Dibuat',
            'alert-type' => 'success'
        ]);
    }
}
