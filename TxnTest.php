<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MANOJ</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
table {
    border-collapse: collapse;
    width: 60%;
}

th, td {
    padding: 2px;
    text-align: left;
    border-bottom: 0px solid #ddd;
}

tr:hover{background-color:#fff}
</style>


<style>
.button {
    background-color: #00D7FF;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>


<style> 
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 0px solid gray;
}
</style>




</head>
<body>
        <h1 style="color:blue;">Pay your Amount with PAYTM</h1>
        <p>Your order details are below:</p>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="0">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::</label></td>
					<td><input id="ORDER_ID" type="text" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::</label></td>
					<td><input id="CUST_ID" tabindex="2" type="text" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_IDN ::</label></td>
					<td><input id="INDUSTRY_TYPE_ID" type="text" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::</label></td>
					<td><input id="CHANNEL_ID" type="text" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Total Amount in Rupees::</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="100">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="Pay now" class="button" type="submit"onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html>
