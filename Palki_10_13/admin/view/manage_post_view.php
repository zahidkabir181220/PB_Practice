<?php $pagetitle="Manage Post"; 
include_once("classes/Posts.php");
$Posts=new Posts();

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
                                All POST
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Post ID</th>
                                            <th>Post Title</th>
                                            <th>Post Content</th>
                                            <th>Post Img</th>
                                            <th>Post Summary</th>
                                            <th>Post Date</th>
                                            <th>Post Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                    <th>Post ID</th>
                                            <th>Post Title</th>
                                            <th>Post Content</th>
                                            <th>Post Img</th>
                                            <th>Post Summary</th>
                                            <th>Post Date</th>
                                            <th>Post Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php 
                                      $getdata=$Posts->display_post();
                                      $i=1;
                                      if(mysqli_num_rows($getdata)>0){
                                        foreach($getdata as $postitem){?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$postitem['post_title']?></td>
                                            <td><?=$postitem['post_content']?></td>
                                            <td>
                                                <img src="<?php echo "upload/".$postitem['post_img']?>" alt="" width="100px" height="100px">
                                                </td>
                                            
                                            <td><?=$postitem['post_summary']?></td>
                                            <td><?=$postitem['post_date']?></td>
                                            <td><?php
                                            if($postitem['post_status']=="1"){
                                              echo "Published";
                                            }else{
                                              echo "Unpublished";
                                            }
                                            ?></td>
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
