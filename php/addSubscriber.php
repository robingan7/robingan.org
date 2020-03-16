<?php 
include 'database.php';

if(isset($_POST["subEmail"])){
    $subEmail = mysqli_real_escape_string($conn, $_POST["subEmail"]);

    $sql2 = "SELECT * FROM subscribers WHERE email='$subEmail';";
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result2);

    if(count(explode("@",$subEmail)) >= 2){

        if($num != 0){
            echo "You already subscribed :)";
        }else{
            $sql3 = "INSERT INTO `subscribers`(`email`) VALUES ('$subEmail');";
            $insert = mysqli_query($conn,$sql3);

            echo "Thank you so much!";
        }
    }else{
        echo "short";
    }   
}
?>