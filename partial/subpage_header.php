<?php
require 'users/user.php';
$userId = $_GET['id'];
if (isset($__GET['id'])){
    include 'partial/not_found.php';
    exit;
}
$user = getUserById($userId);
if(!$user){
    include 'partial/not_found.php';
    exit;
}
include 'partial/header.php';
?>