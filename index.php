<!DOCTYPE html>
<html>
 <head>
  <style>
   div{
    display: inline-block;
    width: 13px;
   }
  </style>
 </head>
<body>
<form>
   
    <h2> <label for="name">Name:Utsav Dabhi</label></h2>
    <h2> <label for="er">Er:180020107008</label></h2>
    <h3> PHP program to print alphabet triangles.</h3>

</form>

<?php
$a = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=$i; $j--)
  echo "<div>&nbsp;</div>";
 for($k=0; $k<=$i; $k++)
  echo "<div>" . $a[$k] . "</div>";
 $n = $k - 1;
  for($m = 0; $m < $i; $m++)
 echo "<div>" . $a[--$n] . "</div>";
 echo "<br>";
}
?>
<br>
<a href="pr2.php">Next</a>
</body>
</html>
