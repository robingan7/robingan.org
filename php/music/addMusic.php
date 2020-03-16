<?php 
include '../database.php';

if(isset($_POST["id"])){
    $name = mysqli_real_escape_string($conn, $_POST["id"]);

    $sql2 = "SELECT * FROM `counter` WHERE item = '$name' AND `type` = 'music';";
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result2);


    if($num == 0){
        $sql2 = "INSERT INTO `counter`(`item`, `view`, `download`, `type`) VALUES ('$name', 2 , 2, 'music');";
        $result2 = mysqli_query($conn, $sql2);

        echo '{
            "played": "2",
            "downloaded" :"2"
        }';
    }else{
        echo 'error';
    }
}
?>