<?php


include 'connectt.php';
$id=$_GET['updateid'];
$sql="Select  * from employee where id=$id";
$result=pg_query($con,$sql);
$row=pg_fetch_assoc($result);
 $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $district_id=$row['district_id'];
    $title_id=$row['title_id'];
     $unit_id=$row['unit_id'];
     $address=$row['address'];
    $phonenumber=$row['phonenumber'];

if(isset($_POST['submit'])){
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $district_id=$_POST['districtid'];
    $title_id=$_POST['titleid'];
    $unit_id=$_POST['unitid'];
    $address=$_POST['adress'];
    $phonenumber=$_POST['number'];
    
    
    $sql="Update employee set id=$id,first_name='$first_name',last_name='$last_name',district_id='$district_id',title_id='$title_id' ,unit_id='$unit_id',address='$address',phonenumber='$phonenumber' where id=$id";
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
    <!-- <div class="container">
<form class="box" method="post">
   
<input type="text" name="firstname" placeholder="Username" value =<?php echo $first_name?> />
    <input type="text" name="lastname" placeholder="Username" value =<?php echo $last_name?> />
    <input type="text" name="districtid" placeholder="Username" value =<?php echo $district_id?>>
 <input type="text" name="titleid" placeholder="Password" value =<?php echo $title_id?> />
    <input type="text" name="unitid" placeholder="Password" value =<?php echo $unit_id?> />
    <button type="submit" name="submit" >Update </button>
     <button type="submit" name="submit" ><a href="employeedisplay.php">Geri</a> </button>
</form>
        </div> -->
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
            <label for="inputCity">FirstName</label>
            <input type="text" name="firstname" placeholder="First-Name" class="form-control" id="inputCity" value =<?php echo $first_name?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">LastName</label>
            <input type="text" name="lastname" placeholder="Last-Name" class="form-control" id="inputCity" value =<?php echo $last_name?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">District_İd</label>
            <input type="text" name="districtid" placeholder="District-İd" class="form-control" id="inputCity" value =<?php echo $district_id?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">Title_İd</label>
            <input type="text" name="titleid" placeholder="Title-İd" class="form-control" id="inputCity" value =<?php echo $title_id?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">Unit_İd</label>
            <input type="text" name="unitid" placeholder="Unit-İd" class="form-control" id="inputCity" value =<?php echo $unit_id?>>
          </div>
          <div class="form-group col-md-8">
            <label for="inputCity">Adres</label>
            <input type="text" name="adress" placeholder="Adres" class="form-control" id="inputCity" value =<?php echo $address?>>
          </div>
            <div class="form-group col-md-8">
            <label for="inputCity">PhoneNumber</label>
            <input type="text" name="number" placeholder="PhoneNumber" class="form-control" id="inputCity" value =<?php echo $phonenumber?>>
          </div>
         
         
       <div>
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
        <button type="submit" name="submit" >Update </button>
     <button type="submit" name="submit" ><a href="employeedisplay.php">Geri</a> </button>
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

