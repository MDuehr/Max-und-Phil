<html>
<head>
    <title>Schakada</title>
</head>
    <body>
        <?php 
        session_start();

        error_reporting(0);

        function validate(){
            $var = "Login Falsch!";
            echo $var;
        }
        function logIn(){
            $a = $_POST['username'];
            $b = $_POST['password'];
            $password = password_hash($b, PASSWORD_DEFAULT);    
            //Textdatei einlesen
            $userfiles = fopen("login.txt","r");

            //Dateiinhalt einlesen
            //Solange Dateiendezeiger nicht true ausführen

            while (!feof($userfiles))
            {
                $line = fgets($userfiles);
                $userdata = explode(",", $line);

                if ($userdata[0]==$a and password_verify($b,trim($userdata[1])))
                {
                    echo "Hallo $a";
                    $log = 1;
                    $_SESSION['username'] = $userdata[0];
                    header("Location: userinterface.php");
                }
            }
            fclose($userfiles);
            if ($log==0)
            {
            echo "Zugriff verweigert $a. Wir beobachten dich. Deine IP wurde geloggt und den &ouml;rtlichen Beh&ouml;rden zugesendet";
            }
        }
        logIn();
        ?>
    </body>
</html>