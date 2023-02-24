<section class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']) : ?>
                    Update User: <b><?php echo $user['name'] ?></b>
                <?php else : ?>
                    Create User:
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</section>