<!DOCTYPE html>
<html>
    <head>
        <title>transform</title>
    </head>
    <body>


        <?php

            function result(){

                // XML-Quellen laden
                $xml = new DOMDocument;
                $xml->load('files.xml');

                $xsl = new DOMDocument;
                $xsl->load('transformation.xslt');

                // Prozessor instanziieren und konfigurieren
                $proc = new XSLTProcessor;
                $proc->importStyleSheet($xsl); // XSL Document importieren

                echo $proc->transformToXML($xml);

            }

        ?>


    </body>
</html>