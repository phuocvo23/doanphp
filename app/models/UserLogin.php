<?php
// // Kết nối đến cơ sở dữ liệu
// $conn = mysqli_connect("localhost", "root", "d", "apple_store");

// // Kiểm tra xem có dữ liệu POST được gửi từ form không
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Lấy dữ liệu từ form
//     $email = $_POST["email"];
//     $password = $_POST["password"];
    
//     // Truy vấn SQL để lấy thông tin người dùng dựa trên username
//     $sql = "SELECT * FROM customers WHERE email = '$email'";
//     $result = mysqli_query($conn, $sql);

//     // Kiểm tra xem có dòng dữ liệu nào được trả về từ cơ sở dữ liệu không
//     if (mysqli_num_rows($result) == 1) {
//         // Lấy thông tin người dùng từ kết quả truy vấn
//         $row = mysqli_fetch_assoc($result);
//         // So sánh mật khẩu đã hash với mật khẩu mà người dùng nhập vào
//         if (password_verify($password, $row['password'])) {
//             // Đăng nhập thành công, chuyển hướng đến trang chính
//             header("Location: index.php");
//             exit();
//         }
//     }
    
//     // Đăng nhập không thành công, chuyển hướng người dùng đến trang đăng nhập lại hoặc hiển thị thông báo lỗi
//     header("Location: login.php?error=1");
//     exit();
// }

// // Đóng kết nối đến cơ sở dữ liệu
// mysqli_close($conn);
?>