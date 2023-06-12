<?php 
    session_start();
    require_once 'connect.php';

    $name = $_POST ['name'];
    $familia = $_POST ['familia'];
    $login = $_POST ['login'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $password_confirm = $_POST ['password_confirm'];

    if($password === $password_confirm) {
        $password = md5($password);

        // $path = 'uploads/' . time(). $FILES['avatar']['name'];
        // move_uploaded_file($_FILES['avatar']['tmp_name'], '../' , $path);

        mysqli_query($connect, "INSERT INTO `account` (`id`, `name`, `familia`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$name', '$familia', '$login', '$email', '$password', 'noavatar.png')");
        header('Location: ../Extern.php');
    }else{
        $_SESSION['massage'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>

