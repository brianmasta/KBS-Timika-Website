@extends('admin.layouts.MainLayout')

@section('title', 'Hapus Anggota')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hapus Anggota</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-10">
                            <form action="/destroy-anggota/{{ $anggota->id }}" method="post">
                                @csrf
                                @method('delete')
                                <h2>Apakah Anda yakin untuk menghapus data: <strong>{{$anggota->name}}</strong></h2>
                                <button type="submit" class="btn  btn-danger">Hapus</button>
                                <a class="btn  btn-primary"href="/data-kk">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection