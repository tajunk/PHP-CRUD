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
?>
<section class="container">
    <article class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id'] ?>">Delete</a>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $user['name'] ?></td>
                </tr>
                <tr>
                    <th>Username:</th>
                    <td><?php echo $user['username'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>
                        <a href="">
                            <a target="" href="">
                                <?php echo $user['email'] ?>
                            </a>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo $user['phone'] ?></td>
                </tr>
            </tbody>
        </table>
    </article>
</section>
<?php include 'html/footer.php' ?>