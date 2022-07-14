<?php
echo "Hi";
$con = mysqli_connect('localhost', 'root', '', 'vvs');
mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
    echo "Failed to connect" . mysqli_connect_error();
}
$query  = "SELECT * FROM news;";
$info = mysqli_query($con, $query);

$count = mysqli_num_rows($info);
print_r($count);
$result1 = mysqli_fetch_array($info);
$result2 = mysqli_fetch_array($info);
$result3 = mysqli_fetch_array($info);
echo '<pre>';
print_r($result1);
print_r($result2);
print_r($result3);
echo '<pre/>';
?>