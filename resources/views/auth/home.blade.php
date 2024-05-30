@extends('layout.auth')

@section('title', 'Home')

@section('isi')
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">GIS SMK BAHRUL ULUM</a>
        <a class="small" href="{{ route('flogin') }}">
            <button class="btn btn-outline-success" type="submit">Login</button>
        </a>
    </div>
    </nav>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <blockquote class="blockquote mb-0" style="padding:5%">
                                    <p>Geographic Information System merupakan sistem informasi lokasi prakerin di SMK Bahrul Ulum, selain berfungsi untuk mencari lokasi prakerin GISBU juga sebagai sistem informasi monotoring siswa selama kegiatan prakerin berjalan.</p>
                                </blockquote>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="{{ asset ('images/diskominfo.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">Dinas Komunikasi Dan Informasi</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset ('images/statistik.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">Badan Pusat Statistik</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src= "{{ asset ('images/kemenhuham.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">Kementrian Hukum dan HAM Provinsi Jawa Timur</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset ('images/trias.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">PT. Surya Trias Gemilang</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset ('images/tvri.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">Televisi Republik Indonesia</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <img src="{{ asset ('images/taspen.jpeg')}}" class="d-block w-100 img-fluid rounded" style="width: 100%; height: 210px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p style="transform:translateY(50px);color:white">PT. TASPEN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="map" style="width: auto; height: 65vh;"></div>
            </div>
        </div>  

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
        </script>

@endsection