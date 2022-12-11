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
                    <form method="post" action="/anggota-add" >
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
                                    <input name="nik" type="number" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" required>
                                    <small id="emailHelp" class="form-text text-muted">NIK sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="kelamin_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($kelamin as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
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
                                    <select name="agama_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($agama as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select name="pendidikan_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($pendidikan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <select name="pekerjaan_id" class="form-control" required>
                                        <option value="">Pilih</option>
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
                                    <select name="darah_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($darah as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="perkawinan">Perkawinan</label>
                                    <select name="perkawinan_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($perkawinan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hubungan">Hubungan Keluarga</label>
                                    <select name="hubungan_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($hubungan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
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
                                    <select name="kewarganegaraan_id" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($kewarganegaraan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>>
                                        @endforeach
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
                            <input type="hidden" value="{{$keluarga->id}}" name="kk_id">
                            <div class="form-group">
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <a class="btn btn-danger"href="/detail-kk/{{$keluarga->id}}">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection