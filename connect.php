<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email  = $_POST['email'];
    $phn = $_POST['phn'];
    $start = $_POST['start'];
    $cm = $_POST['cm'];
    // $username = "root";  
    // $password = "";  

    $conn = new mysqli('localhost', 'root','', 'reg');
     if ($conn->connect_error) {
         die('Connection Failed : '.$conn->connect_error);
     }
     else {
         $stmt = $conn->prepare("insert into reserve_a_table(fname, lname, email, phn, start, cm)
         values(?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("sssiss",$fname, $lname, $email, $phn, $start, $cm);
         $stmt->execute();
         echo "Your reservation is confirm shortly we will come sortly...";
         header("Refresh:0.5; url=main.html");
         $stmt->close();
         $conn->close();
     }

?>