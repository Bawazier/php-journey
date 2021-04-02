<?php
  $a_bool = TRUE;   // a boolean
  $a_str  = "foo";  // a string
  $a_str2 = 'foo';  // a string
  $an_int = 12;     // an integer
  $an_float = 12.2; // an floating
  $array = [
    // ["VALUE", "VALUE"] OR ["KEY" => "VALUE"]
    "foo" => "bar",
    "bar" => "foo",
    "fooBar",
    "barFoo",
  ];                // array

  echo gettype($a_bool); // prints out:  boolean
  echo "\n";
  echo gettype($a_str);  // prints out:  string
  echo "\n";

  // If this is an integer, increment it by four
  if (is_int($an_int)) {
      $an_int += 4;
  }

  // If $a_bool is a string, print it out
  // (does not print out anything)
  if (is_string($a_bool)) {
      echo "String: $a_bool";
  }

  var_dump(gettype($a_bool)); // string(7) "boolean"
  var_dump(gettype($a_str)); // string(6) "string"
  var_dump(gettype($a_str2)); // string(6) "string"
  var_dump(gettype($an_int)); // string(7) "integer"
  var_dump(gettype($an_float)); // string(7) "double"
  var_dump(gettype($array)); // string(5) "array"
?>
