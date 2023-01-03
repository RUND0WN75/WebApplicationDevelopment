<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fast_jared";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* ---------- DB functions ---------- */

/* ---------- Add a page ---------- */
function addPage($HTML, $Keywords, $Description, $Title, $Nav_Name) {
    global $conn;
    $sql = "INSERT INTO content (HTML, Keywords, Description, Title, Nav_Name) VALUES ('$HTML', '$Keywords', '$Description', '$Title', '$Nav_Name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

?>