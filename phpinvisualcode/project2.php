<?php

if(isset($_POST['sus'])){
$db=new mysqli("localhost","root","root","person");
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$r=$_POST["region"];
$c=$_POST["country"];
$p=$_POST["phn"];
$db->query("insert into regis(fname,lname,phn,region,country) values('$fn','$ln','$p','$r','$c')");

$trail="<html>
            <head><title>Please Wait</title></head>
            <body>
                <p>This page Automatically redirects you to the destination,if not <a href='real1.php'>click here</a></p>
                </body>
        </html>";
        echo $trail;


}
// http://localhost/phpinvisualcode/project1.php
else{
$html="<html>
            <head>
                <title>Registration</title>
            </head>
            <body>
            <h1>Fill the form</h1>
            <form action='http://localhost/phpinvisualcode/project2.php' method='POST'>
                <p>Enter your FIRST_name:</p>
                <input type='text' placeholder='firstmane' name='fname'></input>
                <br>
                <p>Enter your LAST_name:</p>
                <input type='text' placeholder='lastname' name='lname'></input>
                <br>
                <p>Region</p>
                <input type='text' placeholder='country' name='region'></input>
                <br>
                <p>Enter your phno:</p>
                <select name='country'>
                    <option value='INDIA'>IND</option>
                    <option value='USA'>US</option>
                    <option value='UK'>UK</option>
                <br>
                <p>Enter your name:</p>
                <input type='text' placeholder='phno' name='phn'></input>
                <br><br><br>
                <input type='submit' name='sus' value='Submit'></input>
            </form>

            </body>
        </html>";

echo $html;}

?>
