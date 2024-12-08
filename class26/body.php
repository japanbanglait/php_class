<?php
  
  $name = $email = $number = " ";
  $nameErr = $emailErr = $numberErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $name = $_POST["name"];
 $email = $_POST["email"];
 $number = $_POST["number"];
 
 if (strtoupper($name)!==$name){
     $nameErr= "Write The block letter";
 }
 if (str_contains($email, "@")){
     $emailErr= "Write the Valid Email";
 }
} 
?>
   <form method= "post"; action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span><?php echo $nameErr;?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span></span>
    <br><br>
    Mobile No: <input type="number" name="number">
    <?php echo $numberErr;?>
    <br><br>
    <input type="submit" name="submit" value="Submit"><br><br>
   </form>
  
<?php
   echo "<h3>Input Your Information: </h3>";
   echo $name;
   echo "<br><br>";
   echo $email;
   echo "<br><br>";
   echo $number;
?>
