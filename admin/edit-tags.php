<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php"; ?>
   <?php
   if(isset($_POST['action'])){
    if($_POST['action']==="add-tag"){
      $taxonomy = $_POST['taxonomy'];
      $tag_name = $_POST['tag_name'];
      $slug = createSlug($_POST['slug']);
      $parent = $_POST['parent'];
      $description = $_POST['description'];
      $thumbnail = $_FILES['postmeta']['name']['thumbnail'];
      if(empty($_POST['slug'])){
        $slug = createSlug($_POST['tag_name']);
        }
      if(empty($_FILES['postmeta']['name']['thumbnail'])){
          $sql = 'INSERT INTO `terms`(`name`, `slug`, `taxonomy`, `description`, `parent`) VALUES (:name,:slug,:taxonomy,:description,:parent)';
          $statement = $db->prepare($sql);
          if($statement->execute(
            [':name'=>$tag_name,
            ':slug'=>$slug,
            ':taxonomy'=>$taxonomy,
            ':description'=>$description,
            ':parent'=>$parent]
            )){
              $message = 'Insert Successfully';
          }
      }else{
        $file_name = $_FILES['postmeta']['name']['thumbnail'];
        $file_temp = $_FILES['postmeta']['tmp_name']["thumbnail"];
        $allowed_ext = $IMAGE_ALLOWED_TYPES;        ;
        $exp = explode(".", $file_name);
        $ext = end($exp);
        $path = '../'.DIR_UPLOAD.mt_rand().$file_name;
        if(in_array($ext, $allowed_ext)){
          if(move_uploaded_file($file_temp, $path)){
            $metaSql = 'INSERT INTO termmeta(term_id,meta_key,meta_value) VALUES(:term_id,:meta_key,:meta_value)';
            $st = $db->prepare($metaSql);
            $sql = 'INSERT INTO `terms`(`name`, `slug`, `taxonomy`, `description`, `parent`) VALUES (:name,:slug,:taxonomy,:description,:parent)';
            $statement = $db->prepare($sql);
            if($statement->execute(
              [':name'=>$tag_name,
            ':slug'=>$slug,
            ':taxonomy'=>$taxonomy,
            ':description'=>$description,
            ':parent'=>$parent]
              )){
               
                $message = 'data inserted successfully';
                $id = $db->lastInsertId();
               // foreach($meta as $k => $v){
                   /*  $st->bindParam(':term_id', $id);
                    $st->bindParam(':meta_key', 'thumbnail');
                    $st->bindParam(':meta_value', $file_name); */
                    $st->execute(
                      [':term_id'=>$id,
                    ':meta_key'=>'thumbnail',
                    ':meta_value'=>str_replace("../",BASE_URL,$path)]);
                //} 
            }
          }
        }else{
          echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
        }
        echo "run with image" .$ext;
      }
      //die();
      
    }
    
  }

  if(isset($_GET['action'])){
    if($_GET['action'] === "delete"){
$id = $_GET['tag_ID'];
$sql = 'DELETE FROM terms WHERE term_id=:id';
$statement = $db->prepare($sql);
if($statement->execute([':id'=>$id])){
    header("Location: ".ADMIN_URL);
}
    }
  }
   ?>
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
         <form id="addtag" method="post" class="validate" enctype="multipart/form-data">
         <input type="hidden" name="action" value="add-tag">
         <input type="hidden" name="taxonomy" value="<?php echo (isset($_GET['taxonomy'])?$_GET['taxonomy']:'category'); ?>">
         <div class="form-field form-required term-name-wrap">
	<label for="tag-name">Name</label>
	<input name="tag_name" id="tag-name" type="text" value="" size="40" aria-required="true">
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
	<option value="0">None</option>
</select>
				<p>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</p>
	</div>
	<div class="form-field term-description-wrap">
	<label for="tag-description">Description</label>
	<textarea name="description" id="tag-description" rows="5" cols="40"></textarea>
	<p>The description is not prominent by default; however, some themes may show it.</p>
</div>
<div class="form-field">
  <label for="thumbnail">Thumbnail</label>
  <input type="file" name="postmeta[thumbnail]" id="">
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
<?php
if(isset($_GET['taxonomy'])){
  $taxo = $_GET['taxonomy'];
$sql = "SELECT * FROM terms WHERE taxonomy = :taxo";
}
$statement = $db->prepare($sql);
$statement->execute([':taxo'=>$taxo]);
$taxonomies = $statement->fetchAll(PDO::FETCH_OBJ);
if($statement->rowCount() > 0):
foreach($taxonomies as $term): 
  // var_dump($term);
?>
      <tr>
        <td><input type="checkbox" name="taxonomy[]" id="user_1" class="administrator" value="1"></td>
        <td class="title">
         <div>
         <strong><a href="edit?tag_ID=<?php echo $term->term_id; ?>&action=edit"><?php echo $term->name; ?></a></strong>
         <div class="row-actions">
            <span class="edit"><a href="edit-tags?tag_ID=<?php echo $term->term_id; ?>&taxonomy=<?php echo (isset($_GET['taxonomy'])?$_GET['taxonomy']:'category'); ?>&action=edit">Edit</a> | </span>
           <!-- <span class="view"> <a href="edit?tag_ID=<?php echo $term->term_id; ?>&action=view">View</a> | </span> -->
            <span class="delete"><a href="edit-tags?tag_ID=<?php echo $term->term_id; ?>&taxonomy=<?php echo (isset($_GET['taxonomy'])?$_GET['taxonomy']:'category'); ?>&action=delete">Delete</a></span>
          </div>
         </div>
        </div>
         
        </td>
        <td>—</td>
        <td><?php echo $term->slug; ?></td>
        <td>Uncategories</td>
      </tr>
   <?php endforeach; else:?>
   <tr>
       
        <td colspan="5">Not Found</td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
     </div>
 </div>
 
  </div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>