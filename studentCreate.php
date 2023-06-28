<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    do {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, md5($_POST['password']));
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        if (empty($name) or empty($email) or empty($password) or empty($contact) or empty($address)) {
            break;
        }

        $sql = "INSERT INTO student (studentName, email, password, contact_number, address) 
        VALUES ('$name', '$email', '$password', '$contact', '$address')";

        $result = mysqli_query($con, $sql);
        echo "
        <script> 
        alert('Student Successfully Created');
        window.location='http://localhost/Mentor/NiceAdmin/table.php';
        </script>
        ";
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="shortcut icon" href="./assets/img/caviteLogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #fff;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#00ff87,
                    #60efff);
            left: -80px;
            top: -39%;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                    #0061ff,
                    #60efff);
            right: -60px;
            bottom: -38%;
        }

        form {
            height: 90%;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #080710;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
            color: #3ac162;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
            color: #3ac162;

        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 10px;
            border: .5px #CED4DA solid;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            background-color: #fff;

        }

        ::placeholder {
            color: black;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #3ac162;
            color: #fff;
            border-radius: 50px;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="post" onsubmit="return validateForm()">
        <h3>Register a Student</h3>
        <label for="username">Student Name</label>
        <input type="text" id="name" name="name">

        <label for="username">Email</label>
        <input type="text" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <label for="password">Contact Number</label>
        <input type="text" id="contact" name="contact">

        <label for="password">Address</label>
        <input type="text" id="address" name="address">
        <button>Register</button>
        <a href="http://localhost/Mentor/NiceAdmin/table.php" class="btn w-100">Cancel</a>
    </form>

    <script>
        function validateForm(event) {

            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var contactNumber = document.getElementById('contact').value;

            // Initialize error messages array
            var errors = [];

            if (
                password.length < 8 ||
                !password.match(/[A-Z]/) ||
                !password.match(/[a-z]/) ||
                !password.match(/[0-9]/) ||
                !password.match(/[\W]/)
            ) {
                errors.push(
                    "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character."
                );
            }

            // Check if email is in valid format
            if (!email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,}$/)) {
                errors.push("Email address is not in valid format.");
            }

            // Check if contact number is in valid format
            if (!contactNumber.match(/^09\d{9}$/)) {
                errors.push("Contact number must start with '09' and be 11 characters long.");
            }

            // Check if there are any errors
            if (errors.length > 0) {
                // Display error messages
                var errorString = "";
                for (var i = 0; i < errors.length; i++) {
                    errorString += errors[i] + "\n";
                }
                alert(errorString);
                return false;
            }
            return true;
        }
    </script>

</body>

</html>