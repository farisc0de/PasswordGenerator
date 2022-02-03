<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ch = [];

    if ($_POST['lower'] == "on") {
        foreach (range('a', 'z') as $lw) {
            array_push($ch, $lw);
        }
    }

    if ($_POST['upper'] == "on") {
        foreach (range('A', 'Z') as $ur) {
            array_push($ch, $ur);
        }
    }

    if ($_POST['numbers'] == "on") {
        foreach (range(0, 9) as $nb) {
            array_push($ch, $nb);
        }
    }

    if ($_POST['special'] == "on") {
        $special = ['!', '@', '#', '$', '%', '^', '&', '*'];
        foreach ($special as $sh) {
            array_push($ch, $sh);
        }
    }

    if ($ch == []) {
        $error = 2;
    } else {
        $length = $_POST['length'];
    }

    $password = [];

    if ($length == '') {
        $error = 1;
    } else {
        $_password = random_str($length, $ch);
    }
}

function random_str($length = 64, $keyspace)
{
    $keyspace = implode('', $keyspace);
    $keyspace = str_shuffle($keyspace);

    $pieces = [];

    $max = mb_strlen($keyspace, '8bit') - 1;

    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }

    return implode('', $pieces);
}
