@extends('layout.main')

@section('mystyle')
@endsection

@section('title', 'Data Siswa')

@section('isi')
@if (Auth::user()->is_industri == 1)
<div class=" container-fluid">
<div class="container">

  <div class="row justify-content-center">
    <div class="col-10">

      <h3 class="mb-5">DAFTAR SISWA MAGANG</h3>

      <div class=" row">
        <div class=" col-7">
          <form action="{{ route('data_siswa') }}" method="get">
            <div class=" input-group my-3">
              <input type="text" class=" form-control" name="keywrd" id="keywrd" aria-describedby="search"
                placeholder="Masukkan kata kunci">
              <button type="submit" id="search" class=" btn btn-outline-info">Cari</button>
            </div>
          </form>
        </div>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelas</th>
            <th scope="col">Pembimbing</th>
            <th scope="col">No Pembimbing</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @if ($data == 0)
            <td colspan="6">
              <div class="row">
                <div class="col">
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                      <strong>Kosong!</strong> Tidak ada Siswa yang terdaftar magang di tempat Anda!!
                    </div>
                  </div>
                </div>
              </div>
            </td>
            @else
            @foreach ($siswa as $s)
            <th scope="col">{{ $loop->iteration }}</th>
            <td>{{ $s->nama_siswa }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->nama_guru }}</td>
            <td>{{ $s->n_wa }}</td>
          </tr>
          @endforeach
          <div class=" text-gray-600 bg-secondary-50">
            {{ $siswa->links() }}
          </div>
          @endif
        </tbody>
      </table>

    </div>
  </div>

</div>
@endif

@if (Auth::user()->is_guru == 1)
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script> -->
<div class="container">
  <!-- <div class=" card p-0" style="height: 300px;">
    <div class=" card-body p-1">
      <div id="map" style="width:auto;"></div>
    </div>
  </div> -->
  <div class="row justify-content-center">
    <div class="col-10">

      <h3>DAFTAR SISWA BIMBINGAN</h3>

      <div class=" row">
        <div class=" col-7">
          <form action="{{ route('data_siswa') }}" method="get">
            <div class=" input-group my-3">
              <input type="text" class=" form-control" name="keywrd" id="keywrd" aria-describedby="search"
                placeholder="Masukkan kata kunci">
              <button type="submit" id="search" class=" btn btn-outline-info">Cari</button>
            </div>
          </form>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelas</th>
            <th scope="col">Tempat</th>
            <th scope="col">No Pem. Lapangan</th>
          </tr>
        </thead>
        <tbody>
          @if ($data == 0)
          <tr>
            <td colspan="6">
              <div class="row">
                <div class="col">
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                      <strong>Kosong!</strong> Tidak ada siswa yang dibimbing oleh Anda!!
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @else
          @foreach ($sistem as $s)
          <tr>
            <th scope="col">{{ $loop->iteration }}</th>
            <td>{{ $s->nama_siswa }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->nama_indu }}</td>
            <td>{{ $s->n_wa }}</td>
          </tr>
          @endforeach
          <div class=" text-gray-600 bg-secondary-50">
            {{ $sistem->links() }}
          </div>
          @endif
        </tbody>
      </table>

    </div>
  </div>
  <!-- <script>
      const map = L.map('map').setView([-7.29, 112.725], 13);

      const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      // Mengambil data marker dari PHP
      const markersData = ;
      // Loop through marker data and create markers
      markersData.forEach(data => {
          const marker = L.marker(data.coordinates).addTo(map)
              .bindPopup(data.popupContent).openPopup();
      });

      function onMapClick(e) {
          popup
              .setLatLng(e.latlng)
              .setContent(`You clicked the map at ${e.latlng.toString()}`)
              .openOn(map);
      }

      map.on('click', onMapClick);
  </script> -->
</div>
@endif
@endsection