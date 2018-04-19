<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (!isset($_GET['incl']))
{
    $incl="home";
}
 else 
{
   $incl=$_GET['incl'];
}

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/>
        <title>Meine eigene Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="pics/RB-Development_Logo.png">
            </div>
            <<div id="menu">
            <ul>
                <li><a href="index.php?incl=home"<?php if ($incl=="home"){echo 'class="act" ';}?>><i>Home</i></a></li>
                <li><a href="index.php?incl=Tools"<?php if ($incl=="Tools"){echo 'class="act"';}?>><i>Tools</i></a></li>
                <li><a href="index.php?incl=Tutorials"<?php if ($incl=="Tutorials"){echo 'class="act"';}?>><i>Tutorials</i></a></li>
                <li><a href="index.php?incl=Kontakt"<?php if ($incl=="Kontakt"){echo 'class="act"';}?>><i>Kontakt</i></a></li>
            </ul>
        </header>
        <?php
            include ('php_includes/'.$incl.'.php');
        ?>
    </body>
</html>
