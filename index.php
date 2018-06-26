<?php
    session_start();
?>
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
            <h3>Home</h3>
            <?php
                if (isset($_SESSION['u_id'])) {
                    echo "<p>You are logged in!";
                }
            ?>
        </section>
        <?php
            include_once 'includes/footer.php';
        ?>
    </div>
</body>
</html>