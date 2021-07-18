@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->nama_mahasiswa }}">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->tgl_lahir }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Jenis kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                        <option value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : '' }} >Laki-Laki</option>
                                        <option value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }} >Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nomor Telepon</label>
                                    <input type="number" name="hp" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->hp }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none">
                                        {{ is_null('$mahasiswa') ? '' : $mahasiswa->alamat }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
