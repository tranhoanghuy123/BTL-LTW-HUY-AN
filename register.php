<link rel="stylesheet" href="register.css">
<link rel="stylesheet" href="styles.css">
<div class="header">
    <h1>ASM WEB1013</h1>
    <p>Kiến thức - Kinh nghiệm - Hỏi đáp</p>
</div>
<div class="top-nav">
    <a href="index.html">Công nghệ</a>
    <a href="#">Sản phẩm</a>
    <a href="#">Số hóa</a>
    <a href="#">Tech Award</a>
    <a href="#" style="float: right;">Đăng nhập / Đăng ký</a>
</div>
<form class="container" name="registerForm" action="handleRegister.php" method="post">
    <h2 style="text-align: center;margin: 0;">ĐĂNG KÝ THÀNH VIÊN</h2>
    <p class="field-data-container"><label>Tên tài khoản <br></label><input type="text" required id="user-id" name="user-id" placeholder="Nhập tài khoản của bạn" class="field-data"></p>
    <p class="field-data-container"><label>Mật khẩu <br></label><input type="password" required id="user-pass" name="user-pass" placeholder="Nhập mật khẩu của bạn" class="field-data"></p>
    <p class="field-data-container"><label>Họ và tên <br></label><input type="text" required id="user-full-name" name="user-full-name" placeholder="Nhập họ và tên" class="field-data"></p>
    <p class="field-data-container"><label>Email <br></label><input type="email" required id="user-email" name="user-email" placeholder="Nhập email" class="field-data"></p>
    <p class="field-data-container">
        <label>Giới tính <br></label>
        <div id="user-gender" class="field-data">
            <input type="radio" name="user-gender" required value="0">Nam
            <input type="radio" name="user-gender" required value="1">Nữ
        </div>
    </p>
    <p class="field-data-container">
        <label>Sở thích <br></label>
        <div id="user-hobby" class="field-data">
            <input type="checkbox" class="field-data" name="hobby" value = "1"> Đọc sách
            <input type="checkbox" class="field-data" name="hobby" value = "2"> Du lịch
            <input type="checkbox" class="field-data" name="hobby" value = "3"> Âm nhạc
            <input type="checkbox" class="field-data" name="hobby" value = "4"> Ẩm thực
            <input type="checkbox" class="field-data" name="hobby" value = "5"> Khác
        </div>
    </p>
    <p class="field-data-container">
        <label>Quốc tịch <br></label>
        <select name="nationality" id="user-nationality" required class="field-data">
            <option value="0">Chọn quốc tịch</option>
            <option value="1">Việt Nam</option>
            <option value="2">Campuchia</option>
            <option value="3">Lào</option>
            <option value="4">Trung Quốc</option>
            <option value="5">Thái Lan</option>
            <option value="6">Singapore</option>
            <option value="7">Myanmar</option>
            <option value="8">Mỹ</option>
            <option value="9">Nhật Bản</option>
            <option value="10">Hàn Quốc</option>
            <option value="11">Nga</option>
        </select>
    </p>
    <p class="field-data-container">
        <label>Ghi chú<br></label>
        <textarea name="note" id="note" cols="60" rows="6" class="field-data"></textarea>
    </p>
    <p class="field-data-container"><input type="submit" name="btn-submit" id="btn-submit" value="Đăng ký" onclick="return isValidateField();"></p>
</form>
<script>
    function isValidateField() {
        let note = document.getElementById("note");
        let fieldsData = document.querySelectorAll(".field-data");
        let optNationality = document.registerForm.nationality.value;
        for (let field of fieldsData) {
            if (field.value == 0) {
                field.classList.add("wrong-field");
                isSuccess = false;
            }
        }
        let hobbyOfuser = document.getElementsByName("hobby");
        let gender = document.getElementsByName("gender");
        let countCheckedGender = 0;
        for (let tick of gender) {
            if (tick.checked) {
                countCheckedGender++;
            }
        }
        if (countCheckedGender == 0) {
            document.getElementById("user-gender").style.background = "rgb(223, 223, 26)";
            isSuccess = false;
        }
        let countHobby = 0;
        for (let hobby of hobbyOfuser) {
            if (hobby.checked) count++;
        }
        if (countHobby == 0) {
            document.getElementById("user-hobby").style.background = "rgb(223, 223, 26)";
            isSuccess = false;
        }
        if (optNationality == 0) {
            isSuccess = false;
            document.getElementById("user-nationality").style.background = "rgb(223, 223, 26)";
        }
        let isSuccess = true;
        if (note.value.length < 200) {
            document.querySelector("#note").classList.add("wrong-field");
            isSuccess = false;
        }
        return isSuccess;
    }
</script>