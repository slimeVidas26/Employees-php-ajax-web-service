<?php
require 'connexion.php';
 //echo 'je suis la page send';

if(isset($_POST['id']) && isset($_POST['name'])){
    if(!empty($_POST['id']) && !empty($_POST['name'])){

        try {
            $addNewSql = $conn->prepare("
            INSERT INTO employees (id, name)  VALUES (:id, :name)
            ");
            $addNewSql->bindParam(':id', $_POST['id']);
            $addNewSql->bindParam(':name', $_POST['name']);
          
            $addNewSql->execute();
            echo "<span class='success'>New record created successfully</span>";
            }
            Catch (PDOException $e) {
                    echo 'ERROR:'.$e->getMessage();
            }
    } 
    else{
        echo "<span class='error'>Please complete all the fields</span>";
    } 
}
