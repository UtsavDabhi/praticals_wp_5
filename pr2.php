<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$number = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
}
?>
<h2>Factorial Program</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Enter Any Number: <input type="text" name="number">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h4>Your Answer is:</h4>";
    if($_POST){  
        $fact = 1;   
        $number = $_POST['number']; 
     
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
<a href="pr3.php">Next</a>
<a href="index.php">Back</a>
</body>
</html>