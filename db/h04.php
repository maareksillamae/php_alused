<?php

require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid
$ikt = connection(HOSTNAME, USERNAME,PASSWORD, DBNAME);
// lause andmete sisestamiseks
$sql = 'INSERT INTO kliendid SET '.
    'enimi="Karin", '.
    'pnimi="Eegreid", '.
    'kontakt="karin@eegreid.com"';
$result = query($sql, $ikt);
if($result) {
    echo 'Andmebaasi on lisatud '.mysqli_affected_rows($ikt).' rida<br>';
    echo 'Viimati lisatud ID: '.mysqli_insert_id($ikt).'<br>';
}