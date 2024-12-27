<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysql_connect_error());
}

  echo "record created successfully";
?>



<?php
    if(isset($_POST['submit'])){
        echo "submitted";


        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $mail=$_POST["mail"];

        $sql = "INSERT INTO phone_book (fname, lname, email) values($fname,$lname,$mail)";

        if ($conn->query($sql) === TRUE) {
           echo "created successfully";
        } 
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }

?>