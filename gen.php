<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ch = [];

    if ($_POST['lower'] == "on") {
        $lower = range('a', 'z');
        foreach ($lower as $lw) {
            array_push($ch, $lw);
        }
    }

    if ($_POST['upper'] == "on") {
        $upper = range('A', 'Z');
        foreach ($upper as $ur) {
            array_push($ch, $ur);
        }
    }

    if ($_POST['numbers'] == "on") {
        $numbers = range(0, 9);
        foreach ($numbers as $nb) {
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
        header("Location: index.php?error=1");
        exit;
    }

    $length = $_POST['length'];

    if ($length == '') {
        header("Location: index.php?error=2");
        exit;
    }

    $password = [];

    for ($i = 0; $i <= $length; $i++) {
        $int = rand(0, count($ch) - 1);
        array_push($password, $ch[$int]);
    }

    if ($password != []) {
        $_SESSION['password'] = implode("", $password);

        header("Location: index.php");
        exit;
    }
}
