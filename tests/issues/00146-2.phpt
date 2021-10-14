--TEST--
Test union filter containing an array index and key with comma separator
--DESCRIPTION--
https://github.com/supermetrics-public/pecl-jsonpath/issues/146
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php
$obj = [
    'key' => [
        'val' => 1
    ]
];

$jsonPath = new \JsonPath\JsonPath();
print_r($jsonPath->find($obj, "$..['val',2]"));
?>
--EXPECTF--
Fatal error: Uncaught JsonPath\JsonPathException: Expected string literal, got LEX_LITERAL_NUMERIC in key union filter in %s
Stack trace:
%s
%s
%s