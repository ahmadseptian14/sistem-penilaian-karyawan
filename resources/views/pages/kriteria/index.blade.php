@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kriteria</h2>
                <p class="dashboard-subtitle">
                    Daftar Kriteria
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @if (Auth::user()->roles == 'admin')
                                <a href="{{route('kriteria.create')}}" class="btn btn-primary mb-3"> + Tambah Kriteria Baru</a>
                                @endif
                                <div">
                                    <table
                                        class="table table-hover table-bordered table-striped"
                                        id="table1" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Jumlah Penjualan</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kriterias as $kriteria)
                                                <tr>
                                                    <td>{{ $kriteria->jumlah_penjualan }}</td>
                                                    <td>{{ $kriteria->kategori }}</td>
                                                    <td>{{ $kriteria->keterangan }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <div class="dropdown">
                                                                <button class="btn btn-primay dropdown-toggle mr-1 mb-1"
                                                                    type="button" data-toggle="dropdown">
                                                                    Aksi
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    {{-- <a href="{{ route('penilaian.show', $kriteria->id) }}"
                                                                        class="dropdown-item">
                                                                        Nilai Kinerja
                                                                    </a> --}}
                                                                    @if (Auth::user()->roles == 'admin')
                                                                    <a href="{{ route('kriteria.edit', $kriteria->id) }}"
                                                                        class="dropdown-item">
                                                                        Edit
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('kriteria.destroy', $kriteria->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-danger">
                                                                            Hapus
                                                                        </button>
                                                                     </form>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada kriteria</td>
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
