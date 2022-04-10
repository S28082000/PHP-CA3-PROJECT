<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['book now'])){
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      

      $request = " insert into book_form(where to, how many, arrivals, leaving) values('$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>