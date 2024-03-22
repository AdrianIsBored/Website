<?php
    $email = $_POST["Email"];
    $password = $_POST["Password"];
?>
<!DOCTYPE html>
<html>
<head><title>Form results</title></head>
<body><h2> This page receives and handles the data form.html</h2>
<?php
echo "Your email is $email.<br>";
echo "Your password is $password.<br>";
?>
</body>
</html>

