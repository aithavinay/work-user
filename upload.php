
<?php

include_once 'connectdb.php';
session_start();
$file = $_FILES['file']['name'];
$file_type = array('pdf', 'jpg','jpeg','docx');
$ext=pathinfo( $file ,PATHINFO_EXTENSION);

	if (!(in_array($ext, $file_type))) {

	    echo "You can upload only jpg,pdf,jpeg,docx";

	    return;
}
else
{
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql="select Id from userdata where username='$user_check'";
	$result =$conn->query($ses_sql);
	$row = $result->fetch_array();
	
	
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";
    $date=date("Y-m-d H:i:s");


    // new file size in KB
    $new_size = $file_size/1024;  
    // new file size in KB

    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file=str_replace(' ','-',$new_file_name);	
	$login_session =$row['Id'];
	$exists_sql="SELECT * FROM `UPLOADS` WHERE Id='$login_session' AND file='$final_file' ";
	$result_set =$conn->query($exists_sql);
	$row1 = $result_set->fetch_array();
	
	
	
	if(empty($row1))
	
    	
{
	
	
	/*$size=$new_size+100;

	$price_sql="select amount_Rs from Price where file_size_Kbs between '$new_size' and '$size'";
	$result1 =$conn->query($price_sql);
	$row1 = $result1->fetch_array();
	
	$amount=$row1['amount_Rs'];
    
	echo "Your file size is $new_size, You will cost Rs $amount";*/
	
    if(isset($file) && !empty($file))
    {

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
	
        $sql="INSERT INTO UPLOADS(Id,file,type,size,path,date) VALUES('$login_session','$final_file','$file_type','$new_size', '$file_loc','$date')";
        if($conn->query($sql)){
	
        echo "http://localhost/NotaryHub3/payment.php";
	
       
    }
    else
    {
	 
       echo "failed to upload";
	

	
       } 
    }

}

}else{ echo "SUCCESS";} }


?>
