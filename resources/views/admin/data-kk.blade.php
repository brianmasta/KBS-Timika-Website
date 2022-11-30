@extends('admin.layouts.MainLayout')

@section('title', 'Data kk')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Keluarga</h5>
                </div>
                <div class="card-body">
                    <table class="table table-resposive table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluarga as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->hp}}</td>
                                <td>
                                    <div class="btn-group-sm">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection