<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo '<div class="container fs-4">';
echo '<h2>Updated Data</h2>';

$users=file('data.txt');
$updatename=$_GET['name'];
$updateEmail=$_GET['email'];
$updatePassword=$_GET['password'];
$updateId=$_GET['id'];
$updateimage=$_GET['image'];

$data ="{$updateId}:{$updatename}:{$updateEmail}:{$updatePassword}:{$updategender}:{$updateimage}".PHP_EOL;
var_dump($data);
foreach($users as $index=> $user){
        // echo $index,"- ", $user, "<br>";
// var_dump($user);
        $line=explode(":",$user);
        // var_dump($line);

        if($line[0]==$updateId){
            $users[$index]=$data;
            break;
        }
}
$file= fopen('summit.txt','w'); 
foreach($users as $newUsers){
    fwrite($file,$newUsers);
}
fclose($file);
// var_dump($users);

header('location:usertable.php');





