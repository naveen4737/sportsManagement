<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Sports</title>

</head>

<body>
    <div>

    <?php include "partials/_dbconnect.php"; ?>
    
    <div class="modal fade" id="loginAsTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Your Login Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="partials/_handleLogin.php" method="post">
                        <div class="form-group">
                            <label for="teacherId">Enter Teacher Id</label>
                            <input autocomplete="off" type="text" class="form-control" id="teacherId" aria-describedby="emailHelp" name="teacherId" required>
                        </div>
                        <div class="form-group">
                            <label for="teacherPassword">Enter Your Password</label>
                            <input type="password" class="form-control" id="teacherPassword" name="teacherPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php include "partials/_header.php"; ?>
    
    <section id="home">
        <div class="jumbo">
            <h2>Welcome to the Sports Management System</h2>
            <a href="register.php"><button>Register as Student</button></a>
            <button data-toggle="modal" data-target="#loginAsTeacherModal">Login as Teacher</button>
        </div>
    </section>

    <?php include "partials/_footer.php"; ?>

    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    </div>
</body>

</html>