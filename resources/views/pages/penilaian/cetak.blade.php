<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Penilaian Kinerja Karyawan </title>
  
  <style>
    .thead{
    background-color: #3B82F6;
    color: #ffffff;
    
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="title text-center mb-5">
      <h2>Laporan Penialian Kinerja Karyawan</h2>
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">NIK</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Bulan</th>
          <th scope="col">Tahun</th>
          <th>Penjualan</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($penilaians as $penilaian)
          
        <tr>
          <td>{{ $i++ }} </td>
          <td>{{ $penilaian->karyawan->nama }}</td>
          <td>{{ $penilaian->karyawan->nik }}</td>
          <td>{{ $penilaian->karyawan->no_hp }}</td>
          <td>{{ $penilaian->bulan }}</td>
          <td>{{ $penilaian->tahun }}</td>
          <td>{{ $penilaian->kriteria->kategori }}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>