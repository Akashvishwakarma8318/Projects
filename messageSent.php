<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Sent</title>
  <style>
    .container{
      height: 200px;
      width: 400px;
      border-radius: 10px;
      padding: 10px;
      margin-top: 150px;
      margin-left: 550px;
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      background: linear-gradient(45deg , rgba(210, 47, 47, 0.495) , rgba(2, 169, 2, 0.445));
      box-shadow: 2px 2px 5px 1px grey;
    }
    a button{
      padding: 5px 10px;
      font-size: 20px;
      border-radius: 7px;
      outline: none;
      border: none;
      margin-top: 10px;
      background-color: aquamarine;
      cursor: pointer;
      transition: all .5s ease-in-out;
    }
    a button:hover{
      background-color: rgb(83, 186, 123);
      color: whitesmoke;
      box-shadow: 2px 2px 5px 1px rgb(83, 186, 123);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thanks!</h1>
    <h3>Your Message Sent Successfully.</h3>
    <a href="index.php"><button>Home</button></a>
  </div>
  <p style = "text-align:center;">after <span class='pTag'>10</span> seconds.</p>
  <p style = "text-align:center;">You will automatically redirect to the home page..</p>

  <script>
    //time is in decreasing order..........
    let p = document.querySelector('.pTag');
    let time = 10;
    setInterval(() => {
      p.innerHTML = time--;
    }, 1000);


  //This is used to redirect you page to home page.....    
    setTimeout(() => {
      window.location.href = 'index.php';
    }, 11000);
  </script>
</body>
</html>

<?php
//Create Server..................
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

//make connection to the database........................
$conn = mysqli_connect($server , $username , $password , $dbname);

//check database is connected or not........................
if(!$conn){
    echo "failed to connect to database";
}
else{
    // echo "Connection successfully";
}

//This is useed to called the data through the html or form .......................
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

//using sql to send the data into the database ......................
  $sql = "INSERT INTO `demo` ( `name`, `email`, `message`) values ('$name' , '$email' , '$message')";

//Check is data sent to the database or not?.....................  
  if(mysqli_query($conn,$sql)){
    // echo 'Data is fetched';
  }
  else{
    echo 'Failed to  fetched the data';
  };
?>      