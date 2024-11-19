<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$Uscrname= $password = $Gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Uscrname = test_input($_POST["Uscrname"]);
  $password = test_input($_POST["password"]);
  $DisplayName = test_input($_POST["DisplayName"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>registration from</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Uscrname<input type="text"  Uscrname=" Uscrname">
  <br><br>
  password <input type="text" password="password">
  <br><br>
  Uscr Type <input type="select" Uscr Type="Uscr Type">
  <br><br>
  Display Name<input type="text" Display Name="Display Name">
  <br><br>
  address <textarea name=" address" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>