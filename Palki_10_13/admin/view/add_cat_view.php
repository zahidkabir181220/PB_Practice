<?php $pagetitle="Add Category"; 
include_once("classes/Categories.php");
$cat=new Categories();
if(isset($_POST['add_category'])){
 $cat->add_cat($_POST);
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
    <form action="" method="POST" class="mt-3 shadow p-4 rounded">
      <div class="form-group mb-3">
        <label for="cat_name"class="mb-2">Add Category</label>
        <input type="text" name="cat_name" id="cat_name" placeholder="Enter Category Name" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label for="cat_des"class="mb-2">Category Description</label>
        <input type="text" name="cat_des" id="cat_des" placeholder="Enter Description Name" class="form-control" required>
        <div class="form-group mb-3">
        <input type="submit" value="Add Category" name="add_category" class="btn btn-secondary btn-block w-100 mt-3">
      </div>
      </div>
    </form>
  </div>
</div>