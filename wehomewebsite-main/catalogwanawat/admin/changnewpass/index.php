<!-- 
// ob_start(); // เพิ่ม ob_start() เพื่อจัดการกับปัญหา header

// // ตรวจสอบการส่งแบบฟอร์ม
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['changepassword'])) {
//         // เชื่อมต่อกับฐานข้อมูล
//         $connection = mysqli_connect('localhost', 'root', '', 'dbcatalog');

//         // ตรวจสอบการเชื่อมต่อกับฐานข้อมูล
//         if (!$connection) {
//             die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
//         }

//         // รับข้อมูลจากแบบฟอร์ม
//         $oldpassword = sha1(md5($_POST['oldpassword']));
//         $newpassword = $_POST['newpassword'];
//         $confirmnewpassword = $_POST['confirmnewpassword'];
//         $user = $_SESSION['user_login'];

//         // คำสั่ง SQL เพื่อตรวจสอบรหัสผ่านเก่า
//         $sql_check = "SELECT * FROM tb_admin WHERE User = '$user' AND pass = '$oldpassword'";
//         $query_check = mysqli_query($connection, $sql_check);
//         $row_check = mysqli_num_rows($query_check);

//         if ($row_check > 0) {
//             if ($newpassword === $confirmnewpassword) {
//                 // อัปเดตรหัสผ่านใหม่ในฐานข้อมูล
//                 $newpassword = sha1(md5($newpassword));
//                 $sql_update = "UPDATE tb_admin SET pass = '$newpassword' WHERE User = '$user'";
//                 $query_update = mysqli_query($connection, $sql_update);

//                 if ($query_update) {
//                     echo "$msg";
//                     header("Location: /admin/index.php"); // กลับไปยังหน้า admin/index.php
//                     exit();
//                 } else {
//                     echo "เกิดข้อผิดพลาดในการเปลี่ยนรหัสผ่าน: " . mysqli_error($connection);
//                 }
//             } else {
//                 echo "รหัสผ่านใหม่และยืนยันรหัสผ่านไม่ตรงกัน";
//             }
//         } else {
//             echo "รหัสผ่านเก่าไม่ถูกต้อง";
//         }
//         // ปิดการเชื่อมต่อกับฐานข้อมูล
//         mysqli_close($connection);
//     }
// }

// function alert($msg){
//     echo"<script>alert('Your password changed successfully')</script>";
// }

// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปลี่ยนรหัสผ่าน</title>
</head>
<body>
    <h1>เปลี่ยนรหัสผ่าน</h1>
    <form action="changepassword.php" method="POST">
        <div>
            <label for="oldpassword">รหัสผ่านเก่า:</label>
            <input type="password" id="oldpassword" name="oldpassword" required>
        </div>
        <div>
            <label for="newpassword">รหัสผ่านใหม่:</label>
            <input type="password" id="newpassword" name="newpassword" required>
        </div>
        <div>
            <label for="confirmnewpassword">ยืนยันรหัสผ่านใหม่:</label>
            <input type="password" id="confirmnewpassword" name="confirmnewpassword" required>
        </div>
        <div>
            <input type="submit" name="changepassword" value="ยืนยันการเปลี่ยนรหัสผ่าน">
        </div>
    </form>
</body>
</html> -->