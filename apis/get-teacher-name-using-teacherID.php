<!-- API to find teacher name using teacher ID -->
<?php
include("./apis/config.php");
$find_teacher = "SELECT * FROM teachers WHERE `teacher_id` = '$teacher_id'";
$response = mysqli_query($conn, $find_teacher) or die(mysqli_errno($conn));
$teacher = mysqli_fetch_array($response, MYSQLI_ASSOC);
$teacher_name = ucwords($teacher["name"]);
