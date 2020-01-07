
<!DOCTYPE html>
<html>
<body>

<h2>hääletus tabel!!!</h2>

<form method="get" action="haaletus.php">
    Eesnimi:<br>
    <input type="text" name="eesnimi" id="eesnimi">
    <br>
    Perenimi:<br>
    <input type="text" name="perenimi"  id="perenimi">
    <br>
    Otsus:<br>
    <input type="text" name="otsus" >
    <br><br>
    <input type="submit" value="Saada">
    <br><br>
</form>

</body>
</html>


<?php
require_once 'config1.php';
require_once 'db_fnc1.php';
$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
?>
<?php

$otsus=$_GET["otsus"];
$eesnimi=$_GET["eesnimi"];
$perenimi=$_GET["perenimi"];

$poolt = "poolt";
$vastu = "vastu";



$poolt1 = 'SELECT COUNT(Otsus) FROM Haaletaja WHERE Otsus ="'.$poolt.'"';
$poolt2 = getData($poolt1, $ikt);
echo "poolt: ".($poolt2[0]["COUNT(Otsus)"]);
echo "<br>";

$vastu1 = 'SELECT COUNT(Otsus) FROM Haaletaja WHERE Otsus ="'.$vastu.'"';
$vastu2 = getData($vastu1, $ikt);
echo "vastu: ".($vastu2[0]["COUNT(Otsus)"]);

echo "<br>";
echo "<br>";

//$result = getData($sql, $ikt);
$nimi = 'SELECT Eesnimi FROM Haaletaja WHERE Eesnimi ="'.$eesnimi.'"';
$Pnimi = 'SELECT Perenimi FROM Haaletaja WHERE Perenimi ="'.$perenimi.'"';

$nimi1 = getData($nimi, $ikt);
$Pnimi1 = getData($Pnimi, $ikt);

if ($nimi1 !== false and $Pnimi1 !== false) {
    $update = 'UPDATE Haaletaja SET Otsus ="'.$otsus.'" WHERE Eesnimi = "'.$eesnimi.'" AND Perenimi ="'.$perenimi.'"';
    $result = getData($update, $ikt);
} else{
    $sql = 'INSERT INTO Haaletaja (Eesnimi, Perenimi, Otsus, Hääletusaeg) VALUES ("'.$eesnimi.'","'.$perenimi.'","'.$otsus.'",now())';
    $result = getData($sql, $ikt);
}
$tabel = "SELECT * FROM Logi";
$result = $ikt->query($tabel);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Eesnimi"]. " " . $row["Perenimi"]. " / Aeg: " .$row["Aeg"]. " / Otsus: " .$row["Otsus"]."<br>";
}}


?>
