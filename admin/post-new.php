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
        <td>Title</td>
        <td>Author</td>
        <td>Categories</td>
        <td>Tags</td>
        <td><span class="las la-comment-alt"></span></td>
        <td>Date</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
      <td>Title</td>
        <td>Author</td>
        <td>Categories</td>
        <td>Tags</td>
        <td><span class="las la-comment-alt"></span></td>
        <td>Date</td>
      </tr>
    </tfoot>
    <tbody>

      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="title">
         <div>
         <strong><a href="edit?post=123&action=edit">Hello World</a></strong>
         <div class="row-actions">
            <span class="edit"><a href="edit?post=123&action=edit">Edit</a> | </span>
           <span class="view"> <a href="edit?post=123&action=view">View</a> | </span>
            <span class="delete"><a href="edit?post=123&action=delete">Delete</a></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>James</td>
        <td>Admin</td>
        <td>Uncategories</td>
        <td>—</td>
        <td>—</td>
      </tr>
   
    
    </tbody>
  </table>
 
  </div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>