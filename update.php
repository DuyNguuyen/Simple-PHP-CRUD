<?php
    include 'partial/subpage_header.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = updateUser($_POST, $userId);
        
        uploadImage($_FILES['picture'], $user);
        
        header("Location: index.php");
    }
    include 'partial/header.php';
?>

<?php require '_form.php';?>

<?php

include 'partial/footer.php';
?>