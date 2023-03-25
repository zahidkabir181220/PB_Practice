<?php
require("classes/Users.php");
$User=new Users();

$email=$_SESSION['admin_email'];
if(!$email){
      header("Location: index.php");
}
//if(isset($_SESSION['admin_email'])){
   // $email=$_SESSION['admin_email'];
   // if(!$email){
     //   header("Location: index.php");
    //}
//}
if(isset($_GET['admin_logout'])){
    if($_GET['admin_logout']=="logout"){
        session_destroy();
        header("Location: ../index.php");
    }
}
?>
<!-- Header -->
<?php include_once("includes/header.php");?>
<!-- Navbar-top -->
<?php include_once("includes/navbar-top.php");?>


<div id="layoutSidenav">
<!-- Sidenav -->
<?php include_once("includes/sidenav.php");?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    
                        <?php 
                        if(isset($view)){
                           // print_r($_SESSION);
                            if($view=='add_category'){
                               require("view/add_cat_view.php");
                            }
                            elseif($view=='manage_category'){
                                require("view/manage_cat_view.php");
                             }
                             elseif($view=='dashboard'){
                                require("view/dashboard_view.php");
                             }
                             elseif($view=='manage_post'){
                                require("view/manage_post_view.php");
                             }
                             elseif($view=='add_post'){
                                require("view/add_post_view.php");
                             }
                        }
                        ?>

                    </div>
                </main>
                <!-- Footer -->
                <?php include_once("includes/footer.php");?>
            </div>
        </div>
<!-- JS file -->
<?php include_once("includes/script.php");?>
    </body>
</html>
