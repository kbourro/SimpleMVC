
<?php
// Load Config
require_once 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});

// foreach(glob(__DIR__.'\config\*.php') as $file){
//     require_once $file;
// }
// foreach(glob(__DIR__.'\libraries\*.php') as $file){
//     require_once $file;
// }