<?php
session_start();

$uri = "mysql://avnadmin:AVNS_EV3aXOU6zdIjvm7rXcq@mysql-2410ad7e-st-bfd3.l.aivencloud.com:26540/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=QuanLySach";
$conn .= ";sslmode=verify-ca;sslrootcert='pri/ca.pem'";

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);
    if (isset($_POST['submit'])) {
        $username = $_POST['userName'];
        $password = $_POST['passWord'];
    
        $sql = "SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password";
        $stmt = $db->prepare($sql);
        $stmt->execute(['username' => $username, 'password' => $password]);

        $user = $stmt->fetch();
    
        if ($user) {
            $_SESSION['loggedin'] = true;
            header("Location: ../View/Sach.php");
        } else {
            echo "Đăng nhập thất bại!";
            exit;
        }
    } else {
        header('Location: index.php');
        exit;
    }
   
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>