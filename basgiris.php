
<?php


include 'connectt.php';

if(isset($_POST['submit'])){
    header('Location: girisekran.php');
}
else if(isset($_POST['submitt'])){
    header('Location: personelgiris.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
    <link rel="stylesheet" href="anagirisstyle.css">
</head>
<body>
    <form action="#" method="POST">
        <h2>Kullanıcı</h2>
        <input type="submit" name="submit" value="Admin Giris">
        <input type="submit" name="submitt" value="Personel Giris">

    </form>
    
</body>
</html>