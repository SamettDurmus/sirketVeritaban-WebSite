<?php

include 'connectt.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title> <!-- HTML Yorum Satırı | Burada Sayfanın Başlığı Yer Alacak -->
    <link rel="stylesheet" href="css/style.css">
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
            <div id="logo">Paylaştıkça</div>
            <nav>
                <a href="personelgiris.html"><i class="fas fa-home ikon"></i>Anasayfa</a> 
                <a href="aramaindex.php"><i class="fas fa-graduation-cap ikon"></i>Görev Arama</a> 
                <a href="personelaciklama.html"><i class="fas fa-user-friends ikon"></i>Ekip</a> 
                <a href="iletisim.html"><i class="fas fa-map-pin ikon"></i>İletişim</a> 
                <a href="basgiris.php"><i class="fas fa-map-pin ikon"></i>Çıkış</a> 
            </nav>
        </section>
    <div class="container" style="align-items: center;">
        <table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Start-Date</th>
      <th scope="col">Last-Date</th>
        <th scope="col">Project Name</th>
        <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  
<?php
$aranan=$_POST['aranan'];
          $konu= pg_query("SELECT employee.id, employee.first_name, employee.last_name,assignment.start_date,assignment.end_date
          ,project.name,project.description
          FROM employee
          INNER JOIN assignment
          ON employee.id = assignment.employee_id INNER JOIN project on assignment.project_id=project.id where employee.id='$aranan'");

if($aranan==""){
    echo "Bos arama yapamzsiniz";
}else{
    while($bul=pg_fetch_array($konu)){
    $first_name=$bul['first_name'];
    $last_name=$bul['last_name'];
    $start_date = $bul['start_date'];
     $end_date = $bul['end_date'];
        $name = $bul['name'];
        $description = $bul['description'];

        echo '<tr>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$start_date.'</td>
        <td>'.$end_date.'</td>
        <td>'.$name.'</td>
        <td>'.$description.'</td>

        </tr>';
    
}

} 






?>


<script
    src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
    integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
    crossorigin="anonymous"></script>
  
  <script src="owl/owl.carousel.min.js"></script>
          
          
          <script src="owl/script.js"></script>
</body>
</html> 