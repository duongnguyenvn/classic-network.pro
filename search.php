<title>Classic Network - Tìm kiếm</title>
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<meta name="description" content="Tải game classic tuổi thơ thời 8x 9x">
<meta http-equiv="content-language" content="vi">
<meta name="author" content="Dương Nguyễn">

<?php

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $name = $_GET["q"];
        ///////////////
        if($name == "!version"){
            echo "<b>v1.0</b>";
        }
        else if($name == "!support"){
            echo "• Những yêu cầu về Game có trao đổi hợp tác với <b>Classic-network.pro</b> vui lòng liên hệ<b>:</b><br> - <u>Email</u><b>:</b> <b><i>hotro.classicnetwork.pro@gmail.com</i></b> (tài khoản đang bị vô hiệu hóa bởi Google).";
        }
        ///////////////
        else {
            echo "<b><h3>Từ khóa bạn tìm không tồn tại!</h3></b>";
        }
    }

?>

<?php 
if (isset($_GET['q'])) {
    $q = $_GET['q'];
    // Xử lý tìm kiếm ở đây và hiển thị kết quả
}
?>