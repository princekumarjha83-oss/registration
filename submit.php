<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);

    echo "
    <h3>Registration Successful!</h3>
    <p><strong>Full Name:</strong> $fullname</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Course:</strong> $course</p>
    <hr>
    <p style='color:green;'>Thank you for registering!</p>
    ";
} else {
    echo "<p style='color:red;'>Invalid Request.</p>";
}
?>
