
<?php 
    $u = $_POST['user-id'];   
    $pass = $_POST['user-pass'];
    $fullname = $_POST['user-full-name'];
    $email = $_POST['user-email'];
    $gender = $_POST['user-gender'];
    $hobby = $_POST['hobby'];
    $nationality = $_POST['nationality'];
    $note = $_POST['note'];
?>
<?php 
    $u = trim(strip_tags($u));
    $pass = trim(strip_tags($pass));
    $fullname = trim(strip_tags($fullname));
    $email = trim(strip_tags($email));
    settype($gender,"int");
    settype($hobby,"array");
    settype($nationality,"int");
    $note = trim(strip_tags($note));
?>
<?php
    $notificationError = "";
    require_once 'connectdb.php';
    $queryExistUsername = "Select email from infor_user where username = '$u'";
    $rowCount = $conn -> query($queryExistUsername) -> rowCount();
    if($rowCount != 0)
    {
        $notificationError .=  "Tài khoản đã tồn tại <br>";
    }   
?>
<?php if ($notificationError!="" ){ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet">
    <div class="col-8 m-auto">
        <div class="alert alert-danger mt-5 text-center ">
    <?=$notificationError?>
            <button class="btn btn-primary" onclick="history.back()">Trở lại</button>
        </div>
    </div>
<?php } else {
    $sql="INSERT INTO infor_user(username, pass, fullname, email,gender,hobby,nationality,note,isAdmin) 
    VALUES ('$u','$pass', '$fullname' ,'$email', '$gender','$hobby','$nationality','$note','0')";
    $kq = $conn->exec($sql);
    if ($kq==1) {
        header("location: login.php");
    }
    else echo "Cập nhật không thành công";
    }