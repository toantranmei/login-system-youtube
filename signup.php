<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page Login System</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="home index">
    <div class="wrap">
        <nav class="nav nav-custom">
            <h1>LOGIN</h1>
            <form action="" class="form-signin">
                <input type="text" placeholder="Username/Email" name="user_uid">
                <input type="password" placeholder="Password" name="user_pwd">
                <button type="submit">Login</button>
            </form>
            <a href="signup.php" class="btn btn-red signup">Register</a>
        </nav>
        <section>
            <h3>Sign Up</h3>
            <div class="content">
                <form action="">
                    <input type="text" placeholder="Frist Name..." name="user_first">
                    <input type="text" placeholder="Last name..." name="user_last">
                    <input type="email" placeholder="Email..." name="user_email">
                    <input type="text" placeholder="Username" name="user_uid">
                    <input type="password" placeholder="Password" name="user_pwd">
                    <button type="submit" class="btn btn-submit">Register</button>
                </form>
            </div>
        </section>
        <footer>
            <p>Design by <a href="#">Trần Toản</a></p>
        </footer>
    </div>
</body>
</html>