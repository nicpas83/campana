<?php

/**
 * Cache Engine Configuration
 * Default settings provided below
 */
Cache::config('default', array('engine' => 'File', 'mask' => 0777));

/**
 * You can attach event listeners to the request lifecyle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 */
Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
    'engine' => 'FileLog',
    'types' => array('notice', 'info', 'debug'),
    'file' => 'debug',
    'mask' => 0777,
));
CakeLog::config('error', array(
    'engine' => 'FileLog',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error',
    'mask' => 0777,
));
CakeLog::config('otherFile', array(
    'engine' => 'FileLog',
    'model' => 'LogEntry',
    'mask' => 0777,
));

if (!defined('CAKE_FRAMEWORK')) {
    App::import('Config', 'config');
    require_once('config.php');
}

Inflector::rules('plural', array('irregular' => array(
        'inscripcion' => 'Inscripciones',
        'puntoentrega' => 'PuntosEntrega',
        'franjahoraria' => 'FranjasHorarias',
        'adulto' => 'Adultos',
        'adultoagd' => 'AdultosAgd',
        'adultovc' => 'AdultosVc',
        'adultoanses' => 'AdultosAnses',
        'adultopami' => 'AdultosPami',
        'sorteo' => 'Sorteos',
        'inscripto' => 'Inscriptos',
        'estadocrm' => 'EstadoCrm',
        'macheocrm' => 'MacheoCrm',
        'hogar' => 'Hogares',
        'residente' => 'Residentes',
        'auladigital' => 'AulasDigitales',
        'solicitud' => 'Solicitudes',
        'asistente' => 'Asistentes',
        'patologia' => 'Patologias',
        'adultoubicacion' => 'AdultosUbicaciones',
        'solicitudvc' => 'SolicitudesVc',
        'agente' => 'Agentes',
        'vacacion' => 'Vacaciones',
        'agenteausentismo' => 'AgentesAusentismos',
        'ausentismo' => 'Ausentismos',
        'centrojubilado' => 'CentrosJubilados',
        'visitasocial' => 'VisitasSociales',
        'cursocapacitacion' => 'CursosCapacitaciones',
        'taller' => 'Talleres',
        'profesor' => 'Profesores',
        'autoridadcdj' => 'AutoridadesCdj',
        'ubicacioncdj' => 'UbicacionesCdj',
        'liquidacion' => 'Liquidaciones',
        'institucion' => 'Instituciones',
        'curso' => 'Cursos',
        'cursada' => 'Cursadas',
        'caso' => 'Casos',
        'intervencion' => 'Intervenciones',
        'actor' => 'Actores',
        'equipo' => 'Equipos',
        'profesionalequipo' => 'ProfesionalesEquipos',
        'fiscalia' => 'Fiscalias',
        'juzgado' => 'Juzgados',
        'geriatrico' => 'Geriatricos',
        'clausura' => 'Clausuras',
        'inspeccion' => 'Inspecciones',
        'verificador' => 'Verificadores',
        'fidelizacion' => 'Fidelizaciones',
        'cursocancelado' => 'CursosCancelados',
)));

Inflector::rules('singular', array('irregular' => array(
        'inscripciones' => 'Inscripcion',
        'puntosentrega' => 'PuntoEntrega',
        'franjashorarias' => 'FranjaHoraria',
        'adultos' => 'Adulto',
        'adultosagd' => 'AdultoAgd',
        'adultosvc' => 'AdultoVc',
        'adultospami' => 'AdultoPami',
        'adultosanses' => 'AdultoAnses',
        'sorteos' => 'Sorteo',
        'inscriptos' => 'Inscripto',
        'estadoscrm' => 'EstadoCrm',
        'macheoscrm' => 'MacheoCrm',
        'hogares' => 'Hogar',
        'residentes' => 'Residente',
        'aulasdigitales' => 'AulaDigital',
        'solicitudes' => 'Solicitud',
        'asistentes' => 'Asistente',
        'patologias' => 'Patologia',
        'adultosubicaciones' => 'AdultoUbicacion',
        'solicitudesvc' => 'SolicitudVc',
        'agentes' => 'Agente',
        'vacaciones' => 'Vacacion',
        'agentesausentismos' => 'AgenteAusentismo',
        'ausentismos' => 'Ausentismo',
        'centrosjubilados' => 'CentroJubilado',
        'visitassociales' => 'VisitaSocial',
        'cursoscapacitaciones' => 'CursoCapacitacion',
        'talleres' => 'Taller',
        'profesores' => 'Profesor',
        'autoridadescdj' => 'AutoridadCdj',
        'ubicacionescdj' => 'UbicacionCdj',
        'liquidaciones' => 'Liquidacion',
        'instituciones' => 'Institucion',
        'cursos' => 'Curso',
        'cursadas' => 'Cursada',
        'casos' => 'Caso',
        'intervenciones' => 'Intervencion',
        'actores' => 'Actor',
        'equipos' => 'Equipo',
        'profesionalesequipos' => 'ProfesionalEquipo',
        'fiscalias' => 'Fiscalia',
        'juzgados' => 'Juzgado',
        'geriatricos' => 'Geriatrico',
        'clausuras' => 'Clausura',
        'inspecciones' => 'Inspeccion',
        'verificadores' => 'Verificador',
        'fidelizaciones' => 'Fidelizacion',
        'cursoscancelados' => 'CursoCanceldo',
)));

/*
 * Para manejar los errores de bloqueo
 */
App::uses('BloqueoException', 'Lib');

/*
 * Path to the application's presentations directory.
 */
App::build(array('Presentation' => array('%s' . 'Presentation' . DS)), App::REGISTER);

/*
 * Path to the model's data and XML directory.
 */
App::build(array('Data' => array('%s' . 'Model' . DS . 'Data' . DS)), App::REGISTER);
App::build(array('XML' => array('%s' . 'Model' . DS . 'XML' . DS)), App::REGISTER);

/*
 * Paths to framework
 */
App::build(array(
    'Model' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS),
    'Controller' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Controller' . DS),
    'View' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'View' . DS),
    'View/Helper' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'View' . DS . 'Helper' . DS),
    'Plugin' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Plugin' . DS),
    'Lib' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Lib' . DS),
    'Vendor' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Vendor' . DS),
    'Presentation' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Presentation' . DS),
    'Data' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'Data' . DS),
    'XML' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'XML' . DS),
    'Model/Behavior' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'Behavior' . DS),
    'Controller/Component' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Controller' . DS . 'Component' . DS),
    'Model/Datasource' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'Datasource' . DS),
    'Model/Datasource/Database' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'Datasource' . DS . 'Database' . DS),
    'Model/Datasource/Session' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Model' . DS . 'Datasource' . DS . 'Session' . DS),
    'Controller/Component/Auth' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Controller' . DS . 'Component' . DS . 'Auth' . DS),
    'Controller/Component/Acl' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Controller' . DS . 'Component' . DS . 'Acl' . DS),
    'Console' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Console' . DS),
    'Console/Command' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Console' . DS . 'Command' . DS),
    'Console/Command/Task' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Console' . DS . 'Command' . DS . 'Task' . DS),
    'Locale' => array(CAKE_FRAMEWORK . DS . 'app' . DS . 'Locale' . DS),
        ), App::APPEND);

/*
 * Load Plugins
 */
CakePlugin::loadAll();