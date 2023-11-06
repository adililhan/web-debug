<?php

$text = getenv("TEXT");
$color = getenv("COLOR");
$hostname = getenv("HOSTNAME");
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$colors = ["red", "blue", "green", "yellow"];

$is_cli = preg_match('/(wget|curl)/i', $user_agent);

if (in_array($color, $colors) && ! $is_cli) {
    echo "<style>html{ background-color:$color;}</style>";
}

if ($is_cli) {
    $end_line = "\n";
} else {
    $end_line = "<br />";
}

if ($text == "" || $text == "false") {
    echo "Hello World!" . "$end_line";
} else if ($text != "n/a") {
    echo "$text" . "$end_line";
}

if ($hostname != "false") {
    echo gethostname() . "$end_line";
}

if (check_debug()) {
    if ( ! $is_cli) {
        echo '<pre>';
    }
    print_r ($_SERVER);
}

function check_debug() {
    $debug = getenv("DEBUG");

    if (isset($_GET["debug"])) {
        return TRUE;
    }

    if ($debug == "false") {
        return FALSE;
    }

    return TRUE;
}
