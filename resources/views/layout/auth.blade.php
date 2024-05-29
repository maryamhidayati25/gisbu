<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="/temsba2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/temsba2/css/sb-admin-2.min.css" rel="stylesheet">

  <title>@yield('title')</title>

</head>

<body class="bg-gradient-success">

  @yield('isi')
  
  <div class="container">
    <div class="col-md-4">
      <img src="{{ asset ('images/diskominfo.jpeg')}}" alt="diskominfo" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
      <p class="text-white-50">Dinas Komunikasi Dan Informasi</p>  
    </div>
    <div class="row">
    <div class="col-md-4">
      <img src="{{ asset ('images/statistik.jpeg')}}" alt="statistik" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
       {{-- <h4>Badan Pusat Statistik </h4>  --}}
       <p class="text-white-50">Badan Pusat Statistik</p> 
    </div>
    <div class="col-md-4">
      <img src= "{{ asset ('images/kemenhuham.jpeg')}}" alt="kemenhuham" class="img-fluid rounded"  style="width: 100%; height: 200px; object-fit: cover;">
      {{-- <h4>Kementrian Hukum dan HAM Provinsi Jawa Timur</h4> --}}
      <p class="text-white-50">Kementrian Hukum dan HAM Provinsi Jawa Timur</p>
    </div>
    
    <div class="col-md-4">
        <img src= "{{ asset ('images/trias.jpeg')}}" alt="trias" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
       {{-- <h3>PT. Surya Trias Gemilang</h>  --}}
       <p class="text-white-50">PT. Surya Trias Gemilang</p>
    </div>
    <div class="col-md-4">
        <img src= "{{ asset ('images/tvri.jpeg')}}" alt="tvri" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
        <h4>Televisi Republik Indonesia</h4> 
  </div>
  <div class="col-md-4">
    <img src= "{{ asset ('images/taspen.jpeg')}}" alt="taspen" class="img-fluid"  style="width: 100%; height: 200px; object-fit: cover;">
    <h4>PT. TASPEN</h4>
    
    <div id="map">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Inisialisasi peta dengan koordinat dan zoom level tertentu
        const map = L.map('map').setView([-7.29, 112.725], 13);

        // Layer peta dari OpenStreetMap
        const tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Mengambil data marker dari PHP (Ganti dengan data sesuai kebutuhan)
        const markersData = [
            {
                coordinates: [-7.29, 112.725],
                popupContent: 'Ini adalah lokasi awal'
            },
            {
                coordinates: [-7.3, 112.73],
                popupContent: 'Ini adalah lokasi kedua'
            }
        ];

        // Loop melalui data marker dan membuat marker untuk setiap data
        markersData.forEach(data => {
            const marker = L.marker(data.coordinates).addTo(map)
                .bindPopup(data.popupContent).openPopup();
        });

        // Fungsi yang akan dipanggil ketika peta diklik
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(`Anda mengklik peta di koordinat: ${e.latlng.toString()}`)
                .openOn(map);
        }

        // Event listener untuk klik pada peta
        map.on('click', onMapClick);

    </script>
    </div>
  </div>
  </div>
</div>
</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script> 

  <!-- Bootstrap core JavaScript-->
  <script src="/temsba2/vendor/jquery/jquery.min.js"></script>
  <script src="/temsba2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Core plugin JavaScript-->
  <script src="/temsba2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/temsba2/js/sb-admin-2.min.js"></script>

  @yield('script')

</body>

</html>