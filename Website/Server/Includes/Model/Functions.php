<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Docroot.php';
require_once __DOCUMENTROOT__ . '/Conf/GlobalVars.php';
require_once __DOCUMENTROOT__ . '/Errors/Default.php';
require_once __DOCUMENTROOT__ . '/DB/DBConnection.php';

function extractResponseData(array $response, string $key) {
    return $response[$key] ?? null;
}

require_once __DOCUMENTROOT__ . '/Includes/Model/Functions/placeholder.txt';