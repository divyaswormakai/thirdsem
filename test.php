<?php
	include 'database/connection.php';
	session_start();
	$uid = $_SESSION['user'];
    $strQuery = "SELECT transaction_date, finance_type_id, SUM(amount) FROM finances WHERE user_id = $uid GROUP BY transaction_date ORDER BY transaction_date ASC;";
    $result = mysqli_query($conn,$strQuery);

    


    while($row = mysqli_fetch_array($result)) {
    	echo $row['transaction_date']."<br>";
    }

?>