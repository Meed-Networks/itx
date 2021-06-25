<link href="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.js"></script>
<div class="grid grid-cols-1 gap-5 px-2 py-5 sm:px-5 lg:grid-cols-2">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="flex flex-col items-center justify-center py-20 space-y-3 text-purple-900 lg:items-start">
        <span class="text-lg font-bold">
            See Our Coverage Areas
        </span>
        <p class="px-5 font-semibold lg:px-0 lg:pr-10">
            We cover a majority of area in FCT. Which Includes Wuse, Garki, Maitama and Apo
        </p>
    </div>
    <div id="map" class="w-full h-[600px]"></div>

</div>

<script src="{{ asset('js/map.js') }}"></script>
<script>
    function readTextFile(file, callback) {
        var rawFile = new XMLHttpRequest();
        rawFile.overrideMimeType("application/json");
        rawFile.open("GET", file, true);
        rawFile.onreadystatechange = function() {
            if (rawFile.readyState === 4 && rawFile.status == "200") {
                callback(rawFile.responseText);
            }
        }
        rawFile.send(null);
    }

    readTextFile("{{ asset('js/nigeria_lga.json') }}", function(text) {
        var data = JSON.parse(text);
        console.log(data.features[0].properties.NAME_1);

        function checkName(data) {
            return data.properties.NAME_1 == 'Federal Capital Territory';
        }
        var result = data.features.filter(checkName);

        function geometry(params) {
            return params.geometry.coordinates;
        }
        var res = result.map(geometry);
        resArr = [];
        for (const i of res) {
            resArr.push(i);
        }
        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken =
            'pk.eyJ1IjoiamltbGFoIiwiYSI6ImNrcTI2MjZ5NDBiNmgydnA0dm5jMDY5bHUifQ.3TBNy9SA1vdIaiSnCTfspA';
        var map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/light-v10', // style URL
            center: [5.809693, 11.368577], // starting position
            zoom: 5 // starting zoom
        });

        map.on('load', function() {
            // Add a data source containing GeoJSON data.
            map.addSource('maine', {
                'type': 'geojson',
                'data': {
                    'type': "FeatureCollection",
                    'features': result
                }
            });

            // Add a new layer to visualize the polygon.
            map.addLayer({
                'id': 'maine',
                'type': 'fill',
                'source': 'maine', // reference the data source
                'layout': {},
                'paint': {
                    'fill-color': '#0080ff', // blue color fill
                    'fill-opacity': 0.5
                }
            });
            // Add a black outline around the polygon.
            map.addLayer({
                'id': 'outline',
                'type': 'line',
                'source': 'maine',
                'layout': {},
                'paint': {
                    'line-color': '#000',
                    'line-width': 3
                }
            });
        });
    });
</script>
