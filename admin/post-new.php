<?php require_once "common/head.php"; ?>
   <?php require_once "common/sidebar.php"; ?>
   <?php require_once "common/header.php"; ?>
        <div class="card">
<div class="card-header page-header">
<h3>All <?php page_title(); ?></h3>
<a href="<?php echo ADMIN_URL; ?>post-new/<?php echo (isset($_GET['post_type'])?'?post_type='.strtolower($_GET['post_type']):'') ?>" class="btn-outline">Add New</a>
</div>
  <div class="card-body">
 <form action="">
 <input type="hidden" name="action" value="createpost">
 <input type="hidden" name="post_type" value="post">
 <input type="hidden" name="user_ID" value="post">
<div id="poststuff">
  <div id="post-body" class="columns-2">
  <div id="post-body-content" style="position:relative;">
  <div id="titlediv">
<div id="titlewrap">
		<label class="" id="title-prompt-text" for="title">Add title</label>
	<input type="text" name="post_title" size="30" value="" id="title" spellcheck="true" autocomplete="off">
</div>
	<!-- <input type="hidden" id="samplepermalinknonce" name="samplepermalinknonce" value="02bb289688"></div> -->

  </div>
  <div style="padding-top:55px ;">
  <textarea class="editor-area" style="height: 300px" autocomplete="off" cols="40" name="content" id="content"></textarea>
  </div>
  </div>
  <div class="postbox-container" id="postbox-container-1">
  <div id="submitdiv" class="postbox ">
<div class="postbox-header"><h2 class="hndle ui-sortable-handle">Publish</h2>
</div>
<div class="inside">
  <select name="" id="">
    <option value="publish">Publish</option>
    <option value="draft">Draft</option>
  </select>
</div>
<div id="major-publishing-actions">
<div id="publishing-action">
<input type="submit" name="publish" id="publish" class="btn" value="Publish">
</div>
</div>
</div>
<!-- // end publish -->
<div id="postimagediv" class="postbox ">
<div class="postbox-header"><h2 class="hndle ui-sortable-handle">Featured image</h2>
</div>
<div class="inside">  s</div>
</div>
<div id="postimagediv1" class="postbox ">
<div class="postbox-header"><h2 class="hndle ui-sortable-handle">Categories</h2>
</div>
<div class="inside">  s</div>
</div>
  </div>
  <br class="clear">
</div>
 </form>
 
  </div>
</div>
<?php require_once "common/footer.php"; ?>
 <?php require_once "common/foot.php"; ?>