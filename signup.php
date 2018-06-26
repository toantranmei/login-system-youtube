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
        <?php
            include_once 'includes/navbar.php';
        ?>
        <section>
            <h3>Sign Up</h3>
            <div class="content">
                <form action="inc/signup.inc.php" method="POST">
                    <input type="text" placeholder="Frist Name..." name="user_first">
                    <input type="text" placeholder="Last name..." name="user_last">
                    <input type="email" placeholder="Email..." name="user_email">
                    <input type="text" placeholder="Username" name="user_uid">
                    <input type="password" placeholder="Password" name="user_pwd">
                    <button type="submit" name="submit" class="btn btn-submit">Register</button>
                </form>
            </div>
        </section>
        <?php
            include_once 'includes/footer.php';
        ?>
    </div>
</body>
</html>