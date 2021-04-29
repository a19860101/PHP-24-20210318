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
        z-index: 9999;
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
                    
                    
                    <?php if(isset($_GET["cover"])){ ?>
                        <img src="<?php echo $_GET["cover"];?>" width="100">
                        <input type="hidden" name="cover" value="<?php echo $_GET["cover"];?>">
                        <a href="#" class="selectImg">切換圖片</a>
                    <?php }else{ ?>
                        <input type="hidden" name="cover" value="">
                        <a href="#" class="selectImg">選擇圖片</a>
                    <?php } ?>
                    
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
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="cover">
            <input type="submit" value="上傳圖片">
        </form>
        <hr>
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
<!-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php include("template/footer.php"); ?>
<script>
    // CKEDITOR.replace( 'content' );
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        menubar: false,
        plugins: 'image code link',
        toolbar: 'undo redo | image code link| styleselect | bold italic forecolor underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent',
        images_upload_url: 'postAcceptor.php',
        automatic_uploads: true,
        image_title: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function () {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);
            cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
        };

        input.click();
    },

    });
    $(function(){
        $('.selected').click(function(){
            $.ajax({
                url:'post-create.php',
                type:'get',
                data:{
                    cover: $('.cover:checked').val()
                },
                success(){
                    // console.log('test');
                    // console.log(this.url);
                    location.href=this.url;
                    $('.gallery').hide();

                }
            })
        })
        $('.selectImg').click(function(){
            $('.gallery').show();
        })
    })
</script>