(index.html)

<html> 
<head> 
 <title>PHP login system</title> 
 <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head> 
<body> 
 <div id = "frm"> 
 <h1>Login</h1> 
 <form name="f1" action = "authentication.php" onsubmit = "return 
validation()" method = "POST"> 
 <p> 

 <label> UserName: </label> 
 <input type = "text" id ="user" name = "user" /> 
 </p> 
 <p> 
 <label> Password: </label> 
 <input type = "password" id ="pass" name = "pass" /> 
 </p> 
 <p> 
 <input type = "submit" id = "btn" value = "Login" /> 
 </p> 
 </form> 
 </div> 
 <script> 
 function validation() 
 { 
 var id=document.f1.user.value; 
 var ps=document.f1.pass.value; 
 if(id.length=="" && ps.length=="") { 
 alert("User Name and Password fields are empty"); 
 return false; 
 } 
 else 
 { 
 if(id.length=="") { 
 alert("User Name is empty"); 
 return false; 
 } 
 if (ps.length=="") { 
 alert("Password field is empty"); 
 return false; 
 } 
 } 
 } 
 </script> 
</body> 
</html>

2) (Style.css)
body{ 
 background: #eee; 
} 
#frm{ 
 border: solid gray 1px; 
 width:25%; 
 border-radius: 2px; 
 margin: 120px auto; 
 background: white; 
 padding: 50px; 
} 
#btn{ 
 color: #fff; 
 background: #337ab7; 
 padding: 7px; 
 margin-left: 70%; 
} 

3) (Connection.php)
<?php 
 $host = "localhost"; 
 $user = "root"; 
 $password = ''; 
 $db_name = "javatpoint"; 
 
 $con = mysqli_connect($host, $user, $password, $db_name); 
 if(mysqli_connect_errno()) { 
 die("Failed to connect with MySQL: ". mysqli_connect_error()); 
 } 
?>

4) (Authentication.php)
<?php 
 include('connection.php'); 
 $username = $_POST['user']; 
 $password = $_POST['pass']; 
  
 $username = stripcslashes($username); 
 $password = stripcslashes($password); 
 $username = mysqli_real_escape_string($con, $username); 
 $password = mysqli_real_escape_string($con, $password); 
 
 $sql = "select *from login where username = '$username' and 
password = '$password'"; 
 $result = mysqli_query($con, $sql); 
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
 $count = mysqli_num_rows($result); 
 
 if($count == 1){ 
 echo "<h1><center> Login successful </center></h1>"; 
 } 
 else{ 
 echo "<h1> Login failed. Invalid username or password.</h1>"; 
 } 
?> 

