<?php
include 'html/header.php';
require __DIR__ . '/users/users.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);

    if (isset($_FILES['picture'])) {
        uploadImage($_FILES['picture'], $user);
    }

    header("Location: index.php");
}
?>

<?php include '_form.php' ?>