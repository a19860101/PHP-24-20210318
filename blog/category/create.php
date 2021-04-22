<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>新增分類</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-6">
            <form action="store.php" method="post">
                <div class="form-group">
                    <label for="title">分類標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="slug">分類英文標題</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增標題">
            </form>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>