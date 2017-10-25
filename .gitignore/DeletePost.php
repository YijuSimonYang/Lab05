<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "yyang", "P@$\$word321.","yyang");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $post2delete = $_POST["post_id"];
  $changetoint = (int)$post2delete;
  $username = $_POST["author_id"];
  $query="DELETE FROM Posts WHERE post_id = $post2delete AND author_id = '$username'";
  if($mysqli->query($query))
  {
      echo"Delete Successful";
  }
  else
  {
    echo "Incorrect Post_ID or Author_ID";
  }
    $mysqli->close();
?>
