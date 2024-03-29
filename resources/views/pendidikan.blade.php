@extends('layout.main')
@section('content')
    <div class="container-fluid py-4">
    <div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="card">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Form Pendidikan</h6>
        </div>
        <div class="card-body p-3">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pegawai">
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
                <div class="mb-3">
                    <label for="institution" class="form-label">Institusi Pendidikan</label>
                    <input type="text" class="form-control" id="institution" name="institution">
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="major" name="major">
                </div>
                <div class="mb-3">
                    <label for="graduation_year" class="form-label">Tahun Lulus</label>
                    <input type="number" class="form-control" id="graduation_year" name="graduation_year">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection