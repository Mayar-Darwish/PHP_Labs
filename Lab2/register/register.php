<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo '<div class="container fs-4">';
echo '<h2>user Data</h2>';

try {

    $users = file('summit.txt');

    echo '<table class="table fs-5">
    <tr>
     <td>Id</td>  
     <td>First Name</td>
     <td>Last Name</td>
     <td>Email</td>
     <td>Password</td>
     <td>gender</td>
    </tr>';

    foreach ($users as $user) {
        echo '<tr>';
         $users_data = explode(":", $user);
        foreach ($users_data as $info) {
           echo "<td>{$info}</td>";
          
     
          }

          echo"
          <td> 
             <a class='btn btn-warning' href='edit.php?id={$users_data[0]}'>Edit</a> 
          </td>
          <td> 
             <a class='btn btn-danger' href=delete.php?id={$users_data[0]}>Delete</a> 
                                    
          </td>";
         echo "</tr>"; 
   
   

    }  
    echo "</table";
  

} catch (Exception $e) {
    echo $e->getMessage();
}

echo"
<div>
<a class='btn btn-primary' href='registerForm.php'>Add new user</a>
</div>"; 
?>

