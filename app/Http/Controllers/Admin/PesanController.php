<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Http\Requests\Admin\PesanStoreRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin\PesanUpdateRequest;
use Illuminate\Support\Str;


class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::latest()->get();
        return view('admin.pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pesan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('pesan')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomer_hp' => $request->nomer_hp,
            'nama_dvd' => $request->nama_dvd,
            'durasi_sewa' => $request->durasi_sewa
        ]);

            return redirect()->route('admin.pesan.index')->with([
                'message' => 'Data Sukses Dibuat',
                'alert' => 'success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        return view('admin.pesan.edit', compact('pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PesanUpdateRequest $request, Pesan $pesan)
    {
        if($request->validated()){
            $slug = Str::slug($request->nama_dvd, '-');
            $pesan->update($request->validated() + ['slug' => $slug]);
        }
        return redirect()->route('admin.pesan.index')->with([
            'message' => 'Data Berhasil Diedit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return redirect()->back()->with([
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'danger'
        ]);
    }
}
