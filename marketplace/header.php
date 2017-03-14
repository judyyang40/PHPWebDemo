<html>
<body>

</body>
</html>

<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>MarketPlace</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-fire"></span> 
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">

                    <li>
                       <a href= "/index.php">Home</a>
                    </li>
                    <li>
                        <a href="/about.php">About</a>
                    </li>
                    <li>
                        <a href="/products.php">Products</a>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#">Engage</a></li>
                            <li><a href="#">Pontificate</a></li>
                            <li><a href="#">Synergize</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="/news.php">News</a>
                    </li>
                    <li>
                        <a href="/contacts.php">Contact</a>
                    </li>
                    <li>
                        <a href="/security.php">Security</a>
                    </li>
                    <li>
                        <a href="/users.php">User</a>
                    </li>
                </ul>

                <?php
                if (!isset($_SESSION["login_as"])) {
                    echo "<ul class=\"nav navbar-nav navbar-right\">";
                    echo "<li>";
                    echo "<a href=\"/login.php\">Log in</a>";
                    echo "</li>";
                    echo "</ul>";
                } else {
                    echo "<ul class=\"nav navbar-nav navbar-right\">";
                    echo "<li>";
                    echo "<a href=\"/logout.php\">Log in as " . $_SESSION["login_as"] . ", Log out</a>";
                    echo "</li>";
                    echo "</ul>";
                }
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  

    

