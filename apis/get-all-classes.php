<!-- API to return all active classes : verified -->
<?php
include("config.php");
$find_classes = "SELECT * FROM classes WHERE `active` = '1' ORDER BY `class_id`";
$response = mysqli_query($conn, $find_classes) or die(mysqli_errno($conn));
$classes = mysqli_fetch_all($response, MYSQLI_ASSOC);
