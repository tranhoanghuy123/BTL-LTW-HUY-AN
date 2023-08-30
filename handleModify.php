<?php 
    // Lấy ra thông tin của form đã sửa thông tin
    $u = $_POST['user-id']; 
    $pass = $_POST['user-pass'];
    $fullname = $_POST['user-full-name'];
    $email = $_POST['user-email'];
    $gender = $_POST['user-gender'];
    $nationality = $_POST['nationality'];
    $note = $_POST['note'];
?>
<?php 
    // định dạng lại thông tin theo chuẩn
    $u = trim(strip_tags($u));
    $pass = trim(strip_tags($pass));
    $fullname = trim(strip_tags($fullname));
    $email = trim(strip_tags($email));
    settype($gender,"int");
    settype($nationality,"int");
    $note = trim(strip_tags($note));
    require_once 'connectdb.php'; // kết nối tới cơ sở dữ liệu
    // Câu truy vấn cơ sở dữ liệu để sửa thông tin
    $sql="UPDATE  infor_user SET pass = '$pass', fullname ='$fullname' ,email = '$email', gender = '$gender',nationality = '$nationality',note = '$note',isAdmin = '0' 
    where username = '$u'";
    $kq = $conn->exec($sql);
    echo "Thành công";
    header("location: index.php"); // sửa xong sẽ chuyển hướng đến trang chủ
?>

    