<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "yyang", "P@$\$word321.","yyang");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

$signup=$_POST["user_id"];

  $query="SELECT content FROM Posts WHERE author_id='$signup' ORDER BY post_id";
  echo "<table>";
  if($result=$mysqli->query($query))
  {
          while($row=$result->fetch_assoc()){
          echo "<tr><td>".$row["content"]."</td></tr>";
    }
  }else{
    echo "<tr><td>Empty</td></tr>";
  }
  echo"</table>";
    $mysqli->close();



?>
