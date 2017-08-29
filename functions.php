<?php
function isLoginSessionExpired() {
	$idletime = 1000;  
	if(isset($_SESSION['timestamp']) and isset($_SESSION["login_user"])){  
		if (time()-	$_SESSION['timestamp']>$idletime){
             return true;
}
	else{
	return false;
}
	}
}
		
?>