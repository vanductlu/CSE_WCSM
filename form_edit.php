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

$id = $_POST["id"];

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($sql);

if (isset($_POST["edit"])) {
    $id = $_POST["edit"];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $editFullName = $row["fullname"];
        $editEmail = $row["email"];
        $editGender = $row["gender"];
        $editMobile = $row["mobile"];
        $editDateOfBirth = $row["dateofbirth"];
        // Hiển thị form chỉnh sửa
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='id' value='" . $id . "'>";
        echo "Full Name: <input type='text' name='editFullName' value='" . $editFullName . "'><br>";
        echo "Email: <input type='text' name='editEmail' value='" . $editEmail . "'><br>";
        echo "Gender: <input type='text' name='editGender' value='" . $editGender . "'><br>";
        echo "Mobile: <input type='text' name='editMobile' value='" . $editMobile . "'><br>";
        echo "Date of Birth: <input type='text' name='editDateOfBirth' value='" . $editDateOfBirth . "'><br>";
        echo "<button type='submit' name='update'>Cập nhật</button>";
        echo "</form>";
    }
}
?>
<?php
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $editFullName = $_POST["editFullName"];
    $editEmail = $_POST["editEmail"];
    $editGender = $_POST["editGender"];
    $editMobile = $_POST["editMobile"];
    $editDateOfBirth = $_POST["editDateOfBirth"];
    $sql = "UPDATE users SET fullname='$editFullName', email='$editEmail', gender='$editGender', mobile='$editMobile', dateofbirth='$editDateOfBirth' WHERE id=$id";
    if ($conn->query($sql) === true) {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>