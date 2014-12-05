<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="html5reset-1.6.1.css">
        <link rel="stylesheet" type="text/css" href="index.css">
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
            <div id="admincaption">
                <caption >ADMIN-LOGIN</caption>
            </div>
            <div id="adminlogin">
                <form name="adminloginVal" action="adminloginverify.php" method="post">
                    <table>
                        <thead>
                            <tr>
                                <td>Username:</td><td>Password:</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="adminname" /></td><td><input type="password" name="adminpassword"/></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="login"/></td>
                            </tr>
                        </thead>
                    </table>
                
                </form>
            
            </div>
        </div>
        
    </body>
    

</html>