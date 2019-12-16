<?php
//h01 väljastamine
function tabel01($dbResult){
    echo '<tabel>';
    echo '<thead>';
    echo '<tr>
    <th>kooli nimi </th>
    <th>2012</th>
    </tr>';
    echo '</thead>';
    echo'<tbody>';
    foreach ($dbResult as $row => $schoolData){
        echo'<tr>';
        foreach ($schoolData as $name=>$value){
            echo'<td>'.$value.'</td>';
        }
        echo '</tr>';
    }


    echo'</tbody>';
    echo '</tabel>';

}