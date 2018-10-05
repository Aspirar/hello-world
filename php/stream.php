<?php

// Streams can be used in dependency injection, `echo` can't.

$output = fopen('php://output', 'w');

if ($output === false) {
    throw new \Exception("Failed to open output stream");
}

fwrite($output, "Hello world!");

