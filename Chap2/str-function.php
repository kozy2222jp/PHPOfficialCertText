<pre>
<?php
// str_replace
$str = 'This is a pen.';
$search = 'is';
$replace = 'os';
$retStr = str_replace($search, $replace, $str);
echo $retStr . "\n"; // Thos os a pen.
// explode
$originalStr = 'apple/orange/banana/strowberry';
$delimiter = '/';
$retArray = explode($delimiter, $originalStr);
foreach ($retArray as $value) {
    echo $value . "\n";
}
// implode
$glue = ',';
$pieces = array(
    'car',
    'ship',
    'bycele',
    'train',
);
$retStr = implode($glue, $pieces);
echo $retStr . "\n";
// strtoupper
$str = 'number';
echo strtoupper($str). "\n";
// strtolowwer
$str = 'NOW IS A TIME';
echo strtolower($str). "\n";
// ucwords
$str = 'what is a life?';
echo ucwords($str) . "\n"; // What Is A Life?
// strcasecomp
$str1 = 'torsion';
$str2 = 'TORSION';
if (strcasecmp($str1, $str2) === 0) {
    echo 'same' . "\n";
} else {
    echo 'different' . "\n";
}


?>
</pre>