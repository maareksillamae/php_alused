<?php


function getVar($name, $def = '') {
    if (isset($_REQUEST[$name]))
        return $_REQUEST[$name];
    else
        return $def;
}

// check if overrides passed
$euser = getVar('user', '');
$epass = getVar('pass', $epass);
$edomain = getVar('domain', $edomain);
$equota = getVar('quota', $equota);

$msg = 'check';

if (!empty($euser))
    while(true) {

        // Create email account
        $f = fopen ("");
        if (!$f) {
            $msg = 'hetkel ei saa emaili teha';
            break;
        }

        $msg = "<h2>Email account {$euser}@{$edomain} created.</h2>";

        // Check result
        while (!feof ($f)) {
            $line = fgets ($f, 1024);
            if (ereg ("already exists", $line, $out)) {
                $msg = "<h2>Email account {$euser}@{$edomain} already exists.</h2>";
                break;
            }
        }
        @fclose($f);

        break;

    }

?>
<html>
<head><title>cPanel Email Account Creator</title></head>
<body>
<?php echo '<div style="color:red">'.$msg.'</div>'; ?>
<h1>cPanel Email Account Creator</h1>
<form name="frmEmail" method="post">
    <table width="400" border="0">
        <tr><td>Username:</td><td><input name="user" size="20" value="<?php echo htmlentities($euser); ?>" /></td></tr>
        <tr><td>Password:</td><td><input name="pass" size="20" type="password" /></td></tr>
        <tr><td colspan="2" align="center"><hr /><input name="submit" type="submit" value="Create Email Account" /></td></tr>
    </table>
</form>
</body>
</html>