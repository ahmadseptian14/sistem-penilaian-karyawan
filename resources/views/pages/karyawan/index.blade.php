@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Sales</h2>
                <p class="dashboard-subtitle">
                    Daftar Sales
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @if (Auth::user()->roles == 'admin')
                                <a href="{{route('karyawan.create')}}" class="btn btn-primary mb-3"> + Tambah Sales
                                    Baru</a>
                                @endif
                              
                                <div>
                                    <table
                                        class="table table-hover table-bordered table-striped"
                                        id="table1" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>No.Hp</th>
                                                <th>Alamat</th>
                                                @if (Auth::user()->roles == 'admin')
                                                <th>Aksi</th>

                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($karyawans as $karyawan)
                                                <tr>
                                                    <td>{{ $karyawan->nik }}</td>
                                                    <td>{{ $karyawan->nama }}</td>
                                                    <td>{{ $karyawan->no_hp }}</td>
                                                    <td>{{ $karyawan->alamat }}</td>
                                                    @if (Auth::user()->roles == 'admin')
                                                    <td>
                                                        <div class="btn-group">
                                                            <div class="dropdown">
                                                                <button class="btn btn-primay dropdown-toggle mr-1 mb-1"
                                                                    type="button" data-toggle="dropdown">
                                                                    Aksi
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    {{-- <a href="{{ route('penilaian.show', $karyawan->id) }}"
                                                                        class="dropdown-item">
                                                                        Nilai Kinerja
                                                                    </a> --}}
                                                                    
                                                                    <a href="{{ route('karyawan.edit', $karyawan->id) }}"
                                                                        class="dropdown-item">
                                                                        Edit
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('karyawan.destroy', $karyawan->id) }}"
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
                                                    <td colspan="7" class="text-center">Tidak Ada karyawan</td>
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
