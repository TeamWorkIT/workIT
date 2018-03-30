<?php session_start();
?>
<!--Navbar-->
<?php

if (isset($_SESSION['email'])) {
    echo '
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#1c2a48">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php"><img src="img/logo1.png" class="img responsive img-fuid" height="50"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
<ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="programming_tech.php">Programming&Tech</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="graphicsdesign.php">GraphicsDesign</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="digitalmarketing.php">DigitalMarketing</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="video_and_animation.php">Video&Animation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="music_and_audio.php">Musci&Audio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="business.php">Business</a>
            </li>

    </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class="form-inline"><i class="fas fa-tag"></i>
            <input class="form-control mr-sm-2"  type="text" placeholder="Search" aria-label="Search">
        </form>
        <form action="inc/logout.inc.php" method="POST">
            <button class="btn btn-warning" type="submit" name="submit">Logout</button>
        </form>
        <a href="user/profile.php" class="btn btn-success"><i class="fas fa-cogs"></i></a>
            </div>
    <!-- Collapsible content -->
</nav>
<!--/Navbar-->               
';

}
else{
    echo'
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#1c2a48">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php"><img src="img/logo1.png" class="img responsive img-fuid" height="50"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


<span class="animated tada infinite text-light"><b>Hello There! </b>SignUp or Login to get started!</span>
        
        <form class="" style="margin-left:700px;">
            <a type="button" class="btn btn-danger" href="login.php">Login</a>

            <a type="button" class="btn btn-success" href="signup.php">Join</a>
        </form>
             </div>
    <!-- Collapsible content -->
</nav>
<!--/Navbar-->               
' ;
}
       ?>
