<?php
print('<h1>Raamatud</h1>');
$raamatud = [
    [
        'Pealkiri' => 'beta',
        'Autor' => 'omega',
        'Žanr' => 'tähestik',
        'Aasta' => 2028,
        'Raamatuid kokku' => 2
    ],
    [
        'Pealkiri' => 'alpha',
        'Autor' => 'omega',
        'Žanr' => 'tähestik',
        'Aasta' => 2037,
        'Raamatuid kokku' => 3
    ],
    [
        'Pealkiri' => 'gamma',
        'Autor' => 'omega',
        'Žanr' => 'tähestik',
        'Aasta' => 2019,
        'Raamatuid kokku' => 1
    ]
];
function compare($a, $b) { return $a['Pealkiri'] > $b['Pealkiri'] ? 1 : -1; }
usort($raamatud, 'compare');
foreach ($raamatud as $v) {
    print('<p>');
    foreach ($v as $key => $value) {
        print("$key: $value");
        if ($key == 'Raamatuid kokku') { print(' tk'); }
        print('<br>');
    }
    print('</p>');
}
?>