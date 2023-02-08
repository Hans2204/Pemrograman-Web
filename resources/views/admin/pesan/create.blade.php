@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{route('admin.pesan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Penyewa</label>
                    <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="nomer_hp">Nomer HP</label>
                    <input type="text" name="nomer_hp" class="form-control" value="{{old('nomer_hp')}}">
                </div>
                <div class="form-group">
                    <label for="nama_dvd">Judul Yang Disewa</label>
                    <input type="text" name="nama_dvd" class="form-control" value="{{old('nama_dvd')}}">
                </div>
                <div class="form-group">
                    <label for="durasi_sewa">Durasi Sewa</label>
                    <input type="text" name="durasi_sewa" class="form-control" value="{{old('durasi_sewa')}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection