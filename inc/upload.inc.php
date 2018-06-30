<?php

session_start();
include_once 'db.inc.php';
$id = $_SESSION['u_id'];
// check submit
if (isset($_POST['submit'])) {
    //do something

    // get all data information of file
    $file = $_FILES['uploadFileAvatar'];


    // Save value into variables
    $fileName = $_FILES['uploadFileAvatar']['name'];
    $fileType = $_FILES['uploadFileAvatar']['type'];
    $fileTmpName = $_FILES['uploadFileAvatar']['tmp_name'];
    $fileError = $_FILES['uploadFileAvatar']['error'];
    $fileSize = $_FILES['uploadFileAvatar']['size'];
    echo $fileTmpName;

    // Get Extension of file take into array VD: 4 items
    $fileExt = explode('.', $fileName);
    // Get name extenstion of file 
    $fileActualExt = strtolower(end($fileExt));
    // check errors handlers
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    // check has exist values of extenstion in array?
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = "profile".$id. "." . $fileActualExt;
                $fileDestination = '../uploads/' .$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id'";
                $result = mysqli_query($conn, $sql);
                header("Location: ../index.php?upload=success");
                exit();
            } else {
                echo "<p style='color: red'>Your file too big!</p>";
            }
        } else {
            echo "<p style='color: red'>There was an error uploading your file!</p>";
        }
    } else {
        echo "<p style='color: red'>You cannot upload file of this type!</p>";
    }

} else {
    header("Location: ../index.php?upload=error");
    exit();
}

?>