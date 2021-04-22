<?php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="index.php">GJUN BLOG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php if(isset($_SESSION["AUTH"])){ ?> 
            <li class="nav-item">
                <a class="nav-link" href="post-create.php">新增文章</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="category/create.php">新增分類</a>
            </li>
            <?php } ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if(!isset($_SESSION["AUTH"])){ ?>
            <li class="nav-item active">
                <a href="login.php" class="nav-link">登入</a>
            </li>
            <li class="nav-item ">
                <a href="register.php" class="nav-link">註冊會員</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
                <a href="#" class="nav-link"><?php echo $_SESSION["AUTH"]["user"];?>你好!!</a>
            </li>
            <li class="nav-item ">
                <a href="logout.php" class="nav-link">登出</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>