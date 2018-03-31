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
                    <h4 class="card-title text-center heading"><span class=" font-yellow-lemon sbold">
                <div style="color:#81ecec">&nbsp;Gondia Care Hospital</div></span></h4>
                    <form>
                        <div class="form-group">
                            <!--<label for="email">Email</label>-->
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <!--<label for="password">Password</label>-->
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                                <input type="password" class="form-control" id="password" placeholder="Password"></div>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember me</span>
                            </label>

                        </div>
                        <button type="button" class="btn btn-warning btn-lg btn-block text-white" onclick="window.location.href='/Addpatient.php">Login</button>
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
