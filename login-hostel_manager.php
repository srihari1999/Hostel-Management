<!DOCTYPE html>
<html lang="en">

<head>
    <title>AHMS</title>

    <link href="web/css/style.css" rel="stylesheet" type="text/css" />

    <link href="web/css/fontawesome-all.css" rel="stylesheet" />

    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Alvas Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <div class = "logo-img"> </div>
        <h2>Hostel-Manager/Admin Login</h2>
        <form action="includes/login-hm.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <button type="submit" name="login-submit">Login</button>
        </form>
          <p class=" w3l-register-p">Login as<a href="index.php" class="register"> Student</a></p>
      <!--  <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>-->
    </div>
    <footer>
          <font color="white">  <b> Design by <a href="https://github.com/VishakAmin">Vishak Amin</a></b> </font>
    </footer>

</body>

</html>
