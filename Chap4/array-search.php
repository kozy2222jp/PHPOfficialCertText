<pre>
<?php
$array = array(
    'tanaka',
    'sato',
    'suzuki',
    'shimada',
);
$idx = array_search('suzuki', $array);
echo $array[$idx];