<?php

$conn=mysqli_connect("localhost","root","","user");
if ($conn)
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $confirm_pass=$_POST["confirm_pass"];
    if ($username=="" || $password == "" || $confirm_pass=="")
    {
      echo  "please fill-up your form";
      exit;
    }
    else
    {
      if($password==$confirm_pass)
      {
$query="INSERT INTO sign_up VALUES('NULL','$username','$password')";
$exec_query=mysqli_query($conn,$query);
if($exec_query)
{
    echo "User Created";
}
else
{
    echo "Error occurred";
}

      }
      else
      {
        echo "Please Confirm Password";
      }
    }
}


?>