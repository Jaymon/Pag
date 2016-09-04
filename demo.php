<?php

include("Pag_class.php");
include("PagTag_class.php");


$html = "<a href=\"http://one.com\">1</a>, <a href=\"http://two.com\">2</a>";

$pag = new Pag($html);
$tag_list = $pag->get('a');
print_r($tag_list)

?>

