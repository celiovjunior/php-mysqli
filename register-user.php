<?php

switch ($_REQUEST['action']) {
    case 'create':
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $date_of_birth = $_POST['date_of_birth'];

        # attention to the syntax
        $sql = "INSERT INTO users (full_name, email, password, date_of_birth) VALUES ('{$full_name}','{$email}','{$password}','{$date_of_birth}')";

        $result = $conn->query($sql);

        if ($result==true) {
            print "<script>alert('user registered successfully');location.href='?page=list'</script>";
        } else {
            print "<script>alert('error when register an user');location.href='?page=list'</script>";
        }

        break;
    case 'update':
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $date_of_birth = $_POST['date_of_birth'];

        $sql = "UPDATE users SET email = '{$email}', full_name = '{$full_name}', date_of_birth = '{$date_of_birth}' WHERE id=".$_REQUEST["id"];

        $result = $conn->query($sql);

        if ($result==true) {
            print "<script>alert('user updated successfully');location.href='?page=list'</script>";
        } else {
            print "<script>alert('error when update the user');location.href='?page=list'</script>";
        }
        break;
    case 'delete':
        $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
        $result = $conn->query($sql);

        if ($result==true) {
            print "<script>alert('user is deleted');location.href='?page=list'</script>";
        } else {
            print "<script>alert('error when deleting the user');location.href='?page=list'</script>";
        }
        break;
}