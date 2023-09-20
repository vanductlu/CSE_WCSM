<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $group = $_POST["group"];
    $mobile = $_POST["mobile"];
    $dateofbirth = $_POST["dateofbirth"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "businessdb";
    $conn = "";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO users (fullname, email, gender, `group`, mobile, dateofbirth) VALUES ('$fullname', '$email', '$gender', '$group', '$mobile', '$dateofbirth')";

   
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $conn->close();
}
?>