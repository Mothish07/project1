<?php 
    include "config.php";
    $sql = "update splTable set teamName = '{$_POST['teamName']}' , owner = '{$_POST['owner']}' , manager = '{$_POST['manager']}' , email = '{$_POST['email']}' , phno = '{$_POST['phno']}' ,address = '{$_POST['address']}' where ID=".$_POST['id'];
    $con->query($sql);
   
?>