<?php
//tiếp nhận user, pass từ form
    $u = $_POST['u'];
    $p = $_POST['p'];
    //validate dữ liệu tiếp nhận
    $u = trim(strip_tags($u));
    $p = trim(strip_tags($p));
    //truy xuất db
    require_once ("connectdb.php");
    $sql="SELECT username,fullname,pass,email,gender,nationality,note FROM infor_user WHERE username='{$u}' AND pass ='{$p}'";
    $kq = $conn->query($sql);
    $numrows_user = $kq->rowCount();
    if ($numrows_user == 1) {// login thành công
        session_start();
        $row_user = $kq->fetch();
        $_SESSION['login_fullname'] = $row_user['fullname'];//tạo biến ghi nhận user đã login
        $_SESSION['login_user'] = $row_user['username'];//tạo biến ghi nhận user đã login
        $_SESSION['login_pass'] = $row_user['pass'];//tạo biến ghi nhận user đã login
        $_SESSION['login_email'] = $row_user['email'];//tạo biến ghi nhận user đã login
        $_SESSION['login_gender'] = $row_user['gender'];//tạo biến ghi nhận user đã login
        $_SESSION['login_nationality'] = $row_user['nationality'];//tạo biến ghi nhận user đã login
        $_SESSION['login_note'] = $row_user['note'];//tạo biến ghi nhận user đã login
        header("location: index.php");//chuyển đến trang chủ
    }
    else header("location: login.php") // đăng nhập sai thì đăng nhập lại
?>