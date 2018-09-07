
<?php 
    libxml_disable_entity_loader (true); //enables the ability to load  external entities
    $xmlfile = file_get_contents('php://input'); //retrieves the raw content of request after the headers
    $dom = new DOMDocument(); //serves as a root of document tree
//    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD); //loadxml--> loads the xml document LIB XML_NOENT -----> for loading external entities(Replace named character entities with their appropriate characters that are defined in the DTD) LIBXML_DTDLOAD----> Load the DTD for this XML file, as specified in the DOCTYPE declaration 
    $dom->loadXML($xmlfile, LIBXML_NOENT);  
    $creds = simplexml_import_dom($dom); //This function takes a node of a DOM document and makes it into a SimpleXML node. This new object can then be used as a native SimpleXML element.
    $user = $creds->user;
    $pass = $creds->pass;
    echo "You have logged in as user $user $pass";
?> 
