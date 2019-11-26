<?php
//Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.

$date = new DateTime($event['2016-02-29']);
$now = new DateTime();

if($date < $now) {
    echo '29.02.2016 maailma l6ppu ei tule kuna kuup2ev on minevikus';
}