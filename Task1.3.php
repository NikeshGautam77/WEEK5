<?php
$globalVar = "I am global";

function testScope() {
    // Without global keyword
    echo "Inside function (without global): ";
    echo isset($globalVar) ? $globalVar : "Not accessible<br>";
}

function testScopeGlobal() {
    global $globalVar;
    echo "Inside function (with global): $globalVar<br>";
}

testScope();
testScopeGlobal();
?>