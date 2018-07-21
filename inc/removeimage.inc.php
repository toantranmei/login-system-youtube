<?php
session_start();
include 'db.inc.php';
$userid = $_SESSION['u_id'];

//B1: Tim ten file va duong dan
$filename = "../uploads/profile".$userid."*"; // * = lay het cac gia tri dang sau, la patern nen no hoat dong vs cac ham su dung patern
$fileinfo = glob($filename);
print_r($fileinfo);
$fileext = explode(".", $fileinfo[0]); // mang 2 phan tu

print_r($fileext);
$fileactualext = $fileext[3];
echo $fileactualext;

$pathnamefile = "../uploads/profile".$userid.".".$fileactualext;

echo $pathnamefile;
//B2: Xoa anh theo duong dan do
if (!unlink($file)) {
    header("Location: ../index.php?deleteavatar=failure");
} else {
    header("Location: ../index.php?deleteavatar=success");
}
//B3: Update lai cai gia tri status o trong bang profileimg
$sql = "UPDATE profileimg SET status=1 WHERE userid='$userid';";
mysqli_query($conn, $sql);

header("Location: ../index.php?deletesuccess");

?>