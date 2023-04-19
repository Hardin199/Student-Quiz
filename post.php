<?php
require("connectapi.php");

if (isset($_POST["Submit"])) {
    $score = $_POST["score"];
    $initial = $_POST["initial"];
    $deemfit = $_POST["deemfit"];
      $SQL = "INSERT INTO `formtable` (`score`,`initial`, `deemfit`) VALUES ( '" . $score . "', '" . $initial . "', '" . $deemfit . "')";
    $result= mysqli_query($conn,$SQL);

    if ($result) {
        echo "connected";
        
        // header("Location: display.php");
    } else {
        echo "faild";
    }
}
?>