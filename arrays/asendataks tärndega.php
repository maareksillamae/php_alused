<?php
function badWords($text)
{
    $count = 0;
    $bad = array_flip([
        'dirty',
        'butt',
        'lips',
    ]);

    array_walk(
        $bad,
        function (&$value, $key)
        {
            $value = str_repeat('*', strlen($key));
        }
    );
    $text = str_replace(array_keys($bad), $bad, $text, $count);

    echo $text;

    if ($count > 0){
        echo "Bad";
    } else {
        echo "Good";
    }

    return $text;
}

$text = " this is a dirty text test no butt here and no lips ";
badWords($text);