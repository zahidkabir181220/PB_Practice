<?php
include_once("admin/config/Config.php");
include_once("admin/classes/Categories.php");
include_once("admin/classes/Posts.php");
$cat=New Categories();
$Posts=New Posts();
?>

<?php
include_once("includes/header.php");
?>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->
    <?php
      include_once("includes/preloader.php");
    ?>
    <!-- Header -->
    <?php
      include_once("includes/navbar.php");
    ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php
      include_once("includes/banner.php");
    ?>
    <!-- Banner Ends Here -->
    <?php
      include_once("includes/cta.php");
    ?>

<section class="blog-posts">
      <div class="container">
        <div class="row">
        <?php
          include_once("includes/all_post.php");
        ?>
        <?php
          include_once("includes/sidebar.php");
        ?>
     
        </div>
      </div>
    </section>
    <?php
      include_once("includes/footer.php");
    ?>


    <?php
      include_once("includes/script.php");
    ?>

  </body>
</html>