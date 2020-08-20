<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $dBServername = "localhost";
    $dBUsername = "u880691907_alexlynd";
    $dBPassword = "Sciencefairproject2021";
    $dBName = "u880691907_pylar";

    /*$dBServername = "localhost";
    $dBUsername = "u880691907_gan";
    $dBPassword = "gzt11111";
    $dBName = "u880691907_robinganData";*/

    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

}catch (mysqli_sql_exception $e) {
    $dBServername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "pylar";

    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>