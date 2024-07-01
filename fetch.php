
<form action="" method="post">

<h1>Form Area</h1>
<label for="">Enter Your Name</label>
<input type="text" name="name"><br><br>
<label for="">Enter Your email</label>
<input type="email" name="email"><br><br>
<button type="submit">Submit Form</button>
</form>

<?php

echo "<h1>Trying to fetch data to the data base.</h1>";

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn){
    echo "<h2>Connection Successful....</h2>";
}
else{
    echo 'connection failed';
}

$name = $_POST['name'];
$mail = $_POST['email'];

// echo $name;
// echo "</br>";
// echo $mail;

$sql = "INSERT INTO allqueris (`$name`, `$mail`) VALUES ('$name', '$mail');";
if(!mysqli_query($conn, $sql)){
    echo '<h3>Data fetched successfully...</h3>';
}
else
{
    echo "Not abled to fetch data";
}
?>