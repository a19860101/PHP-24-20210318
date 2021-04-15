<?php 
    require_once("function.php");
    $post = showPost($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 border border-dark mb-3 p-5 rounded">
            <h2><?php echo $post["title"];?></h2>
            <div class="content">
                <?php echo $post["content"];?>
            </div>
            <div>
                最後更新時間: <?php echo $post["updated_at"];?>
            </div>
            <a href="index.php" class="btn btn-success">文章列表</a>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
