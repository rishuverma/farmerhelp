<?php
$user=$_POST['login_user'];
$mobile=$_POST['login_mobile'];
$password=$_POST['login_password'];
$con=mysqli_connect('localhost','root');
if($user=='As Farmer')
{?>
<!DOCTYPE html>
<html>
<head>
	<title>quantity</title>
	<style type="text/css">
	h2{text-align:center; padding: 20px;}
		div{
			position:absolute;
			top:15%;
			left:40%;
			padding-top:20px;
			padding-bottom:20px;
			padding-left:30px;
			padding-right:30px;
			background-color:white;
		}
		body{
			background-color: #EE540A;
		}
		</style>
</head>
<body>
	<h2><u><strong>ENTER DETAILS</strong></u></h2>
	<div><form action="insert_into_farmer.php" method="post" accept-charset="utf-8">
	<table>
		<tr><td>Enter type of product you want to sell</td><td> <input type="text" name="product"></td></tr>
		<tr><td>Enter its type</td><td><input type="text" name="product_type"/></td></tr>
		<tr><td>enter quantity:(in kg)   </td><td> <input type="number" min="0" step="0.5" size="20px" name="qty"></td></tr>
		<tr><td>enter price:(per kg)</td><td>  <input type="number" size="20px" name="price"></td></tr>
		<tr><td>enter harvesting date: </td><td>  <input type="date" size="20px"></td></tr>
		<tr><td><input type="submit" ></td></tr>
		</table>
	</form></div>

</body>
</html>
<?php
}
else
{?>
		<html>
<head>
<title>Customer personal page</title>
</head>
<body><a href="after_new_order.html"><input type="button" value="Place New Order" /></a>
<div>
<h3>Previous Orders</h3>
<div>
	<table>
		<?php mysqli_select_db($con,'ingenius');
			$q="select * from customer_details where cust_phone_no=$mobile";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			?>
			<?php for($i=0;$i<=$num;$i++)
			{?>
		<tr><?php $row=mysqli_fetch_array($result);?><td><?php echo $row['cust_phone_no']?></td>
																<td><?php echo $row['farmer_phone_no']?></td>
														<td><?php echo $row['crop_type']?></td>
														<td><?php echo $row['crop']?></td>
														<td><?php echo $row['qty']?></td>
														<td><?php echo $row['price']?></td>
			</tr><?php }?>
													 

	</table>
</div>
</div>
</html>
<?php 
}
?>
