<?php 

session_start();
echo "<link href='https://fonts.googleapis.com/css2?family=Questrial&family=Roboto&display=swap' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css2?family=Raleway&display=swap' rel='stylesheet'>";

echo "<div id='container'>
<a style='text-decoration:none' href='https://w1234567.users.ecs.westminster.ac.uk/homteq/index.php'>
<div id='navbar'>
<div id='header'>
<h1>homteq`</h1>
<h2>your home for home tech</h2></a>
<h3><?php echo 'London, '.date('l d F Y h:i:s');?> </h3>
</div>
<div id='navigation'>
<ul> ";
  
        if(!(isset($_SESSION['userId']) and isset($_SESSION['usertype'])))
        {

            echo "<div>
                <li><a href='index.php'>Home Tech</a></li>
                <li><a href='aboutus.php'>About Us</a></li>
                <li><a href='signup.php'>Sign Up</a></li>
                <li><a href='login.php'>Login</a></li>
            </div>
            <div>
                <li><a href='basket.php'>Smart Basket</a></li>
                <li><a href='login.php'>Staff Login</a></li>
            </div>";
            }
        else
            {
            echo "<div>
                <li><a href='index.php'>Home Tech</a></li>
                <li><a href='aboutus.php'>About Us</a></li>
                <li><a href='logout.php'>Log Out</a></li>
            </div>;
            <div>
                <li><a href='basket.php'>Smart Basket</a></li>
            </div>";
            }



echo "</ul>
</div>
</div>
<div id='content'>";
?>