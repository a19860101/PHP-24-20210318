<!-- 
    include()
    include_once();
    require()
    require_once()
 -->
<?php 
    require_once("function.php"); 
    $posts = showAllPosts();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-10 border border-dark mb-3 p-5 rounded">
            <h2><?php echo $post["title"];?></h2>
            <div class="content">
                <?php echo $post["content"];?>
            </div>
            <div>
                最後更新時間: <?php echo $post["updated_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>


