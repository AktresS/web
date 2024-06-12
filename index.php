<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>ProКино</title>
</head>
<body>
    <?php require "header.php" ?>
    <main>
        <p>Username: <? if(isset($_COOKIE['username'])) echo($_COOKIE['username']) ?></p>
        <p>Email: <? if(isset($_COOKIE['email'])) echo($_COOKIE['email']) ?></p>
        <img src="<? if(isset($_COOKIE['profile_image'])) echo($_COOKIE['profile_image']) ?>" alt="">
    </main>
    
    <?php require "form.php" ?>
</body>
</html>