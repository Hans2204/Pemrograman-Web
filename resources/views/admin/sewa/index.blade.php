@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar DVD</h3>
            <a href="{{route('admin.sewa.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Film</th>
                            <th>Gambar Film</th>
                            <th>Harga Sewa</th>
                            <th>Durasi Film</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sewa as $rent)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$rent -> nama_dvd}}</td>
                                <td><img src="{{Storage::url($rent->gambar)}}" width="200"></td>
                                <td>{{$rent -> harga_sewa}}</td>
                                <td>{{$rent -> durasi}}</td>
                                <td>{{$rent -> status}}</td>
                                <td><a href="{{route('admin.sewa.edit', $rent->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <form onclick="return confirm('Anda yakin data ini dihapus ?');" class="d-inline" action="{{route('admin.sewa.destroy', $rent->id)}}" method="POST">
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