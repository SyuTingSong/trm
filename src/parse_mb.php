<?php
/**
 * Created by IntelliJ IDEA.
 * User: rek
 * Date: 14/12/18
 * Time: 下午4:03
 */

$ver = 55;
if (version_compare(phpversion(), '5.5.0') < 0) {
    echo "PHP engine later than ver 5.5 is required!\n";
	exit(1);
}
function prompts() {
    $fp = fopen(__DIR__.DIRECTORY_SEPARATOR.'prompts.txt', 'r');
    while (!feof($fp)) {
        $line = trim(fgets($fp));
        if (empty($line))
            continue;
        list($key, $char) = explode(' ', $line);
        yield $key => $char;
    }
    fclose($fp);
}

function mb() {
    $fp = fopen(__DIR__.DIRECTORY_SEPARATOR.'mb.txt', 'r');
    while (!feof($fp)) {
        $line = trim(fgets($fp));
        if(empty($line))
            continue;
        list($code, $word, $sort) = explode("\t", $line);
        yield [$code, $word, $sort];
    }
    fclose($fp);
}
