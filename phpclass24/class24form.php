<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
  


    $name = $email = $gender =$comment = $website = "";

    $nameerr = $emailerr = $gendererr =$commenterr = $websiteerr = "";

    if($_SERVER["REQUEST_METHOD"]== "POST") {
    
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        $website =($_POST["website"]);
        $comment = ($_POST["comment"]);
        $gender = ($_POST["gender"]);


        if(strlen($name)>6){
          $nameerr= "Please write the name in 5 digit";
        }

        if(!str_contains($email,'@')){
          $emailerr= "Please write Valid Email";
        }
    }


   $actionti = htmlspecialchars($_SERVER["PHP_SELF"]);
   $methode = "POST";

?>



<h2>PHP Form Validation Example</h2>
<form method="<?php echo $methode ?>" action="<?php echo $actionti;?>">  
  Name: <input type="text" name="name" value="<?php echo $name?>";>
  <span><?php echo $nameerr?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span><?php echo $emailerr?></span>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
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