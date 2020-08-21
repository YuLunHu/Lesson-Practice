<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001");

$xpath = new DOMXPath($doc);

// $entries = $xpath->query("/employees/employee/firstName"); 
// $entries[0]->nodeValue = "Allen";

// $entries = $xpath->query("/employees/employee/lastName"); 
// $entries[0]->nodeValue = "Barry";

// $entries = $xpath->query("/employees/employee"); 
// $entries[0]->removeAttribute("EmpType");

// var_dump($entries[0]->nodeValue);

// $entries = $xpath->query("/employees/@id");
// $entries[0]->nodeValue = "1123";

// $entries = $xpath->query("/employees/employee/firstName");
// $entries[0]->parentNode->removeChild($entries[0]);

header("Content-type: text/xml", true);
echo $doc->saveXML();
?>
