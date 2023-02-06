<?php
    include 'partial/subpage_header.php';
?>

<div class="container">
    <div class="card">
        <div class = "card-header">
            <h3>User Information</h3>
        </div>
        <div class="card-body">
            <table class="table">
            <tbody>
                <tr>
                    <th>Image:</th>
                    <td>
                        <?php if  (isset($user['extension'])): ?>
                            <img  style="width: 200px" src=<?='users/images/'.$user['id'].'.'.$user['extension'];?>>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td><?= $user['name'];?></td>
                </tr>
                <tr>
                    <th>Username:</th>
                    <td><?= $user['username'];?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= $user['email'];?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?= $user['phone'];?></td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td>
                        <a target = "blank" href="http://<?=$user['website']?>">
                                <?=$user['website']?>
                        </a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'partial/footer.php';
?>