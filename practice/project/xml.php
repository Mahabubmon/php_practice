<?php 

$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");


print $xmlDoc->saveXML();
?>

<?php 
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach($x->childNodes AS $item){
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}

?>