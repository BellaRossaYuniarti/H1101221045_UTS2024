@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6 mb-lg-0 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Data Pegawai</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="number" class="form-control" id="gaji" placeholder="Masukkan gaji pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="education_level" class="form-label">Tingkat Pendidikan</label>
                            <select class="form-select" id="education_level" name="education_level">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana">Sarjana</option>
                                <option value="Magister">Magister</option>
                                <option value="Doktor">Doktor</option>
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
