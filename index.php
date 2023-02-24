<?php

// Allow from any origin
$http_origin = $_SERVER['HTTP_ORIGIN'];
if (isset($http_origin)) {
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
//  if (strpos($http_origin, 'localhost') !== false) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
//  }
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        // may also be using PUT, PATCH, HEAD etc
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, PUT, DELETE");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, PUT, DELETE");

defined('BACKEND') or define('BACKEND',false);
defined('LOCAL_DOMAIN') or define('LOCAL_DOMAIN','usv');
define('CURRENT_ACTIVE_DOMAIN', $_SERVER['HTTP_HOST']);
defined('APP_DEPLOYED') or define('APP_DEPLOYED',!(CURRENT_ACTIVE_DOMAIN == LOCAL_DOMAIN));
defined('DS') or define('DS',DIRECTORY_SEPARATOR);


//Local Framework Path
$yii=(!APP_DEPLOYED)?dirname(__FILE__).DS.'frameworks'.DS .'yii_1.1.25'.DS .'framework'.DS .'yii.php':
//Server framework Path
dirname(__FILE__).DS.'frameworks'.DS .'yii_1.1.25'.DS .'framework'.DS .'yii.php';


$config=dirname(__FILE__).'/protected/config/main.php';
$shortcuts=dirname(__FILE__).DS.'protected'.DS .'helpers'.DS .'shortcuts.php';
$utils=dirname(__FILE__).DS.'protected'.DS .'helpers'.DS .'utils.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require($shortcuts);
require($utils);
require_once($yii);

Yii::createWebApplication($config)->run();
