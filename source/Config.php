<?php
// DEFINIÇÕES DO SISTEMA
define("ROOT", "http://localhost/jafra");
define("ROOTSCRIPT", "http://localhost/jafra/source/public/pages");
define("SITE", "Jafra");
define("CREATOR", "Járdesson");
define ('SITE_ROOT', realpath(dirname(__FILE__)));

// CONFIG DO DE CONEXÃO

define("BD_HOST", "localhost");
define("BD_USER", "root");
define("BD_PASSWORD", "");
define("BD_BANCO", "dba_store");
define("BD_BANCO_TEST", "dba_store_test");
define("BD_DRIVER_DEFAULT", "mysql");
        
// DATA_LAYER_CONFIG
// define("DATA_LAYER_CONFIG", [
//     "driver" => "mysql",
//     "host" => "localhost",
//     "port" => "3306",
//     "dbname" => "dbo_blog",
//     "username" => "root",
//     "passwd" => "",
//     "options" => [
//         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//         PDO::ATTR_CASE => PDO::CASE_NATURAL
//     ]
// ]);

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}
