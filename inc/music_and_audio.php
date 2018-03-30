    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top green">

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
                <a class="nav-link" href="graphicsdesign.php">Graphics&Design</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="digitalmarketing.php">DigitalMarketing</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="video_and_animation.php">Video&Animation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="music_and_audio.php">Music&Audio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="business.php">Buisness</a>
            </li>

    </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class="form-inline">
            <input class="form-control mr-sm-2"  type="text" placeholder="Search" aria-label="Search">
        </form>
        
        <?php
if (isset($_SESSION['username'])) {
    echo '
        <form action="inc/logout.inc.php" method="POST">
            <button class="btn btn-warning" type="submit" name="submit">Logout</button>
        </form>
        <a href="user/profile.php" class="btn btn-success"><i class="fa fa-gear"></i></a>';
}
else
{
    echo '
        <form>
            <a type="button" class="btn" href="login.php">Login</a>
        </form>
        ';
}
        ?>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->               
