@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                    <form action="/submit-master-jabatan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan">
                                <option value="1">Kepala Sekolah</option>
                                <option value="2">Wakil Kepala Sekolah</option>
                                <option value="3">Waka Kurikulum</option>
                                <option value="4">Waka Kesiswaan</option>
                                <option value="5">Waka Sarpras</option>
                                <option value="6">Waka Humas</option>
                                <option value="7">Tata Usaha</option>
                                <option value="8">Dewan Guru</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection