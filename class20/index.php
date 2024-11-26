<!DOCTYPE html>
<?php
$color = "red";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        
    </Style>
</head>
<body>
    <h1 style="text-align:center;">This is the first class of PHP</h1>
    <p><mark><strong>Variable</strong></mark> of PHP</p>
    <?php
    $x = "My Name is ";
    $y = "Kalam";
    echo $x; 
    echo $y;
    echo "<br>";
    $txt = "kalam";
    echo "My name is $txt ";
    echo "<br>";

    $x = $y = $z = "Kalam ";
    echo $x;
    echo $y;
    echo $z;

    ?>
    <hr>
    <p>The type of<mark><strong> Variable</strong></mark> of PHP</p>
    <ol>
        <li>String</li><li>Integer</li><li>Floating</li><li>Boolean</li><li>Array</li><li>Object</li><li>Null</li>
    </ol>
    <?php
    var_dump("Ozil"); echo "<br>";
    var_dump(2);echo "<br>";
    var_dump(1.2);echo "<br>";
    var_dump(true);echo "<br>";
    var_dump([1,2,3]);echo "<br>";
    var_dump(null);echo "<br>";
     ?>
     <hr>
     <p>Three types of <mark><strong>Variable scope</strong></mark></p>
     <ol><li>Local(Var. inside)</li><li>Global(Var. outside)</li><li>Static(var. unchange)</li></ol>
     <h2>Local Scope</h2>
     <?php
     function myTxt(){
        $x = "Tokyo"; //variable inside the function
        echo "The Capital of Japan is $x";
     }
     myTxt();

     ?>
     

    
</body>
</html>
