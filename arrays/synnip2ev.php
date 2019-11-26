<?php
//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.

$datetime1 = new DateTime('1980-11-06');
$datetime2 = new DateTime('1994-08-18');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%Y years, %m months, %d days older');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> sinu synnikuup2ev on 1980-11-06 </h2>
<h2> minu synnikuup2ev on 1994-08-18</h2>

</body>
</html>
