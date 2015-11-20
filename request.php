<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
$query = $_REQUEST['q'];
$all = $_REQUEST['all'];

$definitions = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml"
];

$examples = [
    "definition" => "I know not what the definition of a Sucubbus is.",
    "bar" => "Everyday after work, Bob goes to the bar to have a drink with her friends.",
    "ajax" => "Ajax stands for Asynchronous Javascript and XML."
];

$authors = [
    "definition" => "- Ally AppleBottom",
    "bar" => "- Sugarpie Cinnamon",
    "ajax" => "- Candycrush Saga"
];

if($all==true and $query==null){
    header("Content-type: text/xml");
    
    $str = '<entries>'; //xml - open tag
    foreach($definitions as $key=>$value){
        $str.='<definitions name = \''.$key.'\'>'.$value.'</definitions>';
        $str.='<examples>'.'Example: '.$examples[$key].'</examples>';
        $str.='<authors>'.$authors[$key].'</authors>';
    }
    $str.='</entries>'; //xml - close tag
    
    $xml = new SimpleXMLElement($str);
    echo $xml->asXML();
}
else{
    print"<br>"; print ($query.' - '.$definitions[$query]); print"<br>";print"<br>";
    print('Example: '.$examples[$query]); print"<br>";print"<br>";
    print($authors[$query]);
}

?>
