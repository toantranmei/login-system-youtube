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
            <h3>Home</h3>
            
            <div class="wrap-img">
                <div class="content-allimg">
                    <?php
                        // GET all data user ra  ( get userid )
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="card card-user">';
                                $id = $row['user_id'];

                                // do biet duoc userid the nen se in duoc anh cua ai 
                                $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
                                $resultImg = mysqli_query($conn, $sqlImg);
                                while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                                    if ($rowImg['status'] == 0) {
                                        echo '<img src="uploads/profile'.$id.'.jpg" alt="" class="img-user">';
                                    } else {
                                        echo '<img src="uploads/profiledefault.jpg" alt="" class="img-user">';
                                    }
                                }
                                echo '<span class="name-user">'.$row['user_first'].' '.$row['user_last'] .'</span>
                                <span class="email-user">'.$row['user_email'].'</span>
                            </div>';
                            }
                        } else {
                            echo "<p>There are no user yet !!!!</p>";
                        }
                        
                    ?>
                </div>
                <div class="content-selfimg">
                    <div class="wrap-selfimg">
                    <?php

                        if (isset($_SESSION['u_id'])) {
                            $id = $_SESSION['u_id'];
                            $first = $_SESSION['u_first'];
                            $last = $_SESSION['u_last'];
                            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
                                $resultImg = mysqli_query($conn, $sqlImg);
                                while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                                    if ($rowImg['status'] == 0) {
                                        echo '<img src="uploads/profile'.$id.'.jpg" alt="" class="img-user selfuser">';
                                    } else {
                                        echo '<img src="uploads/profiledefault.jpg" alt="" class="img-user selfuser">';
                                    }
                                }
                            
                            echo '<p class="name-selfuser selfname">'.$first .' '.$last.'</p>
                            <form class="form-upload-profile" action="inc/upload.inc.php" method="POST" enctype="multipart/form-data">
                                <button class="btn">Change your profile</button>
                                <input type="file" name="uploadFileAvatar">
                                <button style="width: 100%; z-index: 9999; " class="btn btn-upload" name="submit" type="submit">Upload</button>
                            </form>';
                            echo '<form action="inc/removeimage.inc.php" method="post">
                            <button type="submit" name="submit" class="btn">Remove Avatar</button>
                            </form>
                            '; 
                            
                        } else {
                            echo "<p>You are not logged in!</p>";
                        }
                    ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php
            include_once 'includes/footer.php';
        ?>
    </div>
</body>
</html>