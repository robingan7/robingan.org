<?php
include 'database.php';
header("Content-Type: application/json"); 
$data = json_decode(file_get_contents('php://input'), true);

if(checkJSON($data)) {
    $sql2 = "SELECT * FROM `user` WHERE id = '1';";
    $result2 = mysqli_query($conn, $sql2);
    $temp = $data['temp'];
    $humidity = $data['humidity'];
    $battery = $data['battery'];
    $airFlap = $data['airFlap'];
    $tilt = $data['tilt'];
    $fill = $data['fill'];
    $lastUpdate = date_format(date_create(), 'Y-m-d H:i:s');
    $sql2 = "UPDATE `user` SET `temp`=$temp,`humidity`=$humidity,`battery`=$battery,`airFlap`=$airFlap,`tilt`=$tilt,`fill`=$fill,`lastUpdate`='$lastUpdate' WHERE`id`=1";
    $result2 = mysqli_query($conn, $sql2);

    echo $lastUpdate;
} else {
    echo 'invalid';
}

 function checkJSON($input) {
    $entries = array("temp", "humidity", "battery", "airFlap", "tilt", "fill");

    foreach ($entries as &$value) {
        if(!array_key_exists($value, $input)) {
            return false;
        }
    }

    return true;
 }

 /**
 * {  temp: int, humidity: int, battery: int, airFlap: boolean, tilt: boolean, fill: boolean  }
 */
?> 