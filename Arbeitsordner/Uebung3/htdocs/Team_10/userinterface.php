<?php 
session_start();
?>
<?php 
if (!isset ($_SESSION['username'])){
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
            <div class="scrollNavBar" id="scrollNavBarId">
                <div class="scrollNavBarWrapper" >
                    <ul class="scrollNavBar" id="scrollNavBarUl">
                        <li class="headelement2" id="overview2">
                            <a href="menu1"><div class="cWrapper"><span class="navText"><span class="faSymbol" >&#xf009; </span>Overview</span></div></a>
                        </li>
                        <li class="headelement2" id="details2">
                            <a href="index.html"><div class="cWrapper"><span class="navText"><span class="faSymbol">&#xf03a; </span>Details</span></div></a>
                        </li>
                        <li class="headelement2" id="settings2">
                            <a href="menu2"><div class="cWrapper"><span class="navText"><span class="faSymbol">&#xf013; </span>Settings</span></div></a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <nav id="navbar">                
                <div class="navContentWrapper" id="imageWrapper">
                    <a href="index.html">
                        <div id="image">
                        </div>
                    </a>
                </div>
                <div class="navContentWrapper" id="menuWrapper">
                    <ul class="TopList">
                        <li class="headelement" id="overview">
                            <a href="menu1"><div class="cWrapper"><span class="faSymbol" >&#xf009; </span>Overview</div></a>
                        </li>
                        <li class="headelement" id="details">
                            <a href="index.html"><div class="cWrapper"><span class="faSymbol">&#xf03a; </span>Details</div></a>
                        </li>
                        <li class="headelement" id="settings">
                            <a href="menu2"><div class="cWrapper"><span class="faSymbol">&#xf013; </span>Settings</div></a>
                        </li>
                    </ul>
                    <div class="ListRight">
                        <ul >
                            <li class="headelement">
                                <a href="menu3"><div class="cWrapper"><span class="faSymbol">&#xf005; </span>Register</div></a>
                                <div class="subdiv" id="regList">
                                    <ul>
                                        <form name="registerVal" action="#" onSubmit="return validateRegister()">
                                        <li id="registeralert">You have to fill out all the textfields</li>
                                        <li id="birthalert">Please enter a valid date of birth</li>
                                        <li>First name<br /><input type="text" name="firstname"></li>
                                        <li>Last name<br /><input type="text" name="lastname"></li>
                                        <li id="dottetborder">Birthday<br /><input type="date" name="birthday"></li>
                                        <li>Your username<br /><input type="text" name="yourusername"></li>
                                        <li>Your password<br /><input type="password" name="yourpassword"></li>
                                        <li><input type="submit" name="Abschicken" value="Register" /></li>
                                        </form>
                                    </ul>
                                </div>
                            </li>
                            <li class="headelement">
                                <a href="menu4"><div class="cWrapper"><span class="faSymbol">&#xf090; </span>Login</div></a>
                                <div class="subdiv" id="loginList">
                                    <ul>
                                        <form name="loginVal" action="login.php" method="post">
                                        <li id="useralert"> The given username or password is wrong! Please try again.</li>
                                        <li>Username<br /><input type="text" name="username"></li>
                                        <li>Passwort<br /><input type="password" name="password">
                                        <li><div class= "listEleContainer">
                                            <div class="listEleLeft"><input type="checkbox" />Remember me</div>
                                            <input type="submit" name="Abschicken" value="Login">
                                        </div></li>
                                        </form>
                                    </ul>
                                </div>
                            </li>
                            <li class="headelement">
                                <a href="menu5"><div class="cWrapper"><span class="faSymbol">&#xf007;</span><span id="userName1"></span>
                                    </div></a>
                                <div class="subdiv" id="accList">
                                    <ul >
                                        <li>Your Name:<br /><h1 id="yourName"></h1></li>
                                        <li>Your Email:<br /><h1 id="yourEmail"></h1></li>
                                        <li>Your Qouta (used/max):<br /><h1 id="yourQuota"></h1></li>
                                        <li><form><input type="submit" value="Logout"></form></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
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
        
        <script src="script1.js" type="text/javascript"></script>
        <script src="script2.js" type="text/javascript"></script>
        <script src="script3.js" type="text/javascript"></script>
        <script src="script4.js" type="text/javascript"></script>
        <script src="script5.js" type="text/javascript"></script>
        
    </body>
</html>