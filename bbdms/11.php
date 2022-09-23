<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Pavan";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Shyam";
$a[] = "Evita";
$a[] = "Shalini";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ponting";
$a[] = "Wenche";
$a[] = "Vicky";
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
$q = strtolower($q);
$len=strlen($q);
foreach($a as $name) {
if (stristr($q, substr($name, 0, $len))) {
if ($hint === "") {
$hint = $name;
} else {
$hint .= ", $name";
}
}
}
}
// Output "no suggestion" if no hint was found or output cor
rect values
echo $hint === "" ? "no suggestion" : $hint;
?>