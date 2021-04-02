<?php
  $foo = 'Bob';              // Assign the value 'Bob' to $foo
  $bar = &$foo;              // Reference $foo via $bar.
  $bar = "My name is $bar";  // Alter $bar...
  const HELLO_CONSTANT = "Hello world";
  echo $bar;
  echo "\n";
  echo $foo;                 // $foo is altered too.
  echo "\n";
  echo HELLO_CONSTANT;
?>
