<?php
 include ("connectapi.php");

    // $ID= $_POST['ID'];
    $score = $_GET['score'];
    $initial = $_GET['initial'];
    $deemfit = $_GET['deemfit'];

    $SQL = "select * from student_quiz";
    $result = mysqli_query($conn,$SQL);
    if ($result) {
        $response = ['status'=>200, 'message'=>'data inserted successfully!!'];
        echo json_encode($response);
    } else {
        $response = ['status'=>500, 'message'=>'Internal server error!'];
        echo json_encode($response);
    }
