<form action = '/crudapplicatie/index.php' method = 'post'>
<input type = 'text' name = 'name'>
<input type = 'submit' name = 'createband'>
</form>

<?php

require('database.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST ['createband'])){
   $name = $_POST ['name'];
   $sql= "INSERT INTO bands (bands) values ('$name')";
   if($name != '')
    if($conn->query($sql) === TRUE ){
            echo "new record created successfully";
        } else {
            echo "error:" . $sql . "<br>" . $conn->error;
        }
}

?>