<pre>
<?php
// logical product
$a = 0xFF;
$b = 0xF0;
$c = $a & $b;
echo sprintf("%08b\n", $c);
// logical sum
$a = 0xF0;
$b = 0x0F;
$c = $a | $b;
echo sprintf("%08b\n", $c);
?>
</pre>