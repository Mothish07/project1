<?php
   include "config.php";
?>
<div class="card text-dark">
               <div class="card-header text-center">
                  REGISTERED TEAMS
               </div>
               <div class="card-body">
                  <table class="table table-bordered text-center">
                     <thead class="bg-dark text-light">
                        <tr>
                           <th>TEAM NAME</th>
                           <th>OWNER NAME</th>
                           <th>MANAGE NAME</th>
                           <th>EMAIL</th>
                           <th>PHONE NUMBER </th>
                           <th>ADDRESS</th>
                           <th>OPERATIONS</th>
                        </tr>
                     </thead>
                     <tbody class="tableAppends">
                        <?php
                        $sql = "select * from splTable";
                        $result = $con->query($sql);
                        if ($result->num_rows>0){
                           while($row = $result->fetch_assoc()){
                              echo "
                              <tr>
                                 <td>{$row["teamName"]} </td>
                                 <td>{$row["owner"]} </td>
                                 <td>{$row["manager"]} </td>
                                 <td>{$row["email"]} </td>
                                 <td>{$row["phno"]} </td>
                                 <td>{$row["address"]} </td>
                                 <td>
                                    <button type = 'button' class = 'btn btn-sm btn-info update' data-id = '{$row["ID"]}' >
                                       <i class='fa-solid fa-pencil'></i>
                                    </button>
                                       <br><br>
                                    <button type = 'button' class='btn  btn-sm btn-danger del' data-id = '{$row["ID"]}'>
                                       <i class='fa-solid fa-trash-can'></i>
                                    </button> 
                                 </td>
                              </tr>
                              "; 
                           }
                        }
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>