<?php
include './conect_database.php'; // *CR don't forget to indloce conect_database then you can use $conn var variable
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
        if (mysqli_query($conn, $sql)) // CR : it's $conn not $coon 
        header('location: /form_page.php'); 
        else
            echo "Error : " .mysqli_error($conn);
    }

}
mysqli_close($conn) // *CR don't forget to close db connection
?>