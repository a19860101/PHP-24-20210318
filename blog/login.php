<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 border rounded p-5 bg-light">
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">密碼</label>
                    <input type="password" name="pw" id="pw" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="登入">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>