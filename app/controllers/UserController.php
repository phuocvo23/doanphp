<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Kiểm tra thông tin đăng nhập
    // (Ở đây là nơi bạn sẽ thực hiện kiểm tra thông tin đăng nhập, ví dụ: kiểm tra với cơ sở dữ liệu, v.v.)
    // Nếu thông tin đăng nhập hợp lệ, bạn có thể chuyển hướng người dùng đến trang chính hoặc trang khác
    if ($username === "admin" && $password === "admin") {
        // Đăng nhập thành công, chuyển hướng đến trang chính
        header("Location: index_page.php");
        exit();
    } else {
        // Đăng nhập không thành công, hiển thị thông báo lỗi hoặc thực hiện các xử lý khác
        echo "Invalid username or password!";
    }
}
?>