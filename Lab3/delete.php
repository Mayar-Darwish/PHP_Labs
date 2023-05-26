<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo "<div class='container fs-4'>";
echo "<h2>delete user Data</h2>";


$data=file('data.txt');

$userId=$_GET['id'];
var_dump($userId);


foreach($data as $index=>$line)
{
    // echo $index,"- ", $line, "<br>";

    $userData=explode(":",$line);

    if($userData[0]==$userId)
    {
        // echo"bone";
       unset($data[$index]);

       break;     
    }
}
$file= fopen('data.txt','w');  #  عشان مش عايزة تكمل على الملف wكتبته 
foreach($data as $newData){
 
    fwrite($file,$newData);
}
fclose($file);
header('Location:usertable.php');
var_dump($data);

