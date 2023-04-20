<?php
require("connectapi.php");

// if (isset($_POST["Submit"])) {
    $score = $_POST['score'];
    $initial = $_POST['initial'];
      $SQL = "INSERT INTO `student_quiz` (`score`,`initial`) VALUES ( '" . $score . "', '" . $initial . "')";
    $result= mysqli_query($conn,$SQL);
    if ($result) {
        echo "connected";
        
        // header("Location: display.php");
    } else {
        echo "faild";
    }
// }
?>