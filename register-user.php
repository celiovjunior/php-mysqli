<?php

switch ($_REQUEST['action']) {
    case 'create':
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date_of_birth = $_POST['date_of_birth'];

        # attention to the syntax
        $sql = "INSERT INTO users (full_name, email, password, date_of_birth) VALUES ('{$full_name}','{$email}','{$password}','{$date_of_birth}')";

        $result = $conn->query($sql);

        break;
    case 'update':
        # code...
        break;
    case 'delete':
        # code...
        break;
}