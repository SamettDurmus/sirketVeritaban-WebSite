<?php
include 'connectt.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    
    $sql="DELETE FROM title where id=$id";
    $result=pg_query($con,$sql);
    if($result){
        // echo "Deleted successful";
        header("location:titledisplay.php");
    }
}
 pg_close($con);

?>