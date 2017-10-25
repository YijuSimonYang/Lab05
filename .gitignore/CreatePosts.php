<?php
$username = $_POST["user_name"];
$postsart = $_POST["posts"];
$commandline = "SELECT user_id FROM Users WHERE user_id = '".$username."';";
if($username === "" || $postsart === ""){
$message = "Username or Post is empty";
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
      if(mysqli_num_rows($mysqli->query($commandline))>O)
      {
          if($mysqli->query("INSERT INTO Posts(content,author_id) VALUES('".$postsart."','".$username."');")){
            echo "<html><body><h1>Your Post Has been Saved!</h1><body></html>";
          }
      }
      else{ echo "This UserName dose not exist Please Create it in Exercise 02 thx";}
      $mysqli->close();
      }
}
 ?>
