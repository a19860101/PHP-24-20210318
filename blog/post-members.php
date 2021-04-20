<?php
    require_once("pdo.php");
    extract($_GET);
    $sql = "SELECT * FROM posts WHERE member_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt-> execute([$member_id]);  
    
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<?php while($row = $stmt->fetch()){ ?>
    <h2><?php echo $row["title"]; ?></h2>
<?php } ?>
<?php include('template/footer.php'); ?>