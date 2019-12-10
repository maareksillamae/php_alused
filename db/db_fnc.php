<?php

require_once 'config.php'; //loeme andmebaasi conf sisse
//loome [henduse andmebaasiga
function connection($host, $user, $pass, $dbname)
{
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if ($link === false) {
        echo 'probleem db yhendusega!<br>';
        exit;
    }


return $link;
}

function query($sql,$link){
    $result = mysqli_query($link,$sql);
    if($result=== false){
        echo'probleem p2ringuga<b>'.$sql.'<b><br>';
    }
return $result;
}
function getData($sql,$link){
    $result = query($sql,$link);
    $data= array();
    while($row=mysqli_fetch_array($result, mysqli_fetch_assoc)){
        $data[]=$row;
    }
    if(count($data)==0){
        return false;
    }
}

$ikt = connection(HOSTNAME, USERNAME, PASSWORD, DBNAME);
