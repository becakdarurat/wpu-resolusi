<?php
    if(isset($_POST["submit"])){
        if($_POST["nama"] == "pwdarurat" && $_POST["password"] == "teknik123"){
            header("Location: index.html");
            exit;
        } else {
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="FromLogin/index.css">
</head>
<body>
<div class="container">
    <h1>Silahkan Login Terlebih dahulu</h1>
    <?php if(isset($error)) : ?>
    <p style="color: red ;">Maaf password yang anda masukkan salah!</p>
    <?php endif ?>
    <img class="gambar" src="FromLogin/clay-banks-PXaQXThG1FY-unsplash.jpg" alt="gambar keyboard">

    <form action="" method="post">
           <input type="text" name="nama">
           <input type="password" name="password">
           <button type="submit" name="submit">Login</button>
    </form>

    <div class="kotak">
    <p class="p">Dekat dengan saya  By  <a href="https://web.facebook.com/sofyan.tanjung.7923" class="text-white fw-bold">Sofyan Tanjung</a></p>
    </div>
</div>
</body>
</html>
