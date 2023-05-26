<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo "<h1>welcome</h1>";



$gender = $_POST["Gender"];
$fname = $_POST["firstName"];
$lname = $_POST["lastname"];
$fullName = $fname . " " . $lname;
$address = $_POST['address'];
$skills = $_POST['Skills'];
echo "fvsf";

if ($gender == "female") {

    echo "thank MISS $fullName";
} else {
    echo "thank MR $fullName";
}


echo '<div class="container fs-3"> ';

echo 'please review your information';
echo "<br>";
echo "Name: $fullName";
echo "<br>";
echo "Address: $address";
echo "<br>";
echo "Skills :";
foreach ($skills as $val) {

    echo "$val";
}

// echo"skills: $skills";

// foreach($skills as $results[]) {
//     echo $results[], '<br>';
// }


// var_dump($_POST);