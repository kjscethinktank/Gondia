
<?php

include('config.php');

if(isset($_POST['submit'])) {

    $loginError = "";






//Create varibales to store data
//Wrap data with validating functions

    $formUser = $_POST['username'];
    $formPass = $_POST['password'];


    $query = "select * from users where name='$formUser'";
    echo $query;
    $result = mysqli_query($db, $query);



    if (mysqli_num_rows(mysqli_query($db,$query)) > 0) {

        if ($row = mysqli_fetch_assoc($result)) ;
        {


            $user = $row['user_name'];
            /* $email = $row['email'];*/
            $hashedpass = $row['user_password'];
            $type = $row['user_type'];
            //print_r($row);


        }

        if (!strcmp($formPass, $hashedpass)) {
            print_r($row);
            session_start();

            $_SESSION['loggedInUser'] = $user;
            $_SESSION['loggedInType'] = $type;


            header('Location:homepage.php');


        }





        }
        else
        {
              $loginError="<div class='alert alert-danger'>Wrong Username and Password Combo <a class='close' data-dismiss='alert'>&times;</a> </div>";
        }
    }
    else

        $loginError = "<div class='alert alert-danger'>No Such USer Found <a class='close' data-dismiss='alert'>&times;</a> </div>"
       // echo $loginError;
        //login erro
        //mysqli_close($db);







?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Gondia Care Hospital</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/apps/css/custom.css">
    <?php include("includes/header.php"); ?>
</head>

<body>
<div class="container" style="position: relative; top: 30vh;">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card login">
                <div class="card-body">
                    <h4 class="card-title text-center heading">Gondia Care Hospital</h4>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <!--<label for="email">Email</label>-->
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <!--<label for="password">Password</label>-->
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password"></div>
                               

                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember me</span>
                            </label>

                        </div>
                        <button type="submit" name="submit" class="btn btn-warning btn-lg btn-block text-white" >Login</button>
                        <br>
                        <div class="text-center">
                            <a href="Changepassword.php">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>



