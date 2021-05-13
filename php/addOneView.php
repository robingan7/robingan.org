<?php 
include 'database.php';

if(isset($_POST["name"]) and isset($_POST["type"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);

    $sql2 = "SELECT * FROM `counter` WHERE item = '$name' AND `type` = '$type';";
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result2);


    if($num == 0){
        $sql2 = "INSERT INTO `counter`(`item`, `view`, `thumbup`, `type`) VALUES ('$name', 2 , 0, '$type');";
        $result2 = mysqli_query($conn, $sql2);

        echo '2';
    }else{
        $currentView = mysqli_fetch_array($result2)['view'];

        $sql2 = "UPDATE `counter` SET view = view + 1 WHERE item = '$name' AND `type` = '$type';";
        $result2 = mysqli_query($conn, $sql2);

        echo number_format((string)$currentView);
    }
}
?>