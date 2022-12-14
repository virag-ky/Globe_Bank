<?php require_once('../../../private/initialize.php'); ?>
<?php

$id = $_GET['id'] ?? '1';

echo h($id);

?>


<!-- <a href="show.php?name=<?php echo u('Jane Doe'); ?>">Name</a>
<a href="show.php?company=<?php echo u('C&C'); ?>">Company</a>
<a href="show.php?query=<?php echo u('!?#*'); ?>">Link</a> -->