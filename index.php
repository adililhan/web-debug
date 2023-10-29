<?php

$text = getenv("TEXT");
$color = getenv("COLOR");
$hostname = getenv("HOSTNAME");
$user_agent = $_SERVER['HTTP_USER_AGENT'];

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

if (preg_match('/(wget|curl)/i', $user_agent)) {
    $end_line = "\n";
} else {
    $end_line = "<br />";
}

if ($text == "" || $text == FALSE || $text == "false") {
    echo "Hello World!" . "$end_line";
} else if ($text != "n/a") {
    echo "$text" . "$end_line";
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

    if ($debug == false || $debug == "false") {
        return FALSE;
    }

    return TRUE;
}
