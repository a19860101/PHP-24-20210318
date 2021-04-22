<?php
    require_once("pdo.php");
    extract($_GET);
    $sql = "SELECT * FROM posts WHERE category_id = ? ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt-> execute([$category_id]);  
    
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<div class="container">
<div class="row justify-content-center">
    <?php while($post = $stmt->fetch()){ ?>
        <div class="col-10 border border-dark mb-3 p-3 rounded">
            <h2>
                <a href="post-show.php?id=<?php echo $post["id"];?>"><?php echo $post["title"];?></h2></a>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>