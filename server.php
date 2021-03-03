<?php
$conc = new mysqli("localhost", "root", "", "form1");
    error_reporting(0);
    $id = $_GET['id'];
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $mobile = $_GET['mobile'];
    $gender = $_GET['address'];
    ?>
    
<?php
$name="";
$address="";
$email="";
$mobile="";
$id=0;
$edit_state=false;
$db = mysqli_connect('localhost','root','','crudd');
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$sql='INSERT INTO infoo (name,address,email,mobile)VALUES("'.$name.'","'.$address.'","'.$email.'","'.$mobile.'")';
	mysqli_query($db,$sql);
	
	header('location:index.php');
}
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$id=$_POST['id'];
	mysqli_query($db,"UPDATE infoo set name='$name',address='$address',email='$email',mobile='$mobile' WHERE id='$id'");
	header('location:index.php');
}
if(isset($_GET['del']))
{
	$id=$_GET['del'];
	mysqli_query($db,"DELETE FROM infoo where id='$id'");
	header('location:index.php');
}
$results=mysqli_query($db,"SELECT * FROM  infoo");
?>