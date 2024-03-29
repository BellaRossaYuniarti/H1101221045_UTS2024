@extends('layout.main')

@section('content')
<div class="container-fluid py-4">
    <h1 class="text-center mb-4">Selamat Datang di Sistem Informasi Kepegawaian</h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Pegawai</h5>
                    <p class="card-text">Saat ini terdapat <strong>150</strong> pegawai terdaftar dalam sistem.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Departemen</h5>
                    <p class="card-text">Ada <strong>10</strong> departemen dalam perusahaan.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Jabatan</h5>
                    <p class="card-text">Jumlah jabatan yang tersedia: <strong>20</strong>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Grafik Karyawan per Departemen</h5>
                    <canvas id="grafik-departemen" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Grafik Karyawan per Jabatan</h5>
                    <canvas id="grafik-jabatan" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
