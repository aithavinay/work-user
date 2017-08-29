<?
include_once 'connectdb.php';
session_start();
$file = $_FILES['file']['name'];

    $file_size = $_FILES['file']['size'];
    // new file size in KB
    $new_size = $file_size/1024;  
	$size=$new_size+100;

	$price_sql="select amount_Rs from Price where file_size_Kbs between '$new_size' and '$size'";
	$result1 =$conn->query($price_sql);
	$row1 = $result1->fetch_array();
	
	$amount=$row1['amount_Rs'];
	$value=intval($new_size);
    
	echo "Your file size is $value KB , You will cost Rs $amount";
	$_SESSION['amount'] = $amount;


  ?>

