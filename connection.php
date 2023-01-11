<?php 
include("config.php");
if (isset($_POST['submit'])) {
    // if (isset($_POST['fname$fname']) && isset($_POST['lname$lname']) &&
    //     isset($_POST['phn$phn']) && isset($_POST['phn']) &&
    //     isset($_POST['start']) && isset($_POST['cm'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phn = $_POST['phn'];
        $start = $_POST['start'];
        $cm = $_POST['cm'];

        $res=mysqli_query($mysqli,"INSERT into reserve_a_table values('','$fname', '$lname', '$email', '$phn', '$start', '$cm')");
        if ($result) {
            echo "Sucess";
        }
        else {
            echo "failed";
        }


    }
//         $host = "localhost";
//         $dbfname$fname = "root";
//         $dblname$lname = "";
//         $dbName = "test";

//         $conn = new mysqli($host, $dbfname$fname, $dblname$lname, $dbName);

//         if ($conn->connect_error) {
//             die('Could not connect to the database.');
//         }
//         else {
//             $Select = "SELECT phn FROM register WHERE phn = ? LIMIT 1";
//             $Insert = "INSERT INTO register(fname$fname, lname$lname, phn$phn, phn, start, cm) values(?, ?, ?, ?, ?, ?)";

//             $stmt = $conn->prepare($Select);
//             $stmt->bind_param("s", $phn);
//             $stmt->execute();
//             $stmt->bind_result($resultphn);
//             $stmt->store_result();
//             $stmt->fetch();
//             $rnum = $stmt->num_rows;

//             if ($rnum == 0) {
//                 $stmt->close();

//                 $stmt = $conn->prepare($Insert);
//                 $stmt->bind_param("ssssii",$fname, $lname, $phn, $phn, $start, $cm);
//                 if ($stmt->execute()) {
//                     echo "New record inserted sucessfully.";
//                 }
//                 else {
//                     echo $stmt->error;
//                 }
//             }
//             else {
//                 echo "Someone already registers using this phn.";
//             }
//             $stmt->close();
//             $conn->close();
//         }
//     }
//     else {
//         echo "All field are required.";
//         die();
//     }
// }
// // else {
//     echo "Submit button is not set";
// }
?>