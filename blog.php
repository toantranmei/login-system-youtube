<?php
    session_start();
    include_once 'inc/db.inc.php';
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
            <h3>Blogs</h3>
            <div class="search-box">
                <form action="search.php" method="post">
                    <input type="text" placeholder="Type a full name post, or date,..." class="input-search" name="search">
                    <button type="submit" name="submit-search">Tìm kiếm</button>
                </form>
            </div>
            <div class="post-wrap">
                <?php 
                    $sql = "SELECT * FROM article";
                    $result = mysqli_query($conn, $sql);
                    $queryResults = mysqli_num_rows($result);

                    if ($queryResults > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="card card-post">
                            <h2>'.$row['a_title'].'</h2>
                                <p>'.$row['a_text'].'</p>
                                <p>'.$row['a_author'].'</p>
                                <p>'.$row['a_date'].'</p>
                            </div>';
                        }
                    }
                ?>
                
            </div>
        </section>
        <?php
            include_once 'includes/footer.php';
        ?>
    </div>
</body>
</html>