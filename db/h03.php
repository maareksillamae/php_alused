<?php

require_once("config.php");
require_once("db_fnc.php");
require_once("ui.php");

$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);

otsing();
if (isset($_GET['otsi'])) {
    $otsi = $_GET['otsi'];
    $sql = 'select 2015,kool From koolid2015 where kool like"%' . $otsi . '%"';
    $result = getData($sql, $ikt);
    tabel01($result, array('kool', '2015'));
}