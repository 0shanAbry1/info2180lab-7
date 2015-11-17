<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
$query = $_REQUEST['q'];
$all = $_REQUEST['all'];

$definition = [
    "definition" => "a statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "a place that sells alcholic beverages",
    "ajax" => "technique which involves the use of javascript and xml"
];

if($all==true and $query==null){
    header("Content-type: text/xml");
    $str = '<entries>';
    foreach($definition as $key=>$value){
        $str.='<definition name=\''.$key.'\'>'.$value.'</definition>';
    }
    $str.='</entries>';
    $xml = new SimpleXMLElement($str);
    echo $xml->asXML();
}
else{
 print $query;
 print"<br>";
 print($definition[$query]);
}

?>
