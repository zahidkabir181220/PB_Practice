
<?php $pagetitle="Add Post"; 
include_once("classes/Posts.php");
include_once("classes/Categories.php");
$cat=New Categories();
$Posts=new Posts();
if(isset($_POST['add_post'])){
 $Posts->add_posts($_POST);
}

?>
<h1 class="mt-4"><?php echo $pagetitle;?></h1>
 <ol class="breadcrumb mb-4">
   <li class="breadcrumb-item active"><?php echo $pagetitle;?></li>
</ol>

<div class="row">
  <div class="col-lg-8 offset-lg-2">
    <!-- display message -->
    <?php
    if(isset($_SESSION['msg'])){?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!!</strong> <?php echo $_SESSION['msg'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     <?php   
     }
     ?>
    <!-- form start -->
    <form action="" method="POST" class="mt-3 shadow p-4 rounded" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="post_title"class="mb-3">Post Title</label>
        <input type="text" name="post_title" id="post_title" placeholder="Enter Post Title" class="form-control">
      </div>
      <div class="form-group mb-3">
        <label for="post_content"class="mb-3">Post Content</label>
        <textarea name="post_content" id="post_content" cols="30" rows="4" class="form-control" ></textarea>
       </div>
        <div class="form-group mb-3">
        <label for="post_img"class="mb-3">Upload Image</label>
        <input type="file" name="post_img" id="post_img" class="form-control">
       </div>
       <div class="form-group mb-3">
        <label for="post_cat"class="mb-3">Post Category</label>
        <select name="post_cat" id="post_cat" class="form-control">
        <option value="">------Select Category------</option>
        <?php
        $getcat = $cat->display_cat();
        if(mysqli_num_rows($getcat)>0){
          foreach($getcat as $catItem){?>

          <option value="<?=$catItem['cat_name'];?>"><?php echo $catItem['cat_name'];?></option>
        <?php
          }
        }
        ?>
        </select>
       </div>
       <div class="form-group mb-3">
       <label for="post_summary"class="mb-3">Post Summary</label>
        <textarea name="post_summary" id="post_summary" cols="30" rows="2" class="form-control" ></textarea>
       </div>
       <div class="form-group mb-3">
       <label for="post_status"class="mb-3">Post Status</label>
       <select name="post_status" id="post_status" class="form-control">
       <option value="">------Select Status------</option>
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
      </select>
       </div>
        <div class="form-group mb-3">
        <input type="submit" value="Add Post" name="add_post" class="btn btn-primary btn-block w-100 mt-3">
      </div>
      </div>
      </div>
    </form>
  </div>
</div>