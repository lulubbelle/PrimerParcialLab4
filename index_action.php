<?php
    require_once("Config/Autoload.php");

    use Model\User as User;

    if($_POST)
    {
        //preguntar
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        
        if(($email == "user@myapp.com") && ($password === "123456"))
        {
            $user = new User();
            $user->setEmail($email);
            $user->setPassword($password);

            session_start();

            $_SESSION["loggedUser"] = $user;

            header("location:add-form.php");
        }
        else
            header("location:index.php");
    }
?>