<x-filament-panels::page>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<div id="map" style="width: auto; height: 450px;"></div>

<?php
$markersData = [
    ['coordinates' => [-7.2757340, 112.7204266], 'popupContent' => '<b>Hallo !</b><br />I am smk bahrul ulum.'],
    ['coordinates' => [-7.2933975, 112.8001660], 'popupContent' => '<b>Hallo !</b><br />I am smkn 10 surabaya.']
];
?>

<script>
    const map = L.map('map').setView([-7.2996, 112.7637], 13);

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
</x-filament-panels::page>
