<?php
if(isset($_POST['submit'])){


$name = $_POST['name'];
$email = $_POST['email'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DATE OF BIRTH: " . $dateofbirth . "<br>";
echo "
GENDER: " . $gender . "<br>";
echo "COUNTRY: " . $country . "<br>";
}
print_r($_POST)
?>