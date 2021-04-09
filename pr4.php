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
<h2>Palindrome Program</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Enter Any Number: <input type="text" name="number">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h4>Your Answer is:</h4>";
if($_POST)
$no=$_POST['number'];
$sum=0; 
$temp = $no;
	
			while (floor($no) > 0) 
            {
				$r = $no % 10;
				$sum = ($sum * 10) + $r;
				$no = $no / 10;
			}
			if ($temp == $sum)
            {
				echo "Palindrome";
			} 
            else
             {
				echo "Not Palindrome";
			}
      
?> 
<a href="pr5.php">Next</a> 
<a href="pr3.php">Back</a>
</body>
</html>






















































