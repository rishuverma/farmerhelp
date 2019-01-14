<?php
		$product=$_POST['product'];
		$product_type=$_POST['product_type'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'ingenius');
		$q="insert into farmer_details(crop_type,crop,qty,price_per_kg) values($product,$product_type,$qty,$price);";
		mysqli_query($con,$q);
		mysqli_close($con);
?>