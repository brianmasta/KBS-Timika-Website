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
                                    <select name="pendidikan" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                                        <option value="Tamat SD / Sederajat">Tamat SD/ Sederajat</option>
                                        <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                                        <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                        <option value="TDIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                        <option value="TDIPLOMA I / II">DIPLOMA I / II</option>
                                        <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                        <option value="STRATA II">STRATA II</option>
                                        <option value="STRATA III">STRATA III</option>
                                    </select>
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
                                    <select name="darah" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="perkawinan">Perkawinan</label>
                                    <select name="perkawainan" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hubungan">Hubungan Keluarga</label>
                                    <select name="hunungan" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="Suami">Suami</option>
                                        <option value="Istri">Istri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Menantu">Menantu</option>
                                        <option value="Orang Tua">Orang Tua</option>
                                        <option value="Mertua">Mertua</option>
                                        <option value="Famili Lain">Famili Lain</option>
                                        <option value="Pembantu">Pembantu</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="suku">Suku</label>
                                    <input name="suku" type="text" class="form-control" id="suku" placeholder="Suku" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" class="form-control" required>
                                        <option>Pilih</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Asing">Asing</option>
                                    </select>
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