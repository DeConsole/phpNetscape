<!doctype html>
<html lang="en">
<head>
    <style>
        .error{
            color: red;
        }

        form{
            text-align: center;
        }

        h2{
            text-align: center;
        }
    </style>
    <!-- Main CSS-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Mobilis Students Registration</title>
</head>
<body>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// define variables and set to empty values
$firstnameErr = $surnameErr = $emailErr = $genderErr = $classnameErr = "";
$firstname = $surname = $email = $gender = $classname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $firstnameErr = "First Name is required";
    }else {
        $firstname = test_input($_POST["fname"]);
    }

    if (empty($_POST["sname"])) {
        $surnameErr = "Surname Name is required";
    }else {
        $surname = test_input($_POST["sname"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    }else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["classname"])) {
        $classname = "Class name is required";
    }else {
        $classname = test_input($_POST["classname"]);
    }
}
?>
<div class="container">
    <div class="row text-center">

<h2>e-Mobilis Students Class Registration</h2>
<p><span class = "error">* required</span></p>
        <form class="row g-4 text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post" action = "<?php
        echo
        htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name = "fname">
                    <span class = "error">* <?php echo $firstnameErr;?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Surname</label>
                    <input type="text" class="form-control" name = "sname">
                    <span class = "error">* <?php echo $surnameErr;?></span>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" name = "email">
                    <span class = "error">* <?php echo $emailErr;?></span>
                </div>

            <div class="col-md-12">
                <label class="form-label">Class</label>
                <select id="inputState" class="form-select" name ="classname">
                    <option selected>...</option>
                    <option>Netscape</option>
                    <option>Chromium</option>
                    <option>Firefox</option>
                </select>
                <span class = "error">* <?php echo $classnameErr;?></span>
            </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-check-label"><strong>Gender</strong></label>
                    <input class="form-check-input" type = "radio" name = "gender" value = "female">Female
                    <input class="form-check-input" type = "radio" name = "gender" value = "male">Male
                    <span class = "error">* <?php echo $genderErr;?></span>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

            <div class="col-md-12 text-center"">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h5>Your student registration details are:</h5><br>";
                echo "<strong>Your name: </strong>$firstname $surname <br>";
                echo "<strong>Your email: </strong>$email<br>";
                echo "<strong>Your are: </strong>$gender<br>";
                echo "<strong>Your class is: </strong>$classname<br>";
            }
            ?>

    </div>
            </form>


    </div>
</div>

</body>

</html>
