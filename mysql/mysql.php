<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mysql.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/360ef7b739.js" crossorigin="anonymous"></script>
    <link rel="icon" href="" alt="register-form-icon">
    <title>Registration Form</title>
</head>
<body>
    <section class="form-section">
    <div class="form-heading"><h1>Register</h1></div>

    <div class="form-container">
    <form class="registration-form" action="connect.php" method="POST">
        <div>
            <div class="dots">
                <div class="d1"></div>
                <div class="d2"></div>
                <div class="d3"></div>
            </div>
            <label for="user"></label><br>
            <input type="text" name='name' id="name" placeholder="name" required>

            <label for="email"></label><br>
            <input type="text" name='email' id="email" placeholder="email" required>

            <label for="number"></label><br>
            <input type="integer" name='number' id="number" placeholder="number" required>
            <div class="submit-button-container">
            <button class="submit-button" type="submit" name="submit" id="submit">SUBMIT</button>
            </div>
        </div>
    </form>
    </div>
    </section>

</body>
</html>
