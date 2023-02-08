@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Pesanan</h3>
            <a href="{{route('admin.pesan.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyewa</th>
                            <th>Email</th>
                            <th>Nomer HP</th>
                            <th>Film Yang Disewa</th>
                            <th>Durasi Sewa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesan as $rent)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$rent -> nama}}</td>
                                <td>{{$rent -> email}}</td>
                                <td>{{$rent -> nomer_hp}}</td>
                                <td>{{$rent -> nama_dvd}}</td>
                                <td>{{$rent -> durasi_sewa}}</td>
                                <td><a href="{{route('admin.pesan.edit', $rent->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form onclick="return confirm('Anda yakin data ini dihapus ?');" class="d-inline" action="{{route('admin.pesan.destroy', $rent->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data kosong</td>
                                </tr>
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection