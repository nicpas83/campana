<?php

if (!defined('CAKE_FRAMEWORK')) {
    define('CAKE_FRAMEWORK', DS . 'XAMPP' . DS . 'htdocs' . DS . 'framework');
}

if (!defined('WWW')) {
    define('WWW', '/'); // no usar la constante DS
}

if (!class_exists('AppConfig')) {

    class AppConfig {

        public static $array = [
            'includes' => [
                'bootstrap' => true,
                'font-awesome' => true,
                'highcharts' => true,
                'php' => true,
                'hoverIntent' => true,
                'kendoui' => true,
                'jquery' => [
                    'ui' => true,
                    'galleriffic' => true,
                    'scrollTo' => true,
                    'fancybox' => true,
                    'opacityrollover' => true,
                    'alerts' => true,
                    'tipsy' => true,
                    'sticky' => true,
                ],
            ],
            'push_server' => [
                'enabled' => false,
                'debug' => true,
                'ssl' => false,
                'host' => '127.0.0.1',
                'port' => 8000,
                'system' => 'framework'
            ],
            'maint' => [
                'js_validation' => true,
            ],
            'search_list' => [
                'export' => true,
            ],
            'site' => [
                'serial' => [
                    'FA1BF-F625A-CDFF6-C8899-A4D6D-12E92-C7EDC-AD668'
                ],
                'ajax' => [
                    'enabled' => false,
                    'loading' => "Cargando contenido",
                ],
                'googlemaps' => [
                    'key' => 'AIzaSyBSNXkw6yWmzIqBsV0WuGPfe7oSg6jYV54',
                ]
            ],
            'users' => [
                'login' => [
                    'ban' => false,
                    'forget' => true,
                ],
            ],
        ];

        public static function get($str, $default = null) {
            $pointer = self::$array;
            $parts = explode(".", $str);
            foreach ($parts as $part) {
                if (!isset($pointer[$part])) {
                    return $default;
                }
                $pointer = $pointer[$part];
            }
            return $pointer;
        }

    }

}