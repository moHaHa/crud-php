<?php
$response = array();
$postdata = $_POST;
$number = $postdata['number'];
if (isset($number) ) {

    echo 'has data at least ' . $number ;
} else {
    echo 'no data ' . $number ;

}

?>
