@extends('admin.layouts.MainLayout')

@section('title', 'Input Anggota KK')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Anggota Keluarga</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/anggota-update" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input value="{{$anggota->name}}" name="name" type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                    <small id="emailHelp" class="form-text text-muted">Nama lengkap sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input value="{{$anggota->nik}}" name="nik" type="number" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" required>
                                    <small id="emailHelp" class="form-text text-muted">NIK sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option value="{{$anggota->kelamin->id}}">{{$anggota->kelamin->name}}</option>
                                        @foreach ($kelamin as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">NIK sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input value="{{$anggota->tempat_lahir}}" name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                    <small id="emailHelp" class="form-text text-muted">Tempat lahir sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input value="{{$anggota->tanggal_lahir}}" name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" placeholder="Tempat Lahir" required>
                                    <small id="emailHelp" class="form-text text-muted">Tanggal lahir sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" class="form-control" required>
                                        <option value="{{$anggota->agama->id}}">{{$anggota->agama->name}}</option>
                                        @foreach ($agama as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select name="pendidikan" class="form-control" required>
                                        <option value="{{$anggota->pendidikan->id}}">{{$anggota->pendidikan->name}}</option>
                                        @foreach ($pendidikan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <select name="pekerjaan" class="form-control" required>
                                        <option value="{{$anggota->pekerjaan->id}}">{{$anggota->pekerjaan->name}}</option>
                                        @foreach ($pekerjaan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="darah">Golongan Darah</label>
                                    <select name="darah" class="form-control" required>
                                        <option value="{{$anggota->darah->id}}">{{$anggota->darah->name}}</option>
                                        @foreach ($darah as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="perkawinan">Perkawinan</label>
                                    <select name="perkawinan" class="form-control" required>
                                        <option value="{{$anggota->perkawinan->id}}">{{$anggota->perkawinan->name}}</option>
                                        @foreach ($perkawinan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hubungan">Hubungan Keluarga</label>
                                    <select name="hubungan" class="form-control" required>
                                        <option value="{{$anggota->hubungan->id}}">{{$anggota->hubungan->name}}</option>
                                        @foreach ($hubungan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="suku">Suku</label>
                                    <input value="{{$anggota->suku}}" name="suku" type="text" class="form-control" id="suku" placeholder="Suku" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <select name="kewarganegaraan" class="form-control" required>
                                        <option value="{{$anggota->kewarganegaraan->id}}">{{$anggota->kewarganegaraan->name}}</option>
                                        @foreach ($kewarganegaraan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input value="{{$anggota->nama_ayah}}" name="nama_ayah" type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input value="{{$anggota->nama_ibu}}" name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" required>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <a class="btn btn-danger"href="/detail-kk/{{$anggota->id}}">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection