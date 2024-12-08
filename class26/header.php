<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainFile </title>
    <h2>Date & Time</h2>
<?php
echo  "Today's date is : " . date("y/m/d") . "<br>";
date_default_timezone_set("Asia/tokyo");
echo  " Tokyo's time now : " . date("h:i:sa") ."<br>"."<br>";
$d = mktime(12, 10, 2024);
$t = mktime(9,50,00);
echo "<em>Fixed date created</em> : " . date("y-m-d", $d) ."<br>";
echo "<em>Fixed time created</em> : " . date("h:i:s", $t); 

?>
    