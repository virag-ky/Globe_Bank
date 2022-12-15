<?php

require_once('db_credentials.php');

function db_connect() {
  $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirm_db_connect();
  return $connection;
}

function db_disconnect($conn) {
  if (isset($conn)) {
    mysqli_close($conn);
  }
}

function confirm_db_connect() {
  if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_errno();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }
}

?>