<html>
<head>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#startdate").datepicker({ dateFormat: "dd-mm-yy" }).val()
               $("#enddate").datepicker({ dateFormat: "dd-mm-yy" }).val()
       });

   </script>  

</head><body>

<h4  align="center" >All User Information</h4>
<hr><hr>

<?php
$emailid = 'sanketthodge@gmail.c';
$pass = 'sanket123';
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

$check=$conn->query("SELECT * FROM user where email = '$emailid' and password = '$pass'");
if($check->num_rows > 0)
{

?>
<table border="1">
                <tr>

                        <th>Id</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>

        </tr>
<?php


$result = $conn->query("SELECT * FROM user where Email = '$emailid' and Password = '$pass'");
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()){
?>
        <tr>
                <td><?php echo $row["ID"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["mobile"] ?></td>
                <td><?php echo $row["password"] ?></td>

                        </tr>
<?php
            }
        }
}else
{
        echo"Check User Id and Password";
}
?>
</table>
</font>
<hr><hr>
 Start Date: <input type="text" id="startdate" size="30"/>    
      End Date: <input type="text" id="enddate" size="30"/>
</body>
</html>
