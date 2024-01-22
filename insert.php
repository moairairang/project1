<?php
include "connect.php";

$sql = "INSERT INTO smartfarm (zone, board, temp, Himu, Dmy) 
VALUES ('$_POST[zone]', '$_POST[board]', '$_POST[temp]', '$_POST[Himu]',now())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>