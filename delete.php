<?php
include 'partial/header.php';
require __DIR__.'/users/user.php';


if (!isset($_GET['id'])) {
    include "partial/not_found.php";
    exit;
}
$userId = $_GET['id'];
deleteUser($userId);

header("Location: index.php");