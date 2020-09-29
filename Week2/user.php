<?php
  echo "First name: ";
  print $_POST["fname"];
  echo "<br>";
  echo "Last name: ";
  print $_POST["lname"];
  echo "<br>";
  echo "Email: ";
  print $_POST["email"];
  echo "<br>";
  echo "Gender: ";
  print $_POST["gender"];
  echo "<br>";
  echo "Hobbies: ";
  print_r($_POST["hobbies"]);
?>