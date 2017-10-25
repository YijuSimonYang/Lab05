<?php
$username = $_POST["user_name"];
$commandline = "INSERT INTO Users(user_id) VALUES('".$username."');";
if($username === ""){
$message = "Username is empty";
echo "<body><script type='text/javascript'>alert('$message');</script></body>";
echo "<html><body><h1>Go Back and Fresh to Start it again!</h1><body></html>";
}
else{
  $mysqli = new mysqli("mysql.eecs.ku.edu", "yyang", "P@$\$word321.", "yyang");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  else{
      if($mysqli->query($commandline))
      {echo "<html><body><h1>Successfully!</h1><body></html>";}
      else{ echo "this name already exist";}
      $mysqli->close();
      }
}
 ?>
