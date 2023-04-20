<?php
 include ("connectapi.php");

    $score = $_POST['score'];
    $initial = $_POST['initial'];

    $SQL = "select * from student_quiz";
    $result = mysqli_query($conn,$SQL);
    if ($result) {
        $response = ['status'=>200, 'message'=>'data inserted successfully!!'];
        echo json_encode($response);
    } else {
        $response = ['status'=>500, 'message'=>'Internal server error!'];
        echo json_encode($response);
    }
?>