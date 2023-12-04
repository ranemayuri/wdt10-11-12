1(Connection.php)
<?php 
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con=mysqli_connect('localhost','root','','myprograming') or die("connection 
failed : ".mysqli_connect_error());
if ($con) {
//echo "connection sucessful";
}
else{
echo "Sorry Some Mistakes is";
}
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>

2 (Index.html)
<!DOCTYPE html>
<html>
<head>
<title>insert</title>
</head>
<body>
<div class="row text-center">
<div class="container">
<h1>Insert DATA</h1>
<form action="index.php" method="post">
<input type="text" name="firstname" placeholder="firstname"><br><br>
<input type="text" name="lastname" placeholder="lastname"><br><br>
<input type="gmail" name="gmail" placeholder="gmail"><br><br>
<input type="text" name="number" placeholder="number"><br><br>
<input type="text" name="address" placeholder="address"><br><br>
<input type="submit" name="submit" value="insert"><br><br>
</form>
<button><a href="show.php">show data</a></button>
</div>
</div>
</body>
</html>
<?php 
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gmail = $_POST['gmail'];
$number = $_POST['number'];
$address = $_POST['address'];
$sql = "INSERT INTO `reg` VALUES 
('$id','$firstname','$lastname','$gmail','$number','$address')";
Page No.
$data=mysqli_query($con,$sql);
if ($data) {
echo "insert";
}else
{
echo "sorry";
}
}
?>
3 (Create Update.php)
<!DOCTYPE html>
<html>
<head>
<title>update</title>
</head>
<body>
<form action="" method="get">
<input type="text" name="id" placeholder="id" value="<?php echo 
$_GET['id']; ?>"><br><br>
<input type="text" name="firstname" placeholder="firstname" 
value="<?php echo $_GET['firstname']; ?>"><br><br>
<input type="text" name="lastname" placeholder="lastname" value="<?php 
echo $_GET['lastname']; ?>" ><br><br>
<input type="gmail" name="gmail" placeholder="gmail" value="<?php 
echo $_GET['gmail']; ?>"><br><br>
<input type="text" name="number" placeholder="number" value="<?php 
echo $_GET['number']; ?>"><br><br>
<input type="text" name="address" placeholder="address" value="<?php 
echo $_GET['address']; ?>"><br><br>
<input type="submit" name="submit" value="update">
</form>
<?php 
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
$id = $_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$gmail = $_GET['gmail'];
$number = $_GET['number'];

$address = $_GET['address'];
$sql="UPDATE reg SET firstname='$firstname' , lastname='$lastname', 
gmail='$gmail' , number='$number', address='$address' WHERE id='$id'";
$data=mysqli_query($con, $sql);
 
if ($data) {
//echo "record update";
header('location:show.php');
}
else{
echo "not update";
}
}
else
{
echo "click on button to save the change";
}
?>
</body>
</html>
4 (Create Delete.php)
<?php 
include ('connection.php');
$id = $_GET['id'];
$sql ="DELETE FROM `reg` WHERE id='$id'";
$data = mysqli_query($con,$sql);
if ($data) {
echo "deleted";
header('location:show.php');
}else
{
echo "error";
}
?>
