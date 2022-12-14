<?php require_once('../../../private/initialize.php'); ?>
<?php

$id = $_GET['id'] ?? '1';
$name = $_GET['name'] ?? 'Business';

echo h($id) . "\n" . h($name);

?>