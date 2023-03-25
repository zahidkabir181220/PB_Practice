<?php 
class Posts extends Config{
    public function add_posts($data){
      //print_r($data);
      //print_r($_FILES);

      $postTitle = $data['post_title'];
      $postContent = $data['post_content'];
      $postimgName = $_FILES['post_img']['name'];
      $postTmpimgName = $_FILES['post_img']['tmp_name'];
      $postCat = $data['post_cat'];
      $postSummary = $data['post_summary'];
      $postStatus = $data['post_status'];
      $sql="INSERT INTO `posts`(`post_id`, `post_title`, `post_content`, `post_img`, `post_cat`, `post_summary`,`post_status`) VALUES('NULL','$postTitle','$postContent','$postimgName','$postCat','$postSummary','$postStatus')";
       $result=$this->con->query($sql);
     if($result){
      //  $_SESSION['msg']="Category Added Successfully.";
      move_uploaded_file( $postTmpimgName,"upload/".$postimgName);
     }
    }
   
    public function display_post(){
      return  $this->con->query("SELECT * FROM `posts`");
    }
}
?>