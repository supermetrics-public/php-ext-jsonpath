--TEST--
Test filter expression with subpaths
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    [
        "address" => [
            "city" => "Berlin",
        ],
    ],
    [
        "address" => [
            "city" => "London",
        ],
    ],
];

$jsonPath = new JsonPath();
$result = $jsonPath->find($data, "$[?(@.address.city=='Berlin')]");

echo "Assertion 1\n";
var_dump($result);
?>
--EXPECT--
Assertion 1
array(1) {
  [0]=>
  array(1) {
    ["address"]=>
    array(1) {
      ["city"]=>
      string(6) "Berlin"
    }
  }
}
