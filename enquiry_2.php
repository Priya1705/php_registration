
<?php
  $name=$_POST["name"];
  $email=$_POST["email"];
  $comment=$_POST["comment"];
  $gender=$_POST["gender"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "enquiry";

  //connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO enquiry(Name,Email,Comment,Gender) VALUES('$name','$email', '$comment','$gender')";

  if(mysqli_query($conn,$sql))
  {
    echo "Your enquiry is submitted. Thank You.";
  }
  else
  {
    echo mysqli_error($conn);
  }
?>