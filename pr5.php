<!DOCTYPE html>
<html lang="en">
<body>
<?php
$email = "";
$password= "";
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <h3> Login Authentication Program</h3>
        <label for="num">Name</label>
        <input type="text" name="name" required>

        <label for="num">Email</label>
        <input type="email" name="email" required placeholder="abc@gmail.com">
        
        <label for="num">Password</label>
        <input type="password" name="password" required  placeholder="123">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit"> 
    </form>
    <?php
    if($_POST)
    {
    $email=$_POST['email'];
    $password= $_POST['password'];
    
    if(($email==="utsav@gmail.com") && ($password==="123"))
    {
    echo "You Login SuccessFully";
    }
    else
    {
        echo "Please Fill the Correct Details!!!";  
    }
    }
    ?>
    <a href="pr6.php">Next</a> 
    <a href="pr4.php">Back</a>
</body>
</html>