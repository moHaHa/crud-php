<?php

$response = array();
$postdata = $_POST;
$number = $postdata['number'];
 if (isset($number)) {
    require_once './db_connect.php';
    $db = new DB_CONNECT();
    $result = mysqli_query($db->connect(),"INSERT INTO records(number) VALUES('$number')");
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Task successfully created.";
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
    echo json_encode($response);
}
?>