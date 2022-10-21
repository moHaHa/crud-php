<?php

$title = $_POST['title'];
$picture = $_POST['picture'];
$price = $_POST['price'];
$date = date('d-m-y');

if (isset($_POST["save"]))
{
    $sql = "INSERT INTO products(title, picture, price, deta) 
            VALUES('$title', '$picture', '$price', '$date')"; 

    if (empty($title) || empty($picture) || empty($price))
    {
        echo"Please Enter All the Information";
    }
    else 
    {
        if (mysqli_qurery($coon, $sql))
            header('location: /form_page.php');
        else
            echo "Error : " .mysqli_error($conn);
    }

}