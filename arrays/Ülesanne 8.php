<?php
echo date('d.m.Y G:i' , time());
if(date('D') == 'Sat' || date('D') == 'Sun') {
    echo "Today is Saturday or Sunday.";
} else {
    echo "Today is not Saturday or Sunday.";
}

?>
<?php
$datetime1 = new DateTime('2019-11-26');
$datetime2 = new DateTime('2020-06-24');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days to jaanupaev');

