<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

//echo "<div class='container fs-4'  >";
//echo "<h1> Dealing with files   </h1>";

// try {
//     // $file = fopen("file.txt", 'r');
//     // var_dump($file);

//     // $filesizs = filesize("file.txt");
//     // var_dump($filesizs);

//     // $data = fread($file, $filesizs);
//     // var_dump($data);

//     // ========================

//     // $file = fopen("file.txt", 'a');

//     // fwrite($file,"this is another addition to the file".PHP_EOL);

//     $file2 = fopen('file.txt', 'r');
//     $filesizs = filesize("file.txt");
//     //     $data = fread($file2, $filesizs);
//     //     var_dump($data);
//     //     fclose($file);


//     // while(!feof($file2))
//     // {
//     // var_dump( fgets($file2));
//     // }


//     // while(!feof($file2))
//     // {

//     // $line=fgetcsv(($file2),5,"z");
//     // var_dump($line);
//     // }

//     // fclose($file2);


//     // $lines=file('file.txt');  # put tha file in to one array only====>
//     // var_dump($lines);

//     // rewind($file2);


//     $line = fgets($file2);
//     var_dump($line);
//     // rewind($file2);
//     // $line=fgets($file2);
//     // var_dump($line);
//     // ftell($file2);
//     // $line=fgets($file2);
//     // var_dump($line);
//     fseek($file2, 3);
//     $line = fgets($file2);
//     var_dump($line);
//     var_dump(filetype("file.txt"));
//     var_dump(filetype("Lab2"));
//      var_dump(file_exists("file.txt"));
//      var_dump(is_readable("file.txt"));
//      var_dump(is_writable("file.txt"));
// } catch (Exception $e) {
//     return $e->getMessage();
// }

// -----------------------------------------------------------
try {
    //code...


    echo '<div class="container fs-4">';
    echo '<h2>save Data</h2>';
    

    $fileObj = fopen('data.txt', "a");
    
    $id=time();
   
    $data ="{$id}:{$_POST["email"]}:{$_POST["password"]}".PHP_EOL;
    var_dump($data);

     $line = fwrite($fileObj, $data);
    fclose($fileObj);
    readfile('data.txt');        #read file without array
 
//   $save=file('data.txt');     #read file in array form
//   var_dump($save);

    // var_dump($read);

    header('location:userTable.php');
} catch (\Throwable $th) {
    //throw $th;
}
