<?php 
include 'database.php';

if(isset($_GET['id'])){
    $name = mysqli_real_escape_string($conn, $_GET["id"]);

    $id = $_GET["id"];
    $sql2 = "SELECT * FROM `user` WHERE `id` = $id;";
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result2);

    if($num == 0){
        echo '{}';
    }else{
        $row = mysqli_fetch_array($result2);
        $entries = array("temp", "humidity", "battery", "airFlap", "tilt", "fill", "lastUpdate");
        $output = '{';

        foreach ($entries as &$value) {
            if($value == 'lastUpdate') {
                $output .= '"'.$value.'": "'.$row[$value].'",';
            } else {
                $output .= '"'.$value.'": '.$row[$value].',';
            }
        }

        $output = substr($output, 0, -1);
        $output .= '}';
        echo $output;
    }
}
?>