<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pure PHP Project</title>
</head>
<body>
    <div class="text-center" style="margin-top: 7%;">
       <u> <h2>REGISTRATION FORM</h2></u>
    </div>
    <div class="container">
        <div class="jumbotron" style="margin-top: 10%;">
            <form action="/controller/controller.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-1">
                            <div class="col-md-2">
                                <label> Name </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">
                                <label> Address </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-2">
                                <label> Note </label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="note"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-1">
                            <div class="col-md-5">
                                <label> Age </label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="age" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-5">
                                <label> Phone Number </label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-5">
                                <label> Email </label>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>