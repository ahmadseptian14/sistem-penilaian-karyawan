@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Penilaian</h2>
                <p class="dashboard-subtitle">
                    Daftar Penilaian Kinerja
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('penilaian.create')}}" class="btn btn-primary mb-3"> + Tambah Penilaian Kinerja Baru</a>
                                <div>
                                    <table
                                        class="table table-hover table-bordered table-striped"
                                        id="table1" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Penjualan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($penilaians as $penilaian)
                                                <tr>
                                                    <td>{{ $penilaian->karyawan->nama }}</td>
                                                    <td>{{ $penilaian->bulan }}</td>
                                                    <td>{{ $penilaian->tahun }}</td>
                                                    <td>{{ $penilaian->kriteria->kategori }}</td>
                                                    <td>{{ $penilaian->kriteria->keterangan }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <div class="dropdown">
                                                                <button class="btn btn-primay dropdown-toggle mr-1 mb-1"
                                                                    type="button" data-toggle="dropdown">
                                                                    Aksi
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    {{-- <a href="{{ route('penilaian.show', $penilaian->id) }}"
                                                                        class="dropdown-item">
                                                                        Nilai Kinerja
                                                                    </a> --}}
                                                                    
                                                                    <a href="{{ route('penilaian.edit', $penilaian->id) }}"
                                                                        class="dropdown-item">
                                                                        Edit
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('penilaian.destroy', $penilaian->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-danger">
                                                                            Hapus
                                                                        </button>
                                                                     </form>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada penilaian</td>
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
