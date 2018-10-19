<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "cooperinfo";

$conn = mysqli_connect($host, $user, $password, $db);

// if (!$conn) {
//     echo "somthing broke... connnection isn't working";
//     exit;
// }    TESTING IF BROKEN

//echo "connected!"; /// TESTING IF WORKING


// go and get all of the data from the database

//$myQuery = "SELECT * FROM mainmodel";
//$result = mysqli_query($conn, $myQuery);
//$rows = array();

// fill the array with the result set and send it to the browser 
//while($row = mysqli_fetch_assoc($result)) {
 //   $rows[] = $row;
// }

// to get one item from the database
if (isset($_GET["modelNo"])) {
    $car = $_GET["modelNo"];
    $myQuery = "SELECT * FROM mainmodel WHERE model='$car'";

   // $myQuery = "SELECT * FROM mainmodel";

    $result = mysqli_query($conn, $myQuery);
    $rows = array();

// fill the array with the result set and send it to the browser 
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
}

//encode the result and send it back
echo json_encode($rows);

?>