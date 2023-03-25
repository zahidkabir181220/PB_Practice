<?php $pagetitle="Manage Category"; 
include_once("classes/Categories.php");
$cat=new Categories();
if(isset($_GET['cat_id'])){
  $id=$_GET['cat_id'];
  $cat->delete_cat($id);
}
?>

<h1 class="mt-4"><?php echo $pagetitle;?></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
<li class="breadcrumb-item active"><?php echo $pagetitle;?></li>
</ol>

<div class="row">
  <div class="col-12">
  <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Categories
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Cat_Id</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>Cat_Id</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php 
                                      $data=$cat->display_cat();
                                      $i=1;
                                      if(mysqli_num_rows($data)>0){
                                        foreach($data as $catitem){?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$catitem['cat_name']?></td>
                                            <td><?=$catitem['cat_des']?></td>
                                            <td><a href="?cat_id=<?=$catitem['cat_id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                                        </tr>

                                       <?php
                                        }
                                      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
  </div>
</div>