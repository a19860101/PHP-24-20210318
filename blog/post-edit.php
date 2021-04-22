<?php
    require_once("pdo.php");
    require_once("function.php");
    $post = editPost($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="post-update.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post["title"];?>">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"><?php echo $post["content"];?></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="1" <?php echo $post["category_id"]==1 ? "selected":""; ?>>體育</option>
                        <option value="2" <?php echo $post["category_id"]==2 ? "selected":""; ?>>科技</option>
                        <option value="3" <?php echo $post["category_id"]==3 ? "selected":""; ?>>生活</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                <input type="submit" value="儲存文章" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<?php include("template/footer.php"); ?>