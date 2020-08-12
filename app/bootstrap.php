<?php
//App config file
require_once 'config/config.php';

//Autoloader define for Core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
