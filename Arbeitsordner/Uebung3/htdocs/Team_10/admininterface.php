<?php 
session_start();
?>
<?php 
if (!isset ($_SESSION['adminname'])){
    if($_SESSION['adminname'] != 'admin'){  
        echo "Bitte anmelden!";
        exit;
    }
    echo "Bitte anmelden!";
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <meta charset="UTF-8"> 
        <meta name="keywords" content="HTML, CSS">
        <meta name="description" content="First static Website prototype for inf_box">
        <meta name="author" content="Maximilian Dühr, Philipp Waack">
        <link rel="stylesheet" type="text/css" href="html5reset-1.6.1.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" href="./font-awesome-4.2.0/css/font-awesome.css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        <header id="header">            
            <nav id="navbar">                
                <div class="navContentWrapper" id="imageWrapper">
                    <a href="index.html">
                        <div id="image">
                        </div>
                    </a>
                </div>               
            </nav>
        </header>
        <div id="wrapper">            
            <article>
                <section>
                    <h1>Your files in detail...</h1>
                    <span class="leftNumb">
                        Number of entries per page:&nbsp;
                        <a href="#Beispiel1">10</a>&#124;
                        <a href="#Beispiel2">20</a>&#124;
                        <a href="#Beispiel3">50</a>&#124;
                        <a href="#Beispiel4">100</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Show/Hide:&nbsp;
                        <a class="hideSize" href="#Beispiel5">Size</a>&#124;
                        <a class="hideType" href="#Beispiel6">Type</a>&#124;
                        <a class="hideCreation" href="#Beispiel7">Creation</a>
                    </span>

                    <span class="rightNumb">
                        Page:&nbsp;
                        <a href="#Beispiel8">1</a>&#124;
                        <a href="#Beispiel9">2</a>&#124;
                        <a href="#Beispiel10">3</a>
                    </span>
                </section>
                <table id="tableHidden">
                    <thead id="parseHead">
                        <tr>
                            <th id="HeaderName" onclick="sortMe('name')" >Filename</th>
                            <th id="HeaderSize" onclick="sortMe('size')" >Size</th>
                            <th>Type</th>
                            <th>Creation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="parseData">
                    
                    </tbody>
                </table>
                <section>
                    <span class="leftNumb">
                        Number of entries per page:&nbsp;
                        <a href="#Beispiel1">10</a>&#124;
                        <a href="#Beispiel2">20</a>&#124;
                        <a href="#Beispiel3">50</a>&#124;
                        <a href="#Beispiel4">100</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Show/Hide:&nbsp;
                        <a class="hideSize" href="#Beispiel5">Size</a>&#124;
                        <a class="hideType" href="#Beispiel6">Type</a>&#124;
                        <a class="hideCreation" href="#Beispiel7">Creation</a>
                    </span>
                    <span class="rightNumb">
                        Page:&nbsp;
                        <a href="#Beispiel8">1</a>&#124;
                        <a href="#Beispiel9">2</a>&#124;
                        <a href="#Beispiel10">3</a>
                    </span>
                </section>
            </article>
            <footer>
                <span id="leftFooter">
                    Copyright C 2014 inf_box<br />
                    First course exercise <span id="boldText">HTML and CSS</span> of the lecture Web and 
                    Multimedia Engineering.
                </span>
                <span id="rightFooter">
                    This solution has been created by:<br />
                    Maximilian Dühr (s9262497) and Philipp Waack (s3354713)
                </span>
            </footer>
        </div>        
    </body>
</html>