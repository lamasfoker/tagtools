<?php

include '../functions.php';

if (!isset($_SESSION['email'])) {
    header('location: ../Template/login.phtml');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ../Template/login.phtml");
}


/* if you wish
 * if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT COUNT(*) AS total FROM File WHERE email='$email'";
    $db = getdb();
    $result = mysqli_query($db, $query);
    $count = mysqli_fetch_assoc($result);
    if ($count['total'] == 0) {
        header("location: upload.phtml");
    }
}*/