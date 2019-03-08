<?php
include('../config.php');

//create a connection object

$table_name = 'subscribers';

if(isset($_POST)){
foreach ($_POST as $key => $value) {
    $columns[] = $key;
    $values[] = $value;
}

$status = $conn->insert_into_table($table_name,$columns,$values);
Helper::redirect('../index.php'); //helper class is defined in config..here we are calling redirect method
}

?>