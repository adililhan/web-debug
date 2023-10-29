<?php

$text = getenv("TEXT");
$color = getenv("COLOR");
$hostname = getenv("HOSTNAME");

if ($color == "red") {
    echo '<style>html{ background-color:red;}</style>';
}

if ($color == "blue") {
    echo '<style>html{ background-color:blue;}</style>';
}

if ($color == "green") {
    echo '<style>html{ background-color:green;}</style>';
}

if ($color == "yellow") {
    echo '<style>html{ background-color:yellow;}</style>';
}

if ($text == "" || $text == FALSE) {
    echo "Hello World!<br />";
} else if ($text != "n/a") {
    echo "$text<br />";
}

if ($hostname != "false") {
    echo gethostname() . "<br />";
}

if (check_debug()) {
    echo '<pre>';
    print_r($_SERVER);
}

function check_debug() {
    $debug = getenv("DEBUG");

    if (isset($_GET["debug"])) {
        return TRUE;
    }

    if ($debug == false) {
        return FALSE;
    }

    if ($debug == "false") {
        return FALSE;
    }

    return TRUE;
}
