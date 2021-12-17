<x-app-layout>
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <x-slot name="header">
                <div class="container-xl">
                    <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="page-title">
                                    Maps
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </x-slot>
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Simple map</div>
                                <div class="ratio ratio-16x9">
                                    <div>
                                        <div id="map-simple" class="w-100 h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Light map style</div>
                                <div class="ratio ratio-16x9">
                                    <div>
                                        <div id="map-light" class="w-100 h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12">
                        <div class="card">
                            <div class="ratio ratio-2by1">
                                <div>
                                    <div id="map-markers" class="w-100 h-100 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-12">
                        <div class="card">
                            <div class="ratio ratio-2by1">
                                <div>
                                    <div id="map-card" class="w-100 h-100 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <x-tabler.footer />
    </div>
    @push('before-scripts')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js"></script>

    @endpush

    @push('after-scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
            var map = new mapboxgl.Map({
                container: 'map-simple',
                style: 'mapbox://styles/mapbox/streets-v11',
                zoom: 12,
                center: [107.6191228, -6.9174639107],
            });
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
            var map = new mapboxgl.Map({
                container: 'map-light',
                style: 'mapbox://styles/mapbox/light-v10',
                zoom: 11,
                center: [107.6191228, -6.9174639107],
            });
            map.on('load', function () {
            // Add an image to use as a custom marker
                map.loadImage(
                    'https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png',
                    function (error, image) {
                        if (error) throw error;
                        map.addImage('custom-marker', image);
                        // Add a GeoJSON source with 2 points
                        map.addSource('points', {
                        'type': 'geojson',
                        'data': {
                        'type': 'FeatureCollection',
                        'features': [
                            {
                            // feature for Mapbox DC
                            'type': 'Feature',
                            'geometry': {
                            'type': 'Point',
                            'coordinates': [
                                107.5641565,-6.9104397
                            ]
                            },
                            'properties': {
                            'title': 'Musium Geologi'
                            }
                            },
                            {
                            // feature for Mapbox SF
                            'type': 'Feature',
                            'geometry': {
                            'type': 'Point',
                            'coordinates': [107.6387796,-6.8987345]
                            },
                            'properties': {
                            'title': 'BPS Prov Jabar'
                            }
                            }
                        ]
                        }
                    });

                    // Add a symbol layer
                    map.addLayer({
                        'id': 'points',
                        'type': 'symbol',
                        'source': 'points',
                        'layout': {
                        'icon-image': 'custom-marker',
                        // get the title name from the source's "title" property
                        'text-field': ['get', 'title'],
                        'text-font': [
                        'Open Sans Semibold',
                        'Arial Unicode MS Bold'
                        ],
                        'text-offset': [0, 1.25],
                        'text-anchor': 'top'
                        }
                    });
                });
            });
        });
    // @formatter:on
    </script>
    {{-- <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
            var map = new mapboxgl.Map({
                container: 'map-markers',
                style: 'mapbox://styles/mapbox/light-v10',
                zoom: 1,
                center: [0, 0],
            });
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([107.5641565,-6.9104397]).addTo(map);
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([16.366667, 48.2]).addTo(map);
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([116.383333, 39.91666667]).addTo(map);
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([149.133333, -35.26666667]).addTo(map);
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([58.583333, 23.61666667]).addTo(map);
            new mapboxgl.Marker({ color: "#206bc4" }).setLngLat([-77, 38.883333]).addTo(map);
        });
        // @formatter:on
    </>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiY29kZWNhbG0iLCJhIjoiSzRiOVJvQSJ9.BUVkTT6IYs83xSUs4H7bjQ';
            var map = new mapboxgl.Map({
                container: 'map-card',
                style: 'mapbox://styles/mapbox/satellite-v9',
                zoom: 1,
                center: [0, 0],
            });
        });
        // @formatter:on
    </script> --}}

    @endpush

</x-app-layout>
