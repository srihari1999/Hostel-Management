<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>

    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Alvas Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <div class = "logo-img"> </div>
        <h2>Sign Up Here</h2>
        <form action="includes/signup.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student Roll No</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_fname" placeholder="First Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_lname" placeholder="Last Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="department" placeholder="Department" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Year of Study</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="year_of_study" placeholder="Year of Study" required="required" />
                </div>
            </div>



            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>

            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
      <font color="white">  <b> Design by <a href="https://github.com/VishakAmin">Vishak Amin</a></b> </font>
    </footer>

</body>

</html>
