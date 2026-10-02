
<?php

   include( "../includes/header.php");
   include("../config/config.php");
?>
<?php
   if(isset($_POST["submit"]))
    {
       if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["date"]) || empty($_POST["time"]) || empty($_POST["message"])|| empty($_POST["phone"]) )
        {
          echo"<script> alert('some fields are empty'); </script>";
        }
        else
          {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $date = $_POST["date"];
            $time = $_POST["time"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
            $user_id = $_SESSION['user_id'];
            if ($date > date("n/j/Y") )
              {
                  $insert = $conn->prepare("INSERT INTO bookings (first_name,last_name,date,time,phone,message,user_id) VALUES
                  (:first_name , :last_name , :date , :time , :phone , :message , :user_id)");

                  $insert->execute([
                     ":first_name" =>  $first_name,
                     ":last_name" =>  $last_name,
                     ":date" =>  $date,
                     ":time" =>  $time,
                     ":phone" =>  $phone,
                     ":message" =>  $message,
                     ":user_id" =>  $user_id]);

                     echo " <script> alert('you booked this table success fully'); </script>";
              }
              else{
                echo " <script> alert('choose valid date'); </script>";
              }
          }
    }
?>