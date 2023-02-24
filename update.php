<?php
include 'html/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "html/404.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "html/404.php";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = updateUser($_POST, $userId);

    uploadImage($_FILES['picture'], $user);

    header("Location: index.php");
}
?>

<?php include '_form.php' ?>
