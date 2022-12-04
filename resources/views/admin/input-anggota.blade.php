@extends('admin.layouts.MainLayout')

@section('title', 'Input Anggota KK')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Anggota Keluarga / {{$keluarga->name}}</h5>
                </div>
                <div class="card-body">
                    <form action="keluarga-add" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input name="name" type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                    <small id="emailHelp" class="form-text text-muted">Nama lengkap sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input name="name" type="number" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" required>
                                    <small id="emailHelp" class="form-text text-muted">NIK sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">NIK sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                    <small id="emailHelp" class="form-text text-muted">Tempat lahir sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" placeholder="Tempat Lahir" required>
                                    <small id="emailHelp" class="form-text text-muted">Tanggal lahir sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input name="tanggal_lahir" type="text" class="form-control" id="agama" placeholder="Agama" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <input name="pendidikan" type="text" class="form-control" id="pendidikan" placeholder="Pendidikan" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="darah">Golongan Darah</label>
                                    <input name="darah" type="text" class="form-control" id="darah" placeholder="Gologan Darah" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="perkawinan">Perkawinan</label>
                                    <input name="perkawinan" type="text" class="form-control" id="perkawinan" placeholder="Perkawinan" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hubungan">Hubungan Keluarga</label>
                                    <input name="hubungan" type="text" class="form-control" id="hubungan" placeholder="Hubungan Keluarga" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="suku">Suku</label>
                                    <input name="suku" type="text" class="form-control" id="suku" placeholder="Suku" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input name="kewarganegaraan" type="text" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input name="nama_ayah" type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <a class="btn  btn-danger"href="/admin">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection