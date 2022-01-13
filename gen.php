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
        for ($i = 0; $i <= $length; $i++) {
            $int = rand(0, count($ch) - 1);
            array_push($password, $ch[$int]);
        }
    }

    if ($password != []) {
        $_password = implode("", $password);
    }
}
