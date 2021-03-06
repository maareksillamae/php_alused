<?php
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid
$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
//Andmete kustutamine
if(!empty($_GET['kustutaID'])){
    $id = $_GET['kustutaID'];
    $sql = 'DELETE FROM kliendid WHERE id="'.$id.'"';
    $result = query($sql, $ikt);
    if($result) {
        header('Location: '.$_SERVER['PHP_SELF']);
    }
}
// Andmete muutmise kuvamine
if(!empty($_GET['muudaID'])){
    $id = $_GET['muudaID'];
    // saame andmed andmebaasist
    $sql = 'SELECT * FROM kliendid WHERE id="'.$id.'"';
    $result = getData($sql, $ikt);
    // kuvame muutmisvorm
    changeClient($result[0]);
}
// andmete muutmine
// muudame edastatud andmete vastu
if(!empty($_POST['muudanyyd'])) {
    // kui andmed on sisestatud
    if(!empty($_POST['enimi']) and !empty($_POST['pnimi'])){
        // koostame uuendamispäring
        $sql = 'UPDATE kliendid SET '.
            'enimi="'.$_POST['enimi'].'", '.
            'pnimi="'.$_POST['pnimi'].'", '.
            'kontakt="'.$_POST['kontakt'].'" WHERE id="'.$_POST['id'].'"';
        // saadame andmed andmebaasi
        $result = query($sql, $ikt);
        if($result) {
            // kui päring on õnnestunud uuendame lehe
            header('Location: '.$_SERVER['PHP_SELF']);
        }
    }
}
// Andmete kuvamine
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
// väljastame andmed
table10($result, array('Eesnimi', 'Perenimi', 'Kontakt', '', ''));