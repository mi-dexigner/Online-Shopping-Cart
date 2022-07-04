<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php"; ?>
        <div class="card">
<div class="card-header page-header">
<h3>All Users</h3>
<a href="user-new" class="btn-outline">Add New</a>
</div>
  <div class="card-body">
 
  <table>
    <thead>
      <tr>
        <td><input id="cb-select-all-1" type="checkbox"></td>
        <td>Username</td>
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
        <td>Username</td>
        <td>Name</td>
        <td>Email</td>
        <td>Role</td>
      </tr>
    </tfoot>
    <tbody>
<?php
$sql = 'SELECT * FROM users';
$statement = $db->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_OBJ);
foreach($users as $user): 
  $name = get_user_meta($user->ID,"first_name").' '.get_user_meta($user->ID,"last_name");
  $role = get_user_meta($user->ID,"capabilities");
?>
      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="username">
         <div> <img src="https://randomuser.me/api/portraits/women/50.jpg" width="32" height="32" alt="1">
         <div>
         <strong><?php echo $user->user_login; ?></strong>
         <div class="row-actions">
            <span class="edit"><a href="">Edit</a> | </span>
           <span class="view"> <a href="">View</a> | </span>
            <span class="delete"><a href="" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a></span>
          </div>
         </div>
        </div>
         
        </td>
        <td><?php echo $name; ?></td>
        <td><?php echo $user->user_email; ?></td>
        <td><?php echo $role; ?></td>
      </tr>
   
      <?php endforeach;  ?>
    </tbody>
  </table>
 
  </div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>