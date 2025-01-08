@extends('layouts.base')

@section('title', 'Registro')

@section('content')

<div class="container mt-5">
    <h2>Registro</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf <!-- Protección contra CSRF -->

        <div class="form-group">
            <label for="first_name">Nombre:</label>
            <input type="text" class="form-control" name="first_name" id="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Apellidos:</label>
            <input type="text" class="form-control" name="last_name" id="last_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="department">Nombre de Departamento:</label>
            <select id="department" name="department">
                <option value="">Seleccione una Departamento</option>
                <option value='Alcaldía'>Alcaldía</option>
                <option value='Secretaría Particular'>Secretaría Particular</option>
                <option value='Subdirección de Control de Gestión'>Subdirección de Control de Gestión</option>
                <option value='Coordinación de la Unidad de Transparencia, Acceso a la Información Pública, Datos Personales y Archivos'>Coordinación de la Unidad de Transparencia, Acceso a la Información Pública, Datos Personales y Archivos</option>
                <option value='Jefatura de Unidad Departamental de Acceso a la Información Pública y Datos Personales'>Jefatura de Unidad Departamental de Acceso a la Información Pública y Datos Personales</option>
                <option value='Jefatura de Unidad Departamental de Archivos'>Jefatura de Unidad Departamental de Archivos</option>
                <option value='Dirección de Comunicación Social'>Dirección de Comunicación Social</option>
                <option value='Líder Coordinador de Proyectos de Servicios Digitales'>Líder Coordinador de Proyectos de Servicios Digitales</option>
                <option value='Jefatura de Unidad Departamental de Comunicación'>Jefatura de Unidad Departamental de Comunicación</option>
                <option value='Jefatura de Unidad Departamental de Difusión'>Jefatura de Unidad Departamental de Difusión</option>
                <option value='Dirección de la Unidad de Gestión Integral de Riesgos y Protección Civil'>Dirección de la Unidad de Gestión Integral de Riesgos y Protección Civil</option>
                <option value='Subdirección de Atención a Emergencias y Gestión de Riesgos'>Subdirección de Atención a Emergencias y Gestión de Riesgos</option>
                <option value='Líder Coordinador de Proyectos de Mitigación de Riesgos'>Líder Coordinador de Proyectos de Mitigación de Riesgos</option>
                <option value='Jefatura de Unidad Departamental de Dictaminación de Riesgos'>Jefatura de Unidad Departamental de Dictaminación de Riesgos</option>
                <option value='Jefatura de Unidad Departamental de Respuesta a Emergencias'>Jefatura de Unidad Departamental de Respuesta a Emergencias</option>
                <option value='Dirección del Centro de Servicios y Atención Ciudadana'>Dirección del Centro de Servicios y Atención Ciudadana</option>
                <option value='Subdirección de Atención Ciudadana'>Subdirección de Atención Ciudadana</option>
                <option value='Enlace de Información y Seguimiento a Solicitudes de Servicios “A”'>Enlace de Información y Seguimiento a Solicitudes de Servicios “A”</option>
                <option value='Enlace de Información y Seguimiento a Solicitudes de Servicios “B”'>Enlace de Información y Seguimiento a Solicitudes de Servicios “B”</option>
                <option value='Subdirección de Ventanilla Única de Trámites'>Subdirección de Ventanilla Única de Trámites</option>
                <option value='Enlace de Atención Ciudadana “A”'>Enlace de Atención Ciudadana “A”</option>
                <option value='Enlace de Atención Ciudadana “B”'>Enlace de Atención Ciudadana “B”</option>
                <option value='Enlace de Atención Ciudadana “C”'>Enlace de Atención Ciudadana “C”</option>
                <option value='Enlace de Atención Ciudadana “D”'>Enlace de Atención Ciudadana “D”</option>
                <option value='Jefatura de la Oficina de Asesores y Coordinación Territorial'>Jefatura de la Oficina de Asesores y Coordinación Territorial</option>
                <option value='Asesor “A”'>Asesor “A”</option>
                <option value='Asesor “B”'>Asesor “B”</option>
                <option value='Asesor “C”'>Asesor “C”</option>
                <option value='Subdirección Territorial A'>Subdirección Territorial A</option>
                <option value='Jefatura de Unidad Departamental de Obras "A"'>Jefatura de Unidad Departamental de Obras "A"</option>
                <option value='Jefatura de Unidad Departamental de Servicios Urbanos "A"'>Jefatura de Unidad Departamental de Servicios Urbanos "A"</option>
                <option value='Líder Coordinador de Proyectos de Administración "A"'>Líder Coordinador de Proyectos de Administración "A"</option>
                <option value='Subdirección Territorial B'>Subdirección Territorial B</option>
                <option value='Jefatura de Unidad Departamental de Obras "B"'>Jefatura de Unidad Departamental de Obras "B"</option>
                <option value='Jefatura de Unidad Departamental de Servicios Urbanos "B"'>Jefatura de Unidad Departamental de Servicios Urbanos "B"</option>
                <option value='Líder Coordinador de Proyectos de Administración "B"'>Líder Coordinador de Proyectos de Administración "B"</option>
                <option value='Subdirección Territorial C'>Subdirección Territorial C</option>
                <option value='Jefatura de Unidad Departamental de Obras "C"'>Jefatura de Unidad Departamental de Obras "C"</option>
                <option value='Jefatura de Unidad Departamental de Servicios Urbanos "C"'>Jefatura de Unidad Departamental de Servicios Urbanos "C"</option>
                <option value='Líder Coordinador de Proyectos de Administración "C"'>Líder Coordinador de Proyectos de Administración "C"</option>
                <option value='Subdirección Territorial D'>Subdirección Territorial D</option>
                <option value='Jefatura de Unidad Departamental de Obras "D"'>Jefatura de Unidad Departamental de Obras "D"</option>
                <option value='Jefatura de Unidad Departamental de Servicios Urbanos "D"'>Jefatura de Unidad Departamental de Servicios Urbanos "D"</option>
                <option value='Líder Coordinador de Proyectos de Administración "D"'>Líder Coordinador de Proyectos de Administración "D"</option>
                <option value='Subdirección Territorial E'>Subdirección Territorial E</option>
                <option value='Jefatura de Unidad Departamental de Obras "E"'>Jefatura de Unidad Departamental de Obras "E"</option>
                <option value='Jefatura de Unidad Departamental de Servicios Urbanos "E"'>Jefatura de Unidad Departamental de Servicios Urbanos "E"</option>
                <option value='Líder Coordinador de Proyectos de Administración "E"'>Líder Coordinador de Proyectos de Administración "E"</option>
                <option value='Dirección de Planeación del Desarrollo'>Dirección de Planeación del Desarrollo</option>
                <option value='Jefatura de Unidad Departamental de Planeación y Formulación de Proyectos de la Alcaldía'>Jefatura de Unidad Departamental de Planeación y Formulación de Proyectos de la Alcaldía</option>
                <option value='Jefatura de Unidad Departamental de Apoyo Técnico y Evaluación de Programas con Reglas de Operación'>Jefatura de Unidad Departamental de Apoyo Técnico y Evaluación de Programas con Reglas de Operación</option>
                <option value='Dirección General de Asuntos Jurídicos y de Gobierno'>Dirección General de Asuntos Jurídicos y de Gobierno</option>
                <option value='Dirección Jurídica'>Dirección Jurídica</option>
                <option value='Subdirección de Procedimientos de lo Contencioso'>Subdirección de Procedimientos de lo Contencioso</option>
                <option value='Jefatura de Unidad Departamental de Amparos y Recuperación de la Vía Pública'>Jefatura de Unidad Departamental de Amparos y Recuperación de la Vía Pública</option>
                <option value='Jefatura de Unidad Departamental de Asuntos Civiles, Mercantiles y de Contencioso Administrativo'>Jefatura de Unidad Departamental de Asuntos Civiles, Mercantiles y de Contencioso Administrativo</option>
                <option value='Jefatura de Unidad Departamental de Contratos, Convenios y Permisos en Materia Administrativa'>Jefatura de Unidad Departamental de Contratos, Convenios y Permisos en Materia Administrativa</option>
                <option value='Jefatura de Unidad Departamental de Enlace a Juzgados Cívicos, Registro Civil, Junta de Reclutamiento del Servicio Militar Nacional y Derechos Humanos'>Jefatura de Unidad Departamental de Enlace a Juzgados Cívicos, Registro Civil, Junta de Reclutamiento del Servicio Militar Nacional y Derechos Humanos</option>
                <option value='Jefatura de Unidad Departamental de Asuntos Penales'>Jefatura de Unidad Departamental de Asuntos Penales</option>
                <option value='Subdirección de Juicios Laborales'>Subdirección de Juicios Laborales</option>
                <option value='Subdirección de Verificación y Reglamentos'>Subdirección de Verificación y Reglamentos</option>
                <option value='Jefatura de Unidad Departamental de Apoyo Legal'>Jefatura de Unidad Departamental de Apoyo Legal</option>
                <option value='Jefatura de Unidad Departamental de Ejecución de Sanciones'>Jefatura de Unidad Departamental de Ejecución de Sanciones</option>
                <option value='Subdirección de Calificaciones de Infracciones'>Subdirección de Calificaciones de Infracciones</option>
                <option value='Jefatura de Unidad Departamental de Instrucción y Acuerdos Administrativos'>Jefatura de Unidad Departamental de Instrucción y Acuerdos Administrativos</option>
                <option value='Jefatura de Unidad Departamental de Resoluciones y Cumplimientos'>Jefatura de Unidad Departamental de Resoluciones y Cumplimientos</option>
                <option value='Dirección de Gobierno y Vía Pública'>Dirección de Gobierno y Vía Pública</option><option value='Subdirección de Gobierno'>Subdirección de Gobierno</option>
                <option value='Jefatura de Unidad Departamental de Giros Mercantiles y Espectáculos Públicos'>Jefatura de Unidad Departamental de Giros Mercantiles y Espectáculos Públicos</option>
                <option value='Jefatura de Unidad Departamental de Panteones'>Jefatura de Unidad Departamental de Panteones</option>
                <option value='Jefatura de Unidad Departamental de Tianguis y Vía Pública'>Jefatura de Unidad Departamental de Tianguis y Vía Pública</option>
                <option value='Jefatura de Unidad Departamental de Mercados y Concentraciones'>Jefatura de Unidad Departamental de Mercados y Concentraciones</option>
                <option value='Dirección de Ordenamiento Territorial'>Dirección de Ordenamiento Territorial</option>
                <option value='Jefatura de Unidad Departamental de Regularización Territorial'>Jefatura de Unidad Departamental de Regularización Territorial</option>
                <option value='Jefatura de Unidad Departamental de Colonias y Asentamientos Humanos Irregulares'>Jefatura de Unidad Departamental de Colonias y Asentamientos Humanos Irregulares</option>
                <option value='Jefatura de Unidad Departamental de Padrón Inmobiliario y Viviendas Irregulares'>Jefatura de Unidad Departamental de Padrón Inmobiliario y Viviendas Irregulares</option>
                <option value='Dirección de Seguridad Ciudadana y Construcción de la Paz'>Dirección de Seguridad Ciudadana y Construcción de la Paz</option>
                <option value='Subdirección de Proyectos para la Construcción de la Paz'>Subdirección de Proyectos para la Construcción de la Paz</option>
                <option value='Subdirección de Información y Control de Estadística y Tránsito'>Subdirección de Información y Control de Estadística y Tránsito</option>
                <option value='Jefatura de Unidad Departamental de Incidencia y Estadística Delictiva'>Jefatura de Unidad Departamental de Incidencia y Estadística Delictiva</option>
                <option value='Jefatura de Unidad Departamental de Control Operativo Policial'>Jefatura de Unidad Departamental de Control Operativo Policial</option>
                <option value='Jefatura de Unidad Departamental de Seguridad Ciudadana y Tránsito'>Jefatura de Unidad Departamental de Seguridad Ciudadana y Tránsito</option>
                <option value='Dirección General de Administración y Finanzas'>Dirección General de Administración y Finanzas</option>
                <option value='Subdirección de Seguimiento de Proyectos Administrativos y Control de Gestión'>Subdirección de Seguimiento de Proyectos Administrativos y Control de Gestión</option>
                <option value='Líder Coordinador de Proyectos de Gestión Documental'>Líder Coordinador de Proyectos de Gestión Documental</option>
                <option value='Subdirección de Cumplimiento de Auditorias y Rendición de Cuentas'>Subdirección de Cumplimiento de Auditorias y Rendición de Cuentas</option>
                <option value='Dirección de Modernización Administrativa y Tecnologías de la Información y Comunicaciones'>Dirección de Modernización Administrativa y Tecnologías de la Información y Comunicaciones</option>
                <option value='Jefatura de Unidad Departamental de Modernización Administrativa'>Jefatura de Unidad Departamental de Modernización Administrativa</option>
                <option value='Subdirección de Tecnologías de la Información y Comunicaciones'>Subdirección de Tecnologías de la Información y Comunicaciones</option>
                <option value='Jefatura de Unidad Departamental de Desarrollo de Sistemas'>Jefatura de Unidad Departamental de Desarrollo de Sistemas</option>
                <option value='Jefatura de Unidad Departamental de Soporte Técnico'>Jefatura de Unidad Departamental de Soporte Técnico</option>
                <option value='Dirección de Administración de Capital Humano'>Dirección de Administración de Capital Humano</option>
                <option value='Subdirección de Relaciones Laborales y Capacitación'>Subdirección de Relaciones Laborales y Capacitación</option>
                <option value='Jefatura de Unidad Departamental de Relaciones Laborales y Prestaciones'>Jefatura de Unidad Departamental de Relaciones Laborales y Prestaciones</option>
                <option value='Jefatura de Unidad Departamental de Capacitación y Desarrollo de Personal'>Jefatura de Unidad Departamental de Capacitación y Desarrollo de Personal</option>
                <option value='Subdirección de Nóminas y Registro de Personal'>Subdirección de Nóminas y Registro de Personal</option>
                <option value='Jefatura de Unidad Departamental de Registro y Movimientos de Personal'>Jefatura de Unidad Departamental de Registro y Movimientos de Personal</option>
                <option value='Dirección de Autogenerados'>Dirección de Autogenerados</option>
                <option value='Líder Coordinador de Proyectos de Seguimiento e Informes'>Líder Coordinador de Proyectos de Seguimiento e Informes</option>
                <option value='Dirección de Finanzas'>Dirección de Finanzas</option>
                <option value='Subdirección de Tesorería'>Subdirección de Tesorería</option>
                <option value='Subdirección de Contabilidad'>Subdirección de Contabilidad</option>
                <option value='Jefatura de Unidad Departamental de Registro Contable'>Jefatura de Unidad Departamental de Registro Contable</option>
                <option value='Subdirección de Programación y Presupuesto'>Subdirección de Programación y Presupuesto</option>
                <option value='Jefatura de Unidad Departamental de Control Presupuestal'>Jefatura de Unidad Departamental de Control Presupuestal</option>
                <option value='Dirección de Recursos Materiales y Servicios Generales'>Dirección de Recursos Materiales y Servicios Generales</option>
                <option value='Jefatura de Unidad Departamental de Almacenes e Inventarios'>Jefatura de Unidad Departamental de Almacenes e Inventarios</option>
                <option value='Subdirección de Servicios Generales'>Subdirección de Servicios Generales</option>
                <option value='Jefatura de Unidad Departamental de Control Vehícular, Talleres y Combustible'>Jefatura de Unidad Departamental de Control Vehícular, Talleres y Combustible</option>
                <option value='Jefatura de Unidad Departamental de Servicios Generales y Apoyo Logístico'>Jefatura de Unidad Departamental de Servicios Generales y Apoyo Logístico</option>
                <option value='Subdirección de Adquisiciones'>Subdirección de Adquisiciones</option>
                <option value='Dirección General de Obras y Desarrollo Urbano'>Dirección General de Obras y Desarrollo Urbano</option>
                <option value='Enlace de Seguimientos de Informes de Obras'>Enlace de Seguimientos de Informes de Obras</option>
                <option value='Líder Coordinador de Proyectos de Seguimiento a Solicitudes Específicas de Obra'>Líder Coordinador de Proyectos de Seguimiento a Solicitudes Específicas de Obra</option>
                <option value='Dirección de Obras y Operación Hidráulica'>Dirección de Obras y Operación Hidráulica</option>
                <option value='Subdirección de Obras'>Subdirección de Obras</option>
                <option value='Jefatura de Unidad Departamental de Mantenimiento a Edificios Públicos'>Jefatura de Unidad Departamental de Mantenimiento a Edificios Públicos</option>
                <option value='Jefatura de Unidad Departamental de Obras Viales'>Jefatura de Unidad Departamental de Obras Viales</option>
                <option value='Jefatura de Unidad Departamental de Planteles Educativos'>Jefatura de Unidad Departamental de Planteles Educativos</option>
                <option value='Líder Coordinador de Proyectos de Seguimiento de Infraestructura de Planteles Educativos'>Líder Coordinador de Proyectos de Seguimiento de Infraestructura de Planteles Educativos</option>
                <option value='Jefatura de Unidad Departamental de Construcción de Edificios Públicos'>Jefatura de Unidad Departamental de Construcción de Edificios Públicos</option>
                <option value='Jefatura de Unidad Departamental de Control de Materiales y Equipo'>Jefatura de Unidad Departamental de Control de Materiales y Equipo</option>
                <option value='Jefatura de Unidad Departamental de Mantenimiento Menor'>Jefatura de Unidad Departamental de Mantenimiento Menor</option>
                <option value='Enlace de Trabajos de Mantenimiento por Administración'>Enlace de Trabajos de Mantenimiento por Administración</option>
                <option value='Subdirección de Operación Hidráulica'>Subdirección de Operación Hidráulica</option>
                <option value='Jefatura de Unidad Departamental de Construcción de Obras para Saneamiento y Drenaje'>Jefatura de Unidad Departamental de Construcción de Obras para Saneamiento y Drenaje</option>
                <option value='Jefatura de Unidad Departamental de Obras Hidráulicas'>Jefatura de Unidad Departamental de Obras Hidráulicas</option>
                <option value='Jefatura de Unidad Departamental de Operación de Agua, Saneamiento y Drenaje “A”'>Jefatura de Unidad Departamental de Operación de Agua, Saneamiento y Drenaje “A”</option>
                <option value='Jefatura de Unidad Departamental de Operación de Agua, Saneamiento y Drenaje “B”'>Jefatura de Unidad Departamental de Operación de Agua, Saneamiento y Drenaje “B”</option>
                <option value='Dirección de Desarrollo Urbano'>Dirección de Desarrollo Urbano</option>
                <option value='Subdirección de Permisos, Manifestaciones y Licencias'>Subdirección de Permisos, Manifestaciones y Licencias</option>
                <option value='Jefatura de Unidad Departamental de Manifestaciones y Licencias de Construcción'>Jefatura de Unidad Departamental de Manifestaciones y Licencias de Construcción</option>
                <option value='Jefatura de Unidad Departamental de Alineamientos y Números Oficiales'>Jefatura de Unidad Departamental de Alineamientos y Números Oficiales</option>
                <option value='Dirección de Planeación y Control de Obras'>Dirección de Planeación y Control de Obras</option>
                <option value='Jefatura de Unidad Departamental de Seguimiento a Auditorías de Obra Pública'>Jefatura de Unidad Departamental de Seguimiento a Auditorías de Obra Pública</option>
                <option value='Subdirección de Proyectos de Construcción de Obras'>Subdirección de Proyectos de Construcción de Obras</option>
                <option value='Jefatura de Departamental de Proyectos de Infraestructura'>Jefatura de Departamental de Proyectos de Infraestructura</option>
                <option value='Jefatura de Unidad Departamental de Concursos de Obras'>Jefatura de Unidad Departamental de Concursos de Obras</option>
                <option value='Subdirección de Administración de Obras'>Subdirección de Administración de Obras</option>
                <option value='Jefatura de Unidad Departamental de Contratos de Obras'>Jefatura de Unidad Departamental de Contratos de Obras</option>
                <option value='Jefatura de Unidad Departamental de Control y Avance Financiero de Obras'>Jefatura de Unidad Departamental de Control y Avance Financiero de Obras</option>
                <option value='Dirección General de Servicios Urbanos'>Dirección General de Servicios Urbanos</option>
                <option value='Jefatura de Unidad Departamental de Gestión de Información'>Jefatura de Unidad Departamental de Gestión de Información</option>
                <option value='Enlace de Proyectos de Análisis'>Enlace de Proyectos de Análisis</option>
                <option value='Dirección de Proyectos y Programas de Servicios Urbanos'>Dirección de Proyectos y Programas de Servicios Urbanos</option>
                <option value='Enlace de Brigada de Acción Inmediata de Zona “I”'>Enlace de Brigada de Acción Inmediata de Zona “I”</option>
                <option value='Enlace de Brigada de Acción Inmediata de Zona “II”'>Enlace de Brigada de Acción Inmediata de Zona “II”</option>
                <option value='Enlace de Brigada de Acción Inmediata de Zona “III”'>Enlace de Brigada de Acción Inmediata de Zona “III”</option>
                <option value='Enlace de Brigada de Acción Inmediata de Zona “IV”'>Enlace de Brigada de Acción Inmediata de Zona “IV”</option>
                <option value='Jefatura de Unidad Departamental de Agua Potable en Pipas'>Jefatura de Unidad Departamental de Agua Potable en Pipas</option>
                <option value='Líder Coordinador de Proyectos de Supervisión de Entrega de Servicio de Agua Potable y Pipas'>Líder Coordinador de Proyectos de Supervisión de Entrega de Servicio de Agua Potable y Pipas</option>
                <option value='Subdirección de Mejoramiento y Servicios Urbanos'>Subdirección de Mejoramiento y Servicios Urbanos</option>
                <option value='Jefatura de Unidad Departamental de Parques y Jardines'>Jefatura de Unidad Departamental de Parques y Jardines</option>
                <option value='Jefatura de Unidad Departamental de Instalación y Mantenimiento de Luminarias'>Jefatura de Unidad Departamental de Instalación y Mantenimiento de Luminarias</option>
                <option value='Subdirección de Servicios a los Pueblos Originarios'>Subdirección de Servicios a los Pueblos Originarios</option>
                <option value='Jefatura de Unidad Departamental de Mejoramiento de Pueblos'>Jefatura de Unidad Departamental de Mejoramiento de Pueblos</option>
                <option value='Subdirección de Limpia'>Subdirección de Limpia</option>
                <option value='Jefatura de Unidad Departamental de Sistema Básico de Recolección'>Jefatura de Unidad Departamental de Sistema Básico de Recolección</option>
                <option value='Jefatura de Unidad Departamental de Sistema Mecanizado'>Jefatura de Unidad Departamental de Sistema Mecanizado</option>
                <option value='Subdirección de Ordenamiento Urbano y Movilidad'>Subdirección de Ordenamiento Urbano y Movilidad</option>
                <option value='Enlace de Brigada de Acción Inmediata'>Enlace de Brigada de Acción Inmediata</option>
                <option value='Jefatura de Unidad Departamental de Proyectos de Movilidad'>Jefatura de Unidad Departamental de Proyectos de Movilidad</option>
                <option value='Jefatura de Unidad Departamental de Conservación e Imagen Urbana'>Jefatura de Unidad Departamental de Conservación e Imagen Urbana</option>
                <option value='Dirección General de Medio Ambiente, Desarrollo Sustentable y Fomento Económico'>Dirección General de Medio Ambiente, Desarrollo Sustentable y Fomento Económico</option>
                <option value='Líder Coordinador de Proyectos de Seguimiento y Atención de Acuerdos'>Líder Coordinador de Proyectos de Seguimiento y Atención de Acuerdos</option>
                <option value='Dirección de Recursos Naturales y Desarrollo Rural'>Dirección de Recursos Naturales y Desarrollo Rural</option>
                <option value='Enlace de Proyectos Productivos Sustentables'>Enlace de Proyectos Productivos Sustentables</option>
                <option value='Enlace de Prácticas Agroambientales'>Enlace de Prácticas Agroambientales</option>
                <option value='Jefatura de Unidad Departamental de Recursos Naturales'>Jefatura de Unidad Departamental de Recursos Naturales</option>
                <option value='Jefatura de Unidad Departamental de Desarrollo Rural'>Jefatura de Unidad Departamental de Desarrollo Rural</option>
                <option value='Dirección de Ordenamiento Ecológico y Educación Ambiental'>Dirección de Ordenamiento Ecológico y Educación Ambiental</option>
                <option value='Enlace de Seguimiento a Programas y Proyectos de Ordenamiento Ecológico y Educación Ambiental'>Enlace de Seguimiento a Programas y Proyectos de Ordenamiento Ecológico y Educación Ambiental</option>
                <option value='Jefatura de Unidad Departamental de Articulación Urbana y Suelo de Conservación'>Jefatura de Unidad Departamental de Articulación Urbana y Suelo de Conservación</option>
                <option value='Jefatura de Unidad Departamental de Información y Seguimiento Geográfico'>Jefatura de Unidad Departamental de Información y Seguimiento Geográfico</option>
                <option value='Subdirección de Educación e Impacto Ambiental'>Subdirección de Educación e Impacto Ambiental</option>
                <option value='Jefatura de Unidad Departamental de Educación Ambiental'>Jefatura de Unidad Departamental de Educación Ambiental</option>
                <option value='Jefatura de Unidad Departamental de Vigilancia e Impacto Ambiental'>Jefatura de Unidad Departamental de Vigilancia e Impacto Ambiental</option>
                <option value='Subdirección de Ordenamiento Ecológico'>Subdirección de Ordenamiento Ecológico</option>
                <option value='Dirección de Economía Solidaria, Desarrollo y Fomento Económico'>Dirección de Economía Solidaria, Desarrollo y Fomento Económico</option>
                <option value='Líder Coordinador de Proyectos de Atención y Seguimiento de Desarrollo Económico'>Líder Coordinador de Proyectos de Atención y Seguimiento de Desarrollo Económico</option>
                <option value='Jefatura de Unidad Departamental de Desarrollo Económico'>Jefatura de Unidad Departamental de Desarrollo Económico</option>
                <option value='Jefatura de Unidad Departamental de Economía Solidaria y Promoción Cooperativa'>Jefatura de Unidad Departamental de Economía Solidaria y Promoción Cooperativa</option>
                <option value='Dirección de Turismo y Vinculación Internacional'>Dirección de Turismo y Vinculación Internacional</option>
                <option value='Subdirección Turística'>Subdirección Turística</option>
                <option value='Jefatura de Unidad Departamental de Vinculación Internacional'>Jefatura de Unidad Departamental de Vinculación Internacional</option>
                <option value='Jefatura de Unidad Departamental de Actividades Turísticas'>Jefatura de Unidad Departamental de Actividades Turísticas</option>
                <option value='Dirección General de Bienestar e Igualdad Sustantiva'>Dirección General de Bienestar e Igualdad Sustantiva</option>
                <option value='Líder Coordinador de Proyectos de Sistematización “A”'>Líder Coordinador de Proyectos de Sistematización “A”</option>
                <option value='Líder Coordinador de Proyectos de Sistematización “B”'>Líder Coordinador de Proyectos de Sistematización “B”</option>
                <option value='Coordinación de Desarrollo de Actividades Deportivas'>Coordinación de Desarrollo de Actividades Deportivas</option>
                <option value='Jefatura de Unidad Departamental de Promoción Deportiva'>Jefatura de Unidad Departamental de Promoción Deportiva</option>
                <option value='Jefatura de Unidad Departamental de Centros Deportivos'>Jefatura de Unidad Departamental de Centros Deportivos</option>
                <option value='Dirección de Fomento a la Equidad de Género e Igualdad Sustantiva'>Dirección de Fomento a la Equidad de Género e Igualdad Sustantiva</option>
                <option value='Jefatura de Unidad Departamental de Igualdad Sustantiva'>Jefatura de Unidad Departamental de Igualdad Sustantiva</option>
                <option value='Jefatura de Unidad Departamental de Atención a la Población LGBTTTI'>Jefatura de Unidad Departamental de Atención a la Población LGBTTTI</option>
                <option value='Jefatura de Unidad Departamental de Fomento a la Equidad de Género'>Jefatura de Unidad Departamental de Fomento a la Equidad de Género</option>
                <option value='Dirección de Atención a Grupos Prioritarios'>Dirección de Atención a Grupos Prioritarios</option>
                <option value='Líder Coordinador de Proyectos de Seguimiento y Registros'>Líder Coordinador de Proyectos de Seguimiento y Registros</option>
                <option value='Jefatura de Unidad Departamental de Atención a la Juventud'>Jefatura de Unidad Departamental de Atención a la Juventud</option>
                <option value='Jefatura de Unidad Departamental de Atención a la Población Adulta Mayor'>Jefatura de Unidad Departamental de Atención a la Población Adulta Mayor</option>
                <option value='Jefatura de Unidad Departamental de Centros de Desarrollo Comunitario Integral'>Jefatura de Unidad Departamental de Centros de Desarrollo Comunitario Integral</option>
                <option value='Jefatura de Unidad Departamental de Atención a la Infancia'>Jefatura de Unidad Departamental de Atención a la Infancia</option>
                <option value='Dirección de Salud'>Dirección de Salud</option>
                <option value='Subdirección de Atención a la Salud'>Subdirección de Atención a la Salud</option>
                <option value='Jefatura de Unidad Departamental de Atención a Personas con Discapacidad'>Jefatura de Unidad Departamental de Atención a Personas con Discapacidad</option>
                <option value='Jefatura de Unidad Departamental de Prevención a Adicciones'>Jefatura de Unidad Departamental de Prevención a Adicciones</option>
                <option value='Subdirección de Promoción a la Salud y Protección Animal'>Subdirección de Promoción a la Salud y Protección Animal</option>
                <option value='Dirección General de Participación Ciudadana'>Dirección General de Participación Ciudadana</option>
                <option value='Subdirección de Participación Comunitaria'>Subdirección de Participación Comunitaria</option>
                <option value='Jefatura de Unidad Departamental de Atención Comunitaria'>Jefatura de Unidad Departamental de Atención Comunitaria</option>
                <option value='Subdirección de Concertación y Presupuesto Participativo'>Subdirección de Concertación y Presupuesto Participativo</option>
                <option value='Jefatura de Unidad Departamental de Unidades Habitacionales y Presupuesto Participativo'>Jefatura de Unidad Departamental de Unidades Habitacionales y Presupuesto Participativo</option>
                <option value='Dirección de Promoción, Organización y Participación Ciudadana'>Dirección de Promoción, Organización y Participación Ciudadana</option>
                <option value='Subdirección de Promoción y Organización Ciudadana Zona "A"'>Subdirección de Promoción y Organización Ciudadana Zona "A"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "A 1"'>Enlace de Participación y Gestión Ciudadana "A 1"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "A 2"'>Enlace de Participación y Gestión Ciudadana "A 2"</option>
                <option value='Subdirección de Promoción y Organización Ciudadana Zona "B"'>Subdirección de Promoción y Organización Ciudadana Zona "B"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "B 1"'>Enlace de Participación y Gestión Ciudadana "B 1"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "B 2"'>Enlace de Participación y Gestión Ciudadana "B 2"</option>
                <option value='Subdirección de Promoción y Organización Ciudadana Zona "C"'>Subdirección de Promoción y Organización Ciudadana Zona "C"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "C 1"'>Enlace de Participación y Gestión Ciudadana "C 1"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "C 2"'>Enlace de Participación y Gestión Ciudadana "C 2"</option>
                <option value='Subdirección de Promoción y Organización Ciudadana Zona "D"'>Subdirección de Promoción y Organización Ciudadana Zona "D"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "D 1"'>Enlace de Participación y Gestión Ciudadana "D 1"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "D 2"'>Enlace de Participación y Gestión Ciudadana "D 2"</option>
                <option value='Subdirección de Promoción y Organización Ciudadana Zona "E"'>Subdirección de Promoción y Organización Ciudadana Zona "E"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "E 1"'>Enlace de Participación y Gestión Ciudadana "E 1"</option>
                <option value='Enlace de Participación y Gestión Ciudadana "E 2"'>Enlace de Participación y Gestión Ciudadana "E 2"</option>
                <option value='Dirección General de Derechos Culturales, Educativos, de Ciencia y Tecnología'>Dirección General de Derechos Culturales, Educativos, de Ciencia y Tecnología</option>
                <option value='Líder Coordinador de Proyectos de Patrimonio Cultural'>Líder Coordinador de Proyectos de Patrimonio Cultural</option>
                <option value='Jefatura de Unidad Departamental de Gestión y Fomento Cultural'>Jefatura de Unidad Departamental de Gestión y Fomento Cultural</option>
                <option value='Coordinación de Cultura'>Coordinación de Cultura</option>
                <option value='Jefatura de Unidad Departamental de Cultura Comunitaria'>Jefatura de Unidad Departamental de Cultura Comunitaria</option>
                <option value='Subdirección de Promoción Cultural y Recintos Culturales'>Subdirección de Promoción Cultural y Recintos Culturales</option>
                <option value='Jefatura de Unidad Departamental de Eventos Públicos'>Jefatura de Unidad Departamental de Eventos Públicos</option>
                <option value='Jefatura de Unidad Departamental de Recintos Culturales, Promoción Artística y Cultural'>Jefatura de Unidad Departamental de Recintos Culturales, Promoción Artística y Cultural</option>
                <option value='Subdirección de Coordinación de Centros de Arte y Oficios'>Subdirección de Coordinación de Centros de Arte y Oficios</option>
                <option value='Enlace de Centro de Arte y Oficios “A”'>Enlace de Centro de Arte y Oficios “A”</option>
                <option value='Enlace de Centro de Arte y Oficios “B”'>Enlace de Centro de Arte y Oficios “B”</option>
                <option value='Enlace de Centro de Arte y Oficios “C”'>Enlace de Centro de Arte y Oficios “C”</option>
                <option value='Enlace de Centro de Arte y Oficios “D”'>Enlace de Centro de Arte y Oficios “D”</option>
                <option value='Enlace de Centro de Arte y Oficios “E”'>Enlace de Centro de Arte y Oficios “E”</option>
                <option value='Coordinación de Educación'>Coordinación de Educación</option><option value='Enlace Operativo para Apoyo a Servicios Educativos “A”'>Enlace Operativo para Apoyo a Servicios Educativos “A”</option>
                <option value='Enlace Operativo para Apoyo a Servicios Educativos “B”'>Enlace Operativo para Apoyo a Servicios Educativos “B”</option>
                <option value='Jefatura de Unidad Departamental de Atención y Vinculación Educativa'>Jefatura de Unidad Departamental de Atención y Vinculación Educativa</option>
                <option value='Jefatura de Unidad Departamental de Educación y Capacitación'>Jefatura de Unidad Departamental de Educación y Capacitación</option>
                <option value='Subdirección de Ciencia y Tecnología'>Subdirección de Ciencia y Tecnología</option>
            <select id="department" name="department"> </select>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>
@endsection

