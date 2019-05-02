<?php

$DB_ADDRESS="delta-repeater-228411:europe-west3:bdd";
$instance_name="/cloudsql/delta-repeater-228411:europe-west3:bdd";
$DB_USER="pablo";
$DB_PASS="pablo";
$DB_NAME="bdd1";
$SQLKEY="secret";

header ('Cache-Control: no-cache, must-revalidate');
header ('Content-type: text/csv');

$query="use bdd1;select * from mantenimiento;";
$conn = new mysqli(null, &DB_USER, &DB_PASS, &DB_NAME, 0, &INSTANCE_NAME);
if($conn->connect_error){                                                           
    header("HTTP/1.0 400 Bad Request");
    echo "ERROR Database Connection Failed: " . $conn->connect_error, E_USER_ERROR;   
  } else {
    $result=$conn->query($query);                                                    
    if($result === false){
      header("HTTP/1.0 400 Bad Request");                                             
      echo "Wrong SQL: " . $query . " Error: " . $conn->error, E_USER_ERROR;          
    } else {
      
        $row1=$result->fetch_row();
        row[0]
    
