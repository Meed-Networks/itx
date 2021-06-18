<link href="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.js"></script>
<div class="grid grid-cols-1 gap-5 px-2 py-5 sm:px-5 lg:grid-cols-2">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="flex flex-col items-center justify-center py-20 space-y-3 text-purple-900 lg:items-start">
        <span class="text-lg font-bold">
            See Our Coverage Areas
        </span>
        <p class="px-5 font-semibold lg:px-0 lg:pr-10">
            However, if you are building a package that utilizes Blade components, you will need to manually register
            your component class and its HTML tag alias.
        </p>
    </div>
    <div id="map" class="w-full h-[600px]"></div>

</div>

<script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken =
        'pk.eyJ1IjoiamltbGFoIiwiYSI6ImNrcTI2MjZ5NDBiNmgydnA0dm5jMDY5bHUifQ.3TBNy9SA1vdIaiSnCTfspA';
    var map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/light-v10', // style URL
        center: [-68.137343, 45.137451], // starting position
        zoom: 5 // starting zoom
    });

    map.on('load', function() {
        // Add a data source containing GeoJSON data.
        map.addSource('maine', {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    // These coordinates outline Maine.
                    'coordinates': [
                        [
                            [-67.13734, 45.13745],
                            [-66.96466, 44.8097],
                            [-68.03252, 44.3252],
                            [-69.06, 43.98],
                            [-70.11617, 43.68405],
                            [-70.64573, 43.09008],
                            [-70.75102, 43.08003],
                            [-70.79761, 43.21973],
                            [-70.98176, 43.36789],
                            [-70.94416, 43.46633],
                            [-71.08482, 45.30524],
                            [-70.66002, 45.46022],
                            [-70.30495, 45.91479],
                            [-70.00014, 46.69317],
                            [-69.23708, 47.44777],
                            [-68.90478, 47.18479],
                            [-68.2343, 47.35462],
                            [-67.79035, 47.06624],
                            [-67.79141, 45.70258],
                            [-67.13734, 45.13745]
                        ]
                    ]
                }
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

</script>
