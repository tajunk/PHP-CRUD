<?php
include 'html/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "html/404.php";
    exit;
}
$userId = $_GET['id'];

deleteUser($userId);

// $user = getUserById($userId);
// if (!$user) {
//     include "html/404.php";
//     exit;
// }

header("Location: index.php");
?>