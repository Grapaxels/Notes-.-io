<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $file = $_POST['file'];

  // Print the form data
  echo "Your name is: $name";
  echo "<br>";
  echo "Your email is: $email";
  echo "<br>";
  echo "Your file is: $file";
}