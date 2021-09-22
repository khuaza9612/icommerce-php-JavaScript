<?php
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController {

        public function iniciar() {
            include_once '../view/Acceso/iniciar.php';
        }
        public function registrar() {
            include_once '../view/Acceso/registrar.php';
        }
    }
?>