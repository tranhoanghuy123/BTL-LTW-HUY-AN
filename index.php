<?php 
    session_start();
    if(!isset($_SESSION['login_user']))
    {
        $_SESSION['login_user'] = "Đăng nhập / Đăng ký";
    }
?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Nguyễn Hoàng An - 2051120081</title>
<div class="header">
        <h1>ASM WEB1013</h1>
        <p>Kiến thức - Kinh nghiệm - Hỏi đáp</p>
    </div>
    <div class="top-nav">
        <a href="index.html">Công nghệ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Số hóa</a>
        <a href="#">Tech Award</a>
        <a href="login.php" style="float: right;"> <?php echo $_SESSION['login_user']; ?></a>
    </div>
    <div class="row">
        <div class="left-col">
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news1.jpg" alt=""></a>
            </div>
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news2.jpg" alt=""></a>
            </div>
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news3.jpg" alt=""></a>
            </div>
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news4.jpg" alt=""></a>
            </div>
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news5.jpg" alt=""></a>
            </div>
            <div class="card-news">
                <h2>Thật toán gây nghiện của TikTok nguy hiểm thế nào</h2>
                <h5>Thứ năm, 6/1/2022, 00:00 (GMT+7)</h5>
                <a href="detail.html"><img class="images" src="images/news6.jpg" alt=""></a>
            </div>
        </div>
        <div class="right-col">
            <div class="card">
                <h2>Giới thiệu</h2>
                <iframe src="https://www.youtube.com/embed/mZF9BRZkTDQ" width="350" height="230"></iframe>
                <p>ASM WEB1013 là Assignment môn Xây dựng website</p>
            </div>
            <div class="card">
                <ul>
                    <li><a href="items.html">Bộ sưu tập ảnh</a></li>
                    <li><a href="register.html">Đăng ký thành viên</a></li>
                    <li><a href="self-goods.html">Bán hàng</a></li>
                    <li><a href="modifyUser.php">Sửa thông tin của bạn</a></li>
                </ul>
            </div>
            <div class="card">
                <h2>Follow Me</h2>
                <img src="images/social.png" width="50%">
            </div>
            <div class="card">
                <h2>Liên hệ</h2>
                <p>Điện thoại: 09090909090</p>
                <p>Email: 2051120081@ut.edu.vn</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <h4>Website được nhiều người xem nhất - Thuộc khoa CNTT</h4>
    </div>