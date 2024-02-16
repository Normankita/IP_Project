<?php
// Assuming you have a database connection established
require_once "config.php";
// Query the database to retrieve the registered users' data
$sql = "SELECT username, email, userpassword FROM Users";
$result = mysqli_query($link, $sql);

// Prepare an array to store the retrieved data
$registeredUsers = array();

// Fetch the data from the result set and add it to the array
while ($row = mysqli_fetch_assoc($result)) {
    $registeredUsers[] = $row;
}

// Close the database connection
mysqli_close($link);

// Set the response header to indicate that the response contains JSON data
header('Content-Type: application/json');

// Convert the array to JSON and echo it as the response
echo json_encode($registeredUsers);
?>