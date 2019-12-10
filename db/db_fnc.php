<?php

require_once 'config.php'; //loeme andmebaasi conf sisse
//loome [henduse andmebaasiga
function connection($host, $user, $pass, $dbname)
{
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if ($link === false) {
        echo 'probleem db yhendusega!<br>';
        exit;
    }



return $link;
}

$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
