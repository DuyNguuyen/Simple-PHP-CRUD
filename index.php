<?php
    require 'users/user.php';
    $users = getUsers();

    include 'partial/header.php';
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Simple CRUD Website</h3>
        </div>
        <div class="card-body">
            <p>
                <a  href="create.php" class="btn btn-outline-success">Create new User</a>
            </p>
            <table class = "table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td>
                            <?php if  (isset($user['extension'])): ?>
                                <img  style="width: 60px" src=<?='users/images/'.$user['id'].'.'.$user['extension'];?>>
                            <?php endif; ?>
                        </td>
                        <td><?=$user['name']; ?></td>
                        <td><?=$user['username']; ?></td>
                        <td><?=$user['email']; ?></td>
                        <td><?=$user['phone']; ?></td>
                        <td>
                            <a target = "blank" href="http://<?=$user['website']?>">
                                <?=$user['website']?>
                            </a>
                        </td>
                        <td>
                            <a href="view.php?id=<?=$user['id'] ?>" class="btn btn-small btn-outline-info">View</a>
                            <a href="update.php?id=<?=$user['id'] ?>" class="btn btn-small btn-outline-secondary">Update</a>
                            <a href="delete.php?id=<?=$user['id'] ?>" class="btn btn-small btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<?php

include 'partial/footer.php';
?>