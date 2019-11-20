<?php
function p($txt) { print('<p>' .$txt .'</p>'); }
print('<h1>Õppeained</h1>');
$ained = ['Matemaatika', 'OOP', 'Arvutigraafika', 'Füüsika', 'Bioloogia'];
sort($ained);
foreach ($ained as $a) {
    p("$a");
}
