--TEST--
Test filter expression with boolean or operator and value true
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    [
        "key" => 1,
    ],
    [
        "key" => 3,
    ],
    [
        "key" => "nice",
    ],
    [
        "key" => true,
    ],
    [
        "key" => null,
    ],
    [
        "key" => false,
    ],
    [
        "key" => [],
    ],
    [
        "key" => [],
    ],
    [
        "key" => -1,
    ],
    [
        "key" => 0,
    ],
    [
        "key" => "",
    ],
];

$jsonPath = new JsonPath();
$result = $jsonPath->find($data, "$[?(@.key>0 || true)]");

echo "Assertion 1\n";
var_dump($result);
?>
--EXPECT--
PHP Fatal Error
--XFAIL--
Now returns a bunch of values, would be better to error out due to invalid syntax
