<?php require(__DIR__.DIRECTORY_SEPARATOR."parse_mb.php");
foreach (mb() as [$code, $word, $short]) {
    echo "$word\t$code\n";
}
