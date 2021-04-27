<?php
    require_once("pdo.php");
    require_once("category/function.php");
    $categories = showAllCategories();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<style>
    .gallery {
        display: none;
    }
    .gallery-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,.8);
        top: 0;
    }
    .gallery-container {
        background-color: #fff;
        padding: 50px;
        position: absolute;
        top: 5%;
        width: 80%;
        /* height: 80vh; */
        left: 50%;
        transform: translateX(-50%);
    }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6">
            <form action="post-store.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div>
                    <label for="cover">封面圖片</label>
                    <a href="#" class="selectImg">選擇圖片</a>
                    
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category["id"]; ?>"> <?php echo $category["title"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<div class="gallery">
    <div class="gallery-overlay"></div>
    <div class="gallery-container">
        <?php 
            $galleries = glob("images/*.{jpeg,jpg,png,gif,bmp,webp}",GLOB_BRACE);
            foreach($galleries as $g){
        ?>
        <label for="<?php echo $g;?>">
            <img src="<?php echo $g;?>" width="150">
            <input type="radio" name="cover" class="cover" value="<?php echo $g;?>" id="<?php echo $g;?>">
        </label>
        <?php } ?>
        <br>
        <a href="#" class="selected btn btn-primary float-right">送出</a>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<?php include("template/footer.php"); ?>
<script>
    CKEDITOR.replace( 'content' );
    $(function(){
        $('.selectImg').click(function(){
            $('.gallery').show();
        })
    })
</script>