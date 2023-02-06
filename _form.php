<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>          
             <?php
                    if ($user['id']) {
                        echo "Update User";
                    } else {
                        echo "Create New User";
                    }
                ?>
            </h3>
        </div>
        <div class="card body">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" value="<?= $user['name'] ?>" class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>" require>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" value="<?= $user['username'] ?>" class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>" require>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" value="<?= $user['email'] ?>" class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>" reuire>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?= $user['phone'] ?>" class="form-control <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input name="website" value="<?= $user['website'] ?>" class="form-control <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" accept="image/*" class="form-control">
                </div>

                <button style="float: right; " class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>