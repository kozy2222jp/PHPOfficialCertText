<pre>
<?php
$ary = array(
    'id' => 'int',
    'name' => 'string',
    'first_name' => 'string',
    'last_name' => 'string',
);

if (array_key_exists('id', $ary)) {
    echo "キー'id'は\$aryの中に存在します。\n";
} else {
    echo "key 'id' dosen't exist in \$ary\n";
}

if (array_key_exists('section', $ary)) {
    echo "key 'section' exist in \$ary.\n";
} else {
    echo "key 'section' exist in \$ary\n";
}