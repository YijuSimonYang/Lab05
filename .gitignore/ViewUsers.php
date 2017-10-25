<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "yyang", "P@$\$word321.","yyang");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query="SELECT * FROM Users ORDER BY user_id";
echo "<table>";
if($result=$mysqli->query($query))
{ while($row=$result->fetch_assoc()){
    echo"<tr><td>".$row["user_id"]."</td></tr>";
  }
}
echo"</table>";


  /* close connection */
  $mysqli->close();
?>
