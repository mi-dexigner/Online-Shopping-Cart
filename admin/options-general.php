<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php"; ?>
        <div class="card">
            <div class="card-header">
                <h3>General Settings</h3>
            </div>
            <div class="card-body">
                <form method="post" method="user-new.html" id="createuser" enctype="">
<input type="hidden" name="action" value="createuser">
<table class="form-table" role="presentation">
<tbody>
     <tr class="form-field">
    <th>
      <label for="site_icon">Favicon</label>
    </th>
    <td>
     <input type="file" name="site_icon" id="site_icon">
    </td>
  </tr>
    <tr class="form-field">
    <th>
      <label for="site_logo">Logo</label>
    </th>
    <td>
     <input type="file" name="site_logo" id="site_logo">
    </td>
  </tr>
 
  <tr class="form-field">
    <th>
      <label for="site_url">Site URL</label>
    </th>
    <td>
     <input type="url" placeholder="Site URL" name="site_url" id="site_url" value="<?php echo setting('site_url'); ?>">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="site_name">Site Title</label>
    </th>
    <td>
     <input type="text" placeholder="Site Title" name="site_name" id="site_name" value="<?php echo setting('site_name'); ?>">
    </td>
  </tr>
  <tr class="form-field">
    <th>
      <label for="site_description">Tagline</label>
    </th>
    <td>
      <input type="text" placeholder="Tagline" name="site_description" id="site_description" value="<?php echo setting('site_description'); ?>">
      <p>In a few words, explain what this site is about.</p>
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="admin_email"> Email Address</label>
    </th>
    <td>
      <input type="email" placeholder="Email Address" name="admin_email" id="admin_email" value="<?php echo setting('admin_email'); ?>">
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row">
      <label for="admin_phone">Phone No</label>
    </th>
    <td>
      <input type="text" placeholder="Phone No" name="admin_phone" id="admin_phone" value="<?php echo setting('admin_phone'); ?>">
    </td>
  </tr>
   <tr class="form-field">
    <th scope="row">
      <label for="admin_address">Address</label>
    </th>
    <td>
      <input type="text" placeholder="Address" name="admin_address" id="admin_address" value="<?php echo setting('admin_address'); ?>">
    </td>

  </tr>
   <tr class="form-field">
    <th scope="row">
      <label for="default_role">New User Default Role</label>
    </th>
    <td>
    
      <select name="default_role" id="default_role">
      <option value="shop_manager" <?php echo (setting('default_role')==='shop_manager'?'selected':''); ?>>Shop manager</option>
    <option value="customer" <?php echo (setting('default_role')==='customer'?'selected':''); ?>>Customer</option>
    <option value="subscriber" <?php echo (setting('default_role')==='subscriber'?'selected':''); ?>>Subscriber</option>
    <option value="contributor" <?php echo (setting('default_role')==='contributor'?'selected':''); ?>>Contributor</option>
    <option value="author" <?php echo (setting('default_role')==='author'?'selected':''); ?>>Author</option>
    <option value="editor" <?php echo (setting('default_role')==='editor'?'selected':''); ?>>Editor</option>
    <option value="administrator" <?php echo (setting('default_role')==='administrator'?'selected':''); ?>>Administrator</option>
      </select>
    </td>

  </tr>
   <tr class="form-field">
    <th scope="row">
      New User Default Role
    </th>
    <td>
    <label for="users_can_register">
<input name="users_can_register" type="checkbox" id="users_can_register" value="1"  <?php echo (setting('users_can_register')=='1'?'checked="checked"':''); ?>>
	Anyone can register</label>
    </td>

  </tr>
  

</tbody>
</table>
<p class="submit"><input type="submit" name="createuser" id="createusersub" class="btn" value="Save Changes"></p>
</form>
            </div>
        </div>
        <?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>



 <!-- https://www.codegrepper.com/code-examples/php/php+random+7+digit+number
https://www.youtube.com/watch?v=KuuM82fO2U0
-->