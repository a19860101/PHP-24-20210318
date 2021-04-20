
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="post-store.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="1">體育</option>
                        <option value="2">科技</option>
                        <option value="3">生活</option>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
<?php include("template/footer.php"); ?>