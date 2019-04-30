<?php
require 'connexion.php';

if(isset($_POST['id']) && isset($_POST['name'])){
    if(!empty($_POST['id']) && !empty($_POST['name'])){

        try {
            $updateSql = "UPDATE employees SET name = :name 
			
			WHERE id = :id";
$stmt = $conn->prepare($updateSql);									 
$stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);		
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);	
$stmt->execute(); 
echo "<span class='success'>Employee updated successfully</span>";

            }
            Catch (PDOException $e) {
                    echo 'ERROR:'.$e->getMessage();
            }


    }

    else{
        echo "<span class='error'>Empty fields</span>";
    } 
}





    