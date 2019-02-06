<?php
    $SERVERNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DBNAME = 'beet';

    try {
        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
    } 
    catch(Exception $e) {
        echo $e->getMessage();
    }
?>