<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['number'];
$option = $_POST['dropdown'];
$recommendation = $_POST['attribute'];
$improvements = $_POST['features'];
$comments = $_POST['comment'];

// Perform basic validation
$errors = array();

if (empty($name)) {
  $errors[] = 'Name is required.';
}

if (empty($email)) {
  $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Invalid email format.';
}

// Check for errors
if (!empty($errors)) {
  // Display errors
  foreach ($errors as $error) {
    echo $error . '<br>';
  }
} else {
  // Process the form data
  // You can perform further actions here, such as storing the data in a database
  
  // Example: Display the submitted data
  echo 'Name: ' . $name . '<br>';
  echo 'Email: ' . $email . '<br>';
  echo 'Age: ' . $age . '<br>';
  echo 'Option: ' . $option . '<br>';
  echo 'Recommendation: ' . $recommendation . '<br>';
  echo 'Improvements: ' . implode(', ', $improvements) . '<br>';
  echo 'Comments: ' . $comments . '<br>';
}
?>




<form action="survey.php" method="POST">
  <!-- Rest of the form elements -->
</form>

