<?php
require __DIR__ . '/users/users.php';

$users = getUsers();

include 'html/header.php'
?>
<section class="container">
    <div>
        <a href="create.php" class="btn btn-outline-success">Create New</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <?php if (isset($user['extension'])): ?>
                            <img style="width: 50px" src="<?php echo "users/images/{$user['id']}.{$user['extension']}" ?>" alt="">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td>
                        <a target="" href="">
                            <?php echo $user['email'] ?>
                        </a>
                    </td>
                    <td><?php echo $user['phone'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;; ?>
        </tbody>
    </table>
</section>
<?php include 'html/footer.php' ?>