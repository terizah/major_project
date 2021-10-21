<?php
session_start();

include("db_connect.inc");

$sql = "select * from member where username = ? and password = SHA(?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $membername, $password);
$membername = $_POST['membername'];
$password = $_POST['password'];

$stmt->execute();

$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $_SESSION['usrmsg'] = "Login successfull";
    $_SESSION['membername'] = $membername;
} else {
    $_SESSION['err'] = "Login unsuccessfull";
}
$conn->close();
header("Location:index.php");
exit(0);
?>
