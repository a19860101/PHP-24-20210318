<!-- 
    include()
    include_once();
    require()
    require_once()
 -->
<?php 
    require_once("function.php"); 
    $posts = showAllPosts();
    print_r($posts);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<?php include("template/footer.php"); ?>


