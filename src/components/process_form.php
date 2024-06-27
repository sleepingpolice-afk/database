<?php
$nama = $_POST['nama'];
$phone_num = $_POST['phone_num'];
$service_type = $_POST['service_type'];
$date_time = $_POST['date_time'];

if (!empty($nama) && !empty($phone_num) && !empty($service_type) && !empty($date_time)) {
    $host = "localhost"; //may be different
    $dbUsername = "root";
    $dbPassword = "12Lu7N_ur8hww6ckaLyB";
    $dbname = "databases";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT phone FROM customer WHERE phone = ? LIMIT 1";
        $INSERT = "INSERT INTO customer (nama, phone, type_service, date_time) VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $phone_num);
        $stmt->execute();
        $stmt->bind_result($phone_num);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $nama, $phone_num, $service_type, $date_time);
            $stmt->execute();
            echo "New record inserted successfully";
        } else {
            echo "Someone already registered using this phone number";
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>
