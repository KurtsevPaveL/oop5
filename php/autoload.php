<?php

    spl_autoload_register('autoload');

    function autoload($className) {
        $fileName = '../classes/' . strtolower($className) . '.php';
        include $fileName;
    }
