<?php
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    // $username = "root";  
    // $password = "";  

    $conn = new mysqli('localhost', 'root','', 'reg');
     if ($conn->connect_error) {
         die('Connection Failed : '.$conn->connect_error);
     }
     else {
         $stmt = $conn->prepare("insert into consumer(name, email, telephone, message)
         values(?, ?, ?, ?)");
         $stmt->bind_param("ssss",$name, $email, $telephone, $message);
         $stmt->execute();
         echo "Thanks For your valueable Feedback we will come sortly...<br> Redirecting you to Home Page.....";
         header("Refresh:0.5; url=main.html");
         $stmt->close();
         $conn->close();
     }

?>