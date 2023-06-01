==> register.php <==
<?php
include 'connect.php';
// Validate and sanitize the form data
$fullname = $_POST['fullname'];
$fullame = mysqli_real_escape_string($conn, $fullname);
$email = $_POST['email'];
$email = mysqli_real_escape_string($conn, $email);
$gender = $_POST['gender'];
$gender = mysqli_real_escape_string($conn, $gender);

$sql = "INSERT INTO students (fullname, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>