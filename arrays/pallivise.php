<?php
print('<h1>Pallivise</h1>');

$pallivisked = array(33, 32, 27, 11, 15, 28);
$nimed = array('Martin', 'Hardi', 'Juhan', 'Tiina', 'Sirje', 'Kaie');
$keskVise = array_sum($pallivisked);
$keskVise = $keskVise / count($pallivisked);
echo '<br>';
echo 'Osalejaid on: ' . count($nimed) . '<br>';
echo 'Keskmine palliviske tulemus: ' . $keskVise . '<br>';
echo 'Parim tulemus: ' . max($pallivisked) . '<br>';
echo 'Parima tulemuse viskas: ' . $nimed[array_search(max($pallivisked), $pallivisked)] . '<br>';
echo '<hr>';
