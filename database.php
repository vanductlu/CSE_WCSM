<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "businessdb";
    $conn = "";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["insert"])) {
            $fullName = $_POST["fullName"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $mobile = $_POST["mobile"];
            $dateofbirth = $_POST["dateofbirth"];
    
            $sql = "INSERT INTO your_table (fullname, email, gender, mobile, datofbirth) VALUES ('$fullName', '$email', '$gender','$mobile', '$dateofbirth')";
            if ($conn->query($sql) === true) {
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }
    

        if (isset($_POST["delete"])) {
            $id = $_POST["id"];
    
            $sql = "DELETE FROM users WHERE id = $id";
            if ($conn->query($sql) === true) {
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }
        
    }
    $sql = "SELECT * FROM users";
$result = $conn->query($sql);
    ?>