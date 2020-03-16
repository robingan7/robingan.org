<?php 
include '../database.php';

$sql2 = "SELECT * FROM `counter` WHERE `type` = 'music';";
$result2 = mysqli_query($conn, $sql2);
$num = mysqli_num_rows($result2);


if($num == 0){
    echo '{}';
}else{
    $output = '{';
    while($row = mysqli_fetch_array($result2)){
        $currentPlay =$row['view'];
        $currentDownload = $row['download'];
        $currentId =  $row['item'];

        $output .= '"'.$currentId.'" : {"played" : "'. number_format($currentPlay) .'","downloaded" : "'. number_format($currentDownload) .'"},';
    }
   
    $output = substr($output, 0, -1);
    $output .= '}';
    echo $output;
}
?>