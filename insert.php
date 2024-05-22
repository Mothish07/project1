<?php
   include "config.php";

   $teamName = $_POST["teamName"];
   $owner = $_POST["owner"];
   $manager = $_POST["manager"];
   $email = $_POST["email"];
   $phno = $_POST["phno"];
   $address = $_POST["address"];

   $sql = "insert into splTable (teamName,owner,manager,email,phno,address) values ('{$teamName}','{$owner}','{$manager}','{ $email}','{$phno }','{$address}')";
   $con->query($sql);
   $id = $con->insert_id;
   echo "
      <td>{$teamName} </td>
      <td>{$owner} </td>
      <td>{$manager} </td>
      <td>{ $email} </td>
      <td>{$phno } </td>
      <td>{$address} </td>
      <td>
         <button type = 'button' class = 'btn btn-sm btn-info update'data-id = '{$id}' >
            <i class='fa-solid fa-pencil'></i>
         </button>
            <br><br>
         <button type = 'button' class = 'btn  btn-sm btn-danger del' data-id = '{$id}' >
            <i class='fa-solid fa-trash-can'></i>
         </button> 
      </td>
   ";
?>