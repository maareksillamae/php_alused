
<html>
<head>
    <title> PHP code to get textbox value and print it in Uppercase </title>
</head>
<body>
<form action="">
    <input type="text" id="str" type="text" name="str" maxlength="10" size="26">

    <input type="submit" name="submit" formmethod="POST">
</form>

<?php
if(isset($_POST['submit']))
{
    $str = ucfirst($_POST['str']);
    echo "Tere,";
    echo chunk_split($str, 1, '.');
}
?>
</body>
</html>