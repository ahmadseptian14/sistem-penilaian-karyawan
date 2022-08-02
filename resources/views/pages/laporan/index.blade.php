@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Laporan laporan Kinerja</h2>
                <p class="dashboard-subtitle">
                    Laporan laporan Kinerja
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('laporan.cetak')}}" class="btn btn-primary mb-3">Export ke PDF</a>
                                <div">
                                    <table
                                        class="table table-hover table-bordered table-striped"
                                        id="table1" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>No Telepon</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Penjualan</th>
                                                <th>Keterangan</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($laporans as $laporan)
                                                <tr>
                                                    <td>{{ $laporan->karyawan->nama }}</td>
                                                    <td>{{ $laporan->karyawan->nik}}</td>
                                                    <td>{{ $laporan->karyawan->no_hp}}</td>
                                                    <td>{{ $laporan->bulan }}</td>
                                                    <td>{{ $laporan->tahun }}</td>
                                                    <td>{{ $laporan->kriteria->kategori }}</td>
                                                    <td>{{ $laporan->kriteria->keterangan }}</td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada laporan</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-scripts')
    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
        } );
    </script>
@endpush
