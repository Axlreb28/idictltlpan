@extends('layouts.base')

@section('title', 'Formulario de Datos')

@section('content')
<head>
    <link rel="stylesheet" href="{{ 'css/formulario.css') }}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        let map;
        let marker;

        function initMap() {
            // Coordenadas de Tlalpan, Ciudad de México
            const tlalpanCoords = { lat: 19.287860, lng: -99.171360 };
            map = L.map('map').setView([tlalpanCoords.lat, tlalpanCoords.lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Crear un marcador inicial y permitir que el usuario lo arrastre
            marker = L.marker([tlalpanCoords.lat, tlalpanCoords.lng], {draggable: true}).addTo(map);

            marker.on('dragend', function(event) {
                const position = marker.getLatLng();
                updateLocation(position);
            });
        }

        function updateLocation(location) {
            document.getElementById('ubicacion').value = location.lat + ', ' + location.lng;
            fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${location.lat}&lon=${location.lng}`)
                .then(response => response.json())
                .then(data => {
                    if (data.address) {
                        const address = `${data.address.road || ''}, ${data.address.suburb || ''}, ${data.address.city || ''}, ${data.address.state || ''}, ${data.address.country || ''}`;
                        document.getElementById('direccion').value = address;
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function toggleMap() {
            const mapContainer = document.getElementById('map-container');
            if (mapContainer.style.display === 'none' || mapContainer.style.display === '') {
                mapContainer.style.display = 'block';
                initMap();
            } else {
                mapContainer.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('map-container').style.display = 'none';
        });

        document.addEventListener('DOMContentLoaded', function() {
            const selectDimension = document.getElementById('dimension_programa');
            const facilitadoresDiv = document.getElementById('facilitadores');
            const colectivosDiv = document.getElementById('colectivos');

            selectDimension.addEventListener('change', function() {
                facilitadoresDiv.style.display = this.value === 'facilitadores' ? 'block' : 'none';
                colectivosDiv.style.display = this.value === 'colectivos' ? 'block' : 'none';
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <form class="miFormulario" action="">
            <div class="row">
                <div class="column">
                    <h2 class="title">Transformando en comunidad</h2>
                    <div class="form-group">
                        <label for="dimension_programa">Dimensión del Programa:</label>
                        <select id="dimension_programa" name="dimension_programa">
                            <option value="">Seleccione una dimensión</option>
                            <option value="beneficiario">Beneficiario Directo</option>
                            <option value="facilitadores">Facilitadores</option>
                            <option value="colectivos">Colectivos</option>
                            <option value="usuarios">Usuarios</option>
                            <option value="otra">Otra</option>
                        </select>
                    </div>
                    <div id="facilitadores" class="hidden" style="display: none;">
                        <h3>Facilitadores</h3>
                        <div class="form-group">
                            <label for="name1">Persona médica:</label>
                            <input type="text" id="name1" name="name1">
                        </div>
                        <div class="form-group">
                            <label for="actividad">Actividad:</label>
                            <select id="actividad" name="actividad">
                                <option value="">--Seleccione una actividad--</option>
                                <option value="actividad1">Consulta médica</option>
                                <option value="actividad2">Reposición de cita</option>
                                <option value="actividad3">Urgencia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="observacion">Observaciones:</label>
                            <textarea id="observacion" name="observacion" rows="4" style="width: 100%;"></textarea>
                        </div>
                    </div>
                    <div id="colectivos" class="hidden" style="display: none;">
                        <h3>Colectivos</h3>
                        <div class="form-group">
                            <label for="colec">Colectivo:</label>
                            <input type="text" id="colec" name="colec">
                        </div>
                        <div class="form-group">
                            <label for="tperson">Persona representante:</label>
                            <select id="tperson" name="tperson">
                                <option value="">Seleccione una persona</option>
                                <option value="persona1">Coordinador</option>
                                <option value="persona2">Integrante</option>
                                <option value="persona3">Usuario</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h3>Datos de la persona beneficiaria</h3>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido materno:</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido2">Apellido paterno:</label>
                        <input type="text" id="apellido2" name="apellido2" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo">
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
                    </div>
                    <div class="flex">
                        <div class="form-group">
                            <label for="colonia">Colonia:</label>
                            <input type="text" id="colonia" name="colonia">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicación (Arrastra el PIN AZUL):</label>
                        <input type="text" id="ubicacion" name="ubicacion" style="display: none;" readonly>
                        <button type="button" onclick="toggleMap()">Seleccionar Ubicación</button>
                        <div id="map-container">
                            <div id="map" style="height: 400px;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" readonly>
                    </div>
                    <button type="submit" class="btn">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection


