<?php
if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $result = array();
    $message = $_POST['message'];
    $from = $_POST['from'];

    