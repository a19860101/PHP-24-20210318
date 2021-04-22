<?php 
    require_once('function.php');
    $categories = showAllCategories();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>新增分類</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-8">
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
        <div class="col-4">
            <ul>
                <?php foreach($categories as $category){ ?>
                <li class="d-flex justify-content-between">
                    <?php echo $category["title"]; ?>
                    <form action="delete.php" method="post" class="d-inline-block">
                        <input type="hidden" name="id" value="<?php echo $category["id"];?>">
                        <input type="submit" class="btn btn-danger btn-sm" value="刪除" onclick="return confirm('確認刪除?')">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>