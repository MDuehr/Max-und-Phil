<?php 
// Added function for  Example #1  

/** Load an XML file and create a DOMDocument. 
Handles arbitrary entities, even undefined ones. 
*/ 

function fileToDOMDoc($filename) { 
    $dom= new DOMDocument; 
    $xmldata = file_get_contents($filename); 
    $xmldata = str_replace("&", "&amp;", $xmldata);  // disguise &s going IN to loadXML() 
    $dom->substituteEntities = true;  // collapse &s going OUT to transformToXML() 
    $dom->loadXML($xmldata); 
    return $dom; 
} 

// Compare with  Example #1 Transforming to a string 

// Load the XML sources 
$xml = fileToDOMDoc('files.xml'); 
$xsl = fileToDOMDoc('transformation.xslt'); 

// Configure the transformer 
$proc = new XSLTProcessor; 
$proc->importStyleSheet($xsl); 

// transform $xml according to the stylesheet $xsl 
$transformr = $proc->transformToXML($xml); // transform the data 

file_put_contents("result.xml", $transform);
?>