<?php
session_start();
require_once "../connection.php";

$sql = "SELECT * FROM user WHERE username=:username AND password=:password";

try {
    $statement = $conn->prepare($sql);
    $statement->execute($_POST);
    $user =  $statement->fetch(PDO::FETCH_ASSOC);

    if($user) {
        unset($user['password']);

        $_SESSION['logged_in'] = TRUE;
        $_SESSION['user'] = $user;

        die(header("Location: ../"));
    } else {
        echo $sql . "<p style='color: red;'>Invalid username or password.</p>";
    sleep(.1);
    header("location: ../");
    }
} catch(PDOException $e) {
    echo $sql . "<p style='color: red;'>" . $e->getMessage() . "</p>";
}
$conn = null
?>