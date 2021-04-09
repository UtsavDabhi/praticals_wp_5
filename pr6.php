<!DOCTYPE html>
<html lang="en">
<head>
    
    

</head>
<body>
    <div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1>Calculate Days Program </h1>
			
            <label for="date1"><h3>Select First Date</h3></label>
            <input type="date" name="date1" id="date1" placeholder="Enter Your User Name" required>
            <br>

            <label for="date2"><h3>Select Second Date</h3></label>
            <input type="date" name="date2" id="date2" placeholder="Enter Your User Name" required>
            <br>
<br>
            <input type="submit" value="Submit" id="submit"> 

        </form>

        <div>
            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $date1 = $_POST["date1"];
                $date2 = $_POST["date2"];
                $ans = 0;
                
                $mydate1 = strtotime($date1);
                $day1 = date("d",$mydate1);
                $month1 = date("m",$mydate1);


                $mydate2 = strtotime($date2);
                $day2 = date("d",$mydate2);
                $month2 = date("m",$mydate2);

            if ($month1 <= $month2) {
                if ($month1 != $month2) {
                    if ($month1/2 != 0) {
                        $ans = (31 -$day1) + $day2;
                    }
                    else {
                        $ans = (30 - $day1) + $day2;
                    }
                }
                else {
                    $ans = $day2 - $day1 ;
                }
                echo "<p style='color:yellow;'>Number of days between your Date is : ".$ans."</p>"; 
            }
            else {
                echo "<p style='color:red;'>Error : Enter Valid Month !!!</p>";
            }
                


                if ($ans%2 == 0) {
                    echo "<body style='background-color:blue'></body>";
                }
                else {
                    echo "<body style='background-color:red'></body>";

                }


            }

            ?>
        
        </div>
    </div>



</body>
</html>