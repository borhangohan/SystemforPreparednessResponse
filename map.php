<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <script>
        L_NO_TOUCH = false;
        L_DISABLE_3D = false;
    </script>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <style>
        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css" />

    <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
        #map_a3cedddfa977601e108b024df0be9e36 {
            position: relative;
            width: 100.0%;
            height: 100.0%;
            left: 0.0%;
            top: 0.0%;
        }

        .leaflet-container {
            font-size: 1rem;
        }
    </style>


    <style>
        .foliumtooltip {}

        .foliumtooltip table {
            margin: auto;
        }

        .foliumtooltip tr {
            text-align: left;
        }

        .foliumtooltip th {
            padding: 2px;
            padding-right: 8px;
        }
    </style>

</head>

<body>


    <div class="folium-map" id="map_a3cedddfa977601e108b024df0be9e36"></div>

</body>
<script>


    var map_a3cedddfa977601e108b024df0be9e36 = L.map(
        "map_a3cedddfa977601e108b024df0be9e36",
        {
            center: [37.8, -96.0],
            crs: L.CRS.EPSG3857,
            zoom: 4,
            zoomControl: true,
            preferCanvas: false,
        }
    );

    var tile_layer_1e3e99acc0bcf15fd94d13763125c88d = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        { "attribution": "Data by \u0026copy; \u003ca target=\"_blank\" href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca target=\"_blank\" href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false }
    ).addTo(map_a3cedddfa977601e108b024df0be9e36);


    function geo_json_9c241d2f3421781038b74413416ddb17_styler(feature) {
        switch (feature.id) {
            case "0": case "4": case "13": case "35": case "44":
                return { "color": "black", "dashArray": "5, 5", "fillColor": "red", "weight": 1 };
            case "2":
                return { "color": "black", "dashArray": "5, 5", "fillColor": "green", "weight": 1 };
            case "3":
                return { "color": "black", "dashArray": "5, 5", "fillColor": "purple", "weight": 1 };
            case "5": case "7": case "10": case "12": case "16": case "17": case "18": case "19": case "20": case "21": case "22": case "29": case "31": case "39": case "42":
                return { "color": "black", "dashArray": "5, 5", "fillColor": "orange", "weight": 1 };
            case "9": case "14": case "23": case "24": case "30": case "36":
                return { "color": "black", "dashArray": "5, 5", "fillColor": "darkred", "weight": 1 };
            default:
                return { "color": "black", "dashArray": "5, 5", "fillColor": "blue", "weight": 1 };
        }
    }

    function geo_json_9c241d2f3421781038b74413416ddb17_onEachFeature(feature, layer) {
        layer.on({
        });
    };
    var geo_json_9c241d2f3421781038b74413416ddb17 = L.geoJson(null, {
        onEachFeature: geo_json_9c241d2f3421781038b74413416ddb17_onEachFeature,

        style: geo_json_9c241d2f3421781038b74413416ddb17_styler,
    });

    function geo_json_9c241d2f3421781038b74413416ddb17_add(data) {
        geo_json_9c241d2f3421781038b74413416ddb17
            .addData(data)
            .addTo(map_a3cedddfa977601e108b024df0be9e36);
    }
    fetch('usa_map.geo.json')  // assuming the file is located in a directory named "countries" relative to your HTML file
    .then(response => response.json())
    .then(data => {
        geo_json_9c241d2f3421781038b74413416ddb17_add(data); // Pass the GeoJSON data to the function
    })
    .catch(error => {
        console.error('Error fetching GeoJSON file:', error);
    });    

    geo_json_9c241d2f3421781038b74413416ddb17.bindTooltip(
        function (layer) {
            let div = L.DomUtil.create('div');

            let handleObject = feature => typeof (feature) == 'object' ? JSON.stringify(feature) : feature;
            let fields = ["NAME", "Predicted"];
            let aliases = ["State:", "Predicted Incident Type:"];
            let table = '<table>' +
                String(
                    fields.map(
                        (v, i) =>
                            `<tr>
            <th>${aliases[i].toLocaleString()}</th>
            
            <td>${handleObject(layer.feature.properties[v]).toLocaleString()}</td>
        </tr>`).join(''))
                + '</table>';
            div.innerHTML = table;

            return div
        }
        , { "className": "foliumtooltip", "sticky": true });

</script>

</html>    