


<?php

  $email= $_POST['email'];
 $password= $_POST['password'];

 $conn = new mysqli('localhost','root','','hello');
 if ($conn->connect_error)
 {
     die('Connection Failed :'.$conn-> connect_error);
 }

     $stmt= $conn->query("INSERT INTO registration(email,password) VALUES('$email','$password')");

     if($stmt){
     echo "<div>";
     echo
     '<img style="display:block;margin:auto auto" src="https://creativehandles.com/uploads/images/thank-you-page-cover-photo_1615543701.jpg" alt="">';
     echo "</div>";




    }

    else
    {
        echo 'fail';
    }
    //  $stmt->close();
     $conn->close();

     ?>
