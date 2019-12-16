<?php
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid
// teeme katsed
$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
// katsetame sql
//$slq = 'RENAME TABLE `anna_db`.`koolid` TO `anna_db`.`koolid2015`';
//$result = query($slq, $ikt);
$sql = 'SELECT Kool,Kokku FROM koolid2015';
$result = getData($sql, $ikt);
/*echo '<pre>';
print_r($result);*/
table01($result);