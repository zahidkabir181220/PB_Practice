<?php 
class Categories extends Config{
    public function add_cat($data){
      //print_r($data);
      $cateName = $data['cat_name'];
      $cateDesc = $data['cat_des'];
      $sql="INSERT INTO `tbl_categories`(`cat_name`,`cat_des`) VALUES ('$cateName','$cateDesc')";
     $result= $this->con->query($sql);
     if($result){
        $_SESSION['msg']="Category Added Successfully.";
     }
    }
    public function display_cat(){
     return   $this->con->query("SELECT * FROM `tbl_categories`;"); 
    }
    public function delete_cat($cid){
        $result=$this->con->query("DELETE FROM `tbl_categories` WHERE `cat_id`='$cid'");
        //if($result){
           // $_SESSION['msg']="Category Deleted Successfully.";
            //header("Location: manage_category.php");
        // } 
    }
}
?>