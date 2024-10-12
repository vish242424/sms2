   <?php
    session_start();
// server  username  password  database_name
 $conn=mysqli_connect("localhost","root","","sms");

// recieve user data
 $e=$_POST['email'];
 $p=$_POST['password'];
// prepare SQL query
 $query="SELECT * FROM admin WHERE email='$e' AND password='$p'";
 // execute SQL query
  $result=mysqli_query($conn,$query);
 // get number of rows return by select query
  $row_count=mysqli_num_rows($result);

// echo $row_count;

 //   echo $query;
  // to check user exists or not 
  if ($row_count>0)
  //if($row_count=== 1)
 {

   header("location:dashboard.php");
 }
 else
 {
   $_SESSION["message"] = "Wrong email or password";
   //echo $_SESSION['message'];
 	 header("location:login.php");
 }


?>