<?php
/**
 * Created by IntelliJ IDEA.
 * User: rek
 * Date: 14/12/18
 * Time: 下午4:03
 */

$ver = 52;

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
