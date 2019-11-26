
<!DOCTYPE html>
<html>
<head>
    <title>$division</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="value">
    <input type="submit">
</form>

<?php
$age = $_POST['value'];
$year = date("Y");
$result = $year - $age;
if($result % 5 == 0) {
    echo "Juubel";
} elseif(empty($_POST['value'])) {
    echo "Aasta ei saa olla tühi..";
} else {
    echo "Pole juubel";
}
?>

</body>
</html>