<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale-1">
    <link href="CSS/GlobalCss.css" rel="stylesheet">
    <link rel="shortcut icon" href="HTML/resources/favicon.ico"/>

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
    <li><a class="active" href="Index.php">Home</a></li>
    <li><a class="inactive" href="Gaming.html">Gaming</a></li>
    <li><a class="inactive" href="Contact.html">Contact</a></li>
    <li><a class="inactive" onclick="alert('Oi! Nothing here yet!')">Game Development</a></li>
    <li><a class="inactive" href="About.html">About me</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </li>
</ul>

<title>The Cave</title>

<body id="frontPageBody">

<h1 id="hello"> Hello! Welcome to my Website</h1>
<p id="info">This is where you will find all information about me! </p>
<p id="note"><b id="note">Note:</b> This is still a WIP, more stuff will be added soon!   </p>
<p id="hope"> Hopefully...</p>


</body>
</html>
