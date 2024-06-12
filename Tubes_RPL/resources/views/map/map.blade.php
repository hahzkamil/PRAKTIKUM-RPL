@section ('map_content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FishOn!</title>

    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h2>Lokasi Saat Ini</h2>
    <div id="map"></div>
</div>

<script type="text/javascript">
    function initMap() {
        const myLatLng = { lat: -6.972757, lng: 107.632906 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello FishOner!",
        });
    }

    window.initMap = initMap;
</script>

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

</body>
</html>
@endsection