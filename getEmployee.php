<?php
require 'connexion.php';

if(isset($_POST['id'])){
    if(!empty($_POST['id'])){
$getEmpSql = $conn->prepare("SELECT  * FROM employees WHERE id= :id LIMIT 1"); 
$getEmpSql->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

$getEmpSql->execute(); 
$row = $getEmpSql->fetch();
//var_dump($row);

echo "<span class='success'>Employee ID = ".$row['id']. "
                                 / NAME = ".$row['name']."</span>";

    }
    else if(empty($_POST['id'])){
        echo "<span class='error'>Employee ID do not exists</span>";

    }
}
else{
    echo "<span class='error'>Employee ID is required</span>";
   
}


