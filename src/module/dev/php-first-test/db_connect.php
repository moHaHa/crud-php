<?php
class DB_CONNECT {
    function __construct() {
        $this->connect();
    }
    function __destruct() {
        $this->close();
    }
    function connect() {
        require_once './db_config.php';
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysqli_connect_error());
        $db = mysqli_select_db($con, DB_DATABASE) or die(mysqli_connect_error()) or die(mysqli_connect_error());
        return $con;
    }
    function close() {
        mysqli_close($this->connect());
    }
}
 