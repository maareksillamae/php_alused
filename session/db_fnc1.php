<?php
function connection($hostname, $user, $pass, $dbname){
    $link = mysqli_connect($hostname, $user, $pass, $dbname);
    if($link === false){
        echo 'probleem andmebaasi ühendusega<br>';
        exit;
    }
    //määrame utf-8
    mysqli_set_charset($link, 'utf8');
    return $link; //tagastame edaspidiseks kasutamiseks
}

//suvalise päringu saatmine andmebaasi

function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
    }
    return $result;
}

function getData($sql, $link){
    $result = query($sql, $link);
    $data = array();
    // nii kaua kui andme ridu on nii kaua loeme ja salvestame neid et edaspidi kasutada
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
    if(count($data) == 0){
        return false;
    }
    return $data;
}

