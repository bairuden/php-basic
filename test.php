<?php
$sometext = "No such file or directory [Wed Aug 16 21:11:07 2023]";

// preg_match("/or/", $sometext);
if (preg_match("/or/", $sometext)) {
    echo "match";
} else {
    echo "not match";
}
echo '<br>';
if (str_contains("july Aug", 'Aug')) {
    echo "Aug exists in the text";
} else {
    echo "not match";
}
