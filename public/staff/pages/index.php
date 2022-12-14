<?php require_once('../../../private/initialize.php'); ?>
<?php

$pages = [
['id' => '1', 'position' => '1', 'visible' => '1', 'name' => 'Business'],
['id' => '2', 'position' => '2', 'visible' => '1', 'name' => 'Nature'],
['id' => '3', 'position' => '3', 'visible' => '1', 'name' => 'IT'],
['id' => '4', 'position' => '4', 'visible' => '1', 'name' => 'Social']
]
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id='content'>
<div id='content'>
    <div class='subjects listings'>
      <h1>Pages</h1>
      <div class='actions'>
        <a href="" class="action">Create New Pages</a>
      </div>
      <table class='list'>
        <tr>
          <th>ID</th>
          <th>Position</th>
          <th>Visible</th>
          <th>Name</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach ($pages as $page) { ?>
          <tr>
          <td><?php echo $page['id']; ?></td>
          <td><?php echo $page['position']; ?></td>
          <td><?php echo $page['visible'] === '1' ? 'true' : 'false'; ?></td>
          <td><?php echo $page['name']; ?></td>
          <td><a href="<?php echo url_for("/staff/pages/show.php?id=$page[id]&name=$page[name]"); ?>" class='action'>View</a></td>
          <td><a href="" class='action'>Edit</a></td>
          <td><a href="" class='action'>Delete</a></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
</body>
</html>