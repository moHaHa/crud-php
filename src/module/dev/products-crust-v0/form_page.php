<?php
include './inc/conect_database.php';
include './inc/insert_into_database.php';

$sql_select = 'SELECT * FROM products';
$all = mysqli_query($conn, $sql_select);
$products = mysqli_fetch_all($all, MYSQLI_ASSOC);

echo '<pre>';
print_r($products);
echo '</pre>';

mysqli_free_all($all);
mysqli_close($conn)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        body{margin: 25px;}
        input{width: 500px;}
    </style>
</head>
<body>
    <h1>Add New Product</h1>
    <br>
    <form method="post" action="/form_page.php">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" required> <br><br>
        <label for="picture">Picture URL</label><br>
        <input type="text" name="picture" id="picture" required> <br><br>
        <label for="price">Price</label><br>
        <input type="number" name="price" id="price" required> <br><br><br>
        <input type="submit" name="save" value="save">
    </form>
</body>
</html>