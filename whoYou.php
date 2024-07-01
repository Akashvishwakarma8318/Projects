<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell Me About Yourself</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .header{
    display: flex;
    justify-content: space-around;
    color: white;
    align-items: center;
    font-family: "Pacifico", cursive;
    font-variant: small-caps;
    background-color: black;
}
.header .logo h1{
    cursor: pointer;
}
.contents{
    display: flex;
    align-items: center;
}
.bgChanger button{
    color: white;
    cursor: pointer;
    background-color: transparent;
    font-size: 30px;
    outline: none;
    border: none;
    transition: all .5s ease-in-out;
    font-style: italic;
}
.bgChanger button:hover{
    color: black;
}
.contents ul{
    display: flex;
    padding: 30px;
    margin-right: 30px;
}    
.contents ul li{
    margin: 0 20px;
    list-style: none;
}
.contents ul li a{
    text-decoration: none;
    color: white;
    font-weight: 600;
    transition: .2s ease-in;
    font-size: 17px;
    /* font-family: "Pacifico", cursive; */
}
.contents ul li a:hover{
    color: chocolate;
}
.active:visited{
    color: chocolate;
    text-decoration: underline;
}
h2{
    font-size: 30px;
}
form{

    margin-top: 20px;
    text-align: center;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.inner{
    width: 70%;
    border-radius: 8px;
    box-shadow: 3px 3px 5px 1px grey;
    margin-top: 30px;
}
label{
    float: left;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 18px;
    padding: 8px;
}
form input{
    width: 98%;
    outline: none;
    padding: 10px;
    color: #414040;
    font-size: 18px;
    border: none;
    background-color: rgb(246, 243, 243);
    border-radius: 10px;
}
input::placeholder{
    font-size: 14px;
}
form textarea{
    min-width: 98%;
    width: 98%;
    max-width: 98%;
    height: 100px;
    min-height: 100px;
    font-size: 18px;
    max-height: 100px;
    margin-bottom: 20PX;
    padding: 10px;
    border: none;
    outline: none;
    background-color: rgb(246, 243, 243);
    border-radius: 10px;
}
textarea::placeholder{
    font-size: 14px;
}
.submit{
    width: 40%;
    margin-bottom: 10px;
    border-radius: 8px;
    border: none;
    background-color: rgb(92, 196, 200);
    color: black;
    transition: all .5s ease;
}
.submit:hover{
    box-shadow: 1px 1px 10px 1px rgb(96, 203, 207);
}
</style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <div class="symbol"><h1 title="Akash Vishwakarma">AKASH</h1></div>
        </div>
        <div class="contents">
            <ul>
                <li><a href="index.html" class="active" title="Home">Home</a></li>
                <li><a href="#main2"  title="About">About</a></li>
                <li><a href="#skills" title="Skills">Skills</a></li>
                <li><a href="#main4" title="Services">Services</a></li>
                <li><a href="#contact" title="Contact Me">Contact Me</a></li>
                <li><a href="Resume.pdf" title="Resume">Resume</a></li>
            </ul>
            <div class="bgChanger"><button title="Enable Light Mode"><i class="fa-solid fa-circle-half-stroke"></i></button></div>
        </div>
    </div>

    <form action="hireMe.php" method="post">
        <h2>Brief Info About Yourself </h2>
        <p>Immediatly Reply by me on your mail.</p>
        <div class="inner">
            <label for="Cname">Company Name:</label><br>
            <input type="text" name="companyName" id="" placeholder="Enter Your Company Name: ">
            <br><br>
            <label for="name">Your Name:</label><br>
            <input type="text" name="name" placeholder="Your Name: "> 
            <br><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="Your Email: ">
            <br><br>
            <label for="">Job Role description:</label><br>
            <textarea name="message" id="" placeholder="Brief Introduction of Job Role :"></textarea>
            <input class="submit" type="submit" value="Submit">
        </div>
    </form>

</body>
</html>