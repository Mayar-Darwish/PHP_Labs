<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo "<div class='container fs-4'>";
echo "<h2>update user Data</h2>";

try {
  $users = file('data.txt');
  // var_dump($users);
  $userId = $_GET['id'];
  // $email=$_REQUEST['email'];
  var_dump($userId);

  foreach ($users as $index => $user) {
    // echo $index, " :", $user, '<br>';
    $data = explode(":", $user);
 
    if ($userId == $data[0]) {
      $row = $users[$index];
      $rowData = explode(":", $row);
      $email = $rowData[1];
      $password = $rowData[2];
      break;
    }
  }
} catch (Exception $e) {
  echo  $e->getMessage();
}

?>


<div class"container">
  <form method="get" action="updated_data.php">
    <div class='form-group row my-4'>
      <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
      <div class='col-sm-10'>
        <input type='email' class='form-control' id='inputEmail3' name='email' value=<?php echo $email;?>>
      </div>
    </div>
    <div class='form-group row my-4'>
      <label for='inputEmail3' class='col-sm-2 col-form-label'>Password</label>
      <div class='col-sm-10'>
        <input type='password' class='form-control' id='inputEmail3' name='password' 
        value=<?php echo $password;?>>
      </div>
      <div>
         <input type="hidden" name="id" value=<?php echo $userId;?> />
      </div>
    </div>

    <div>

      <button type='submit' class='btn btn-primary my-4'>save Update</button>

      

    </div>

  </form>

