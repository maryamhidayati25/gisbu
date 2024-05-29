@extends('layout.auth')

@section('title', 'Home')

@section('isi')
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">GIS SMK BAHRUL ULUM</h3>
        {{-- <a class="navbar-brand">GIS SMK BAHRUL ULUM</a> --}}
        {{-- <a class="small" href="{{ route('flogin') }}">
            <button class="btn btn-outline-success" type="submit">Login</button>
        </a> --}}
        {{-- <tr>
            <td colspan="2">
              <p class=" text-justify"> Geographic Information System merupakan sistem informasi lokasi prakerin di SMK Bahrul Ulum, selain berfungsi untuk mencari lokasi prakerin GISBU juga sebagai sistem informasi monotoring siswa selama kegiatan prakerin berjalan.<br>
              </p> --}}

        {{-- <div class="text-right">
            <div class="d-flex left-content-start">
            <a class="small" href="{{ route('flogin') }}">
                <button class="btn btn-success" type="submit">Login</button>
            </a> 
            </div> --}}
            <div class="text-left">
                <div class="d-flex justify-content-end"> <!-- Mengubah dari 'left-content-end' ke 'justify-content-start' -->
                    <a class="small" href="{{ route('flogin') }}">
                        <button class="btn btn-success" type="submit">Login</button>
                    </a> 
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-4">
                  <img src="{{ asset ('images/diskominfo.jpeg')}}" alt="diskominfo" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                  <h4>Dinas Komunikasi Dan Informasi</h4>
                  
                </div>
                <div class="col-md-4">
                  <img src="{{ asset ('images/statistik.jpeg')}}" alt="statistik" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
                  <center> <h4>Badan Pusat Statistik </h4> </center>
                </div>
                <div class="col-md-4">
                  <img src= "{{ asset ('images/kemenhuham.jpeg')}}" alt="kemenhuham" class="img-fluid rounded"  style="width: 100%; height: 200px; object-fit: cover;">
                  <center> <h4>Kementrian Hukum dan HAM Provinsi Jawa Timur</h4> </center>
                </div>
                <div class="col-md-4">
                    <img src= "{{ asset ('images/trias.jpeg')}}" alt="trias" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
                    <center> <h4>PT. Surya Trias Gemilang</h4> </center>
                </div>
                <div class="col-md-4">
                    <img src= "{{ asset ('images/tvri.jpeg')}}" alt="tvri" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
                    <center> <h4>Televisi Republik Indonesia</h4> </center>
              </div>
              <div class="col-md-4">
                <img src= "{{ asset ('images/taspen.jpeg')}}" alt="taspen" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
                <center> <h4>PT. TASPEN</h4> </center>
          </div>
            </div> --}}

            {{-- <div class="text-left mb-4">
                <img src="{{ asset('images/taspen.jpeg.jpeg') }}" alt="taspen" width="350">
            <figcaption>PT TASPEN Surabaya</figcaption>
            <div class="text-center mb-4">
                <img src="{{ asset('images/kemenhuham.jpeg.jpeg') }}" alt="kemenhuham" width="350 ">
            <figcaption>Kementrian Hukum dan HAM Jawa Timur</figcaption>
            <div class="text-right mb-4">
                <img src="{{ asset('images/diskominfo.jpeg.jpeg') }}" alt="diskominfo" width="350">
            <figcaption>Dinas Komunikasi Informasi Jawa Timur</figcaption>
            <div class="text-left mb-4">    
                <img src="{{ asset('images/statistik.jpeg.jpeg') }}" alt="statistik" width="350">
            <figcaption>Badan Statitiska Surabaya</figcaption>
            <div class="text-center mb-4">     
                <img src="{{ asset('images/trias.jpeg.jpeg') }}" alt="trias " width="250">
            <figcaption>PT Trias Gemilang Surabaya</figcaption>
            </div> --}}
            
    </div>
    </nav>
        {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        
        <center>
        <div id="map" style="width: 850px; height: 350px;"></div>
        </center>
        <script>
            const map = L.map('map').setView([-7.29, 112.725], 13);
            
            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            // Mengambil data marker dari PHP
            const markersData = <?php echo json_encode($markersData); ?>;

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
        </script> --}}

@endsection
