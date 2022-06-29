<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php"; ?>
        <div class="card">
<div class="card-header page-header">
<h3>Categories</h3>
</div>
  <div class="card-body">
 <div class="col-container">
     <div class="col-left">
         <div class="col-wrap">
        <div class="form-wrap">
         <h2>Add New Category</h2>
         <form id="addtag" method="post" action="edit-tags.php" class="validate">
         <input type="hidden" name="action" value="add-tag">
         <input type="hidden" name="taxonomy" value="category">
         <input type="hidden" name="post_type" value="post">
         <div class="form-field form-required term-name-wrap">
	<label for="tag-name">Name</label>
	<input name="tag-name" id="tag-name" type="text" value="" size="40" aria-required="true">
	<p>The name is how it appears on your site.</p>
</div>
	<div class="form-field term-slug-wrap">
	<label for="tag-slug">Slug</label>
	<input name="slug" id="tag-slug" type="text" value="" size="40">
	<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
</div>
<div class="form-field term-parent-wrap">
	<label for="parent">Parent Category</label>
		<select name="parent" id="parent" class="postform">
	<option value="-1">None</option>
</select>
				<p>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</p>
	</div>
	<div class="form-field term-description-wrap">
	<label for="tag-description">Description</label>
	<textarea name="description" id="tag-description" rows="5" cols="40"></textarea>
	<p>The description is not prominent by default; however, some themes may show it.</p>
</div>
<p class="submit">
		<input type="submit" name="submit" id="submit" class="btn" value="Add New Category">
	</p>

         </form>
         </div>
         </div>
     </div>
     <div class="col-right">
     <table class="table-taxonomy striped">
    <thead>
      <tr>
        <td><input id="cb-select-all-1" type="checkbox"></td>
        <td>Name</td>
        <td>Description</td>
        <td>Slug</td>
        <td>Date</td>
      </tr>
    </thead>
    <tfoot>
      <tr>
      <td><input id="cb-select-all-2" type="checkbox"></td>
      <td>Name</td>
        <td>Description</td>
        <td>Slug</td>
        <td>Date</td>
      </tr>
    </tfoot>
    <tbody>

      <tr>
        <td><input type="checkbox" name="users[]" id="user_1" class="administrator" value="1"></td>
        <td class="title">
         <div>
         <strong><a href="edit?tag_ID=123&action=edit">Uncategories</a></strong>
         <div class="row-actions">
            <span class="edit"><a href="edit?tag_ID=123&action=edit">Edit</a> | </span>
           <span class="view"> <a href="edit?tag_ID=123&action=view">View</a> | </span>
            <span class="delete"><a href="edit?tag_ID=123&action=delete">Delete</a></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>—</td>
        <td>uncategories</td>
        <td>Uncategories</td>
      </tr>
   
    
    </tbody>
  </table>
     </div>
 </div>
 
  </div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>