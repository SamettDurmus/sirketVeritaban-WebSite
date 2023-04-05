<?php
include 'connectt.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    
    $sql="DELETE FROM assignment where id=$id";
    $result=pg_query($con,$sql);
    if($result){
        // echo "Deleted successful";
        header("location:assignmentdisplay.php");
    }
}
 pg_close($con);

?>