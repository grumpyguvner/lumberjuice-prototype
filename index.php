<?php
    $page = "homepage";
    if (isset($_GET['path'])) {
        $page = $_GET['path'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lumberjuice - Homepage Prototype</title>

        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.5/dist/css/bootstrap.css" rel="stylesheet">
<!--        <link href="bootstrap-3.3.5/dist/css/bootstrap-theme.css" rel="stylesheet"> -->
        <link href="css/bootstrap-switch.css" rel="stylesheet">
        <link href="css/jcarousel.connected-carousels.css" rel="stylesheet">
        <?php
        $file = "css/" . $page . ".css";
        if (file_exists($file)) {
            echo '<link href="' . $file . '" rel="stylesheet" type="text/css">';
        }
        ?>
        <link href="css/footer.css" rel="stylesheet" type="text/css">

        <!-- Icons -->
        <link href="css/flag-icons.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        
        <?php
        include 'pages/components/header.php';
        ?>
        <main>
            <?php
            $file = "pages/" . $page . ".php";

            if (file_exists($file)) {
                include $file;
            } else {
                include "pages/not-found.php";
            }
            ?>
        </main>
    
        <?php
        include 'pages/components/footer.php';
        ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-1.11.2.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="bootstrap-3.3.5/dist/js/bootstrap.js"></script> 
    <script src="js/bootstrap-switch.js"></script> 
    <script src="js/jcarousel.js"></script> 
    <script src="js/jcarousel.connected-carousels.js"></script> 
    <script src="js/bootstrap-tabcollapse.js"></script> 
    <script src="js/custom.js"></script>
    <script src="js/navbar.js"></script>
    <?php
    $file = "js/" . $page . ".js";
    if (file_exists($file)) {
        echo '<script src="' . $file . '"></script>';
    }
    ?>
    
    <script src="js/footer.js"></script>
</body>
</html>