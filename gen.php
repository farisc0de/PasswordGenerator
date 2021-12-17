<?php
session_start();

if ($_POST['lower'] == "on") {
    $lowercase = range('a', 'z');
}

if ($_POST['upper'] == "on") {
    $uppercase = range('A', 'Z');
}

if ($_POST['numbers'] == "on") {
    $digits = range(0, 9);
}

if ($_POST['special'] == "on") {
    $special = ['!', '@', '#', '$', '%', '^', '&', '*'];
}

$ch = array_merge($lowercase, $uppercase, $digits, $special);

$length = $_POST['length'];

$password = array();

for ($i = 0; $i <= $length; $i++) {
    $int = rand(0, count($ch) - 1);
    array_push($password, $ch[$int]);
}

$_SESSION['password'] = implode("", $password);

header("Location: index.php");

exit;
