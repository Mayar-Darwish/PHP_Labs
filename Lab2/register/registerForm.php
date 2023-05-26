<?php


if(isset($_GET["errors"])){

  $errors =json_decode($_GET["errors"], true);
  var_dump($errors);
}

if(isset($_GET["old"])){
      $old_data = json_decode($_GET["old"], true);
      var_dump($old_data);
  }


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <form class="my-4" method="POST" action="writeinfile.php">
      <div class="form-group row my-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" name="firstName"
           value="<?php if(isset($old_data['firstName'])) echo $old_data['firstName'];?>">
          <span class="text-danger"> <?php if(isset($errors['firstName'])) echo $errors['firstName']; ?> </span>
        </div>
      </div>
      <div class="form-group row my-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" name="lastName" 
          value="<?php if(isset($old_data['lastName'])) echo $old_data['lastName'];?>">
          <span class="text-danger"> <?php if(isset($errors['lastName'])) echo $errors['lastName']; ?> </span>
        </div>
      </div>


      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
         
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" 
            <?php if(isset($old_data['gender'])) echo $old_data['gender']=="checked"?>>
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
            <span class="text-danger"> <?php if(isset($errors['gender'])) echo $errors['gender']; ?> </span>

          </div>
        </div>
      </div>


    

      <!-- <div class="form-group row my-4">
        <label for="inputTextarea1" class="col-sm-2 col-form-label" >Address</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
        </div>
      </div> -->

      <!-- <div class="form-group row my-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Dapartment</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Open Source" value="open source" disabled>
        </div>
      </div> -->

      <div class="form-group row my-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3"  name="email"
          value="<?php if(isset($old_data['email'])) echo $old_data['email']; ?> ">
          <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
        </div>
      </div>

      <div class="form-group row my-4">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password"
          value="<?php if(isset($old_data['password'])) echo $old_data['password']; ?>" >
          <span class="text-danger"> <?php if(isset($errors['password'])) echo $errors['password']; ?> </span>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Summit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>