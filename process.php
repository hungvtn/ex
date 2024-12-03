<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Kiểm tra dữ liệu đầu vào
    echo "Full Name: $full_name<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    echo "Gender: $gender<br>";
    echo "Address: $address<br>";
}
?>
