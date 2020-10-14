<?php
$mysqli = new mysqli("localhost:3306", "root", "", "skillup");

for($i=0;$i<8736;$i++){

    $data[] = date("("."'Y-m-d','H:i:s'", time()-rand(1,31499600)) ."," .rand(-20, 50) .")";

}

$fin_data=implode(",",$data);

$mysqli->query("INSERT INTO `weather` (`date`,`time`,`temp`)VALUES $fin_data;");
$avarage_temp = $mysqli->query("SELECT AVG(temp)
FROM weather
WHERE time between '12:00:00' and '13:00:00'
group by month(date)
;")->fetch_all(MYSQLI_ASSOC);

print_r($avarage_temp);



?>

