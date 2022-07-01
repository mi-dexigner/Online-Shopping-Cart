<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php";
   if(isset($_POST['action'])){
       if($_POST['action']==="createuser"){
           
           $user_login = $_POST['user_login'];
           $user_email = $_POST['user_email'];
           $user_pass = md5($_POST['user_pass']);
           $meta = $_POST['meta'];
           $first_name = $_POST['meta']['first_name'];
           $last_name = $_POST['meta']['last_name'];
           $website = $_POST['meta']['website'];
           $role = $_POST['meta']['role'];
          
           if(empty($_POST['user_login']) || empty($_POST['user_pass'])){
            $error = '
            <div id="login_error"> <strong>Error</strong>: The username field is empty.<br>
            <strong>Error</strong>: The password field is empty.<br>
            </div>';
            }
            if(empty($_POST['user_login'])){
              $error = '
              <div id="login_error"> <strong>Error</strong>: The username field is empty.<br>
              </div>';
              }
                if(empty($_POST['user_pass'])){
                  $error = '
                  <div id="login_error"><strong>Error</strong>: The password field is empty.<br>
                  </div>';
                  } 
                  $metaSql = 'INSERT INTO usermeta(user_id,meta_key,meta_value) VALUES(:user_id,:meta_key,:meta_value)';
                  $st = $db->prepare($metaSql);
                 
                  $sql = 'INSERT INTO users(user_login,user_pass,user_nicename,user_email,user_image,display_name) VALUES(:user_login,:user_pass,user_nicename,:user_email,:user_image,:display_name)';
                  $statement = $db->prepare($sql);
                  print_r($statement->execute()); 
                  die();
                  if($statement->execute(
                    [':user_login'=>$user_login,
                    ':user_pass'=>$user_pass,
                    ':user_nicename'=>'',
                    ':user_email'=>$user_email,
                    ':user_image'=>'',
                    ':display_name'=>$user_login]
                    )){
                     
                      $message = 'data inserted successfully';
                      $id = $db->lastInsertId();
                     /*  foreach($meta as $k => $v){
                          $st->bindParam(':user_id', $id);
                          $st->bindParam(':meta_key', $k);
                          $st->bindParam(':meta_value', $v);
                          $st->execute();
                      } */
                  } 
           
       }
   }
   
   ?>
        <div class="card">
<div class="card-header page-header column">
    <h3>Add New User</h3>
    <small>Create a brand new user and add them to this site.</small>
    <?php if(isset($error)){
      echo $error;
  } ?>
</div>
<div class="card-body">
<form method="POST" id="createuser" class="createform">
<input type="hidden" name="action" value="createuser">
<table class="form-table" role="presentation">
<tbody>
  <tr class="form-field">
    <th>
      <label for="user_login">Username (required)</label>
    </th>
    <td>
     <input type="text" placeholder="Username" name="user_login" id="user_login">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="user_email">Email (required)</label>
    </th>
    <td>
      <input type="email" placeholder="Email" name="user_email" id="user_email">
      
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="first_name"> First Name</label>
    </th>
    <td>
      <input type="text" placeholder="First Name" name="meta[first_name]" id="first_name">
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="last_name">Last Name</label>
    </th>
    <td>
      <input type="text" placeholder="Last Name" name="meta[last_name]" id="last_name">
    </td>
  </tr>
   <tr class="form-field">
    <th scope="row">
      <label for="website">Website</label>
    </th>
    <td>
      <input type="text" placeholder="Website" name="meta[website]" id="website">
    </td>

  </tr>
  <tr class="form-field">
     <th scope="row">
      <label for="user_pass">Password</label>
    </th>
    <td>
      <input type="password" id="password" placeholder="password" name="user_pass" id="user_pass">
    </td>
  </tr>
    <tr class="form-field">
         <th scope="row">
      <label for="role">Role</label>
    </th>
    <td>
  <select id="role"  name="meta[role]" id="role">
    <option value="shop_manager">Shop manager</option>
    <option value="customer">Customer</option>
    <option selected="selected" value="subscriber">Subscriber</option>
    <option value="contributor">Contributor</option>
    <option value="author">Author</option>
    <option value="editor">Editor</option>
    <option value="administrator">Administrator</option>
</select>
    </td>
 </tr>

</tbody>
</table>
<p class="submit"><input type="submit" name="submituser" id="createusersub" class="btn" value="Add New User"></p>
</form>
</div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>