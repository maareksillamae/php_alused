

<html>
<head>
    <title> PHP code to get textbox value and print it in Uppercase </title>
</head>
<body>
<form action="">
    <input type="text" id="text" type="text" name="text" maxlength="10" size="26">

    <input type="submit" name="submit" formmethod="POST">
</form>


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