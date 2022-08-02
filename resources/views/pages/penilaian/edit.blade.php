@extends('layouts.admin')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Penilaian</h2>
        <p class="dashboard-subtitle">
            Edit Data Penilaian
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>   
            @endif
                <div class="card">
                    <div class="card-body">
                       <form action="{{route('penilaian.update', $penilaian->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ID Karyawan</label>
                                        <input type="text" name="karyawans_id" class="form-control" required value="{{$penilaian->karyawan->id}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <input type="text" name="bulan" class="form-control" required value="{{$penilaian->bulan}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Absensi</label>
                                        <select name="absensi" id="absensi" class="form-control" >
                                            <option value="">{{$penilaian->absensi}}</option>
                                            <option value="Sangat Baik">Sangat Baik</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Kurang">Kurang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Penjualan</label>
                                        <select name="penjualan" id="penjualan" class="form-control" >
                                            <option value="">{{$penilaian->absensi}}</option>
                                            <option value="Sangat Baik">Sangat Baik</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Kurang">Kurang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection