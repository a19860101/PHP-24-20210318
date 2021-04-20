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
            <div>
                <?php echo $post["user"];?>
            </div>
            <div class="content my-3">
                <?php 
                    $content = strip_tags($post["content"]);
                    echo mb_substr($content,0,150);
                ?>...
                <br>
                <br>
                <a href="post-show.php?id=<?php echo $post["id"];?>" class="btn btn-primary ">繼續閱讀</a>
            </div>
            <div>
                最後更新時間: <?php echo $post["updated_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>


