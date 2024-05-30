@extends('layout/main')

@section('mystyle')
<style>
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  #map {
    height: 70%;
    width: 100%;
  }

  #map-canvas {
    height: 70%;
    width: 100%;
  }

  /* Medium devices (tablets, 768px and up) */
  @media (min-width: 768px) {
    #map {
      height: 100%;
      width: 100%;
    }

    #map-canvas {
      height: 100%;
      width: 100%;
    }
  }
</style>
@endsection

@section('title', 'Pilih Lokasi')

@section('isi')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<div class=" container-fluid">
  @if ($diterima == null)
  <div class="row">
    <div class="col col-md-8">
      <div class=" card p-0" style="height: 480px;">
        <div class=" card-body p-1">
          <div id="map" style="width: auto;"></div>
        </div>
      </div>

      {{-- <script>
        // function initMap() {
        //   const mapOptions = {
        //     zoom: 10,
        //     center: { lat: -33.9, lng: 151.2 },
        //     disableDefaultUI: true,
        //   });
      
        //   const mapElement = document.getElementById('map');
      
        //   const map = new google.maps.Map(mapElement, mapOptions);
      
        //   setMarkers(map, industries);
      
        // }

        // const industries = [
        //   <php $data = file_get_contents('http://localhost:8000/sebaran_industri') ?>
        //     <php if (json_decode($data, true)) {
        //       console('ok');
        //       $obj = json_decode($data);
        //       foreach($obj->results as $item) {
        //         ?>
        //         [<php echo $item->id ?>,''<php echo $item->nama ?>'',''<php echo $item->alamat ?>'',<php echo $item->latitude ?>,<php echo $item->longitude ?>],
        //       <php } ?>
        //       <php } ?>
        // ];
          
        // function setMarkers(map, industries) {
        //   const globalPin = '';
      
        //   for (let i = 0; i < industries.length; i++) {
        //     const industri = industries[i];
      
        //     const myLatLng = new google.maps.LatLng(industri[3], industri[4]);
      
        //     const infowindow = new google.maps.InfoWindow({content: contentString});
      
        //     const contentString = 
        //       '<div id="content">'+
        //       '<div id="siteNotice">'+
        //       '</div>'+
        //       '<h5 id="firstHeading" class"firstHeading">' + industri[1] + '</h5>'+
        //       '<div id="bodyContent">'+
        //       '<a href="mengajukan/"' + industri[0] + '>Ajukan PKL</a>'+
        //       '</div>'+
        //       '</div>';
      
        //     const marker = new google.maps.Marker({
        //       position:myLatLng,
        //       map:map,
        //       title:industri[1],
        //       icon:''
        //     });
      
        //     google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
        //   }
        // }
      
        // function getInfoCallback(map, content) {
        //   const infowindow = new google.maps.InfoWindow({content: content});
        //   return function () {
        //     infowindow.setContent(content);
        //     infowindow.open(map, this);
        //   };
        // }
      
        // initMap();
      </script> --}}

      {{-- <script>
        // var marker;
        // function initialize(){
        // // Variabel untuk menyimpan informasi lokasi
        // var infoWindow = new google.maps.InfoWindow;
        // //  Variabel berisi properti tipe peta
        // var mapOptions = {
        //     mapTypeId: google.maps.MapTypeId.ROADMAP
        // } 

        //     // Pembuatan peta
        //     var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
        //     // Variabel untuk menyimpan batas kordinat
        //     var bounds = new google.maps.LatLngBounds();
        //     // Pengambilan data dari database MySQL
        //     <php
        //     // Sesuaikan dengan konfigurasi koneksi Anda
        //     $host 	  = "localhost";
        //     $username = "root";
        //     $password = "";
        //     $Dbname   = "sigpkl";
        //     $db 	  = new mysqli($host,$username,$password,$Dbname);
            
        //     $query = $db->query("SELECT * FROM industries ORDER BY nama ASC"); ?>
        //     <php while ($row = $query->fetch_assoc()) {$nama = $row["nama"];$lat  = $row["latitude"];$long = $row["longitude"];echo "addMarker($lat, $long, '$nama');\n";}?>
        //     <php var_dump($nama) ?>
        //     // Proses membuat marker 
        //     function addMarker(lat, lng, info){
        //         var lokasi = new google.maps.LatLng(lat, lng);
        //         bounds.extend(lokasi);
        //         var marker = new google.maps.Marker({
        //             map: peta,
        //             position: lokasi
        //         });       
        //         peta.fitBounds(bounds);
        //         bindInfoWindow(marker, peta, infoWindow, info);
        //       }
        //     // Menampilkan informasi pada masing-masing marker yang diklik
        //     function bindInfoWindow(marker, peta, infoWindow, html){
        //         google.maps.event.addListener(marker, 'click', function() {
        //         infoWindow.setContent(html);
        //         infoWindow.open(peta, marker);
        //       });
        //     }
        // }
      </script> --}}

      {{-- <script>
        // function initMap() {
        //   var map = new google.maps.Map(document.getElementById('map'), {
        //     center: new google.maps.LatLng(-7.0016372,110.4428114),
        //     zoom: 12
        //   });
        //   var infoWindow = new google.maps.InfoWindow;

        //     downloadUrl('http://127.0.0.1:8000/app/Http/Controllers/map.php', function(data) {

        //       var markers=JSON.parse(data.responseText);

        //       markers.forEach(function(element) {          
        //           var id_pariwisata = element.id_pariwisata;
        //           var nama_pariwisata = element.nama_pariwisata;
        //           var alamat = element.alamat;
        //           var point = new google.maps.LatLng(
        //               parseFloat(element.lat),
        //               parseFloat(element.long));

        //           var infowincontent = document.createElement('div');
        //           var strong = document.createElement('strong');
        //           strong.textContent = nama_pariwisata
        //           infowincontent.appendChild(strong);
        //           infowincontent.appendChild(document.createElement('br'));

        //           var text = document.createElement('text');
        //           text.textContent = alamat
        //           infowincontent.appendChild(text);
        //           var marker = new google.maps.Marker({
        //             map: map,
        //             position: point
        //           });
        //           marker.addListener('click', function() {
        //             infoWindow.setContent(infowincontent);
        //             infoWindow.open(map, marker);
        //           });
        //       });
              
        //     });
        //   }
        // function downloadUrl(url, callback) {
        //   var request = window.ActiveXObject ?
        //       new ActiveXObject('Microsoft.XMLHTTP') :
        //       new XMLHttpRequest;

        //   request.onreadystatechange = function() {
        //     if (request.readyState == 4) {
        //       request.onreadystatechange = doNothing;
        //       callback(request, request.status);
        //     }
        //   };

        //   request.open('GET', url, true);
        //   request.send(null);
        // }

        // function doNothing() {}
      </script> --}}

      {{-- <script>
        // function initialize() {
        //   var latitude = -7.2756349,
        //       longitude = 107.9162711,
        //       radius = 18000, //how is this set up
        //       center = new google.maps.LatLng(latitude,longitude),
        //       bounds = new google.maps.Circle({center: center, radius: radius}).getBounds(),
        //       mapOptions = {
        //           center: center,
        //           zoom: 13,
        //           mapTypeId: google.maps.MapTypeId.ROADMAP,
        //           scrollwheel: false
        //       };

        //   var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        //   setMarkers(center, radius, map);
        // }

        // function setMarkers(center, radius, map) {
        //     var json = (function () { 
        //       // var json = null; 
        //       $.ajax({ 
        //         'async': false, 
        //         'global': false,
        //         'type' : "get",
        //         'url': "http://127.0.0.1:8000/sebaran_industri", 
        //         'dataType': "json", 
        //         'success': function (data) 
        //         {
        //           json = data;
        //         }  

        //       });
        //       return json;
        //     })();

        //     var circle = new google.maps.Circle({
        //       strokeColor: '#000000',
        //       strokeOpacity: 0.25,
        //       strokeWeight: 1.0,
        //       fillColor: '#ffffff',
        //       fillOpacity: 0.1,
        //       clickable: false,
        //       map: map,
        //       center: center,
        //       radius: radius
        //     });
        //     var bounds = circle.getBounds();

        //     //loop between each of the json elements
        //     for (var i = 0, length = json.length; i <script length; i++) {
        //       var data = json[i],
        //       latLng = new google.maps.LatLng(data.latitude, data.longitude); 

        //       if(bounds.contains(latLng)) {
        //       // Creating a marker and putting it on the map
        //       var marker = new google.maps.Marker({
        //         position: latLng,
        //         map: map,
        //         title: data.nama
        //       });
        //       infoBox(map, marker, data);
        //     }
        //   }

        //   circle.bindTo('center', marker, 'position');
        // }

        // function infoBox(map, marker, data) {
        //   var infoWindow = new google.maps.InfoWindow();
        //   // Attaching a click event to the current marker
        //   google.maps.event.addListener(marker, "mouseover", function(e) {
        //     infoWindow.setContent(data.nama);
        //     infoWindow.open(map, marker);
        //   });
          

        //   // Creating a closure to retain the correct data 
        //   // Note how I pass the current data in the loop into the closure (marker, data)
        //   (function(marker, data) {
        //     // Attaching a click event to the current marker
        //     google.maps.event.addListener(marker, "mouseover", function(e) {
        //       infoWindow.setContent(data.nama);
        //       infoWindow.open(map, marker);
        //     });
          
        //     google.maps.event.addListener(marker, "mouseout", function(e) {
        //       infoWindow.close(map, marker);
        //     });
        //   })(marker, data);
        // }

        // google.maps.event.addDomListener(window, 'load', initialize);
        // var jsdec = json_decode($json);
        // var indus = @json($industri);
        // console.log(indus);
        // console.log(jsdec);
      </script> --}}

      <script>
            const map = L.map('map').setView([-7.29, 112.725], 13);

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            // Mengambil data marker dari PHP
            const markersData = <?=$marker?>;
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
      

      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>

    </div>
    <div class="col col-md-4 overflow-auto" style="max-height: 480px;">
      <form action="{{ route('plh_industri') }}" method="get">
        <div class=" input-group my-3">
          <input type="text" class=" form-control" name="keywrd" id="keywrd" aria-describedby="search"
            placeholder="Masukkan kata kunci">
          <button type="submit" id="search" class=" btn btn-outline-info">Cari</button>
        </div>
      </form>
      @if ($data == 0)
      <div class="row">
        <div class="col">
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
              <strong>Kosong!</strong> Industri yang dicari tidak ditemukan!!
            </div>
          </div>
        </div>
      </div>
      @else
      @foreach ($industri as $i)
      <div class="card mb-2" style="max-height: 340px">
        <div class="card-body">
          <h5 class="card-title">{{$i->nama}}</h5>
          <h6 class="card-subtitle">{{$i->bidang}}</h6>
          <a href="/mengajukan/{{$i->id}}" class="badge badge-primary">Ajukan</a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
  @else
  <div class=" row">
    <div class=" col-6">
      <div class=" card border-left-success" style="width: 80%; height: 240px;">
        <div class=" card-body text-success">
          <h4>Anda sudah diterima di <b>{{$terima->nama}}</b>, yang bergerak di bidang <b>{{$terima->bidang}}</b> dan
            berada di <b>{{$terima->alamat}}</b> </h4>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
@endsection