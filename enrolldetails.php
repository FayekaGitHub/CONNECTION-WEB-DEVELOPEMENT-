<?php
session_start();
  if (isset($_POST['submit'])){
    $_SESSION['login']=0;
    include('db.php');
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $year= $con->real_escape_string($_POST['year']);
    $password= $con->real_escape_string($_POST['password']);
    $department = $con->real_escape_string($_POST['department']);
    $_SESSION['name'] = $name;
    $sql = "INSERT INTO enrolldetails (name,email,year,password,department) VALUES ('$name', '$email', '$year', '$password', '$department')";
  if($con->query($sql))
  {
    echo "<script>";
	echo "alert('Enrolled Successfully');";
	echo "window.location.href = 'enroll.php';";
	echo "</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>
