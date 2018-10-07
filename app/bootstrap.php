
<?php
foreach(glob(__DIR__.'\libraries\*.php') as $file){
    require_once $file;
}