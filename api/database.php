<?php

//College - 3307
//Home - 3306
//X206 - Game Room - 3306
   $dsn = "mysql:host=localhost:3306; dbname=whiskeyDatabase";
   $username = "root";
   $password = "root";

   try
   {
       $db = new PDO($dsn, $username, $password);
      // echo "You Have Sucessfully conected to the database";
   } 
   catch (Exception $ex) 
   {
         $error_messege = $ex->getMessage();
         include("database_error.php");
         exit();
   }
?>
        

