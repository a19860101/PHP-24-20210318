<!-- 
    include()
    include_once();
    require()
    require_once()
 -->
<?php 
    require_once("pdo.php"); 
    require_once("function.php"); 
    $posts = showAllPosts();  
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <?php   
        // echo $_SERVER["PHP_SELF"]; 
        // echo "<br>";
        // echo $_SERVER["HTTP_HOST"]; 
        // echo "<br>";
        // echo $_SERVER["REQUEST_URI"]; 
        // echo "<br>";
        // echo $_SERVER["QUERY_STRING"]; 
        // echo "<br>";

        // echo basename(__DIR__);
        // echo "<br>";
        // echo basename(__FILE__);
        // echo "<br>";
        // echo dirname(__DIR__);
        // echo "<br>";
        // echo dirname(__FILE__);
        // echo "<br>";
    ?>
    <div class="row justify-content-center">
        <?php foreach($posts as $post){ ?>
        <div class="col-10 border border-dark mb-3 p-5 rounded">
            <h2><?php echo $post["title"];?></h2>
            <div>
                分類: <a href="post-categories.php?category_id=<?php echo $post["category_id"];?>" class="badge badge-warning"><?php echo $post["c_title"];?></a>
            </div>
            <div>
                
                <a href="post-members.php?member_id=<?php echo $post["member_id"];?>"><?php echo $post["user"];?></a>
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


