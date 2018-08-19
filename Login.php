<html>
    <head>
        <title>
            HoMe
        </title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
              <!--First half -->
                <div class="col-lg-6">
                    <h3>Login-Form</h3><br/>
                    <form autocomplete="off" class="bg-light" method="POST" action="validation.php">
                        <div class="form-group">
                        <label>UserName: </label>
                        <input type="text" name="username" class="form-control" required/>
                        </div>
                        <div class="form-group">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" required/>
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary"/>
                    </form>
                </div>
                <!--Second half -->
                <div class="col-lg-6">
                    <h3>Signup-Form</h3><br/>
                    <form autocomplete="off" class="bg-light" method="post" action="registration.php">
                        <div class="form-group">
                        <label>UserName: </label>
                        <input type="text" name="username" class="form-control" required/>
                        </div>
                        <div class="form-group">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" required/>
                        </div>
                        <div class="form-group">
                        <label>Confirm-Password: </label>
                        <input type="password" name="confirm_password" class="form-control" required/>
                        </div>
                        <div class="form-group">
                        <label>Email: </label>
                        <input type="email" name="email" class="form-control" required/>
                        </div>
                        <div class="form-group">
                        <label>Phone Number: </label>
                        <input type="number" name="phone" class="form-control" required/>
                        </div>
                        <input type="submit" value="SignIn" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<!--sessionpractical-->