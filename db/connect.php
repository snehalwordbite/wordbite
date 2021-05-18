<?php

define('DB_DSN', 'mysql:host=localhost;dbname=wordbite_wordbite;');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

function db()
{
    static $db = null;
    if ($db === null) {
        $db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 COLLATE utf8_unicode_ci"
        ));
    }
    return $db;
}
?>