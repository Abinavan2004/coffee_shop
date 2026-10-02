<?php
  
  define("HOST","localhost");
  define("USER","root");
  define("PASSWORD","");
  define("DBNAME","coffee-blend");

  try{
  $conn= new PDO("mysql:host=".HOST.";dbname=".DBNAME,
                  USER,
                  PASSWORD);
  }catch(PDOException $e)
  {
     echo "error found".$e->getMessage();
  }
  if($conn)
    {
      echo"Successfully Connected";
    }
?>