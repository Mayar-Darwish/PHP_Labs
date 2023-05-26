<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';



echo '<div class="container fs-4">';
echo '<h2>user Data</h2>';


$id = time();
$gender = $_POST["gender"];
$fname = $_POST["firstName"];
echo "22";
var_dump($fname);
$lname = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
// var_dump($_POST)["gender"];
$errors = [];
$formdata = [];

if (empty($fname) and isset($fname)) {

    $errors['firstName'] = 'firstName required';
} else {
    $formdata['firstName'] = $fname;
}

if (empty($lname) and isset($lname)) {
    $errors['lastName'] = 'lastName required';
} else {
    $formdata["lastName"] = $lname;
}
if (empty($email) and isset($email)) {
    $errors['email'] = 'Email required';
} else {
    $formdata["email"] = $email;
}

if (empty($password) and isset($password)) {
    $errors['password'] = 'password required';
} else {
    $formdata["password"] = $password;
}

if(empty($gender) and isset($gender)){
    $errors['gender']='gender required';
}else{
    $formdata["gender"]=$gender;
    var_dump($formdata["gender"]);
}

var_dump($formdata);
var_dump($errors);



if ($errors) {
    echo"bbbbb";
    $errors_str = json_encode($errors);
    var_dump($errors_str);
    $url = "Location:registerForm.php?errors={$errors_str}";
    // var_dump($url);
    if ($formdata) {
        $old_data = json_encode($formdata);
        $url .= "&old={$old_data}";
    }
    header($url);
} else {

    try {

        $data = "{$id}:{$fname}:{$lname}:{$email}:{$password}:{$gender}" . PHP_EOL;
        // var_dump($data);
        $fileObj = fopen('summit.txt', "a");
        $line = fwrite($fileObj, $data);
        fclose($fileObj);

        header('location:register.php');


    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
