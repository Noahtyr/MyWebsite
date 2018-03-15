<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale-1">

    <link href="CSS/GlobalCss.css" rel="stylesheet">
</head>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Noahd
 * Date: 01-02-2018
 * Time: 13:58
 */

// Connect to the Mysql Database

$link = mysqli_connect('localhost','root','root','DatabaseNAME');
mysqli_set_charset($link, 'utf8');

// If connection Failed
if($link ->connect_error){
    die("Connection Failed:". $link ->connect_error);
}

?>

<html>
<ul id="navbar">
    <li><a href="#home">Home</a></li>
    <li><a href="Gaming.html">Gaming</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="GameDev.html">Game Development</a></li>
    <li><a href="About.html">About me</a></li>

</ul>

<title>The Cave</title>

<body id="frontPageBody">
<h1 id="hello"> Hello! Welcome to my Website</h1>
<p id="info">This is where you will find all information about me! </p>
<p id="note"><b id="note">Note:</b> This is still a WIP, more stuff will be added soon!   </p>
<p id="hope"> Hopefully...</p>
</body>
</html>
