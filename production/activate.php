<?php

$act = $_POST["act"]; 
$form = $_POST["form"]; 


 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "test";
    $dbport = 3306;

$conn = new mysqli($servername, $username, $password, $database, $dbport);
// Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";



if($act==1){

$check=$conn->query("UPDATE custdata SET s_bpm= '$act',date=CURDATE() WHERE copf= '$form'");
}else{
    $check=$conn->query("UPDATE custdata SET s_bpm= '$act',edate= CURDATE() WHERE copf= '$form'");

}
if($check->num_rows > 0)
{
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>