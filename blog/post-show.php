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
            <a href="post-edit.php?id=<?php echo $post["id"];?>" class="btn btn-info">編輯文章</a>
            <form action="post-delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                <input type="submit" value="刪除" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
