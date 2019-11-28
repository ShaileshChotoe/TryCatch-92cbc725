<?php

function inverse($x) {
    if (!$x) {
        throw new Exception();
    }
    return 1/$x;
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo "<h1>" . 'Er is iets fout gegaan' . "</h1>";
}

 ?>
