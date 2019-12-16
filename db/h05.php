<?php
echo 'Andmebaasi on lisatud ' . mysqli_affected_rows($ikt) . ' rida<br>';
echo 'Viimati lisatud ID: ' . mysqli_insert_id($ikt) . '<br>';

// kontrollime andmed andmebaasist
$sql = 'SELECT enimi,pnimi,kontakt FROM kliendid';
$result = getData($sql, $ikt);
table01($result, array('Eesnimi', 'Perenimi', 'Kontakt'));