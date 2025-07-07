<?php

// get raw POST input and sanitize manually
$username = trim(filter_input(INPUT_POST, 'username', FILTER_DEFAULT));

// prevent any html characters
$username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

//check value
if ($username === "abc") {
    echo "Verified";
} else {
    echo "Error";
}
?>