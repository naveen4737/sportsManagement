<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/ResStyle.css">

    <title>Sports Section</title>

</head>

<body>
    <div>

    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_header.php"; ?>
    <div class="registerheading m-4 row align-items-center">
        <h1 class="text-center">SPORTS APPLICATION FORM</h1>
    </div>
    
    <section class="container" id="home-register">
        <h2 class="py-3">Enter your Details: </h2>
        <form action="partials/_handleRegister.php" method="post">
            <div class="form-group">
                <label for="studentName">Enter Your Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="studentId">Enter Your Id</label>
                <input  type="text" class="form-control" id="studentId" name="studentId" aria-describedby="studentStreamHelp"
                    required>
            </div>
            <div class="form-group">
                <label for="studentEmail">Enter Your Email Id</label>
                <input  type="email" class="form-control" id="studentEmail" name="studentEmail" aria-describedby="studentEmailHelp"
                    required>
            </div>
            <div class="form-group">
                <label for="studentPhoneNumber">Enter Your Phone Number</label>
                <input  type="tel" class="form-control" id="studentPhoneNumber" name="studentPhoneNumber" aria-describedby="studentPhoneNumberHelp"
                    required>
            </div>
            <div class="form-group">
                <label for="studentStream">Enter Your Stream</label>
                <select class="form-control" id="studentStream" name="studentStream" required>
                <option value="" selected disabled hidden >Select</option>
                    <option>B.Sc Computer Science</option>
                    <option>B.Sc biology</option>
                    <option>B.Sc mathematics</option>
                    <option>B.Sc physics</option>
                    <option>M.Sc Computer Science</option>
                    <option>M.Sc biology</option>
                    <option>M.Sc mathematics</option>
                    <option>M.Sc physics</option>
                    <option>BCA</option>
                    <option>BA</option>
                    <option>BBA</option>
                    <option>B.ED</option>
                    <option>B.com applied eco</option>
                    <option>B.com CA</option>
                    <option>B.com Tax</option>
                    <option>B.com Hons</option>
                </select>
            </div>
            <div class="form-group">
                <label for="studentYear">Select Your Year of study</label>
                <select class="form-control" id="studentYear" name="studentYear" required>
                    <option value="" selected disabled hidden >Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="studentSports1">Choose Sports in which you want to take part:</label>
                <div class="p-4 row border m-1">
                    <div class="col-md-4">
                        <input type="checkbox" id="footballsports1" name="footballsports1" value="yes">
                        <label for="footballsports1">Football</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="cricketsports2" name="cricketsports2" value="yes">
                        <label for="cricketsports2">Cricket</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="volleyballsports3" name="volleyballsports3" value="yes">
                        <label for="volleyballsports3">Volleyball</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="runnningsports4" name="runnningsports4" value="yes">
                        <label for="runnningsports4">Runnning</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="badmintonsports5" name="badmintonsports5" value="yes">
                        <label for="badmintonsports5">Badminton</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="javelin_throwsports6" name="javelin_throwsports6" value="yes">
                        <label for="javelin_throwsports6">Javelin Throw</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="kabaddisports7" name="kabaddisports7" value="yes">
                        <label for="kabaddisports7">Kabaddi</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="dodge_ballsports8" name="dodge_ballsports8" value="yes">
                        <label for="dodge_ballsports8">Dodge Ball</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="basketballsports9" name="basketballsports9" value="yes">
                        <label for="basketballsports9">Basketball</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <?php include "partials/_footer.php"; ?>

    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>

    <script src="vendor/bootstrap/bootstrap.min.js"></script>

    <script src="js/script.js"></script>

    </div>
</body>

</html>