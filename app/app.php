<?php
require 'bootstrap.php';

use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();

foreach (\range(0, 100000) as $i) {
    // ...
}

$duration = $timer->stop();

var_dump($duration->asString());
var_dump($duration->asSeconds());
var_dump($duration->asMilliseconds());
var_dump($duration->asMicroseconds());
var_dump($duration->asNanoseconds());

//--
// hancav/mystrfncts

use MyStrFncts\MyStrLen;
use MyStrFncts\MyStrToUpper;

//--
$testString = 'Test String';

//--
$length = MyStrLen::myStrLenFnct($testString);

echo "\n Length of : # $testString # is : # $length # elements. \n";

//--
$upperString = MyStrToUpper::myStrToUpperFnct($testString);

echo "\n Test String : # $testString # Upper String  : # $upperString # \n";

echo "\n";


