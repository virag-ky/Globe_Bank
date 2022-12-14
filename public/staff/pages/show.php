<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '1';
$name = $_GET['name'] ?? 'Business';
?>
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id='content'>
  <a href="<?php echo url_for('staff/pages/index.php'); ?>" class='back-link'>&laquo; Back to List</a>
  <div class='page show'>
    Page ID: <?php echo h($id); ?>
  </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>