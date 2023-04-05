
<?php
// ob_start();
// session_start();


// include 'connectt.php';




    
    
//     if (isset($_POST['giris'])) {
//         $admin_id = $_POST['kulllanicikod'];
//         $parola = $_POST['parola'];
//         if(!$admin_id){
//             echo "Kullanıcı Kod Giriniz";
//         }
//         else{
//             $kullanici_sor=$con->prepare('SELECT * FROM admin WHERE admin_id=? && parola=?');
//             $kullanici_sor->execute([$admin_id,$parola]);

//             echo $say=$kullanici_sor->rowCount();
//             if($say==1){
//                 $_SESSION['kullanicikod']=$admin_id;
//                 echo "Başarıyla Giriş Yaptınız";
//                 header('Refresh:2; giris.php');
//             }
//             pg_close($con);
//         }
//     }
    


include 'connectt.php';   

if(isset($_POST['username'])){

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql="select * from employee where first_name='".$uname."' AND id='".$password."' limit 1";
    $result = pg_query($con,$sql);

    if(pg_num_rows($result)==1){
        header('Location: personelgiris.html');
        exit();
    }
    else{
        echo "Sisteme Erişim verilmedi geri dönüp verileri kontrol ediniz.";
        header('Location: personelgiris.php');
        exit();
    }
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
        <h2>Giriş</h2>
        <input type="text" name="username" placeholder="E-Posta" autocomplete="false">
        <input type="password" name="password" placeholder="Parola">
        <input type="submit" name="submit" value="Giriş Yap">


    </form>
    
</body>
</html>
