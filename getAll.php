<?php

require 'connexion.php';

try {
   
 
    $sql = "select * from employees "; 
    $query = $conn->query($sql);
 
   
    // echo '<pre>';
    // print_r($query->fetchAll());
    // echo '</pre>';
 
      echo "<table class='table table-striped'><thead><tr><th>ID</th><th>Name</th></tr></thead>";
      echo "<tbody>";
       while ($row = $query->fetch()) {
       
         echo "<tr>";
         echo "<td>". $row['id']. "</td>";
         echo "<td>". $row['name']. "</td>";
         echo "</tr>";
       }
       echo "</tbody>";
       echo "</table>";
 
 }
 Catch (PDOException $e) {
  echo 'ERROR:'.$e->getMessage();
 }
 