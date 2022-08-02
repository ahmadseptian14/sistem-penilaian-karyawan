@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Penilaian Kinerja {{$karyawan->nama}}</h2>
                <p class="dashboard-subtitle">
                    Daftar Penilaian
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @if (Auth::user()->roles == 'ADMIN')
                                <a href="{{route('penilaian.create', $karyawan->id,)}}" class="btn btn-primary mb-3"> + Tambah Nilai Kinerja</a>
                                @endif
                                <div">
                                    <table
                                        class="table table-hover table-bordered table-striped"
                                        id="table1" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Absensi</th>
                                                <th>Penjualan</th>
                                                @if (Auth::user()->roles == 'kadiv')
                                                <th>Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($penilaians as $penilaian)
                                                <tr>
                                                    <td>{{$penilaian->bulan}}</td>
                                                    <td>{{$penilaian->absensi}}</td>
                                                    <td>{{$penilaian->penjualan}}</td>
                                                    @if (Auth::user()->roles == 'kadiv')
                                                    <td>
                                                        <div class="btn-group">
                                                            <div class="dropdown">
                                                                <button class="btn btn-primay dropdown-toggle mr-1 mb-1"
                                                                    type="button" data-toggle="dropdown">
                                                                    Aksi
                                                                </button>
                                                                <div class="dropdown-menu">
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
                                                    @endif
                                                    
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
                            <table>
                               <thead>
                                   <tr>
                                       <th>Notes Penjualan</th>
                                       <th>&nbsp;</th>
                                       <th>&nbsp;</th>
                                       <th>&nbsp;</th>
                                       <th>Notes Absensi</th>
                                   </tr>
                                   <tr>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                                   <tr>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                                   <tr>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>20≥ = Sangat Baik</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>20≥ = Sangat Baik</td>
                                   </tr>
                                   <tr>
                                       <td>10≥ = Baik</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>15≥ = Baik</td>
                                   </tr>
                                   <tr>
                                       <td>5≥ = Cukup</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>10≥ = Cukup</td>
                                   </tr>
                                   <tr>
                                       <td>5≤ = Kurang</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>10≤ = Kurang </td>
                                   </tr>
                               </tbody>
                            </table>
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
