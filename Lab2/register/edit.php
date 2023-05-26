<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';


echo "<div class='container fs-4'>";
echo "<h2>update user Data</h2>";

try {
    $users = file('summit.txt');

    $userId = $_GET['id'];
    // var_dump($userId);
    foreach ($users as $index => $user) {

        $data = explode(":", $user);

        if ($userId == $data[0]) {
            $row = $users[$index];
            $rowData = explode(":", $row);
            // var_dump($rowData);
            $fname = $rowData[1];
            $lname = $rowData[2];
            $email = $rowData[3];
            $password = $rowData[4];
            $gender = $rowData[5];

            break;
        }
    }
} catch (Exception $e) {
    echo  $e->getMessage();
}

?>


<div class"container">
    <form method="get" action="update.php">

        <div class="form-group row my-4">
            <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="firstName" value=<?php echo $fname; ?>>
            </div>
        </div>
        <div class="form-group row my-4">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="lastname" value=<?php echo $lname; ?>>
            </div>
        </div>

        <div class='form-group row my-4'>
            <label for='inputEmail3' class='col-sm-2 col-form-label'>Email</label>
            <div class='col-sm-10'>
                <input type='email' class='form-control' id='inputEmail3' name='email' value=<?php echo $email; ?>>
            </div>
        </div>
        <div class='form-group row my-4'>
            <label for='inputEmail3' class='col-sm-2 col-form-label'>Password</label>
            <div class='col-sm-10'>
                <input type='password' class='form-control' id='inputEmail3' name='password' value=<?php echo $password; ?>>
            </div>
            <div>
                <input type="hidden" name="id" value=<?php echo $userId; ?> />
            </div>
        </div>

       <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
         
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios2"
            <?php if(isset($old_data['gender'])&& $old_data['gender']=="female") echo "checked"?>value="male" > 
            <label class="form-check-label" for="gridRadios2">
              male
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios3" 
            <?php if(isset($old_data['gender'])&& $old_data['gender']=="female") echo "checked"?>value="female" >
            <label class="form-check-label" for="gridRadios3">
              female
            </label>
          </div>
        </div>
      </div> 


        <div>

            <button type='submit' class='btn btn-primary my-4'>save Update</button>



        </div>

    </form>