<?php

require_once 'configuration/setting.php';
//require_once 'helper/url_helper.php';
spl_autoload_register(function($class){
 $parts=explode('\\',$class); 
  require_once LIBRARY . end($parts) . '.php';
});


?>
