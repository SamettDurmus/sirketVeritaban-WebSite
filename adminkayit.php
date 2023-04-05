<?php


include 'connectt.php';
$username_err = "";
$firstname_err = "";
$lastname_err = "";
$email_err = "";
$parola_err = "";
$parolatkr_err = "";


if(isset($_POST['kaydet'])){
    if(empty($_POST['kulllanicikod']))
    {
        $username_err = "Kullanıcı Kod Boş Geçilemez";
    }
    else{
        $admin_id=$_POST['kulllanicikod'];
    }
    if(empty($_POST['firstname']))
    {
        $firstname_err = "FirstName Boş Geçilemez";
    }
    else{
        $first_name=$_POST['firstname'];
    }
    if(empty($_POST['lastname']))
    {
        $lastname_err = "LastName Boş Geçilemez";
    }
    else{
        $last_name=$_POST['lastname'];
    }
    if(empty($_POST['email']))
    {
        $email_err = "Email Boş Geçilemez";
    }
    else{
        $email=$_POST['email'];
    }
    if(empty($_POST['parola']))
    {
        $parola_err = "Parola Boş Geçilemez";
    }
    else if($_POST["parola"]!=$_POST["parolatkr"]){
        $parolatkr_err = "Parolalar Eşeleşmiyor.";
    }
    else{
        $parola=password_hash($_POST['parola'],PASSWORD_DEFAULT) ;
    }
    if(empty($_POST['parolatkr']))
    {
        $parolatkr_err = "Parola Tekrar Kısmı Boş Geçilemez";
    }
    else if($_POST["parola"]!=$_POST["parolatkr"])
    {
        $parolatkr_err = "Parolalar Eşeleşmiyor.";
    }
    else{
        $parolatkr = $_POST["parolatkr"];
    }
    
   
    
    
    
    if(isset($admin_id)&&isset($first_name)&&isset($last_name)&&isset($email)&&isset($parola))
    {

        // $sql="INSERT INTO login (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
    $sql="CALL proc_create_admin('$admin_id','$first_name','$last_name','$email','$parola')";
    $result=pg_query($con, $sql);
    if($result){
        echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı bir şekilde eklendi.
        </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenirken bir problem oluştu.
        </div>';
    }
    pg_close($con);
}
    }
    
    
    


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styleee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
</head>
<body>
<section id="menu">
            <div id="logo"><a href="admingiris.php">vT</a></div>
            <nav>
            <a href="adminkayit.php"><i class="fas fa-user-friends ikon"></i>AK</a>
                <a href="adminaramaindex.php"><i class="fas fa-graduation-cap ikon"></i>Ara</a> 
                
                <a href="employee.php"><i class="fas fa-user-friends ikon"></i>Personel</a> 
                <a href="child.php"><i class="fas fa-user-friends ikon"></i>P.Çocuk</a>
                <a href="assigment.php"><i class="fas fa-user-friends ikon"></i>Assigment</a>
                <a href="unit.php"><i class="fas fa-user-friends ikon"></i>Unit</a>
                <a href="title.php"><i class="fas fa-user-friends ikon"></i>Title</a>
                <a href="province.php"><i class="fas fa-user-friends ikon"></i>Province</a>
                <a href="project.php"><i class="fas fa-user-friends ikon"></i>Project</a>
                <a href="iletisim.html"><i class="fas fa-map-pin ikon"></i>İletişim</a> 
                <a href="basgiris.php"><i class="fas fa-map-pin ikon"></i>Çıkış</a> 
            </nav>
        </section>

<div class="container p-5">
    <div class="card p-5">
    <form action="adminkayit.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">Kullanıcı-Kod</label>
    <input type="text" class="form-control 
    <?php
    if(!empty($username_err))
    {
        echo "is-invalid";
    }
    ?>
    " id="exampleInputEmail1" name="kulllanicikod" aria-describedby="emailHelp" placeholder="Size Verilen Kullanıcı-Kod">
  <div id="validationServer03Feedback" class="invalid-feedback">
    <?php
    echo $username_err;
    ?>
  </div>
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">Firs-Name</label>
    <input type="text" class="form-control <?php
    if(!empty($firstname_err))
    {
        echo "is-invalid";
    }
    ?>" id="exampleInputEmail1" name="firstname" aria-describedby="emailHelp" placeholder="First Name">
    <div id="validationServer03Feedback" class="invalid-feedback"><?php
    echo $firstname_err;
    ?>
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last-Name</label>
    <input type="text" class="form-control <?php
    if(!empty($lastname_err))
    {
        echo "is-invalid";
    }
    ?>" id="exampleInputEmail1" name="lastname" aria-describedby="emailHelp" placeholder="Last Name">
    <div id="validationServer03Feedback" class="invalid-feedback"><?php
    echo $lastname_err;
    ?>
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control <?php
    if(!empty($email_err))
    {
        echo "is-invalid";
    }
    ?>" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <div id="validationServer03Feedback" class="invalid-feedback"><?php
    echo $email_err;
    ?>
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control <?php
    if(!empty($parola_err))
    {
        echo "is-invalid";
    }
    ?>" id="exampleInputPassword1" name="parola" placeholder="Password">
    <div id="validationServer03Feedback" class="invalid-feedback"><?php
    echo $parola_err;
    ?>
  </div>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password Tekrar</label>
    <input type="password" class="form-control <?php
    if(!empty($parolatkr_err))
    {
        echo "is-invalid";
    }
    ?>" id="exampleInputPassword1" name="parolatkr" placeholder="Password">
    <div id="validationServer03Feedback" class="invalid-feedback"><?php
    echo $parolatkr_err;
    ?>
  </div>
</div>
  
  <button type="submit" name="kaydet" class="btn btn-primary">Submit</button>
</form>
    </div>

</div>
    



<script
    src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
    integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
    crossorigin="anonymous"></script>
  
  <script src="owl/owl.carousel.min.js"></script>
          
          
          <script src="owl/script.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>