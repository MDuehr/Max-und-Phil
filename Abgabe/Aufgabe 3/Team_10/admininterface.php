<?php 
session_start();
?>
<?php 
if (!isset ($_SESSION['adminname'])){
        echo "Bitte anmelden!";
        exit;
    }else if(!$_SESSION['adminname'] == 'admin')
{
    echo "Bitte anmelden!";
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inf_Box Admininterface</title>
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
                    <a href="admininterface.php">
                        <div id="image">
                        </div>
                    </a>
                </div>
                <div class="navContentWrapper" id="menuWrapper">
                    <ul class="TopList">
                        <li class="headelement" >
                            <a href="infbox_schema_normal.xsd"><div class="cWrapper">Schema</div></a>
                        </li>
                        <li class="headelement" >
                            <a href="infbox_schema_extended.xsd"><div class="cWrapper">Schema(extended)</div></a>
                        </li>
                        <li class="headelement" >
                            <a href="transformation.xslt"><div class="cWrapper">Transformation</div></a>
                        </li>
                        <li class="headelement" >
                            <a href="result.xml"><div class="cWrapper">Result</div></a>
                        </li>
                    </ul>
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
                            <th id="HeaderSize" onclick="sortMe('size')" >ID</th>
                            <th>Type</th>
                            <th>Creation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="parseData">
                    <?php
                    $file = "result.xml";
                    $xml = simplexml_load_file($file) or die ("no load");
                    foreach($xml->item as $item){
                    echo "<tr>";
                    echo "<td>{$item->filename}</td>";
                    echo "<td>{$item->id}</td>";
                    echo "<td>{$item->metadata->mimetype}</td>";
                    echo "<td>{$item->metadata->creation_date}</td>";
                    echo "<td class='symboltd'><a href='#Beispiel75'><i class='fa fa-eye'></i></a>
                                <a href='#Beispiel76'><i class='fa fa-mail-forward'></i></a>&#124;
                                <a href='#Beispiel77'><i class='fa fa-pencil'></i></a>
                                <a href='#Beispiel78'><i class='fa fa-lock'></i></a>
                                <a href='#Beispiel79'><i class='fa fa-trash-o'></i></a></td>";
                    echo"</tr>";
                    }
                    ?>
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