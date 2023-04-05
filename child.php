<?php


include 'connectt.php';
session_start();

if(isset($_POST['submit'])){
  $id = $_POST['chilid'];
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $employee_id=$_POST['employeeid'];
    $admin = $_SESSION['uname'];
  $birthday = $_POST['birtdate'];
    
    
    $sql="INSERT INTO child (id,first_name,last_name,employee_id,dateofbird,admin_id) VALUES ('$id','$first_name','$last_name','$employee_id','$birthday','$admin')";
    $result=pg_query($con, $sql);
    pg_close($con);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleee.css">
<script src="https://kit.fontawesome.com/c20485228a.js"
crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet" />
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
    <form id="iletisim2" method="post">
    <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">TC</label>
            <input type="text" name="chilid" placeholder="City" class="form-control" id="inputCity">
          </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">FirstName</label>
            <input type="text" name="firstname" placeholder="City" class="form-control" id="inputCity">
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">LastName</label>
            <input type="text" name="lastname" placeholder="City" class="form-control" id="inputCity">
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">Employee_İd</label>
            <input type="text" name="employeeid" placeholder="City" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-8">
            <label for="inputCity">Birtday</label>
            <input type="date" name="birtdate" placeholder="City" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-8">
            <label for="inputCity">Admin_İd</label>
            <input type="text" name="uname" placeholder="Admin-İd" class="form-control" id="inputCity" value = <?php echo "".$_SESSION['uname'].""?> >
          </div>
         
            
          
         
         
       
        <input type="submit" name="submit" class="btn btn-primary">
        <button type="submit" class="btn btn-white"><a href="childdisplay.php">Liste</a>
        </button>
            
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="iletisim">
            <div class="containerst">
                <h3 id="h3iletisim">İletişim</h3>
                
                
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                             <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="" placeholder="Mesaj Giriniz" rows="10" required class="form-control">
                        </textarea>
                        <input type="submit" value="Gönder">
                        </div>
                    <div id="adres">
                <h4 id="adresbaslik">Adres:</h4>
                        <p class="adresp">Yayla Mah.</p>
                        <p class="adresp">Fevzi Çakmak Caddesi</p>
                        <p class="adresp">Karaoğlan Sokak No:</p>
                        <p class="adresp">0216 111 11 11</p>
                <p class="adresp">Email : veritabanıödev@gmail.com</p>
                    </div>
                </div>
                <footer>
                <div id="copyright">2022 Tüm Hakları Saklıdır</div>
                    
                    <div id="socialfooter">
                        <a href=""><i class="fab fa-facebook-f social"></i></a>
                        <a href=""><i class="fab fa-google-plus-g social"></i></a>
                        <a href=""><i class="fab fa-twitter social"></i></a>
                    </div>
                    
                    
                    <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
                
                </footer>
                
                </div>
                
            
        
        
        
        </section>
        <script
    src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
    integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
    crossorigin="anonymous"></script>
  
  <script src="owl/owl.carousel.min.js"></script>
          
          
          <script src="owl/script.js"></script>
      
</body>



</html>