<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$no = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
}
?>
<h2>Armstrong Program</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Enter Any Number: <input type="text" name="number">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h4>Your Answer is:</h4>";
if($_POST)
$no=$_POST['number'];
    $c=0; 
    $temp=$no;  
    while($no>0)  
    {  
    $a=$no%10;  
    $no=$no/10;  
    $c=$c+($a*$a*$a);  
    }  
    if($temp==$c)  {
      echo "Armstrong number";   
    }
    else {
      echo "Not Armstrong number";  
    } 
      
?> 
<a href="pr4.php">Next</a> 
<a href="pr2.php">Back</a>
</body>
</html>
















