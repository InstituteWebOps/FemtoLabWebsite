<?php
try{
  $con = new PDO("mysql:host=localhost;dbname=signup", "root", "", array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
   //servername,username,password and database name taken as the parameters.
        echo("Here: ");
  if(isset($_POST["signup"]))
  {
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $statement = "INSERT INTO user (username,gender,email,password) VALUES (:username,:gender,:email,:password);";
        $insert = $con->prepare($statement);
        $insert->bindValue(':username' , $username);
        $insert->bindValue(':gender' , $gender);
        $insert->bindValue(':email' , $email);
        $insert->bindValue(':password' , $password);
        $insert->execute();
        
   }
 }
      
      catch(PDOException $e)
      {
        echo "Error" .$e->getMessage();
       }
      

?>
