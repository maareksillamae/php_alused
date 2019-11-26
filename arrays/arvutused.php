<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>06 - PHP - Vormid</title>
    </head>
    <body>

    <h1>Arvutused</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <h2>Kera</h2>
        raadius <input type="text" name="kera-raadius"><br><hr>
        <h2>Koonus</h2>
        raadius <input type="text" name="koonuse-raadius"><br>
        kõrgus <input type="text" name="koonuse-korgus"><br><hr>
        <h2>Silinder</h2>
        raadius <input type="text" name="silindri-raadius"><br>
        kõrgus <input type="text" name="silindri-korgus"><br>
        <input type="submit" value="Saada">
    </form>
    </body>
    </html>
<?php
// arvutusfunktsioonid
function keraRuumala($raadius){
    $ruumala =  4 * pi() * pow($raadius, 2); // 4 pi raadius ruudus
    return round($ruumala, 2); // ümmardame - 2 koma kohta
}
function koonuseRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2); // pi raadius ruudus
    $ruumala = (1 / 3) * $pohjaPindala * $korgus;
    return round($ruumala, 2);
}
function silindriRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2); // pi raadius ruudus
    $ruumala = $pohjaPindala * $korgus;
    return round($ruumala, 2);
}
// arvutame ja väljastame tulemused
// vormi andmed
$keraRaadius = $_GET['kera-raadius'];
$koonuseRaadius = $_GET['koonuse-raadius'];
$koonuseKorgus = $_GET['koonuse-korgus'];
$silindriRaadius = $_GET['silindri-raadius'];
$silindriKorgus = $_GET['silindri-korgus'];
// arvutused
$keraRuumala = keraRuumala($keraRaadius);
$koonuseRuumala = koonuseRuumala($koonuseRaadius, $koonuseKorgus);
$silindriRuumala = silindriRuumala($silindriRaadius, $silindriKorgus);
// väljastus
if(count($_GET) != 0) {
    echo '<hr>';
    echo 'Kera raadiusega ' . $keraRaadius . ' ruumala = ' . $keraRuumala . '.<br>';
    echo 'Koonuse raadiusega ' . $koonuseRaadius . ' ja kõrgusega ' . $koonuseKorgus . ' ruumala = ' . $koonuseRuumala . '.<br>';
    echo 'Silindri raadiusega ' . $silindriRaadius . ' ja kõrgusega ' . $silindriKorgus . ' ruumala = ' . $silindriRuumala . '.<br>';
}