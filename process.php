<?php
    if(isset($_POST['checkbox'])){
        setcookie('username', $_POST['username'], time() + 86400);
        setcookie('email', $_POST['email'], time() + 86400);

        $uploadDir = "uploads/";
        $uploadFile = $uploadDir.basename($_FILES["profile_image"]["name"]);
        echo($uploadFile);

        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $uploadFile)) {
            setcookie("profile_image", $uploadFile, time() + 86400);
        } else {
            echo "Error loading file to server";
            die();
        }
    }

    header('Location: index.php');
    die();