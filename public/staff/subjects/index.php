<?php require_once('../../../private/initialize.php');

$subject_set = find_all_subjects();

$subjects = [
[
  'id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'
],
[
  'id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'
],
[
  'id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'
],
[
  'id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'
]
]
?>

<?php $page_title = 'Subjects Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
  <div id='content'>
    <div class='subjects listings'>
      <h1>Subjects</h1>
      <div class='actions'>
        <a href="<?php echo url_for('staff/subjects/new.php'); ?>" class="action">Create New Subjects</a>
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
        <?php foreach ($subjects as $subject) { ?>
          <tr>
          <td><?php echo h($subject['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo $subject['visible'] === '1' ? 'true' : 'false'; ?></td>
          <td><?php echo h($subject['menu_name']); ?></td>
          <td><a href="<?php echo url_for("/staff/subjects/show.php?id=" . h(u($subject['id']))); ?>" class='action'>View</a></td>
          <td><a href="<?php echo url_for('staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>" class='action'>Edit</a></td>
          <td><a href="" class='action'>Delete</a></td>
        </tr>
        <?php } ?>
      </table>
      <!-- <?php mysqli_free_result($subject_set); ?> -->
    </div>
  </div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
</body>
</html>