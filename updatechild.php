<?php


include 'connectt.php';
$id=$_GET['updateid'];
$sql="Select  * from child where id=$id";
$result=pg_query($con,$sql);
$row=pg_fetch_assoc($result);
$id = $row['id'];
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$employee_id=$row['employee_id'];
$dateofbird = $row['dateofbird'];

if(isset($_POST['submit'])){
    $id = $_POST['chilid'];
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $employee_id=$_POST['employeeid'];
  $dateofbird = $_POST['birtdate'];
    
    
    $sql="Update child set id=$id,first_name='$first_name',last_name='$last_name',employee_id='$employee_id',dateofbird='$dateofbird' where id=$id";
    $result=pg_query($con, $sql);

    pg_close($con);
}


?>





<!DOCTYPE html>
<head>
<title>Animated Login Fore</title>
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
            <input type="text" name="chilid" placeholder="TC" class="form-control" id="inputCity" value =<?php echo $id?>>
          </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">FirstName</label>
            <input type="text" name="firstname" placeholder="FirstName" class="form-control" id="inputCity" value =<?php echo $first_name?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">LastName</label>
            <input type="text" name="lastname" placeholder="LastName" class="form-control" id="inputCity" value =<?php echo $last_name?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">Employee_İd</label>
            <input type="text" name="employeeid" placeholder="Employee_İd" class="form-control" id="inputCity" value =<?php echo $employee_id?>>
          </div>
          <div class="form-group col-md-8">
            <label for="inputCity">Birtday</label>
            <input type="date" name="birtdate" placeholder="Birtday" class="form-control" id="inputCity" value =<?php echo $dateofbird?>>
          </div>
         
         
       <div>
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
        <button type="submit" name="submit" >Update </button>
     <button type="submit" name="submit" ><a href="childdisplay.php">Geri</a> </button>
       </div>
        </div>
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
