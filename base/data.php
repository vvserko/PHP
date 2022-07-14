<?php
require_once './classes.php';
$publication = array();

$con = mysqli_connect('localhost', 'root', '', 'vvs');
mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
    echo "Failed to connect" . mysqli_connect_error();
};

$result  = mysqli_query($con, "SELECT * FROM publications");
while ($row = mysqli_fetch_array($result)) {
  
    $publication[] = new $row['type']($row); 
    
};
