<?php

function find_all_subjects() {
  global $db;
  
  $sql = "SELECT * FROM subjects ";
  $sql .= "ORDER BY position ASC";
  $result = $db->query($sql);
  return $result;
}

function find_all_pages() {
  global $db;

  $sql = "SELECT * FROM pages ";
  $sql .= "ORDER BY subject_id ASC, position ASC";
  $result = $db->query($sql);
  return $result;
}

function find_subject_by_id($id) {
  global $db;

$sql = "SELECT * FROM subjects ";
$sql .= "WHERE id='" . $id . "'";
$result = $db->query($sql);
$subject = mysqli_fetch_assoc($result);
mysqli_free_result($result);
return $subject;
}

function insert_subject($subject) {
  global $db;

  $sql = "INSERT INTO subjects ";
  $sql .= "(menu_name, position, visible) ";
  $sql .= "VALUES (" ;
  $sql .= " '" . $subject['menu_name'] ."',";
  $sql .= " '" . $subject['position'] ."',";
  $sql .= " '" . $subject['visible'] ."'";
  $sql .= ")";
  $result = $db->query($sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function update_subject($subject) {
  global $db;

  $sql = "UPDATE subjects SET ";
  $sql .= "menu_name='" . $subject['menu_name'] . "',";
  $sql .= "position='" . $subject['position'] . "',";
  $sql .= "visible='" . $subject['visible'] . "' ";
  $sql .= "WHERE id='" . $subject['id'] . "' ";

  $result = $db->query($sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}
 
?>