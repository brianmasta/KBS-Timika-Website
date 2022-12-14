@extends('admin.layouts.MainLayout')

@section('title', 'Input Keluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Input Keluarga</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <form action="keluarga-add" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Kepala Keluarga</label>
                                    <input name="name" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                    <small id="emailHelp" class="form-text text-muted">Nama lengkap sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat">
                                    <small id="emailHelp" class="form-text text-muted">Alamat di Timika.</small>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="alamat">Rayon</label>
                                    <select class="mb-3 form-control">
                                        <option>Pilih</option>
                                        <option>Rayon 1</option>
                                        <option>Rayon 2</option>
                                        <option>Rayon 3</option>
                                        <option>Rayon 4</option>
                                        <option>Rayon 5</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">Rayon sesuai tempat tinggal sekarang.</small>
                                </div> --}}
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input name="provinsi" type="text" class="form-control" id="provinsi" placeholder="Provinsi">
                                    <small id="emailHelp" class="form-text text-muted">Alamat di Timika.</small>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input name="kabupaten" type="text" class="form-control" id="kabupaten" placeholder="Kabupaten">
                                    <small id="emailHelp" class="form-text text-muted">Provinsi sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="distrik">Distrik</label>
                                    <input name="distrik" type="text" class="form-control" id="distrik" placeholder="Distrik">
                                    <small id="emailHelp" class="form-text text-muted">Distrik sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Desa/Kelurahan</label>
                                    <input name="kelurahan" type="text" class="form-control" id="desa" placeholder="Desa/Kelurahan">
                                    <small id="emailHelp" class="form-text text-muted">Desa/Kecamatan sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="rt">RT/TW</label>
                                    <input name="rt" type="text" class="form-control" id="rt" placeholder="RT/RW">
                                    <small id="emailHelp" class="form-text text-muted">RT/RW sesuai alamt sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Kode Pos</label>
                                    <input name="pos" type="number" class="form-control" id="pos" placeholder="Kode Pos">
                                    <small id="emailHelp" class="form-text text-muted">Kode Pos Sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor HP</label>
                                    <input name="hp" type="number" class="form-control" id="hp" placeholder="Nomor HP">
                                    <small id="emailHelp" class="form-text text-muted">No HP yang masih aktif.</small>
                                </div>
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <button type="submit" class="btn  btn-danger">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection