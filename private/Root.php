<?php

if (!class_exists('Root')) {

    class Root {

        public function __construct() {

            echo 'Inicializando';
        }
    }

    new Root();
}