<?php 
    include "config.php";
    $sql = "delete from splTable where ID=".$_POST['id'];
    $con->query($sql);
   
?>