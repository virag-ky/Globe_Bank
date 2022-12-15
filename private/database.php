<?php

require_once('db_credentials.php');

function db_connect() {
  $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  return $connection;
}

function db_disconnect($conn) {
  if (isset($conn)) {
    mysqli_close($conn);
  }
}

?>