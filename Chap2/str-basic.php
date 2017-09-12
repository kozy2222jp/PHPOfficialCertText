<pre>
<?php
strpos_test();

function trim_test()
{
    $s = "      abc       ";
    echo trim($s);
    echo "</br>";
}

function strlen_test()
{
    $s1 = '1234567890';
    echo "strlen\n";
    echo strlen($s1);
    echo "\n";
    $s2 = "漢字";
    echo "漢字のstrlen\n";
    echo strlen($s2);
}

function substr_test()
{
    $s = '0123456789';
    echo substr($s, 0, 5) . "\n"; // 01234
    echo substr($s, 3, 2) . "\n"; // 34
    echo substr($s, 6) . "\n"; //6789
    echo substr($s, -2, 2) . "\n"; // 89
}

function strpos_test()
{
    $s = 'abcdefghijk';
    echo strpos($s, 'c') . "\n"; // 2
    echo strpos($s, 'def') . "\n"; // 3
    $i = strpos($s, 'x');
    if ($i === false) {
        echo 'false';
    } else {
        echo $i;
    }
}

?>
</pre>