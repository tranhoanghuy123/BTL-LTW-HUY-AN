<?php 
    session_start();
    if(!isset($_SESSION['login_user']))
    {
        $_SESSION['login_user'] = "Đăng nhập / Đăng ký";
    }
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Nguyễn Hoàng An - 2051120081</title>
    <div class="header">
        <h1>ASM WEB1013</h1>
        <p>Kiến thức - Kinh nghiệm - Hỏi đáp</p>
    </div>
    <div class="top-nav">
        <a href="index.php">Công nghệ</a>
        <a href="items.html">Sản phẩm</a>
        <a href="#">Số hóa</a>
        <a href="#">Tech Award</a>
        <a href="login.php" style="float: right;"> <?php echo $_SESSION['login_user']; ?></a>
    </div>
    <h2 style="text-align: center;margin: 0;">Đăng nhập</h2>
    <form action="handleLogin.php" method="post" class="border border-primary col-5 m-auto p-2">
        <div class="form-group">
            <label>Username</label> <input name="u" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Mật khẩu</label> <input name="p" type="password" class="form-control"/>
        </div>
        <div class="form-group"> <input name="nho" type="checkbox"/> Ghi nhớ </div>
        <div class="form-group">
            <input name="btn" type="submit" value="Đăng nhập" class="btn btn-primary"/>
        </div>
    </form>