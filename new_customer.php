<? session_start();

$con=mysqli_connect('localhost','root');
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$user=$_POST['user'];
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$pincode=$_POST['pincode'];
mysqli_select_db($con,'ingenius');
		if($user=='Asfarmer')
		{
			$q="insert into farmer(phone_no,password,fname,lname,pincode) values($mobile,$password,$fname,$lname,$pincode);";
			mysqli_query($con,$q);
		}
		else
		{
			$q="insert into customer(phone_no,password,fname,lname,pincode) values($mobile,$password,$fname,$lname,$pincode);";
			mysqli_query($con,$q);
		}
		
mysqli_close($con);
echo "thanks for signing up";
?>
