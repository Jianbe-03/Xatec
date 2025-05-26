<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/Docroot.php';
require_once __DOCUMENTROOT__ . '/Conf/DB.php';
require_once __DOCUMENTROOT__ . '/Errors/Default.php';

try {
    $conn = new mysqli($host, $user, $password, $dbname);
} catch (Exception $e) {
    echo $e;
}