<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sewa;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\SewaStoreRequest;
use App\Http\Requests\Admin\SewaUpdateRequest;
use Illuminate\Support\Str;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::latest()->get();
        return view('admin.sewa.index', compact('sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sewa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SewaStoreRequest $request)
    {
        if($request->validated()){
            $gambar = $request->file('gambar')->store('assets/film', 'public');
            $slug = Str::slug($request->nama_dvd, '-');
            Sewa::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }
        return redirect()->route('admin.sewa.index')->with([
            'message' => 'Data Sukses Dibuat',
            'alert-type' => 'success'
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
    public function edit(Sewa $sewa)
    {
        return view('admin.sewa.edit', compact('sewa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SewaUpdateRequest $request, Sewa $sewa)
    {
        if($request->validated()){
            $slug = Str::slug($request->nama_dvd, '-');
            $sewa->update($request->validated() + ['slug' => $slug]);
        }
        return redirect()->route('admin.sewa.index')->with([
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
    public function destroy(Sewa $sewa)
    {
        if($sewa->gambar){
            unlink('storage/'. $sewa->gambar);
        }
        $sewa->delete();
        return redirect()->back()->with([
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'danger'
        ]);
    }

    public function updateImage(Request $request, $sewaId){
        $request->validate([
            'gambar' => 'required|image'
        ]);
        $sewa = Sewa::findOrFail($sewaId);
        if($request->gambar){
            unlink('storage/'. $sewa->gambar);
            $gambar = $request->file('gambar')->store('assets/film', 'public');
            $sewa->update(['gambar' => $gambar]);
        }
        return redirect()->back()->with([
            'message' => 'Gambar Berhasil Diedit',
            'alert-type' => 'info'
        ]);
    }
}
