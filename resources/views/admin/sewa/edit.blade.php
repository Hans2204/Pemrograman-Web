@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <form action="{{route('admin.sewa.update', $sewa->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama_dvd">Judul Film</label>
                            <input type="text" name="nama_dvd" class="form-control" value="{{old('nama_dvd', $sewa->nama_dvd)}}">
                        </div>
                        <div class="form-group">
                            <label for="harga_sewa">Harga Sewa</label>
                            <input type="text" name="harga_sewa" class="form-control" value="{{old('harga_sewa', $sewa->harga_sewa)}}">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Rilis</label>
                            <input type="text" name="tahun" class="form-control" value="{{old('tahun', $sewa->tahun)}}">
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre Film</label>
                            <input type="text" name="genre" class="form-control" value="{{old('genre', $sewa->genre)}}">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi Film</label>
                            <input type="text" name="durasi" class="form-control" value="{{old('durasi', $sewa->durasi)}}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option {{$sewa->status == 'tersedia' ? 'selected' : null}} value="tersedia">Tersedia</option>
                                <option {{$sewa->status == 'tidak tersedia' ? 'selected' : null}} value="tidak tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Sinopsis Film</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5">{{old('deskripsi', $sewa->deskripsi)}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="SU">SU</label>
                            <select name="SU" id="SU" class="form-control">
                                <option {{$sewa->SU == '1' ? 'selected' : null}} value="1">Ya</option>
                                <option {{$sewa->SU == '0' ? 'selected' : null}} value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="13+">13+</label>
                            <select name="13+" id="13+" class="form-control">
                                <option {{$sewa->{'13+'} == '1' ? 'selected' : null}} value="1">Ya</option>
                                <option {{$sewa->{'13+'} == '0' ? 'selected' : null}} value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="17+">17+</label>
                            <select name="17+" id="17+" class="form-control">
                                <option {{$sewa->{'17+'} == '1' ? 'selected' : null}} value="1">Ya</option>
                                <option {{$sewa->{'17+'} == '0' ? 'selected' : null}} value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="21+">21+</label>
                            <select name="21+" id="21+" class="form-control">
                                <option {{$sewa->{'21+'} == '1' ? 'selected' : null}} value="1">Ya</option>
                                <option {{$sewa->{'21+'} == '0' ? 'selected' : null}} value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Form Edit Gambar
                </div>
                <div class="card-body">
                    <form action="{{route('admin.sewa.updateImage', $sewa->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <img src="{{Storage::url($sewa->gambar)}}" class="img-fluid" alt="">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection