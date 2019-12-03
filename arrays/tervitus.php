<?php

//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
$hour = date('H', time());

echo 'aaa'.$hour;

if( $hour > 8 && $hour <= 13) {
    echo "Tere hommikust!";
}
else if($hour > 13 && $hour <= 17) {
    echo "Tere p2evast!";
}
else if($hour > 17 && $hour <= 20) {
    echo "Tere 6htust!";
}
else {
    echo "miks sa ei maga? Kas sa j2lle proged?";
}