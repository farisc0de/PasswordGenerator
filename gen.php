<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ch = '';

    if ($_POST['lower']) {
        $ch .= implode('', range('a', 'z'));
    }

    if ($_POST['upper']) {
        $ch .= implode('', range('A', 'Z'));
    }

    if ($_POST['numbers']) {
        $ch .= implode('', range(0, 9));
    }

    if ($_POST['special']) {
        $special = ['!', '@', '#', '$', '%', '^', '&', '*', '-', '+', '?', '/', '(', ')'];
        $ch .= implode('', $special);
    }

    $length = $_POST['length'];

    if ($ch && $length) {
        $_password = random_str($length, $ch);
    }

    if (!$_password) {
        $error = 1;
    }
}

function random_str($length = 64, $keyspace)
{
    $keyspace = str_shuffle($keyspace);

    $pieces = [];

    $max = mb_strlen($keyspace, '8bit') - 1;

    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }

    return implode('', $pieces);
}
